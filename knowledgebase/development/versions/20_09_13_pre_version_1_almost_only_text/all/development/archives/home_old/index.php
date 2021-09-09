<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


if(!isset($_SESSION['content_home_page'])){$_SESSION['content_home_page'] = 'welcome';}

header("Location: /content/home/".$_SESSION['content_home_page']."/");


/*
echo primary_folders_url().$_SESSION[primary_folders_name().'_page']."/";
exit();

header("Location: ".primary_folders_url().$_SESSION[primary_folders_name().'_page']."/");
*/
