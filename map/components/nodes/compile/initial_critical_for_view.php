<?php
if(!isset($_SESSION)){session_start();}

//this for loop simply checks over all the 4 menu SELECTs
for($count = 1; $count < 5; $count ++){
    if(isset($_SESSION['critical_node_include_'.$count])){
        if($_SESSION['critical_node_include_'.$count] == 'business'){   $business_node   	= 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'network'){    $network_node       = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'biz_dev'){    $biz_dev_node       = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'marketing'){  $marketing_node     = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'sales'){      $sales_node         = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'management'){ $management_node    = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'wheelhouse'){ $wheelhouse_node    = 'on';}
        if($_SESSION['critical_node_include_'.$count] == 'activities'){ $activities_node    = 'on';}   
        if($_SESSION['critical_node_include_'.$count] == 'upgrades'){   $upgrades_node      = 'on';}  
    }     
}

$or_needed = 'no';
$sql = "SELECT * FROM items_all 
		WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
		AND deleted_or_not = 'no'
		AND current_status = 'active'";
//now we add in some conditions
if($_SESSION['critical_node_include_1'] == 'all'){	$sql .= " AND found_in_database <> 'issues' " ;}	
else{

    $sql .= " AND ( ";
        if(isset($business_node)){      if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}	    $sql .= " found_in_database  = 'products_and_services' ";   $or_needed = 'yes';}}
        if(isset($network_node)){       if($network_node  == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " (found_in_database = 'people' OR found_in_database = 'organisations')";   $or_needed = 'yes';}}
        if(isset($biz_dev)){            if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'events' OR  (found_in_database = 'people' AND found_in_secondary_folder = 'referrers')";   $or_needed = 'yes';}}   
        if(isset($marketing_node)){     if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'marketing'  ";   $or_needed = 'yes';}}
        if(isset($sales_node)){         if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'sales'      ";   $or_needed = 'yes';}}
        if(isset($management_node)){    if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'management' ";   $or_needed = 'yes';}}
        if(isset($wheelhouse_node)){    if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'wheelhouse' ";   $or_needed = 'yes';}}
        if(isset($activities_node)){    if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'activities' ";   $or_needed = 'yes';}}
        if(isset($upgrades_node)){      if($business_node == 'on'){if($or_needed == 'yes'){$sql.=" OR ";}		$sql .= " found_in_database  = 'upgrades'   ";   $or_needed = 'yes';}}
    $sql .= " )";

}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$diagnostics['initial_node_sql']    = $sql;
$map_triggers['initial_node_count'] = mysqli_num_rows($result);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$nodes['items_all_id'][$i]		= $row['items_central_id'];
	$nodes['database'][$i]			= $row['found_in_database'];
	$nodes['id'][$i] 				= $row['item_id'];
	$nodes['primary_folder'][$i] 	= $row['found_in_primary_folder'];
	$nodes['secondary_folder'][$i] 	= $row['found_in_secondary_folder'];
	$nodes['title'][$i] 			= $row['title'];	

	$i ++;
}

$diagnostics['initial_node_array'] = $nodes;
//echo '<pre>' , var_dump($nodes) , '</pre>';exit();


