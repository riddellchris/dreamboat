<?php
if(!isset($_SESSION)){session_start();}

//now let's see what/which of the items currently within the system are required to be displayed by querying items_all appropriately for the first time
	//if there are relationships with other items (mostly issues) then we will need to add them to the list later of course
	//so
	
$sql = "SELECT * FROM items_all 
		WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
		AND deleted_or_not = 'no'
		AND current_status = 'active'";
//now we add in some conditions
if($_SESSION['current_map_view'] == 'all'){						$sql .= " AND found_in_database <> 'issues'";}		
if($_SESSION['current_map_view'] == 'all'){						$sql .= " ";}	
if($_SESSION['current_map_view'] == 'activities'){				$sql .= " AND found_in_database  = 'activities' ";}	
if($_SESSION['current_map_view'] == 'people_and_organisations'){$sql .= " AND (found_in_database = 'people' OR found_in_database = 'organisations')";}	
if($_SESSION['current_map_view'] == 'sales_and_marketing'){		$sql .= " AND (found_in_database = 'sales'  OR found_in_database = 'marketing')";}
if($_SESSION['current_map_view'] == 'wheelhouse'){				$sql .= " AND found_in_database  = 'wheelhouse' ";}
if($_SESSION['current_map_view'] == 'products_and_services'){	$sql .= " AND found_in_database  = 'products_and_services' ";}


//echo $sql;



require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


//seems this is correct IFF we are talking ONLY about the major nodes - this doesn't include issues at this point
$debugging = 'off';
if($debugging == 'on'){
echo mysqli_num_rows($result);
exit();
}



$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$points['items_all_id'][$i]		= $row['items_central_id'];
	$points['database'][$i]			= $row['found_in_database'];
	$points['id'][$i] 				= $row['item_id'];
	$points['primary_folder'][$i] 	= $row['found_in_primary_folder'];
	$points['secondary_folder'][$i] 	= $row['found_in_secondary_folder'];
	$points['title'][$i] 				= $row['title'];	


	


	$i ++;
}


//echo '<pre>' , var_dump($points) , '</pre>';exit();


