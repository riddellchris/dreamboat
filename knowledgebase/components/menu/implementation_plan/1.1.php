<?php
if(!isset($_SESSION)){session_start();}

/*
This should be conditional access only
*/

primary_knowledgebase_menu_item('implementation_plan','yes');
if($_GET['secondary_folder'] == 'implementation_plan'){
	secondary_knowledgebase_menu_item('market_penetration',	'yes');	
	secondary_knowledgebase_menu_item('direct_sales',	'yes');	
	secondary_knowledgebase_menu_item('objectives',	'yes');
 	secondary_knowledgebase_menu_item('staffing',	'yes');	   
	if($_GET['tertiary_folder'] == 'staffing'){		
		tertiary_knowledgebase_menu_item('pilots','yes');
		}
	secondary_knowledgebase_menu_item('service_alterations',	'yes');	
	secondary_knowledgebase_menu_item('development_processes',	'yes');	
}