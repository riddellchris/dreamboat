<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('immediate_plan','no');
if($_GET['secondary_folder'] == 'immediate_plan'){
	secondary_knowledgebase_menu_item('mission',	'yes');
	secondary_knowledgebase_menu_item('hypothesis',	'yes');	
	secondary_knowledgebase_menu_item('results',	'yes');	
	if($_GET['tertiary_folder'] == 'results'){		
		tertiary_knowledgebase_menu_item('measurement_challenges','yes');
		}
	}