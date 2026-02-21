<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/two_column_layout/display.php";
/*
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
if($_SESSION['network_page'] == 'groups'	){require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";}
if($_SESSION['network_page'] == 'businesses'	){require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";}
if($_SESSION['network_page'] == 'people'	){require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
*/
?>