<?php
if(!isset($_SESSION)){session_start();}
//require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";


//this should really have function versions in here... as a third argument with notes about what changes occurred in that version
//to make this change we would obviously need to address other issues around ensuring every place this 
function admin_functions_in_pages_usage($function, $file){
//	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

	if(isset($_SESSION['user_id'])){ $user_id = $_SESSION['user_id'];}else{$user_id = 0;}
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "INSERT INTO admin_functions_in_pages_usage
			(function_name,		page_name, 	user_id)
		VALUES 	('".$function."','".$file."','".$user_id."')";
	mysqli_query($conn, $sql);
}

