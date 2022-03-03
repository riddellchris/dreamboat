<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/navigation/navigation_titles.php";




echo "<style>";
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes'){
	echo ".about_us.nav-links.hide_for_mobile{	padding-top:10px;}";
	}
else{
	echo ".about_us.nav-links.hide_for_mobile{	padding-top:18px;}";
}
echo "</style>";

$is_in_content = 'no';

if(	check_primary_folder('snapshot') 	OR	
	check_primary_folder('problem') 	OR
	check_primary_folder('solution') 	OR
	check_primary_folder('solutions') 	OR
	check_primary_folder('processes') 	OR
	check_primary_folder('impact') 		
	
	
	){ 
	
	require_file('/components/navigation/non_mobile/components/contact_us.php');	
	require_file('/components/navigation/non_mobile/components/solutions.php');		
	require_file('/components/navigation/non_mobile/components/problem.php');	
	$is_in_content = 'yes';		
}

if(isset($_SESSION['logged_in'])){
	if(	$_SESSION['logged_in'] == 'yes' &&
		check_primary_folder('knowledgebase') 
		){		require_file('/components/navigation/non_mobile/components/back.php');}










	if($_SESSION['logged_in'] == 'yes' AND 
		$is_in_content != 'yes'){

		//obviously in time all of this could be put into bespoke icons... but i don't think that's worth it just yet
		//users need to be taught what everything is for now...
		//as do pilots
		//and there isn't a universal understanding of what is what just yet for all of our things...
		//perhaps and probably in time - people will be able to turn on and off that option as the request and require
		
		
			//should also be if not in trial and only user but that's fine can also sell from there so leave it for now
			if($_SESSION['dreamboat_crew'] != 'yes'){
				require_file('/components/navigation/non_mobile/components/call.php');	
			}
					
				require_file('/components/navigation/non_mobile/components/account.php');

			if($_SESSION['dreamboat_crew'] == 'yes' &&
			$_SESSION['dreamboat_crew_navigation_option_on'] == 'no'){	require_file('/components/navigation/non_mobile/components/users.php');	}
			

			
			
			
			
		$nav_name = "notifications"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){
			echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
				if($_SESSION['user_alerts_notifications'] == 'on'){echo " alert ";}		
				echo "' style='float:right;padding-top:18px;";
				if(check_url('/notifications/') == 1 OR $_GET['primary_folder'] == 'notifications'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
			echo "'  href='/notifications/'>notifications</a>";
		}

		$nav_name = "messages"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){		
			echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
				if($_SESSION['user_alerts_messages'] == 'on'){echo " alert ";}		
				echo "' style='float:right;";
				if(check_url('/messages/') == 1 OR $_GET['primary_folder'] == 'messages'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
			echo "' title='Communications central' href='/messages/'>messages</a>";
		}

		$nav_name = "finances"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
	//if($_SESSION['viewing_client_mental_health_only'] != 'yes'){
	//	require_file('/components/navigation/non_mobile/components/results.php');
		$nav_name = "results"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}

	//CR 26.2.21
	//these will probably come back in the next couple of months as the 
	//	require_file('/components/navigation/non_mobile/components/upgrades.php');
	//	require_file('/components/navigation/non_mobile/components/issues.php');
	//	require_file('/components/navigation/non_mobile/components/activities.php');	
	//	require_file('/components/navigation/non_mobile/components/wheelhouse.php');
	//	require_file('/components/navigation/non_mobile/components/management.php');

		$nav_name = "upgrades"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		$nav_name = "issues"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}	
		$nav_name = "time"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}			
		$nav_name = "activities"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		$nav_name = "wheelhouse"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}		
		$nav_name = "management"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}

		if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){		
			//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
				$nav_name = "sales"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
			//}
			//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
				$nav_name = "marketing"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
			//}	
			//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
				$nav_name = "biz_dev"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
			//}	
		}
		
		//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
			$nav_name = "network"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		//}
		//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
			$nav_name = "business"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		//}			
		//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){

	//		echo '<pre>' , var_dump($_SESSION['main_nav_control']) , '</pre>';		exit();

		$nav_name = "profile"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		//}
		$nav_name = "insights"; if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		$nav_name = "overview"; if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require $_SERVER['DOCUMENT_ROOT']."/components/navigation/non_mobile/components/".$nav_name.".php";}
		$nav_name = "map"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
		$nav_name = "data"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/non_mobile/components/".$nav_name.".php");}
	}
}
	
if(isset($_SESSION['dreamboat_crew'])){
	if($_SESSION['dreamboat_crew'] == 'yes'){  
			//if($_SESSION['dreamboat_crew_navigation_option_on'] != 'yes'){
		//This really must be turned off until we are ready.
		//This will require far more cash to completely put together and achieve

		//}	

		



			//require_file('/components/navigation/non_mobile/components/link_to_progress_for_pilots.php');	

			require_file('/components/navigation/non_mobile/components/notes.php');   
	
			
			require_file('/components/navigation/non_mobile/components/users.php');					
	}
}
	
	
	/*	
if( $_SESSION['logged_in'] != 'yes' OR 
    check_url('/content/') == 1){

		echo "<a class='about_us nav-links hide_for_mobile' style='float:right;padding-right:18px;";
			if($_SESSION['logged_in'] != 'yes'){
				if(check_url('/account/security/') == 1){echo "color:#00ff00;'";}
				else{echo "color:red;'";}
				echo " title='' href='/account/security/' title='Happy days, let&#39;s sign in'>login";
			}
			else{
				echo "color:red;' title='Back we go<<<' href='/'>go back";	
			}
		echo "</a>";


/*
		echo "<a class='about_us nav-links hide_for_mobile' style='float:right;";
		if(check_url('/content/contact_us/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "'  href='/content/contact_us/'>contact</a>";*/
//}
//*/


/*
//CR 20.08.21
This is what we call mega_search_at this point...
For more information just see
/components/mega_search/development/notes_as_we_go.php

//CR 20.08.14
MOST LIKELY THIS IS WHERE A CRITICAL ELEMENT WILL ALTER what is actually showing and 
for example using "technology to pull up the staff that are involved in technology/// build up more and more categorisations on that front
//messaging would be optimised to that as would the wheelhouse
//i'm sure in time projects would also fit into this as well


echo "<input style='float:right;'></input>";

*/








