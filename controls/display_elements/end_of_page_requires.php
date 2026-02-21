<?php
require $_SERVER['DOCUMENT_ROOT']."/tracking/tab_scripts_and_styles.php";
require $_SERVER['DOCUMENT_ROOT']."/tracking/input_table/display.php";

if($_GET['primary_folder'] != 'content'){
	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}


?>