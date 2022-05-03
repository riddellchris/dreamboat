<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/styles.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";

//app
if(check_primary_folder('profile')){
	$page_name = 'profile';

		$number_of_menu_options = 5;
		$option[1] = 'details';
//		$option[2] = 'settings';
		$option[2] = 'reviews';	
		$option[3] = 'wellbeing';
		$option[4] = 'flow';		
		$option[5] = 'progress';	
	

	if(check_secondary_folder('details')){
		$sub_sub_page_name = 'details';
		$sub_sub_number_of_menu_options = 0;
	}	
	
	//reviews
	//progress plus
	//work diary
	//workplace mental health risk assessments //if required
	
	if(check_secondary_folder('wellbeing')){
		$sub_sub_page_name = 'wellbeing';
		$sub_sub_number_of_menu_options = 5;
		
		$sub_sub_option[1] = 'health';
		$sub_sub_option[2] = 'energy';
		$sub_sub_option[3] = 'confidence';		
		$sub_sub_option[4] = 'stress';
		$sub_sub_option[5] = 'mood';
	}	
	if(check_secondary_folder('flow')){
		$sub_sub_page_name = 'flow';
		$sub_sub_number_of_menu_options = 6;
		$sub_sub_option[1] = 'reflect';
		$sub_sub_option[2] = 'dream';
		$sub_sub_option[3] = 'focus';		
		$sub_sub_option[4] = 'vent';
		$sub_sub_option[5] = 'plan';
		$sub_sub_option[6] = 'think';
	}
}

if(check_primary_folder('business')){
	$page_name = 'business';
	$number_of_menu_options = 3;
	$option[1] = 'details';	
//	$option[2] = 'settings';	
//	$option[2] = 'reviews';	// this will come back as part of the business review process
	$option[2] = 'products';
	$option[3] = 'services';			
}
if(check_primary_folder('network')){
	$page_name = 'network';
	$number_of_menu_options = 3;
	$option[1] = 'groups';
	$option[2] = 'businesses';
	$option[3] = 'people';
}
if(check_primary_folder('biz_dev')){
	$page_name = 'biz_dev';
	$number_of_menu_options = 3;
	$option[3] = 'one_to_ones';
	$option[2] = 'events';
	$option[1] = 'referrers';
}
if(check_primary_folder('sales')){
	$page_name = 'sales';
	$number_of_menu_options = 3;
	//settings should also go in here to make it run as required per user


//	$option[1] = 'customer_journeys'; 	//a map laying out customer journeys would be amazing it time... 
						//but it's kind or derived from these other options... 
						//it's actually like a website flow chart from page to page 
						//https://www.google.com/search?sxsrf=ALeKk03oG7clHM9_apBEHLkZpaU0gtkilA:1586129754305&q=google+analytics+flow+visualization&tbm=
						//isch&source=univ&sa=X&ved=2ahUKEwi2tsrkudLoAhWLbX0KHbuOAlMQsAR6BAgKEAE&biw=2147&bih=1338
//So it has been struck out for now
	$option[3] = 'new_potentials';
	$option[2] = 'potential_upsells';	
	$option[1] = 'recurring_sales';
//	$option[4] = 'totals';
}

if(check_primary_folder('marketing')){
	$page_name = 'marketing';
	$number_of_menu_options = 4;
	
	//these two "target market and positioning should be built in time but they aren't critical for now...
	//a solid marketing page on the left hand side would be ideal
	$option[1] = 'target_markets';
	//$option[2] = 'positioning';

	$option[2] = 'angles';
	$option[3] = 'channels';
	$option[4] = 'promotions';
	//$option[4] = 'tasks';	//this must interact with the wheelhouse
				//it can be built in a bit later to be honest - it's not critical now
}

