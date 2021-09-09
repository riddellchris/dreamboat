<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function related_items_display($type_to_display){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	$show_this_type = $type_to_display;
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/related_items_display.php";
}