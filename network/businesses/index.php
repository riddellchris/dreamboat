<?php
require $_SERVER['DOCUMENT_ROOT']."/components/functions/required.php";
if(!isset($_SESSION)){session_start();}
$_SESSION[primary_folders_name()."_page"] = secondary_folders_name();
require $_SERVER['DOCUMENT_ROOT'].primary_folders_url()."display.php";
?>