<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('immediate_plan','no');
if($_GET['secondary_folder'] == 'immediate_plan'){
 	secondary_knowledgebase_menu_item('summary',	'no');   
	secondary_knowledgebase_menu_item('mission',	'no');
	secondary_knowledgebase_menu_item('hypothesis',	'no');	
}

