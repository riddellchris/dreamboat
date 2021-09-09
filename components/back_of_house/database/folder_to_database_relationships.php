<?php
if(!isset($_SESSION)){session_start();}


//this is obviously linked to the other file
///database_search_array.php




//require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_file_usage.php";
//admin_file_usage(__FILE__);

//25.06.20
//for some reason this is being set elsewhere earlier in the process
//but not to worry
unset($database);


/*
N.B. This file is HIGHLY correlated with /components/items/go_to.php 
So please be aware that any changes made / that need to be made to this file, almost certainly mean that changes need to be made to this file too
*/


$primary 	= $_GET['primary_folder'];
$secondary 	= $_GET['secondary_folder'];
$tertiary 	= $_GET['tertiary_folder'];
$quarternary 	= $_GET['quarternary_folder'];
$item_id 	= $_GET['item_id'];

if($primary == 'profile'){$database = $secondary;}

if($primary == 'business'){$database = 'products_and_services';}

if($primary == 'network'){
	if($secondary == 'groups' OR $secondary == 'businesses'){$database = 'organisations';}
	else{	$database = $secondary;}
}
if($primary == 'biz_dev'){
	if($secondary == 'referrers'){$database = 'people';}
	else{	$database = $secondary;}
	}
if($primary == 'sales'){$database = 'sales';}
if($primary == 'marketing'){
	if($secondary == 'angles'){$database = 'marketing_angles';}
	else{$database = $secondary;}
	}
if($primary == 'management'){		
	if(	$secondary == 'clients'  OR 
		$secondary == 'staff'){	$database = 'people';}
	elseif(	$secondary == 'other'){	$database = 'other_management';}
	else{	$database = $secondary;	}
}


if($primary == 'wheelhouse'){		$database = 'wheelhouse';}
if($primary == 'activities'){		$database = 'activities';}
if($primary == 'issues'){		$database = 'issues';}
if($primary == 'upgrades'){		$database = 'upgrades';}
if($primary == 'messages'){		$database = 'messages';}
if($primary == 'notifications'){	$database = 'notifications';}
if($primary == 'admin'){	
		if(	$secondary == 'technology'){	$database = 'technology';}
		if(	$secondary == 'notes'){		$database = $tertiary;}
	}

