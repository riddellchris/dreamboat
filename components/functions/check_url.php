<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function check_url($url){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	$result = is_numeric(strpos($_SERVER['REQUEST_URI'],$url));
	
	//returns true/1 =  or otherwise false if not found within
	return $result;
}

function check_url_for_navigation_purposes($url){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	$result = is_numeric(strpos($_GET['primary_folder'],$url));
	
	//returns true/1 =  or otherwise false if not found within
	return $result;
}

?>