if(check_primary_folder('management')){
	$page_name = 'management';
	$number_of_menu_options = 5;
	$option[1] = 'other';	
	$option[2] = 'assets';
	$option[3] = 'systems';		
	$option[4] = 'staff';
	$option[5] = 'clients';	

}
if(check_primary_folder('improvements')){
	$page_name = 'improvements';
	$number_of_menu_options = 3;
	$option[1] = 'completed';
	$option[2] = 'underway';
	$option[3] = 'planned';
}
if(check_primary_folder('issues')){
	$page_name = 'issues';
	$number_of_menu_options = 3;
	$option[1] = 'other';	
	$option[2] = 'important';
	$option[3] = 'critical';		
}
if(check_primary_folder('wheelhouse')){
	$page_name = 'wheelhouse';
	$number_of_menu_options = 5;
//	$option[1] = 'issues';	//moved out into it's own thing because it needs it's own spot on the menu 
	$option[1] = 'dreams';
	$option[2] = 'goals';
	$option[3] = 'milestones';
	$option[4] = 'tasks';
	$option[5] = 'homework';	

}

if(check_primary_folder('time')){
	$page_name = 'time';

		$number_of_menu_options = 2;
	//	$option[1] = 'settings';
	//	$option[1] = 'planning'; //daily, weekly, monthly, quarterly - summation of all the more broken town time entries about the requirements for each
		$option[1] = 'tracking'; // tracking where and when your time went on a MONTHLY basis
		$option[2] = 'discussion';	
	

	if(check_secondary_folder('tracking')){
		$sub_sub_page_name = 'tracking';
		$sub_sub_number_of_menu_options = 5;
		
		$sub_sub_option[1] = 'value';
		$sub_sub_option[2] = 'attention';
		$sub_sub_option[3] = 'skill';		
		$sub_sub_option[4] = 'waste';
		$sub_sub_option[5] = 'upside';
	}


}

if(check_primary_folder('results')){
	$page_name = 'results';


	$number_of_menu_options = 2;
	//$option[1] = 'settings';  //define and discuss what productivity is
	//$option[1] = 'settings';
	$option[1] = 'inputs';
	$option[2] = 'charts';

	if(check_secondary_folder('charts')){
		$sub_sub_page_name = 'charts';

		$sub_sub_option[1] = 'kpis'; $i = 1;
		if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){
			$i++;		
			$sub_sub_option[$i] = 'sales';
		}

		if($_SESSION['viewing_client_commission_yes_no'] == 'yes'){
			$i++;		
			$sub_sub_option[$i] = 'commission';
		}		
		if($_SESSION['viewing_client_financial_management_yes_no'] == 'yes'){
			$i++;		
			$sub_sub_option[$i] = 'financials';
		}			
		
		$i++;			
		$sub_sub_option[$i] = 'work';
		$i++;			
		$sub_sub_option[$i] = 'productivity';
		//$sub_sub_option[6] = 'think';
		
		
		$sub_sub_number_of_menu_options = $i;
	}
}






