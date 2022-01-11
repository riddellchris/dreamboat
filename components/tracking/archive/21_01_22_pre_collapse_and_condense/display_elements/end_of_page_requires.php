<?php

if($_GET['primary_folder'] != 'content'){


require $_SERVER['DOCUMENT_ROOT']."/components/tracking/tab_scripts_and_styles.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/display.php";


	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
	
	if($_GET['secondary_folder'] == 'links'){
		echo "<div style='height:200px;'></div>";
		
		}
	
	
	
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}

?>