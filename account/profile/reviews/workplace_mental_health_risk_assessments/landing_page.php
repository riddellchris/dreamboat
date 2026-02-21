<?php
if(!isset($_SESSION)){session_start();}
/*
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$sql = "SELECT * FROM work_diary_security WHERE user_id = '".$_GET['user_id']."' AND security_key = '".mysqli_real_escape_string($conn, $_GET['security_key'])."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result) !=1){
	require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";
	echo "sorry please check your login creditials this token has been used";
	require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
}
else{

	$sql = "UPDATE work_diary_security
		SET key_has_been_used = 'yes' 
		WHERE user_id = '".$_GET['user_id']."' AND
		      security_key = '".mysqli_real_escape_string($conn, $_GET['security_key'])."' ";
	$result = mysqli_query($conn, $sql);
	
	$sql = "SELECT * FROM user_account_details WHERE user_id = '".$_GET['user_id']."' AND client_status = 'active'";
	$select = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($select, MYSQLI_ASSOC);
	
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['viewing_client_id'] = $row['user_id'];
	$_SESSION['logged_in'] = 'yes';
	
	
	$_SESSION['first_name'] = $row['first_name'];
	$_SESSION['last_name'] = $row['second_name'];   
	$_SESSION['users_homepage'] = $row['home_page'];   
	$_SESSION['issues_on'] = $row['issues_on'];
	if($row['client_or_crew'] == 'crew'){$_SESSION['dreamboat_crew'] = 'yes';}   
	if($row['client_or_crew'] == 'client'){$_SESSION['viewing_client_id'] = $row['user_id'];$_SESSION['dreamboat_crew'] = 'no';$_SESSION['tracker_only'] = $row['tracker_only'];} 
*/	
	
	
	
//	if($row['end_of_what'] == 'day'){*/
	$_SESSION['next_prompt_id'] = 282;
//	}
//	if($row['end_of_what'] == 'week'){$_SESSION['next_prompt_id'] = 202;}
//	if($row['end_of_what'] == 'month'){$_SESSION['next_prompt_id'] = 133;}	
	header("Location: /risk_assessments/conditions.php");
	exit();	
//}


