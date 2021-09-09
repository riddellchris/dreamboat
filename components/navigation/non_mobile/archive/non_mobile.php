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

if($_SESSION['logged_in'] == 'yes' AND 
	check_url('/content/') != 1){

	//obviously in time all of this could be put into bespoke icons... but i don't think that's worth it just yet
	//users need to be taught what everything is for now...
	//as do pilots
	//and there isn't a universal understanding of what is what just yet for all of our things...
	//perhaps and probably in time - people will be able to turn on and off that option as the request and require
	
	
		//should also be if not in trial and only user but that's fine can also sell from there so leave it for now
		if($_SESSION['dreamboat_crew'] != 'yes'){
			echo "<a class='about_us nav-links hide_for_mobile' style='float:right;padding-top:18px;padding-right:18px;";
			if(check_url('/call/') == 1 OR $_GET['primary_folder'] == 'call'){echo "color:#00ff00;'";}
			else{echo "color: red;font-weight:900;'";}
			echo " title='Go on, call as much as you need to.' href='/call/'>call ".$_SESSION['pilots_first_name']."</a>";		
		}
				
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile' style='float:right;padding-top:18px;";
			if($_SESSION['dreamboat_crew'] == 'yes'){echo "padding-right:18px;";} //because this is the last menu item
			if(check_url('/account/') == 1 OR $_GET['primary_folder'] == 'account'){echo "color:#00ff00;";}
			else{echo "style='color:white;";}
			echo "'";
		echo " title='All your account based fun.' href='/account/'>account</a>";

		if($_SESSION['dreamboat_crew'] == 'yes'){
			
			echo "<a class='about_us nav-links hide_for_mobile' style='float:right;";	
			if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){echo "color:#00ff00;";}
						 else{echo "color: red;";}
			if(isset($_SESSION['viewing_client_id'])){echo "font-weight:800;font-size:40px;padding-top:7px;font-family: Arvo;";}
			else{echo "padding-top:18px;";}
			echo "' title='All those clients, and you.'"; 	
			
			echo "href='";
			if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){
			echo "/components/sub_menus/change.php?page=users&to=regular_users";
			}
			else{echo "/users/";}
			
			echo "'>";
			if(isset($_SESSION['viewing_client_id'])){
				if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){echo "me";}
				else{echo $_SESSION['viewing_client_first_name'];}
				}
			else{echo "users";}
		echo "</a>";	
		}
/*
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_notifications'] == 'on'){echo " alert ";}		
			echo "' style='float:right;padding-top:18px;";
			if(check_url('/notifications/') == 1 OR $_GET['primary_folder'] == 'notifications'){echo "color:#00ff00;";}
		echo "'  href='/notifications/'>notifications</a>";

		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_messages'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/messages/') == 1 OR $_GET['primary_folder'] == 'messages'){echo "color:#00ff00;";}
		echo "' title='Communications central' href='/messages/'>messages</a>";*/


if($_SESSION['viewing_client_mental_health_only'] != 'yes'){
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_results'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/results/') == 1 OR $_GET['primary_folder'] == 'results'){echo "color:#00ff00;";}
		echo "' title='How your results are improving.' href='/results/'>results</a>";	

		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_improvements'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/improvements/') == 1 OR $_GET['primary_folder'] == 'improvements'){echo "color:#00ff00;";}
		echo "' title='Ways to improve your productivity' href='/improvements/'>improvements</a>";

		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_issues'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/issues/') == 1 OR $_GET['primary_folder'] == 'issues'){echo "color:#00ff00;";}
		echo "' title='Issues impacting your productivity' href='/issues/'>issues</a>";	

		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_activities'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/activities/') == 1 OR check_primary_folder('activities')){echo "color:#00ff00;";}
		echo "' title='The things you do on a regular basis in your work role.' href='/activities/'>activities</a>";

		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_wheelhouse'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/wheelhouse/') == 1 OR $_GET['primary_folder'] == 'wheelhouse'){echo "color:#00ff00;";}
		echo "' title='Where you get things done' href='/wheelhouse/'>wheelhouse</a>";	

		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_management'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			//this one has the AND because of /admin/management/ causing a duplicaiton
			//you can't just go with AND $_GET['primary_folder'] because of what happens when adding via /components/items/ etc
			if((check_url('/management/') == 1 OR $_GET['primary_folder'] == 'management')
				AND check_url('/admin/') != 1	){echo "color:#00ff00;";}
		echo "' title='General management issues' href='/management/'>management</a>";	

if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){		
		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_sales'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if((check_url('/sales/') == 1 OR $_GET['primary_folder'] == 'sales')
			AND check_url('/results/') != 1	
			){echo "color:#00ff00;";} //results/sales/ causes a bug here hence two criteria
		echo "' title='Sell, sell, sell!' href='/sales/'>sales</a>";	

		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_marketing'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/marketing/') == 1 OR $_GET['primary_folder'] == 'marketing'){echo "color:#00ff00;";}
		echo "' title='Marketing in all its forms!' href='/marketing/'>marketing</a>";		

		echo "<a class='about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_biz_dev'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/biz_dev/') == 1 OR $_GET['primary_folder'] == 'biz_dev'){echo "color:#00ff00;";}
		echo "' title='All your BD fun!' href='/biz_dev/'>biz dev</a>";	
}		
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_network'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/network/') == 1 OR $_GET['primary_folder'] == 'network'){echo "color:#00ff00;";}
		echo "' title='Your commercial network.' ";
		 	if($_SESSION['user_alerts_network_messages'] == 'on'){echo "href='/network/messages/'";}
		 	else{echo "href='/network/'";}
		echo ">network</a>";
		
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_business'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/business/') == 1 OR $_GET['primary_folder'] == 'business'){echo "color:#00ff00;";}
		echo "' title='The business you work for' href='/business/'>business</a>";		
}
		echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
			if($_SESSION['user_alerts_profile'] == 'on'){echo " alert ";}		
			echo "' style='float:right;";
			if(check_url('/profile/') == 1 OR $_GET['primary_folder'] == 'profile'){echo "color:#00ff00;";}
		echo "' title='All about you.' href='/profile/'>profile</a>";		

					
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
		if(check_url('/content/contact_us/') == 1){echo "color:#00ff00;";}
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








