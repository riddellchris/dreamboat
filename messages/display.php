<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>