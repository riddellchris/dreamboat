<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/styles.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";

/*
//content
if(check_primary_folder('content')){
	if(check_secondary_folder('home')){
		$page_name = 'home';
		$number_of_menu_options = 2;
		$option_1 = 'welcome';
		$option_2 = 'overview';	
	//	$option_3 = 'free_trial';	//if ever applied would only be of the platform not of the whole system including consulting.. because well fuck that			
	}
	if(check_secondary_folder('process')){
		$page_name = 'process';
		$number_of_menu_options = 1;
		$option_1 = 'overview';
		//$option_2 = 'features';	//honestly i don't think this is really required for now either until the features list is really high enough 
						//we can leave it for now and just show some simple charts on the overview page	
	}
	if(check_secondary_folder('pilots')){
		$page_name = 'pilots';
		$number_of_menu_options = 1;
		$option_1 = 'overview';
	//	$option_2 = 'features';		//this is more possible and required when data 
						//is actually used until then it's kind of redundant	
	}
	*/
/*	if(check_secondary_folder('platform')){
		$page_name = 'platform';
		$number_of_menu_options = 2;
		$option_1 = 'overview';
		$option_2 = 'features';		//honestly i don't think this is really required for now either until the features 
						//list is really high enough -- we can leave it for now and just show some simple charts on the overview page	
	}
*/

/*	if(check_secondary_folder('processes')){
		$page_name = 'processes';
		$number_of_menu_options = 5;
		$option_1 = 'summary';
		$option_2 = 'typing';		
		$option_3 = 'tracking';		
		$option_4 = 'talking';			
		$option_5 = 'technology';	
		
				
		//$option_2 = 'features';	//honestly i don't think this is really required for now either 
						//until the features list is really high enough -- 
						//we can leave it for now and just show some simple charts on the overview page	
	}*/
	/*
	if(check_secondary_folder('pricing')){
		$page_name = 'pricing';
		$number_of_menu_options = 1;
		$option_1 = 'overview';
	//	$option_2 = 'features';	//honestly i don't think this is really required for now either until the features list is really high enough
					//we can leave it for now and just show some simple charts on the overview page	
	}
	

	if(check_secondary_folder('services')){
		$page_name = 'services';
		$number_of_menu_options = 3;
		$option_1 = 'crm';		
		$option_2 = 'text';
		$option_3 = 'phone';
			
		if(check_tertiary_folder('crm')){
			$sub_sub_page_name = 'crm';
			$sub_sub_number_of_menu_options = 2;
			$sub_sub_option_1 = 'overview';
			$sub_sub_option_2 = 'features';
		//	$sub_sub_option_3 = 'processes'; //notifications //reviews
		}
	//	if(check_tertiary_folder('text')){
	//		$sub_sub_page_name = 'text';
	//		$sub_sub_number_of_menu_options = 1;
	//		$sub_sub_option_1 = 'overview';
		//	$sub_sub_option_2 = 'features';
		//	$sub_sub_option_3 = 'processes';
	//	}		
		if(check_tertiary_folder('phone')){
			$sub_sub_page_name = 'phone';
			$sub_sub_number_of_menu_options = 2;
			$sub_sub_option_1 = 'overview';
			$sub_sub_option_2 = 'features';
		//	$sub_sub_option_3 = 'processes';
		}		
	}
	if(check_secondary_folder('about')){
		$page_name = 'about';
		$number_of_menu_options = 4;
		$option_1 = 'corporate';		
		$option_2 = 'thesis';
		$option_3 = 'pilots';		
		$option_4 = 'processes';
	}
	
//	if(check_secondary_folder('contact_us')){
//		$page_name = 'contact_us';
//		$number_of_menu_options = 3;
//		$option_1 = 'digitally';		
//		$option_2 = 'physically';
//		$option_3 = 'via_mail';		
//	}	
	
	
}
*/



/*
//content
if(check_primary_folder('home')){
	$page_name = 'home';
	$number_of_menu_options = 2;
	$option_1 = 'welcome';
	$option_2 = 'overview';
//	$option_3 = 'free_trial';		
	}*/	
	
if(check_primary_folder('crm')){
	$page_name = 'crm';
	$number_of_menu_options = 2;
//	$option_1 = 'benefits';	
	$option_1 = 'overview';
	$option_2 = 'features';		
//	$option_4 = 'knowledgebase';
//	$option_5 = 'tips_and_tricks';		
//	$option_4 = 'betas';
	}
	
