<?php
if(!isset($_SESSION)){session_start();}

//property
//interest rates
//debt
//that sort of thing can probably "cut across" somehow
//critical factors i guess?
//can be tags etc across all this

if($_GET['secondary_folder'] == 'critical_groups'){	

primary_knowledgebase_menu_item('critical_groups','no');
//critical_groups
//This could probably be it's 
//should really just skip to news on/from each of them and provide links
	secondary_knowledgebase_menu_item('rba','no');
		if($_GET['tertiary_folder'] == 'rba'){	
		tertiary_knowledgebase_menu_item('news','no');		
		}
	secondary_knowledgebase_menu_item('government','no');
		if($_GET['tertiary_folder'] == 'government'){	
		tertiary_knowledgebase_menu_item('budgets','no');
		tertiary_knowledgebase_menu_item('legislation_and_regulation','no');	
		tertiary_knowledgebase_menu_item('news','no');					
		}
//productivity commission
		secondary_knowledgebase_menu_item('productivity_commission','no');
		if($_GET['tertiary_folder'] == 'productivity_commission'){	
		tertiary_knowledgebase_menu_item('news','no');	
		}

		secondary_knowledgebase_menu_item('asic','no');
	//	if($_GET['tertiary_folder'] == 'productivity_commission'){	
	//	tertiary_knowledgebase_menu_item('news','no');	
	//	}


	//	secondary_knowledgebase_menu_item('home owners','no');	

	}