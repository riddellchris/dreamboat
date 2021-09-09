<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('more','no');	
if($_GET['secondary_folder'] == 'more'){				


	secondary_knowledgebase_menu_item('faqs','no');	
	if($_GET['secondary_folder'] == 'faqs'){		
		//all & search
		}
	
    secondary_knowledgebase_menu_item('knowledgebase_instructions','no');	

	//not sure this is needed at all
	secondary_knowledgebase_menu_item('about_us','no');
	if($_GET['tertiary_folder'] == 'about_us'){
		tertiary_knowledgebase_menu_item('why','no');			
		tertiary_knowledgebase_menu_item('vision','no');	
		tertiary_knowledgebase_menu_item('mission','no');	
		tertiary_knowledgebase_menu_item('values','no');	
		}	




    	secondary_knowledgebase_menu_item('further_reading','yes');	
		if($_GET['secondary_folder'] == 'further_reading'){
            secondary_knowledgebase_menu_item('news_clippings','no');
            secondary_knowledgebase_menu_item('trickle_right_up_economics','no');
		}

	}