if(check_primary_folder('admin')){
	$page_name = 'admin';
	$number_of_menu_options = 5;

	$option[1] = 'knowledge';
	$option[2] = 'technology';
	$option[3] = 'management';		
	$option[4] = 'financials';		//pilot revenues, payments etc // probably should be through xero for now
	$option[5] = 'users';
	
	if(check_secondary_folder('users')){
		$sub_sub_page_name = 'users';
		$sub_sub_number_of_menu_options = 5;
		$sub_sub_option[1] = 'standard_engagement_timeline';		
		$sub_sub_option[2] = 'care_calls';	
		$sub_sub_option[3] = 'regular_users';
		$sub_sub_option[4] = 'future_questions';	
		$sub_sub_option[5] = 'general_notes';	//NOTES CAN ALSO BE TAKEN PER USER ON THE RIGHT HAND 'PILOT COLUMN'
	//	$option[5] = 'homework'; //moved to wheelhouse now			
		
	}
	if(check_secondary_folder('management')){
		$sub_sub_page_name = 'management';
		$sub_sub_number_of_menu_options = 2;
		$sub_sub_option[1] = 'staff';
//		$sub_sub_option[2] = 'legal';
//		$sub_sub_option[3] = 'accounting';		
		$sub_sub_option[2] = 'messaging';	
		
	}	
/*
	if(check_secondary_folder('financials')){
		$sub_sub_page_name = 'financials';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option[1] = 'default_pages';
	}*/	

/*
	if(check_secondary_folder('technology')){
		$sub_sub_page_name = 'technology';
		$sub_sub_number_of_menu_options = 5;
		$sub_sub_option[1] = 'add_new';
		$sub_sub_option[2] = 'discuss';
		$sub_sub_option[3] = 'prioritise';
		$sub_sub_option[4] = 'link';
		$sub_sub_option[5] = 'solve';
	}
*/
	if(check_secondary_folder('technology')){
		$sub_sub_page_name = 'technology';
		$sub_sub_number_of_menu_options = 6;
		$sub_sub_option[1] = 'support_requests';
		$sub_sub_option[2] = 'bugs_to_fix';
		$sub_sub_option[3] = 'general_maintenance';
		$sub_sub_option[4] = 'iterative_improvements';		
		$sub_sub_option[5] = 'other_development';
		$sub_sub_option[6] = 'new_features';
	}
	if(check_secondary_folder('knowledge')){
		$sub_sub_page_name = 'knowledge';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option[1] = 'other_knowledge'; //no longer really warranted		
		$sub_sub_option[2] = 'standard_engagement_timeline'; //no longer really warranted
		$sub_sub_option[3] = 'feed_for_discussion'; //can be inbuilt into everything else really
						   //no real need for this within the admin section - the pilot can just use the standard feed in notifications
		$sub_sub_option[4] = 'q_and_a';			//really should be done with superiores or as part of a knowledgbase				   
		//these three might be 				   
	//	$sub_sub_option[5] = 'pilot_only_messaging';  //this can be built into normal messaging

	}	
	
}
if(check_primary_folder('notifications')){
	$page_name = 'notifications';
	$number_of_menu_options = 2;
	$option[1] = 'alerts';
	$option[2] = 'achievements';
	//feed... will go in here for multiple users// connected//networked users
	//the same will apply for pilots here too
}

if(check_primary_folder('legal')){
$page_name = 'legal';
$number_of_menu_options = 2;
$option[1] = 'privacy_policy';
$option[2] = 'terms_and_conditions';
}

if(check_primary_folder('account') &&
	check_secondary_folder('security') != 1 //this is just to ensure that when loggingin ///resetting password etc the submenu doesn't show up
	){


	$page_name = 'account';
/*	//add users//permissions//subscriptions in time
	if($_SESSION['dreamboat_crew'] == 'yes'){
		$number_of_menu_options = 3;
		//$option[1] = 'reviews';
		$option[1] = 'payments';
		$option[2] = 'full_crew_view';	
		$option[3] = 'logout';
//		}
//	else{*/
		$number_of_menu_options = 3;
		$option[1] = 'settings';
		$option[2] = 'payments';
		//$option[3] = 'full_crew_view';	
		$option[3] = 'logout';	
	//}
//	
	if(check_secondary_folder('settings')){
		$sub_sub_page_name = 'settings';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option[1] = 'email_preferences';
		$sub_sub_option[2] = 'work_schedule';
		$sub_sub_option[3] = 'periodic_reviews';	//again this shouldn't be really as part of the engagement timeline anywhere within the first three months... now let's build that timeline	
		$sub_sub_option[4] = 'default_pages';

	}	
	//this has just been crushed into the simple "periodic" reviews under profile as the systematic can easily be undertaken on page now 
/*	if(check_secondary_folder('reviews')){
		$sub_sub_page_name = 'reviews';
		$sub_sub_number_of_menu_options = 2;
		$sub_sub_option[1] = 'systematic';
		$sub_sub_option[2] = 'periodic';
	}	*/
}
/*
if(check_primary_folder('support')){
$page_name = 'support';
$number_of_menu_options = 4;
$option[1] = 'requests';
$option[2] = 'tickets';
$option[3] = 'knowledgebase';
$option[4] = 'bug id';
}
*/



require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/sub_sub_menu/display.php";
?>