if(check_primary_folder('text')){
	$page_name = 'text';
	$number_of_menu_options = 1;
//	$option_1 = 'benefits';	
	$option_1 = 'overview';
//	$option_2 = 'features';		
//	$option_4 = 'knowledgebase';
//	$option_5 = 'tips_and_tricks';		
//	$option_4 = 'betas';	
	}
	
if(check_primary_folder('phone')){
	$page_name = 'phone';
	$number_of_menu_options = 2;
//	$option_1 = 'benefits';	
	$option_1 = 'overview';
	$option_2 = 'features';		
	}








//app
if(check_primary_folder('profile')){
	$page_name = 'profile';

		$number_of_menu_options = 5;
		$option_1 = 'details';
//		$option_2 = 'settings';
		$option_2 = 'reviews';	
		$option_3 = 'wellbeing';
		$option_4 = 'flow';		
		$option_5 = 'progress';	
	

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
		
		$sub_sub_option_1 = 'health';
		$sub_sub_option_2 = 'energy';
		$sub_sub_option_3 = 'confidence';		
		$sub_sub_option_4 = 'stress';
		$sub_sub_option_5 = 'mood';
	}	
	if(check_secondary_folder('flow')){
		$sub_sub_page_name = 'flow';
		$sub_sub_number_of_menu_options = 6;
		$sub_sub_option_1 = 'reflect';
		$sub_sub_option_2 = 'dream';
		$sub_sub_option_3 = 'focus';		
		$sub_sub_option_4 = 'vent';
		$sub_sub_option_5 = 'plan';
		$sub_sub_option_6 = 'think';
	}
}





if(check_primary_folder('business')){
	$page_name = 'business';
	$number_of_menu_options = 4;
	$option_1 = 'details';	
//	$option_2 = 'settings';	
	$option_2 = 'reviews';	//
	$option_3 = 'products';
	$option_4 = 'services';			
}
if(check_primary_folder('network')){
	$page_name = 'network';
	$number_of_menu_options = 3;
	$option_1 = 'groups';
	$option_2 = 'businesses';
	$option_3 = 'people';
}
if(check_primary_folder('biz_dev')){
	$page_name = 'biz_dev';
	$number_of_menu_options = 3;
	$option_3 = 'one_to_ones';
	$option_2 = 'events';
	$option_1 = 'referrers';
}
if(check_primary_folder('sales')){
	$page_name = 'sales';
	$number_of_menu_options = 3;
	//settings should also go in here to make it run as required per user


//	$option_1 = 'customer_journeys'; 	//a map laying out customer journeys would be amazing it time... 
						//but it's kind or derived from these other options... 
						//it's actually like a website flow chart from page to page 
						//https://www.google.com/search?sxsrf=ALeKk03oG7clHM9_apBEHLkZpaU0gtkilA:1586129754305&q=google+analytics+flow+visualization&tbm=
						//isch&source=univ&sa=X&ved=2ahUKEwi2tsrkudLoAhWLbX0KHbuOAlMQsAR6BAgKEAE&biw=2147&bih=1338
//So it has been struck out for now
	$option_3 = 'new_potentials';
	$option_2 = 'potential_upsells';	
	$option_1 = 'recurring_sales';
//	$option_4 = 'totals';
}

if(check_primary_folder('marketing')){
	$page_name = 'marketing';
	$number_of_menu_options = 4;
	
	//these two "target market and positioning should be built in time but they aren't critical for now...
	//a solid marketing page on the left hand side would be ideal
	$option_1 = 'target_markets';
	//$option_2 = 'positioning';

	$option_2 = 'angles';
	$option_3 = 'channels';
	$option_4 = 'promotions';
	//$option_4 = 'tasks';	//this must interact with the wheelhouse
				//it can be built in a bit later to be honest - it's not critical now
}

if(check_primary_folder('management')){
	$page_name = 'management';
	$number_of_menu_options = 5;
	$option_1 = 'other';	
	$option_2 = 'assets';
	$option_3 = 'systems';		
	$option_4 = 'staff';
	$option_5 = 'clients';	

}
if(check_primary_folder('improvements')){
	$page_name = 'improvements';
	$number_of_menu_options = 3;
	$option_1 = 'completed';
	$option_2 = 'underway';
	$option_3 = 'planned';
}
if(check_primary_folder('issues')){
	$page_name = 'issues';
	$number_of_menu_options = 3;
	$option_1 = 'other';	
	$option_2 = 'important';
	$option_3 = 'critical';		
}
if(check_primary_folder('wheelhouse')){
	$page_name = 'wheelhouse';
	$number_of_menu_options = 5;
//	$option_1 = 'issues';	//moved out into it's own thing because it needs it's own spot on the menu 
	$option_1 = 'dreams';
	$option_2 = 'goals';
	$option_3 = 'milestones';
	$option_4 = 'tasks';
	$option_5 = 'homework';	

}

