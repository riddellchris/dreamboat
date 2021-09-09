<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM item_relationships 
	WHERE 	item_a_user_id = '".$_SESSION['viewing_client_id']."' 
	AND 	item_b_user_id = '".$_SESSION['viewing_client_id']."' 

	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 
	
	AND total_relationship_status = 'active' 
	
	AND (";

		$first = 'yes';			
		for($i = 0; $i < count($points['database']); $i ++){
			if($first == 'no'){$sql .= " OR ";}
			//because items are duplicated a & b we just simplify by seaching for when they are a, therefore removing the need to cut that out later
			$sql  .= "(item_a_database = '".$points['database'][$i]."' AND item_a_id = '".$points['id'][$i]."' AND item_b_database = 'issues') ";
			$first = 'no';
		}

$sql .= ")";


/* I don't think this is required at all any more
//now we unset and reset the points array
$original_points = $points;
echo '<pre>' , var_dump($original_points) , '</pre>';
unset($points);
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/points_array/set.php";
*/




//and we set the $in_relationships array
$related_issues = array();
$related_issues['database'] 	= array();
$related_issues['id']		= array();


$result = mysqli_query($conn, $sql);
//so now all we need to do is see which of the points we fed in comes back as an item_a result... therefore it is in a relationship
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//to ensure there are no duplicates
	if(	!in_array($row['item_b_database'], $related_issues['database']) &&
		!in_array($row['item_b_id'], 	   $related_issues['id'])){
		$related_issues['database'][$i] 	= $row['item_b_database'];
		$related_issues['id'][$i] 	= $row['item_b_id'];
		}
	$i ++;		
}
	
//echo '<pre>' , var_dump($related_issues) , '</pre>';	
//exit();
	
//then as required we can either turn $points into $related_issues
//OR set as adjust from there // and finally we get points


//now we need to pull out the data for each of these issues and fill out those arrays to match the point data
//then add it to the point data or totally replace the point data with issues only.
//echo count($related_issues);
//exit();
for($i = 0; $i < count($related_issues['database']); $i ++){
	$sql = "SELECT * FROM items_all
		WHERE 	found_in_database 	= '".$related_issues['database'][$i]."'
		AND 	item_id 		= '".$related_issues['id'][$i]."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$related_issues['primary_folder'][$i] 	= $row['found_in_primary_folder'];
	$related_issues['secondary_folder'][$i]	= $row['found_in_secondary_folder'];
	$related_issues['title'][$i] 		= $row['title'];
	
	
	
	if($_SESSION['current_issues_setting'] == 'issues_on'){
		$points['database'][count($points['database'])]			= 	$related_issues['database'][$i];
		$points['id'][count($points['id'])]					= 	$related_issues['id'][$i];
		$points['primary_folder'][count($points['primary_folder'])]		= 	$related_issues['primary_folder'][$i];
		$points['secondary_folder'][count($points['secondary_folder'])]	= 	$related_issues['secondary_folder'][$i];
		$points['title'][count($points['title'])]				= 	$related_issues['title'][$i];
	
		}
	if($_SESSION['current_issues_setting'] == 'issues_only'){	
		$points = $related_issues;
	
	
	}	
	

}


	
//echo '<pre>' , var_dump($points) , '</pre>';
//exit();


		
		
		
