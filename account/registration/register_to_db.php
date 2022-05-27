<?php
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
if(!isset($_SESSION)){session_start();}

var_dump($_POST);
//exit();

//first let's run all the error tests
unset($_SESSION['rego_error']);

//check passwords match
if(!isset($_SESSION['rego_error']) && $_POST['first_name'] == ''){					$_SESSION['rego_error'] = "Sorry what's your first name?";}
if(!isset($_SESSION['rego_error']) && $_POST['second_name'] == ''){					$_SESSION['rego_error'] = "Sorry what's your last name?";}
if(!isset($_SESSION['rego_error']) && $_POST['phone'] == ''){						$_SESSION['rego_error'] = "Sorry what's your phone number?";}
if(!isset($_SESSION['rego_error']) && $_POST['email1'] == ''){						$_SESSION['rego_error'] = "We need your email to sign you in please";}
if(!isset($_SESSION['rego_error']) && $_POST['email2'] == ''){						$_SESSION['rego_error'] = "Sorry can you repeat your email for us";}
if(!isset($_SESSION['rego_error']) && $_POST['email1'] != $_POST['email2']){		$_SESSION['rego_error'] = "Please ensure your emails match";}
if(!isset($_SESSION['rego_error']) && $_POST['password1'] != $_POST['password2']){	$_SESSION['rego_error'] = "Please ensure your passwords match";}

// prepare all the fields from the form for SQL using mysqli_real_escape_string
$first_name 	= mysqli_real_escape_string($conn,ucfirst(strtolower(trim($_POST['first_name']))));
$second_name 	= mysqli_real_escape_string($conn,ucfirst(strtolower(trim($_POST['second_name']))));
$phone 		= mysqli_real_escape_string($conn,$_POST['phone']);
$email1 	= mysqli_real_escape_string($conn,$_POST['email1']);
$email2 	= mysqli_real_escape_string($conn,$_POST['email2']);
$password1 	= mysqli_real_escape_string($conn,$_POST['password1']);
$password2 	= mysqli_real_escape_string($conn,$_POST['password2']);
$Status 	= 'active';
	
if(!isset($_SESSION['rego_error'])){ 	
	//need to check email anywhere in the database the database
	$sql = "SELECT email FROM user_account_details 
		WHERE email = '$email1' OR
		email_2 = '$email1' OR
		email_3 = '$email1' OR
		email_4 = '$email1' OR
		email_5 = '$email1' OR
		email_6 = '$email1' OR
		email_7 = '$email1' OR
		email_8 = '$email1' OR
		email_9 = '$email1' OR
		email_10 = '$email1'";	
	$select = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($select)!==0) {
		$_SESSION['rego_error'] = 'This email is already being used';
		header("Location: /account/registration/");
		exit();
	}	
}
if(isset($_SESSION['rego_error'])){header("Location: /account/registration/");exit();}


//if no errors then go ahead and submit it
else{
	//secure the password before it goes into the database
	$final_password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

	//sql to create table
	$sql = "INSERT INTO user_account_details (first_name, 	second_name, 	phone_number, 	   email,    password)
		VALUES 		      ('$first_name',   '$second_name', '$phone', '$email1','$final_password')
		";
	
	// let us know how it went
	if ($conn->query($sql) === TRUE) {
		$_SESSION['logged_in'] 		= 'yes';
		$_SESSION['first_name'] 	= $_POST['first_name'];   		
		$_SESSION['second_name'] 	= $_POST['second_name']; 
		$_SESSION['user_id'] 		= mysqli_insert_id($conn);
	    
	} else {
	    	$_SESSION['rego_error'] = "Sorry there was an error entering your data<br>Please try and submit again";
		header("Location: /account/registration/");
		exit();
	}
	
	//run database initiation
	require "database_initialisation_processes.php";		

	require "send_setup_emails.php";

	$_SESSION['network_feed_next_prompt_id'] = 200;

	header ('Location: /account/registration/get_setup_emails.php');			
	exit();		
}
	





?>
