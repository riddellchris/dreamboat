<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";		

$security_key = mysqli_real_escape_string($conn, $_GET['security_key']);
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

echo $sql = "SELECT * FROM productivity_tracker_security WHERE security_key = '".$security_key ."' AND user_id = '".$user_id."'";

exit();

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(mysqli_num_rows($result) !=1){
	require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";
	echo "sorry please check your login creditials this token has been used";
	require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
}
else{

	$_SESSION['user_id'] 	= $_GET['user_id'];
 	$_SESSION['logged_in'] = 'yes';
 	$security_key 	= $_GET['security_key'];
 	 				  
 	$sql = "SELECT * FROM user_account_details WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	 				  
 	 				  
   	$_SESSION['first_name'] = $row['first_name'];
	$_SESSION['last_name'] = $row['second_name'];   
	$_SESSION['users_homepage'] = $row['home_page'];  
	
/*	$sql = "UPDATE productivity_tracker_security
		SET key_has_been_used = 'yes' 
		WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);	*/

echo	$sql = "UPDATE user_alert_system
		SET top_nav_productivity_tracker = 'off' 
		WHERE user_id = '".$_SESSION['user_id']."'";
exit();

	$result = mysqli_query($conn, $sql); 				  
 	 				  
	//if($row['end_of_what'] == 'day'		){
	$_SESSION['next_prompt_id'] = 214;
	//}
//	if($row['end_of_what'] == 'week'	){$_SESSION['next_prompt_id'] = 202;}
//	if($row['end_of_what'] == 'month'	){$_SESSION['next_prompt_id'] = 133;}	
	//require $_SERVER['DOCUMENT_ROOT']."/productivity_tracker/questions/index.php";	
	header("Location: /progress_plus/incoming.php");
	exit();
}


