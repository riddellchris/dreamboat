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
	
	AND total_relationship_status = 'active'";

//echo $sql;

//echo "<br>";
//echo '<pre>' , var_dump($points) , '</pre>';
//echo "<br>";
	
$result = mysqli_query($conn, $sql);
$i = 0;
$alternator = a;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//but first let's just get rid of the duplication here
	if($alternator == 'a'){
		
		//now i'm pretty sure we can just run a scan of this relationships array and knock out any that don't include both points in the points array.
		//so why don't we just do that in the for loop.	
		$a_is_in = 'no';
		$b_is_in = 'no';
		for($j = 0; $j < count($points['database']); $j++){
			if(	$row['item_a_database'] == $points['database'][$j]   && 
				$row['item_a_id']	== $points['id'][$j] 		){$a_is_in = 'yes';	}
			if(	$row['item_b_database'] == $points['database'][$j]   && 
				$row['item_b_id']	== $points['id'][$j] 		){$b_is_in = 'yes';	}		
		}
		
		if($a_is_in = 'yes' && $b_is_in = 'yes'){
			$relationships[a_database][$i] 	= $row['item_a_database'];
			$relationships[a_id][$i] 	= $row['item_a_id'];
			$relationships[b_database][$i] 	= $row['item_b_database'];
			$relationships[b_id][$i] 	= $row['item_b_id'];	
			$i ++;	
		}
		
		$alternator = 'b';
	}
	if($alternator == 'b'){
		$alternator = a;
	}	
}


//echo '<pre>' , var_dump($relationships) , '</pre>';
