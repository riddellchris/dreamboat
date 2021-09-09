<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/two_column_layout/body.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
