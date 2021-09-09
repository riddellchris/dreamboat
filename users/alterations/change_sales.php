<?php
if(!isset($_SESSION)){session_start();}

//an earlier version of this code exists at 
///components/performance/sales/slide_user.php

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$continue = 'no';
if($_GET['type'] == 'call_1_made'){	$phase_to_alter = 'call_1_made';	$continue = 'yes';}
if($_GET['type'] == 'call_2_made'){	$phase_to_alter = 'call_2_made';	$continue = 'yes';}
if($_GET['type'] == 'call_3_made'){	$phase_to_alter = 'call_3_made';	$continue = 'yes';}
if($_GET['type'] == 'email_sent'){	$phase_to_alter = 'email_sent';		$continue = 'yes';}
if($_GET['type'] == 'walkthrough_had'){	$phase_to_alter = 'walkthrough_had';	$continue = 'yes';}
if($_GET['type'] == 'session_1_had'){	$phase_to_alter = 'session_1_had';	$continue = 'yes';}
if($_GET['type'] == 'session_2_had'){	$phase_to_alter = 'session_2_had';	$continue = 'yes';}
if($_GET['type'] == 'session_3_had'){	$phase_to_alter = 'session_3_had';	$continue = 'yes';}
if($_GET['type'] == 'session_4_had'){	$phase_to_alter = 'session_4_had';	$continue = 'yes';}

if($continue == 'yes'){
	$id = mysqli_real_escape_string($conn, $_GET['clients_user_id']);
	
	$sql = "SELECT * FROM user_account_details 
		WHERE user_id = '".$id ."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if($row[$phase_to_alter] == 'no'){$turning_to = 'yes';}
	if($row[$phase_to_alter] == 'yes'){$turning_to = 'no';}
	
	
	
	$sql = "UPDATE user_account_details SET ";
	
	 $CurrentTime = date($_SERVER['REQUEST_TIME']) + 8 *60 *60;
	
	if($turning_to == 'yes'){
		$sql .= $phase_to_alter." = 'yes', 
			".$phase_to_alter."_date_time 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."',
			".$phase_to_alter."_display_date 	= '".gmdate("d-m", $CurrentTime)."'
			
			";
	}
	
	if($turning_to == 'no'){
		$sql .= $phase_to_alter." = 'no', 
			".$phase_to_alter."_date_time 		= '0000-00-00 00:00:00".gmdate("Y-m-d\ H:i:s", $CurrentTime)."',
			".$phase_to_alter."_display_date 	= '00-00'
			
			";
	}
	
	$sql .= " WHERE user_id = '".$id."'";
	
//echo $sql;
//exit();	
	$result = mysqli_query($conn, $sql);


}

header("Location: ".$_SESSION['this_page']);
exit();

