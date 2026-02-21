<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

if($_GET['secondary_folder'] != 'totals'){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/three_column_layout/display.php";
}
else{
	require $_SERVER['DOCUMENT_ROOT']."/tracking/sales/index.php";
}

?>