if(check_primary_folder('time')){
	$page_name = 'time';

	if($_SESSION['dreamboat_crew'] == 'yes'){
		$number_of_menu_options = 3;
		$option_1 = 'settings';
	//	$option_1 = 'planning'; //daily, weekly, monthly, quarterly - summation of all the more broken town time entries about the requirements for each
		$option_2 = 'tracking'; // tracking where and when your time went on a MONTHLY basis
		$option_3 = 'discussion';	
	}
	else{
		$number_of_menu_options = 2;
	//	$option_1 = 'settings';
	//	$option_1 = 'planning'; //daily, weekly, monthly, quarterly - summation of all the more broken town time entries about the requirements for each
		$option_1 = 'tracking'; // tracking where and when your time went on a MONTHLY basis
		$option_2 = 'discussion';	
	}

	if(check_secondary_folder('tracking')){
		$sub_sub_page_name = 'tracking';
		$sub_sub_number_of_menu_options = 5;
		
		$sub_sub_option_1 = 'value';
		$sub_sub_option_2 = 'attention';
		$sub_sub_option_3 = 'skill';		
		$sub_sub_option_4 = 'waste';
		$sub_sub_option_5 = 'upside';
	}


}

if(check_primary_folder('results')){
	$page_name = 'results';

/*
business owner
*/
/*
//allow comparative charts to be brought up... in time
	$number_of_menu_options = 5;
	$option_1 = 'kpis';	
	$option_2 = 'revenue';
	//$option_2 = 'expenses';
	$option_3 = 'profit';
	$option_4 = 'income';
	$option_5 = 'productivity';	
*/	
	
	//value isn't included for now until can calculate it and even then it's only for business owners...
	//this will also have to follow expenses to properly calculate margins
	//$option_5 = 'value'; /// only for business owner



/*
staff member
*/
/* This is for staff in time not owners
	$sql="SELECT commission_yes_no FROM user_account_details WHERE user_id = '".$_SESSION['user_id']."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if($row['commission_yes_no']== 'yes'){
		$number_of_menu_options = 4;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'commission';
		$option_4 = 'income';
	}
	if($row['commission_yes_no']== 'no'){
		$number_of_menu_options = 3;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'income';
	}
*/
/*
sales person
*/
/* This is for staff in time not owners
	$sql="SELECT commission_yes_no FROM user_account_details WHERE user_id = '".$_SESSION['user_id']."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if($row['commission_yes_no']== 'yes'){
		$number_of_menu_options = 4;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'commission';
		$option_4 = 'income';
	}
	if($row['commission_yes_no']== 'no'){
		$number_of_menu_options = 3;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'income';
	}
freelancer

//through to productivity
$number_of_menu_options = 5;
//$option_1 = 'settings';  //define and discuss what productivity is
$option_1 = 'kpis';
$option_2 = 'revenue_and_profit';
$option_3 = 'revenue_and_income';
$option_4 = 'income_and_hours';
$option_5 = 'productivity';
*/
$number_of_menu_options = 3;
//$option_1 = 'settings';  //define and discuss what productivity is
$option_1 = 'settings';
$option_2 = 'inputs';
$option_3 = 'charts';



}






