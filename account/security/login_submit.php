<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$email 		= mysqli_real_escape_string($conn,$_POST['email']);
$password 	= mysqli_real_escape_string($conn,$_POST['password']);


//extract the row from the database where the email entered matches the email field.
 $sql = "SELECT * FROM user_account_details WHERE email = '".$email."' AND locked_by_pilot= 'no'";
	//this used to be here for to ensure initial password has been changed...
	//not critical today 20/5/20
	// AND password_initial_default_changed = 'yes'";

$select = mysqli_query($conn, $sql);

if(mysqli_num_rows($select)===1) {

	//now extract the password field and password verify
	$row = mysqli_fetch_array($select, MYSQLI_ASSOC);
	 $stored_password = $row['password'];		

	//iff password verify is true then log them in
	if(password_verify($_POST['password'], $stored_password)){
	require $_SERVER['DOCUMENT_ROOT']."/account/security/login_initial_variable_setup.php";
	require $_SERVER['DOCUMENT_ROOT']."/account/security/login_register_login.php";
	require $_SERVER['DOCUMENT_ROOT']."/data/components/update_processes/master.php";

		
	//set the session message to nothing just so that if they didn't log in correctly prior the old error doesn't show up
	$_SESSION['message'] = '';
	
	if(isset($_SESSION['page_post_login'])){
		header("Location: ".$_SESSION['page_post_login']);
		}
	else{
		header("Location: /".$_SESSION['users_homepage']."/");
		exit();
		}	
	}
	else{
	    $_SESSION['message'] = "That username and password combination didn't work";
    	    header('Location:/account/security/');
    	    exit();
	}
}
else{
    	   header('Location:/account/security/');	
	exit();
}

?>