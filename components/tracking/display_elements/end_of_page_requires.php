<?php

if($_SESSION['primary_folder'] != 'content'){


	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/tab_scripts_and_styles.php";
	
	//if($_GET['secondary_folder'] == 'edges'){require $_SERVER['DOCUMENT_ROOT']."/components/edges/input_display.php";}
	if($_GET['secondary_folder'] != 'edges'){require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/display.php";}


	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
	
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}

?>