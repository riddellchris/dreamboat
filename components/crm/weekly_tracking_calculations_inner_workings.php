<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] == 'content'){	$primary 	= 'biz_dev';			$secondary 	= 'one_to_ones';	}
else{						$primary 	= $_GET['primary_folder'];	$secondary 	= $_GET['secondary_folder'];		}		
		
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
$item_type = ucfirst(strip_underscores($secondary));		
		
//network		
	if($primary == 'network' && $secondary == 'groups'){$active_title = "'Total Active ".$item_type."'"; 		$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	if($primary == 'network' && $secondary == 'people'){$active_title = "'Total Active ".$item_type."'"; 		$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	if($primary == 'network' && $secondary == 'businesses'){$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	
//biz_dev		
	if($primary == 'biz_dev' && $secondary == 'events'){		$active_title = "'Currently Planned ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." ATTENDED'";}
	if($primary == 'biz_dev' && $secondary == 'one_to_ones'){	$active_title = "'Currently Planned ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." HAD'";}
	if($primary == 'biz_dev' && $secondary == 'referrers'){		$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}	
	
//SALES		
	if($primary == 'sales' && $secondary == 'new_potentials'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." CLOSED'";}
	if($primary == 'sales' && $secondary == 'potential_upsells'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." CLOSED'";}
	if($primary == 'sales' && $secondary == 'recurring_sales'){	$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}		
	
//SALES		
	if($primary == 'management' && $secondary == 'clients'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." LOST'";}
			
	
	
	
if($using_for_data_tables != 'yes'){

//new... events /// events planned this week not just new          
        if($new_title != ''){echo $new_title;}
        if($new_title != '' && $active_title != ''){echo ",";}
        if($active_title != ''){echo $active_title;}
        if($active_title != '' && $closed_title != ''){echo ",";}                 
        if($closed_title != ''){echo $closed_title;}     



          echo "],";
}
 
 
//this little bit is redundant now 22.06.20
//it was just to make a chart for content... leave it for the minute but can probably be saved and go into archive somehow
if($_SESSION['primary_folder'] == 'content'){
$user_to_view = 2;
}
else{
$user_to_view = $_SESSION['viewing_client_id'];
} 
 
 
          
   $sql = "SELECT * FROM tracking_inputs_weekly WHERE user_id = '".$user_to_view."' ORDER BY entry_id;";
 require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
 $result = mysqli_query($conn, $sql);
 $i = 0;
 
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
/*
	//this version is negatives
 	      if($secondary == 'people'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'groups'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'businesses'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'referrers'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'events'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'one_to_ones'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'new_potentials'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'potential_upsells'){ 	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'recurring_sales'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'clients'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
*/ 
 
 	      if($secondary == 'people'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'groups'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'businesses'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'referrers'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'events'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'one_to_ones'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'new_potentials'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'potential_upsells'){ 	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'recurring_sales'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'clients'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = $row[$secondary.'_closed_this_week'];} 
 
 	      
 	      $week_starting[$i] = "'Week ending Sunday: ".$row['week_ending_day']."/".$row['week_ending_month']."'";
 $i++;
 }