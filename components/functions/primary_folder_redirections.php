<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";


//can't actually use this right now because using a page refresh to display the test charts
//once that refresh is no longer needed we can turn this on
//$_SESSION['admin_open_or_closed'] = 'closed';

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
header("Location: ".primary_folders_url().$_SESSION[primary_folders_name().'_page']."/index.php?primary_folder=".primary_folders_name());

