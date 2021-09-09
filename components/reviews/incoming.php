<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$user_id 	= mysqli_real_escape_string($conn, $_GET['user_id']);
$security_key 	= mysqli_real_escape_string($conn, $_GET['security_key']);

$sql = "	SELECT * FROM reviews_security 
		WHERE user_id = '".$user_id."'
		AND security_key = '".$security_key."' 
		AND key_has_been_used = 'no'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) !=1){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";	
	echo "sorry please check your login creditials this token has been used";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}
else{

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_account_details WHERE user_id = '".$user_id."'";
//exit();
$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)===1) {

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		require $_SERVER['DOCUMENT_ROOT']."/account/security/login_initial_variable_setup.php";
		require $_SERVER['DOCUMENT_ROOT']."/account/security/login_register_login.php";
	
	
//	echo $_SESSION['viewing_client_id'];
//	echo 'hello';
//	exit();
	
		$_SESSION['next_prompt_id'] = 339;
		require $_SERVER['DOCUMENT_ROOT']."/reviews/questions.php";	
	}
	else{
	
		header("Location: /");
		exit();
	}
}


