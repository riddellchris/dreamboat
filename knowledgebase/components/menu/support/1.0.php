<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('support','no');	
if($_GET['secondary_folder'] == 'support'){				

	//not sure this is needed at all
	secondary_knowledgebase_menu_item('xero','no');
	if($_GET['tertiary_folder'] == 'xero'){
		tertiary_knowledgebase_menu_item('data','no');			
		tertiary_knowledgebase_menu_item('connections','no');	
		tertiary_knowledgebase_menu_item('assistance','no');	
		
		//	if($_GET['quarternary_folder'] == 'sign_up'){
				tertiary_knowledgebase_menu_item('sign_up','no');				
		//	}
		}	






	}