if(check_primary_folder('admin')){
	$page_name = 'admin';
	$number_of_menu_options = 5;

	$option_1 = 'knowledge';
	$option_2 = 'technology';
	$option_3 = 'management';		
	$option_4 = 'finances';		//pilot revenues, payments etc // probably should be through xero for now
	$option_5 = 'users';
	
	if(check_secondary_folder('users')){
		$sub_sub_page_name = 'users';
		$sub_sub_number_of_menu_options = 5;
		$sub_sub_option_1 = 'standard_engagement_timeline';		
		$sub_sub_option_2 = 'care_calls';	
		$sub_sub_option_3 = 'regular_users';
		$sub_sub_option_4 = 'future_questions';	
		$sub_sub_option_5 = 'general_notes';	//NOTES CAN ALSO BE TAKEN PER USER ON THE RIGHT HAND 'PILOT COLUMN'
	//	$option_5 = 'homework'; //moved to wheelhouse now			
		
	}
	if(check_secondary_folder('management')){
		$sub_sub_page_name = 'management';
		$sub_sub_number_of_menu_options = 2;
		$sub_sub_option_1 = 'staff';
//		$sub_sub_option_2 = 'legal';
//		$sub_sub_option_3 = 'accounting';		
		$sub_sub_option_2 = 'messaging';	
		
	}	
/*
	if(check_secondary_folder('finances')){
		$sub_sub_page_name = 'finances';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option_1 = 'default_pages';
	}*/	

/*
	if(check_secondary_folder('technology')){
		$sub_sub_page_name = 'technology';
		$sub_sub_number_of_menu_options = 5;
		$sub_sub_option_1 = 'add_new';
		$sub_sub_option_2 = 'discuss';
		$sub_sub_option_3 = 'prioritise';
		$sub_sub_option_4 = 'link';
		$sub_sub_option_5 = 'solve';
	}
*/
	if(check_secondary_folder('technology')){
		$sub_sub_page_name = 'technology';
		$sub_sub_number_of_menu_options = 6;
		$sub_sub_option_1 = 'support_requests';
		$sub_sub_option_2 = 'bugs_to_fix';
		$sub_sub_option_3 = 'general_maintenance';
		$sub_sub_option_4 = 'iterative_improvements';		
		$sub_sub_option_5 = 'other_development';
		$sub_sub_option_6 = 'new_features';
	}
	if(check_secondary_folder('knowledge')){
		$sub_sub_page_name = 'knowledge';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option_1 = 'other_knowledge'; //no longer really warranted		
		$sub_sub_option_2 = 'standard_engagement_timeline'; //no longer really warranted
		$sub_sub_option_3 = 'feed_for_discussion'; //can be inbuilt into everything else really
						   //no real need for this within the admin section - the pilot can just use the standard feed in notifications
		$sub_sub_option_4 = 'q_and_a';			//really should be done with superiores or as part of a knowledgbase				   
		//these three might be 				   
	//	$sub_sub_option_5 = 'pilot_only_messaging';  //this can be built into normal messaging

	}	
	
}
if(check_primary_folder('notifications')){
	$page_name = 'notifications';
	$number_of_menu_options = 2;
	$option_1 = 'alerts';
	$option_2 = 'achievements';
	//feed... will go in here for multiple users// connected//networked users
	//the same will apply for pilots here too
}

if(check_primary_folder('legal')){
$page_name = 'legal';
$number_of_menu_options = 2;
$option_1 = 'privacy_policy';
$option_2 = 'terms_and_conditions';
}

if(check_primary_folder('account') &&
	check_secondary_folder('security') != 1 //this is just to ensure that when loggingin ///resetting password etc the submenu doesn't show up
	){


	$page_name = 'account';
/*	//add users//permissions//subscriptions in time
	if($_SESSION['dreamboat_crew'] == 'yes'){
		$number_of_menu_options = 3;
		//$option_1 = 'reviews';
		$option_1 = 'payments';
		$option_2 = 'full_crew_view';	
		$option_3 = 'logout';
//		}
//	else{*/
		$number_of_menu_options = 3;
		$option_1 = 'settings';
		$option_2 = 'payments';
		//$option_3 = 'full_crew_view';	
		$option_3 = 'logout';	
	//}
//	
	if(check_secondary_folder('settings')){
		$sub_sub_page_name = 'settings';
		$sub_sub_number_of_menu_options = 4;
		$sub_sub_option_1 = 'default_pages';
		$sub_sub_option_2 = 'periodic_reviews';	//again this shouldn't be really as part of the engagement timeline anywhere within the first three months... now let's build that timeline	
		$sub_sub_option_3 = 'email_preferences';
		$sub_sub_option_4 = 'work_schedule';
	}	
	//this has just been crushed into the simple "periodic" reviews under profile as the systematic can easily be undertaken on page now 
/*	if(check_secondary_folder('reviews')){
		$sub_sub_page_name = 'reviews';
		$sub_sub_number_of_menu_options = 2;
		$sub_sub_option_1 = 'systematic';
		$sub_sub_option_2 = 'periodic';
	}	*/
}
/*
if(check_primary_folder('support')){
$page_name = 'support';
$number_of_menu_options = 4;
$option_1 = 'requests';
$option_2 = 'tickets';
$option_3 = 'knowledgebase';
$option_4 = 'bug id';
}
*/



require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/sub_sub_menu/display.php";
?>