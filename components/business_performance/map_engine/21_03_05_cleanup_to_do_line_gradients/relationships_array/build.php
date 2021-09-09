<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/relationships_array/set.php";

//so to build the relationships array
$sql = "SELECT * FROM `item_relationships` 
	WHERE 	item_a_user_id = '".$_SESSION['viewing_client_id']."' 
	AND 	item_b_user_id = '".$_SESSION['viewing_client_id']."' 

	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 
	
	AND total_relationship_status = 'active'

	AND (	";
	
		for($i = 0; $i < count($points['database']); $i++){
			$sql .= " (item_a_database = '".$points['database'][$i]."' AND item_a_id = '".$points['id'][$i]."') ";
			if($i <> (count($points['database']) - 1)){$sql .= " OR ";}		
		}
		
	$sql .= "	
		
		)
	AND (	";
	
	for($i = 0; $i < count($points['database']); $i++){
		$sql .= " (item_b_database = '".$points['database'][$i]."' AND item_b_id = '".$points['id'][$i]."') ";
		if($i <> (count($points['database']) - 1)){$sql .= " OR ";}		
	}	

		
	$sql .= ")";

//echo $sql;
//exit();	
$result = mysqli_query($conn, $sql);
$alternator = a;
$number_of_active_relationships = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//build the count of relationships per item based on appearances as item_a
	//just go through the points array and add one or if unset store as 1
	for($i = 0; $i < count($points['database']); $i ++){
		if(	$points['database'][$i] 	== $row['item_a_database'] &&
			$points['id'][$i] 	== $row['item_a_id']){
	
				if(!isset($points[number_of_relationships_to_display][$i])){
					$points[number_of_relationships_to_display][$i] = 1;
					}
				else{
					$points[number_of_relationships_to_display][$i] ++;
					}
			}
	}

	//but first let's just get rid of the duplication here
	if($alternator == 'a'){
		
		//then in here we can just build the relationships array
		//most importantly by doing it this way we can test simply via the sql query to see if we are getting the right inputs & outputs for now
		$relationships['item_a_database'][count(	$relationships['item_a_database'])] = $row['item_a_database'];
		$relationships['item_a_id'][count(	$relationships['item_a_database'])] = $row['item_a_id'];
		$relationships['item_b_database'][count(	$relationships['item_a_database'])] = $row['item_b_database'];
		$relationships['item_b_id'][count(	$relationships['item_a_database'])] = $row['item_b_id'];
		

		
		$alternator = 'b';
	}
	if($alternator == 'b'){
		$alternator = a;
	}	
}


//echo '<pre>' , var_dump($points) , '</pre>';
//exit();
