<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";


function clean_variable($uncleaned_input){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$escaped_string = myqsli_real_escape_string($conn, $uncleaned_input);
	
	//double up any single apostrophies
	

	return $cleaned_input;
}


?>