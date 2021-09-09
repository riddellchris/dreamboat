<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('our_model','no');
if($_GET['secondary_folder'] == 'our_model'){

	secondary_knowledgebase_menu_item('overview',		'no');
	secondary_knowledgebase_menu_item('issue_removal',	'no');
	secondary_knowledgebase_menu_item('technology',		'no');
	secondary_knowledgebase_menu_item('training_data',	'no');

	secondary_knowledgebase_menu_item('optimisations',	'no');
	if($_GET['tertiary_folder'] == 'optimisations'){		
	//	tertiary_knowledgebase_menu_item('structural',	'no');
	//	tertiary_knowledgebase_menu_item('comparative',	'no');
        	//secondary_knowledgebase_menu_item('pricing','no');	
         	//secondary_knowledgebase_menu_item('time utilisation','no');
	//	tertiary_knowledgebase_menu_item('predictive',	'no');
        //should link to system	           
		}
//	secondary_knowledgebase_menu_item('insights',		'yes');

	secondary_knowledgebase_menu_item('pilots','no');
	if($_GET['tertiary_folder'] == 'pilots'){
			tertiary_knowledgebase_menu_item('faqs','no');
		}
	}