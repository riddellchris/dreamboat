<?php
if(!isset($_SESSION)){session_start();}

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
		for($i = 0; $i < count($points['database']); $i ++){
			if($first == 'no'){$sql .= " OR ";}
			//because items are duplicated a & b we just simplify by seaching for when they are a, therefore removing the need to cut that out later
			$sql  .= "(item_a_database = '".$points['database'][$i]."' AND item_a_id = '".$points['id'][$i]."' ) ";
			$first = 'no';
		}

$sql .= ")";


//now we unset and reset the points array
$original_points = $points;

//echo '<pre>' , var_dump($original_points) , '</pre>';
//exit();

unset($points);
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/points_array/set.php";


//and we set the $in_relationships array
$in_relationships = array();
$in_relationships['database'] 	= array();
$in_relationships['id']		= array();


$result = mysqli_query($conn, $sql);
//so now all we need to do is see which of the points we fed in comes back as an item_a result... therefore it is in a relationship
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	$in_relationships['database'][$i] 	= $row['item_a_database'];
	$in_relationships['id'][$i] 		= $row['item_a_id'];
	$i ++;		
}
	
//echo '<pre>' , var_dump($in_relationships) , '</pre>';	
//exit();
	
//then as required we can either turn $points into $in_relationships
//OR set as adjust from there // and finally we get points

/*
if(	$_SESSION['current_connection_control'] == 'connected_only'){



	}
if(	$_SESSION['current_connection_control'] == 'unconnected_only'){	



	}
*/

		
		
		
