<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function require_file($post_document_root_url){				admin_functions_in_pages_usage(__FUNCTION__,__FILE__);	require $_SERVER['DOCUMENT_ROOT'].$post_document_root_url;}

//this one obviously uses __DIR__ and it's more specific but simpler and cleaner when used in the code 
function require_file_from_this_directory($post_document_root_url){	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);	require $post_document_root_url;}

//this is a require function but really has an "input"
//chances are there are functions which can be built that include argument sets moving into it
function related_items_display($type_to_display){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	
	$show_this_type = $type_to_display;
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/related_items_display.php";
}