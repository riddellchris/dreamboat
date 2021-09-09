<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

//can't actually use this right now because using a page refresh to display the test charts
//CR 20.07.20
//leaving the last admin page a red for now
//$_SESSION['admin_open_or_closed'] = 'closed';

//just get the default folder settings as a check
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
$redirection_url = "/".primary_folders_name()."/".secondary_folders_name()."/".$_SESSION[primary_folders_name()."_".secondary_folders_name()."_page"]."/index.php?primary_folder=".primary_folders_name()."&secondary_folder=".secondary_folders_name()."&tertiary_folder=".$_SESSION[primary_folders_name()."_".secondary_folders_name()."_page"];

header("Location: ".$redirection_url);
exit();