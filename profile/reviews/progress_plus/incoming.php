<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

if(	!isset($_SESSION['user_id']) AND
 	 isset($_GET['user_id'])	){$_SESSION['user_id'] 	= $_GET['user_id'];
 	  	 				  $_SESSION['logged_in'] = 'yes';
 	 				  $security_key 	= $_GET['security_key'];
 	 				}
else{if(!isset($_SESSION['user_id'])){header("Location: /");exit();}}

/*
if($_SESSION['logged_in'] == 'yes'){
	//get the unused security key
	$sql = "SELECT * FROM progress_plus_security WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY key_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$security_key = $row['security_key'];
	}
*/
$sql = "UPDATE user_alert_system
	SET top_nav_progress_plus = 'off' 
	WHERE user_id = '".$_GET['user_id']."'";
$result = mysqli_query($conn, $sql);
						

 $sql = "SELECT * FROM progress_plus_security WHERE user_id = '".$_GET['user_id']."' AND security_key = '".mysqli_real_escape_string($conn, $_GET['security_key'])."' AND key_has_been_used = 'no'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(mysqli_num_rows($result) !=1){
	require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";
	echo "sorry please check your login creditials this token has been used";
	require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
}
else{

	$sql = "UPDATE progress_plus_security
		SET key_has_been_used = 'yes' 
		WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND
		      security_key = '".mysqli_real_escape_string($conn, $_GET['security_key'])."' ";
	$result = mysqli_query($conn, $sql);
	
	

	//if($row['end_of_what'] == 'day'){
	$_SESSION['next_prompt_id'] = 35;
	//}
	//if($row['end_of_what'] == 'week'){$_SESSION['next_prompt_id'] = 183;}
	//if($row['end_of_what'] == 'month'){$_SESSION['next_prompt_id'] = 191;}	
	require $_SERVER['DOCUMENT_ROOT']."/progress_plus/questions/index.php";	
}


