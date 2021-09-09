<?php
if(!isset($_SESSION)){session_start();}
primary_knowledgebase_menu_item('expected_future','no');
if($_GET['secondary_folder'] == 'expected_future'){
	secondary_knowledgebase_menu_item('introduction','no');
	secondary_knowledgebase_menu_item('reinvestment_plans','no');
	secondary_knowledgebase_menu_item('graphical_user_interface','no');	
	secondary_knowledgebase_menu_item('statistical_reliability_objectives','no');
	secondary_knowledgebase_menu_item('user_support_systems','no');		
	secondary_knowledgebase_menu_item('pilot_support_systems','no');		
	secondary_knowledgebase_menu_item('unique_products_and_services','yes');	
	secondary_knowledgebase_menu_item('external_optimisation','no');								
	}