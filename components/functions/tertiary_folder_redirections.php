<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

//required for the security check below
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/check_url.php";

//brief security check
if(	!isset($_SESSION['viewing_client_id']) &&
	check_url('/content/') != 1
	){header("Location: /users/"); exit();}

//get the folder settings ... not for this page but for below
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/initial_folder_settings.php";
//just get the default folder settings as a check
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";


$redirection_url = "/".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/".$_SESSION['tertiary_folder']."/".$_SESSION[$_SESSION['primary_folder']."_".$_SESSION['secondary_folder']."_".$_SESSION['tertiary_folder']."_page"]."/";

header("Location: ".$redirection_url);
exit();