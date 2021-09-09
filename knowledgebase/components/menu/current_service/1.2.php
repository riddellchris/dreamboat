<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('current_service','no');	
if($_GET['secondary_folder'] == 'current_service'){	
	secondary_knowledgebase_menu_item('how_it_works','no');				
	secondary_knowledgebase_menu_item('phases_of_engagement','no');
 	secondary_knowledgebase_menu_item('behind_the_scenes','no');   
	secondary_knowledgebase_menu_item('pricing','no');				
	secondary_knowledgebase_menu_item('risks','no');
	secondary_knowledgebase_menu_item('benefits','no');
	secondary_knowledgebase_menu_item('expectations','no');	
	secondary_knowledgebase_menu_item('payments','no');
	secondary_knowledgebase_menu_item('refunds_and_exit_clauses','no');	
	}