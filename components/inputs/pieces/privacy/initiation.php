<?php
if(!isset($_SESSION)){session_start();}

if(	!isset($_SESSION['flow_sub_privacy_friends']) 		OR	
	!isset($_SESSION['flow_sub_privacy_family'])	 	OR	
	!isset($_SESSION['flow_sub_privacy_colleagues']) 	OR	
	!isset($_SESSION['flow_sub_privacy_work_contacts'])	){
	
 	$sql = "SELECT * FROM user_privacy_settings WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	if($row['default_flow_friends_public'] 		== 'yes'){$_SESSION['flow_sub_privacy_friends'] 	= 'public';}else{$_SESSION['flow_sub_privacy_friends'] 		= 'private';}
	if($row['default_flow_family_public'] 		== 'yes'){$_SESSION['flow_sub_privacy_family'] 		= 'public';}else{$_SESSION['flow_sub_privacy_family'] 		= 'private';}	
	if($row['default_flow_colleagues_public'] 	== 'yes'){$_SESSION['flow_sub_privacy_colleagues'] 	= 'public';}else{$_SESSION['flow_sub_privacy_colleagues'] 	= 'private';}	
	if($row['default_flow_work_contacts_public'] 	== 'yes'){$_SESSION['flow_sub_privacy_work_contacts'] 	= 'public';}else{$_SESSION['flow_sub_privacy_work_contacts']	= 'private';}
	
	}