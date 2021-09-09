<?php
if(!isset($_SESSION)){session_start();}

if($_POST['password1'] != $_POST['password2'] OR (($_POST['password1'] == $_POST['password2']) && ($_POST['password2'] == ''))){
	$_SESSION['rego_error'] = "Please ensure your passwords match";
	header("Location: /account/security/reset_password_completion.php");
	exit();
	}
else{
	$final_password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
	
	//sql to create table
		$sql = "UPDATE user_account_details 
		SET password = '".$final_password."',
			password_reset_key = '',
			password_initial_default_changed = 'yes',
			number_of_password_resets = number_of_password_resets + 1
			
		WHERE user_id = '".$_SESSION['reseting_password_for_user_id']."'";
	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
	// let us know how it went
	if ($conn->query($sql) === TRUE) {
		header("Location: /account/security/");
		exit();
	    
	} else {
	    	$_SESSION['rego_error'] = "Sorry there was an error entering your data<br>Please try and submit again";
		header("Location: /account/security/reset_password_completion.php");
		exit();
	}


}

?>