<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function start_page(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	if(!isset($_SESSION)){session_start();}
	require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
	require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";
}

function end_page(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
}