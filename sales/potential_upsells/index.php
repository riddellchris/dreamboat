<?php
require $_SERVER['DOCUMENT_ROOT']."/components/functions/required.php";
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT'].primary_folders_url()."display.php";
?>