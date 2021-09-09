<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function loggedin_crew_member(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	if(	$_SESSION['logged_in'] == 'yes' &&
		$_SESSION['dreamboat_crew'] == 'yes'){return 'yes';}
	else{ return 'no';}
}