<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
if(isset($_POST['email'])){
 $email_to_check_for = mysqli_real_escape_string($conn, $_POST['email']);
}
if(isset($email)){
$email_to_check_for = $email;
}

$sql = "SELECT first_name, second_name, email FROM user_account_details 
		WHERE email = '".$email_to_check_for."'";	
$select = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($select, MYSQLI_ASSOC);

$first_name 	= $row['first_name'];
$second_name 	= $row['second_name'];
$email 		= $row['email'];

if(mysqli_num_rows($select)!==0) {

	//if it's there craete code, store send email containign code to reset password
	$password = rand(999, 99999);
	$password_hash = md5($password);
	$url = "https://dreamboat.com.au/account/security/reset_password_completion.php?token=".$password_hash;
	$sql = "UPDATE user_account_details 
		SET password_reset_key = '".$password_hash."'
		WHERE email = '$email_to_check_for'";	
	$select = mysqli_query($conn, $sql);	
	
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/emails/forgot_password.php";
	
	//i.e. not as part of the rest of the chaos
	if(isset($_POST['email'])){
		header("Location: reset_password_email_sent_successfully.php");
	}
}

else{
//sorry we don't have an account with that file on the server
header("Location: reset_password_email_not_found.php");
}


?>