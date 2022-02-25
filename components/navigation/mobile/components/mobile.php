<?php 
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/navigation/navigation_titles.php";





echo "	<style>		
		.mobile_menu_single_column{
		    margin-top:3%
		    width: 100%;
		    float: left;
		}	
		
		#mobile_menu{
			padding-top:73px;
			
			height:120vh;
		}

		.about_us > a:first-child {padding-top:4vh;}
		
		.about_us.nav-links.wide-nav{padding-top:1.5vh;margin-left:0px;display:block;";
		if($_GET['primary_folder'] == 'content'){echo "font-size:1.5em;";}
		else{echo "font-size:1.2em;";}
			echo"}		
		@media screen and (min-width: 480px){.about_us.nav-links.wide-nav{padding-left:10px;}}
		@media screen and (max-width: 480px){.about_us.nav-links.wide-nav{padding-left:15px;}}

		//.dulled nav styling found on the non_mobile.php page
	</style>";
	
echo "<div id='mobile_menu' style='display:none'>";
	echo "<div class='mobile_menu_single_column'>";	




/*
This is exactly where the mega search must go here too













*/


if($_SESSION['logged_in'] == 'yes' AND 
// (	check_url('/home/') != 1 AND
 //	check_url('/crm/') != 1 AND
// 	check_url('/text/') != 1 AND
// 	check_url('/phone/') != 1)
 check_url('/content/') != 1
 
 ){



	$primary_nav_link = 'profile';
	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_'.$primary_nav_link] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url("/".$primary_nav_link."/") == 1 OR $_GET['primary_folder'] == $primary_nav_link){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title='".$navigation_titles[$primary_nav_link]."'  href='/".$primary_nav_link."/'";
	echo ">".$primary_nav_link."</a>";
	
if($_SESSION['viewing_client_mental_health_only'] != 'yes'){	
	$primary_nav_link = 'business';	
	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_business'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/business/') == 1 OR $_GET['primary_folder'] == 'business'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/business/'";
	echo ">business</a>";	

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_network'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/network/') == 1 OR $_GET['primary_folder'] == 'network'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/network/'";
	echo ">network</a>";	
	 
if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){	
	echo "<a class='about_us nav-links wide-nav";
		if($_SESSION['user_alerts_biz_dev'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/biz_dev/') == 1 OR $_GET['primary_folder'] == 'biz_dev'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title='All your BD fun!'  href='/biz_dev/'";
	echo ">biz dev</a>";

	echo "<a class='about_us nav-links wide-nav";
		if($_SESSION['user_alerts_marketing'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/marketing/') == 1 OR $_GET['primary_folder'] == 'marketing'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title='Marketing in all its forms!'  href='/marketing/'";
	echo ">marketing</a>";
	
	echo "<a class='about_us nav-links wide-nav";
		if($_SESSION['user_alerts_sales'] == 'on'){echo " alert ";}
		echo "' style='";	
		if((check_url('/sales/') == 1 OR $_GET['primary_folder'] == 'sales')
		AND check_url('/results/') != 1	
		){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}//results/sales/ causes a bug here hence two criteria
		echo "' title='Sell, sell, sell!'  href='/sales/'";
	echo ">sales</a>";	
	
}
	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_management'] == 'on'){echo " alert ";}
		echo "' style='";	
		if((check_url('/management/') == 1 OR $_GET['primary_folder'] == 'management')
		AND check_url('/admin/') != 1	
		){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/management/'";
	echo ">management</a>";	

	echo "<a class='about_us nav-links wide-nav";
		if($_SESSION['user_alerts_wheelhouse'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/wheelhouse/') == 1 OR $_GET['primary_folder'] == 'wheelhouse'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/wheelhouse/'";
	echo ">wheelhouse</a>";	

	echo "<a class='about_us nav-links wide-nav";
		if($_SESSION['user_alerts_activities'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/activities/') == 1 OR $_GET['primary_folder'] == 'activities'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/activities/'";
	echo ">activities</a>";

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_issues'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/issues/') == 1 OR $_GET['primary_folder'] == 'issues'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/issues/'";
	echo ">issues</a>";

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_improvements'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/improvements/') == 1 OR $_GET['primary_folder'] == 'improvements'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/improvements/'>improvements</a>";

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_results'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/results/') == 1 OR $_GET['primary_folder'] == 'results'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title='How your productivity is going.'  href='/results/'>results</a>";	
}

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_messages'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/messages/') == 1 OR $_GET['primary_folder'] == 'messages'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' href='/messages/'";
	echo ">messages</a>";	

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_notifications'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/notifications/') == 1 OR $_GET['primary_folder'] == 'notifications'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' href='/notifications/'";
	echo ">notifications</a>";
			
	if($_SESSION['dreamboat_crew'] == 'yes'){
		echo "<a class='about_us nav-links wide-nav' style='";	
		if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}

		else{echo "color:red;";}
		echo "' title='All those clients, and you.'";
		
		echo "href='";
		if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){
		echo "/components/sub_menus/change.php?page=users&to=regular_users";
		}
		else{echo "/users/";}
		echo "'>";
		
		//echo "' title='All those clients, and you.' href='/components/sub_menus/change.php?page=admin&to=list'>";
			if(isset($_SESSION['viewing_client_id'])){
				if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){echo "me";}
				else{echo $_SESSION['viewing_client_first_name'];}}
			else{echo "admin";}
		echo "</a>";		
/*		
	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_admin'] == 'on'){echo " alert ";}
		echo "' 
		title = 'This is just here until we can completely cut it out and completely move it to the bottom of the accordian pages'
		style='";	
		if(check_url('/admin/') == 1 OR $_GET['primary_folder'] == 'admin'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' href='/admin/'";
	echo ">interim admin</a>";	
*/			
	}
	
	echo "<a class='about_us nav-links wide-nav'";
	if(check_url('/account/') == 1 OR $_GET['primary_folder'] == 'account'){echo "style='".$_SESSION['masked_domain_highlight_colour'] ."'";}
	else{echo "style='color: white;'";}
	echo " title='All your account based fun.'  href='/account/'>account</a>";	

	if($_SESSION['dreamboat_crew'] != 'yes'){
		echo "<a class='about_us nav-links wide-nav' style='";
		if(check_url('/call/') == 1 OR $_GET['primary_folder'] == 'call'){echo $_SESSION['masked_domain_highlight_colour'] ."'";}
		else{echo "color: red;font-weight:900;'";}
		echo " title='Go on, call as much as you need to.' href='/call/'>call ".$_SESSION['pilots_first_name']."</a>";		
	}


}
if($_SESSION['logged_in'] != 'yes' OR 
 //	check_url('/home/') == 1 OR
 //	check_url('/crm/') == 1 OR
 //	check_url('/text/') == 1 OR
 //	check_url('/phone/') == 1
 check_url('/content/') == 1
){
	if($_SESSION['logged_in'] == 'yes'){
		echo "<a class='about_us nav-links wide-nav' style='";	
		if(check_url('/content/about/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' href='/content/about/'>about</a>";
	}



	echo "<a class='about_us nav-links wide-nav' style='";	
	if(check_url('/content/contact_us/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/content/contact_us/'>contact</a>";	

	echo "<a class='about_us nav-links wide-nav' style='";	
		if($_SESSION['logged_in'] != 'yes'){	
			if(check_url('/account/security/') == 1){echo $_SESSION['masked_domain_highlight_colour'] .";'";}
			else{echo "color:red;'";}
			echo "href='/account/security/' title='Happy days, let&#39;s sign in'>sign in</a>";
		}
		else{
			echo "color:red;'";
			echo "href='/account/security/' title='Back we go<<<' >go back</a>";	
		}
			
						
}
						
	echo "</div>";					
echo "</div>";	
?>
	