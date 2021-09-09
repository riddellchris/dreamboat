<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function number_to_words($number){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	$exp = explode('.', $number);
	$f = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
	return ucfirst($f->format($exp[0]));
}
?>