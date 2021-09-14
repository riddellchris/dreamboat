<?php
if(!isset($_SESSION)){session_start();}

if(	$_SESSION['current_issues_setting'] == 'issues_on' 
//	AND $_SESSION['current_map_view'] != 'all'

){				//this is because when all - issues are already included so we can't double count/display



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


	$sql_to_find_related_issues = $sql;

	//this does seem to be the correct $sql to find the issues attached to the Main critical nodes
	$debugging = 'off';
	if($debugging == 'on'){
	echo $sql;
	exit();
	}


	/* I don't think this is required at all any more
	//now we unset and reset the points array
	$original_points = $nodes;
	echo '<pre>' , var_dump($original_points) , '</pre>';
	unset($nodes);
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/points_array/set.php";
	*/


	//and we set the $in_relationships array
	$related_issues = array();
	$related_issues['database'] 	= array();
	$related_issues['id']			= array();


	$result = mysqli_query($conn, $sql);


	//this also seems to show the correct number of "related issues"
	//HOWEVER they may be the same issue
		//this is taken care of in the next section.
	$debugging = 'off';
	if($debugging == 'on'){
	echo mysqli_num_rows($result);
	exit();
	}

	//so now all we need to do is see which of the points we fed in comes back as an item_a result... therefore it is in a relationship
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

			$related_issues['primary_node_database'][$i] 	= $row['item_a_database'];
			$related_issues['primary_node_id'][$i] 		= $row['item_a_id'];

		//to ensure there are no duplicates
		//if(	!in_array($row['item_b_database'], $related_issues['database']) &&
		//	!in_array($row['item_b_id'], 	   $related_issues['id'])){

			$related_issues['database'][$i] 	= $row['item_b_database'];
			$related_issues['id'][$i] 			= $row['item_b_id'];
		//	}
		$i ++;		
	}


	$diagnostics['connected_issues_and_nodes_array'] = $related_issues;


	$debugging = 'off';
	if($debugging == 'on'){		
	echo '<pre>' , var_dump($related_issues) , '</pre>';	
	exit();
	}

	//this seems to give us all the id's of the related issues 
	//so really all we need are the unique id's
	$ids_to_keep = array_values(array_unique($related_issues['id']));

	unset($related_issues);

	$debugging = 'off';
	if($debugging == 'on'){		
	echo '<pre>' , var_dump($ids_to_keep) , '</pre>';	
	exit();
	}



	
	//now we need to pull out the data for each of these issues and fill out those arrays to match the point data
	//then add it to the point data
	for($i = 0; $i < count($ids_to_keep); $i ++){
		$sql = "SELECT * FROM items_all
				WHERE 	found_in_database 	= 'issues'
				AND 	item_id 			= '".$ids_to_keep[$i]."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		$related_issues['primary_folder'][$i] 	= $row['found_in_primary_folder'];
		$related_issues['secondary_folder'][$i]	= $row['found_in_secondary_folder'];
		$related_issues['database'][$i] 		= $row['found_in_database'];
		$related_issues['id'][$i] 				= $row['item_id'];
		$related_issues['items_all_id'][$i] 	= $row['items_central_id'];
		$related_issues['title'][$i] 			= $row['title'];		
		
		/*
		$nodes['database'][count($nodes['database'])]					= 	$related_issues['database'][$i];
		$nodes['id'][count($nodes['id'])]								= 	$related_issues['id'][$i];
		$nodes['primary_folder][count($nodes['primary_folder])]		= 	$related_issues['primary_folder'][$i];
		$nodes['secondary_folder][count($nodes['secondary_folder])]	= 	$related_issues['secondary_folder'][$i];
		$nodes['title][count($nodes['title])]						= 	$related_issues['title'][$i];		
		*/
	}

$diagnostics['issues_to_add'] = $related_issues;

	$debugging = 'off';
	if($debugging == 'on'){			
	echo '<pre>' , var_dump($nodes) , '</pre>';
	exit();
	}
}	
