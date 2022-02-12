<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";


function hidden_form_inputs_for_folders_and_items(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);


	if(isset($_GET['primary_folder']) 		AND $_GET['primary_folder'] 	!= ''){echo "<input type='hidden' name='primary_folder'		value='".$_GET['primary_folder']."'>";}	
	if(isset($_GET['secondary_folder']) 	AND $_GET['secondary_folder'] 	!= ''){echo "<input type='hidden' name='secondary_folder'	value='".$_GET['secondary_folder']."'>";}	
	if(isset($_GET['tertiary_folder']) 		AND $_GET['tertiary_folder'] 	!= ''){echo "<input type='hidden' name='tertiary_folder'	value='".$_GET['tertiary_folder']."'>";}	
	if(isset($_GET['quarternary_folder']) 	AND $_GET['quarternary_folder'] != ''){echo "<input type='hidden' name='quarternary_folder'	value='".$_GET['quarternary_folder']."'>";}	
	if(isset($_GET['item_id']) 				AND $_GET['item_id'] 			!= ''){echo "<input type='hidden' name='item_id'			value='".$_GET['item_id']."'>";}					
}