<?php
if(!isset($_SESSION)){session_start();}


primary_knowledgebase_menu_item('economy','no');
if($_GET['secondary_folder'] == 'economy'){	
	secondary_knowledgebase_menu_item('disaster','no');
	//	if($_GET['tertiary_folder'] == 'disaster'){	
	secondary_knowledgebase_menu_item('downside_risks','no');	
	//	}
	secondary_knowledgebase_menu_item('fundamentals','no');			
	//secondary_knowledgebase_menu_item('risks','no');

	secondary_knowledgebase_menu_item('other_real_world_implications','no');
	secondary_knowledgebase_menu_item('escape_route','no');	
	secondary_knowledgebase_menu_item('expected_outcomes','no');	

	secondary_knowledgebase_menu_item('solution','no');	
		if($_GET['tertiary_folder'] == 'solution'){ 
		tertiary_knowledgebase_menu_item('appendix','no');	
		}	
	secondary_knowledgebase_menu_item('contention','no');
		if($_GET['tertiary_folder'] == 'contention'){	
		tertiary_knowledgebase_menu_item('principle_concerns','no');	
		}
	
	//Cr 21.03.10
	//turned off for now until up to date again with current service
	//secondary_knowledgebase_menu_item('start_slideshow','no');
	}