<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function connect_to_database(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	return $conn;
}


//because we have to actually use $conn = database_connection(); to have any fucntionality this is just the same thing but reworded to be more linguistically useful frankly
function database_connection(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	return $conn;
}