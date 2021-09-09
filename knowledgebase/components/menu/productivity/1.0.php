<?php
if(!isset($_SESSION)){session_start();}

if($_GET['secondary_folder'] == 'productivity'){
primary_knowledgebase_menu_item('productivity','no'); //only show if within the folder - for now this isn't ALWAYS visible but there are plenty of links.
                                                        //perhaps in time a "show all head menu options will come in and it will display."

	secondary_knowledgebase_menu_item('issues','no');
	if($_GET['tertiary_folder'] == 'issues'){	
		tertiary_knowledgebase_menu_item('definition','no');	
		tertiary_knowledgebase_menu_item('examples','yes');	
		tertiary_knowledgebase_menu_item('why_issues_exist','no');
		tertiary_knowledgebase_menu_item('why_issues_remain','no');	
	}
	secondary_knowledgebase_menu_item('factors','no');
	secondary_knowledgebase_menu_item('assumptions','no');
	secondary_knowledgebase_menu_item('contention','no');
	secondary_knowledgebase_menu_item('new_opportunities','no');	
	secondary_knowledgebase_menu_item('linear_productivity','no');
        if($_GET['tertiary_folder'] == 'linear_productivity'){
        tertiary_knowledgebase_menu_item('definition','no');	
        tertiary_knowledgebase_menu_item('resistance','no');			
        tertiary_knowledgebase_menu_item('measurement','no');								
        }
	secondary_knowledgebase_menu_item('network_productivity','no');
	    if($_GET['tertiary_folder'] == 'network_productivity'){
		tertiary_knowledgebase_menu_item('summary','no');
		tertiary_knowledgebase_menu_item('benefits','no');		
		tertiary_knowledgebase_menu_item('symbology','no');	
		tertiary_knowledgebase_menu_item('domains','no');
		//measurements.. more complex	
        //valuations ultimately possible
    
        /*
		if($_GET['tertiary_folder'] == 'domains'){			//different factors will occur each domain
			tertiary_knowledgebase_menu_item('individual','no');	
			tertiary_knowledgebase_menu_item('business','no');	
			tertiary_knowledgebase_menu_item('economic','no');	
			} 
        */
	
		tertiary_knowledgebase_menu_item('layers','yes');
	
		tertiary_knowledgebase_menu_item('upgrades','no');			
	    //	if($_GET['tertiary_folder'] == 'upgrades'){
            //measurement
            //evaluation
            //optimisation
        //}

		}
	}