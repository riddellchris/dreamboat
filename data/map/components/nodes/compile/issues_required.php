<?php
if(!isset($_SESSION)){session_start();}

//Find the issues that are related to the current "Main critical nodes"
$sql = "SELECT * FROM item_relationships 
	WHERE 	item_a_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	AND 	item_b_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 	
	AND total_relationship_status = 'active' 	
	AND (";
		$first = 'yes';			
		for($i = 0; $i < count($nodes['database']); $i ++){
			if($first == 'no'){$sql .= " OR ";}
			//because items are duplicated a & b we just simplify by seaching for when they are a, therefore removing the need to cut that out later
			$sql  .= "(item_a_database = '".$nodes['database'][$i]."' AND item_a_id = '".$nodes['id'][$i]."' AND item_b_database = 'issues') ";
			$first = 'no';
		}
$sql .= ")";


$result = mysqli_query($conn, $sql);
$diagnostics['related_issues_selection_sql'] = $sql;
$map_triggers['related_issues_count'] = mysqli_num_rows($result);

if($map_triggers['related_issues_count'] != 0){
	//so now all we need to do is see which of the points we fed in comes back as an item_a result... therefore it is in a relationship
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$related_issues['primary_node_database'][$i] 	= $row['item_a_database'];
		$related_issues['primary_node_id'][$i] 			= $row['item_a_id'];
		$related_issues['database'][$i] 				= $row['item_b_database'];
		$related_issues['id'][$i] 						= $row['item_b_id'];
		$i ++;		
	}

	$diagnostics['connected_issues_and_nodes_array'] = $related_issues;

	//this seems to give us all the id's of the related issues 
	//so really all we need are the unique id's
	$ids_to_keep = array_values(array_unique($related_issues['id']));

	unset($related_issues); //not sure if this is still critical
	$related_issues = array();

	//now we need to pull out the data for each of these issues and fill out those arrays to match the point data
	//then add it to the point data
	for($i = 0; $i < count($ids_to_keep); $i ++){
		$sql = "SELECT * FROM items_all
				WHERE 	found_in_database 	= 'issues'
				AND 	item_id 			= '".$ids_to_keep[$i]."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
		if(mysqli_num_rows($result) > 0){
			$related_issues['primary_folder'][$i] 	= $row['found_in_primary_folder'];
			$related_issues['secondary_folder'][$i]	= $row['found_in_secondary_folder'];
			$related_issues['database'][$i] 		= $row['found_in_database'];
			$related_issues['id'][$i] 				= $row['item_id'];
			$related_issues['items_all_id'][$i] 	= $row['items_central_id'];
			$related_issues['title'][$i] 			= $row['title'];		
		}
	}

	$map_triggers['issues_exist_to_merge'] = 'no';
	if(isset($related_issues['primary_folder'])){
		if(count($related_issues['primary_folder']) > 0){
			$diagnostics['related_issues_to_add'] = $related_issues;
			$map_triggers['issues_exist_to_merge'] = 'yes';
		}
	}
}