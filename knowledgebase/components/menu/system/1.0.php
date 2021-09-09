<?php
if(!isset($_SESSION)){session_start();}

if($_GET['secondary_folder'] == 'system'){
primary_knowledgebase_menu_item('system','yes');
//	secondary_knowledgebase_menu_item('overview','no');	
	
/*
	secondary_knowledgebase_menu_item('platform','no');					
	if($_GET['tertiary_folder'] == 'platform'){				
		/*
		tertiary_knowledgebase_menu_item('features',	'yes');	
				//gui
				//autocoach
				tertiary_knowledgebase_menu_item('kpi_tracking',		'yes');
					//critical for future technological advancement as the ultimate success metrics			
				tertiary_knowledgebase_menu_item('activity_tracking',	'yes');	
				tertiary_knowledgebase_menu_item('upgrade_planning',		'yes');		
		tertiary_knowledgebase_menu_item('how_tos',	'yes');
		
		}
		*/	



	/*
	secondary_knowledgebase_menu_item('optimisation','no');
		//targeted delta as per a standard hedge fund
	
        //this should all have samples and examples of how it's done live/direct from the system itself
		//data sources
		//time optimisation
		//sales optimisation
		//activitiy optimisation
		//internal communication optimisation
		//workflow optimisation
		//more as we go and learn
		//ultimate objective: optimisation engine development	
		*/		
		
			
		
//	secondary_knowledgebase_menu_item('versions','yes');	
		//integrations
		//gui updates
		//probably a clickable/expandable gantt chart
		//far far far from impossible to make it's just a matter of time really
		//use the colours to state the phase
			//forecast
			//planned
			//alpha
			//beta	
			//initial trials
			//full implementation
			//bug fixing & maintenance
			//essentially this just turns into a roadmap which is sick

}