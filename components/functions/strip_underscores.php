<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";


function strip_underscores($value){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

	return str_replace('_',' ', $value);
}