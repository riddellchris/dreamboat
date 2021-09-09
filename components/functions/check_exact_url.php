<?php
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function check_exact_url($url){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	if($_SERVER['REQUEST_URI'] == "/".$url."/"){$result = '1';}
	else{$result = '0';}
	return $result;
}

?>