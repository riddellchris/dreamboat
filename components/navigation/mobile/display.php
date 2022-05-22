<?php 
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/navigation/navigation_titles.php";





echo "	<style>		
		.mobile_menu_single_column{
		    margin-top:3%
		    width: 100%;
		    float: left;
		}	
		
		#mobile_menu{ ";

if($_GET['primary_folder'] != 'slideshows' AND $_GET['secondary_folder'] != 'letter' ){echo "padding-top:73px;";}

echo "		
			
			
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
CR 20.10.31
This is exactly where the mega search must go here too
*/


if(	$_SESSION['logged_in'] == 'yes'	AND 
 	check_url('/snapshot/') != 1 	AND
 	check_url('/problem/') 	!= 1 	AND
 	check_url('/solution/') != 1 	AND
 	check_url('/solutions/') != 1 	AND 	
 	check_url('/processes/')	!= 1 	AND
	check_url('/contact_us/') != 1){
	
	
		if(isset($_SESSION['dreamboat_crew'])){    	
			if($_SESSION['dreamboat_crew'] == 'yes'){
				require_file("/components/navigation/mobile/components/users.php");		
			//	require_file("/components/navigation/mobile/components/notes.php");
			//This really must be turned off until we are ready.
			//This will require far more cash to completely put together and achieve
			
			}
		}

		if(isset($_SESSION['multi_user'])){    		
			if($_SESSION['multi_user'] == 'yes'){
				require_file("/components/navigation/mobile/components/users.php");		
		}
		}


		$nav_name = "data"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
		$nav_name = "walkthroughs"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
		$nav_name = "map"; 				if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
		$nav_name = "highlights"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}			
		$nav_name = "overview"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}		
		$nav_name = "insights"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
		$nav_name = "profile";  		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}			

		//require_file("/components/navigation/mobile/components/profile.php");
	
		//if($_SESSION['viewing_client_mental_health_only'] != 'yes'){	
			$nav_name = "business"; if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
			$nav_name = "network"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}		

			//require_file("/components/navigation/mobile/components/business.php");
			//require_file("/components/navigation/mobile/components/network.php");
	
			if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){	
				$nav_name = "biz_dev"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "marketing"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}	
				$nav_name = "sales"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}				
				//require_file("/components/navigation/mobile/components/biz_dev.php");
				//require_file("/components/navigation/mobile/components/marketing.php");			
				//require_file("/components/navigation/mobile/components/sales.php");		
				}

				$nav_name = "management"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "wheelhouse"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}	
				$nav_name = "activities"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "time"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}				
				$nav_name = "issues"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "upgrades"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}	
				$nav_name = "financials"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "results"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
				$nav_name = "reporting"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}
		//require_file("/components/navigation/mobile/components/management.php");
		//require_file("/components/navigation/mobile/components/wheelhouse.php");
		//require_file("/components/navigation/mobile/components/activities.php");
		//require_file("/components/navigation/mobile/components/issues.php");
		//require_file("/components/navigation/mobile/components/upgrades.php");	
		//require_file("/components/navigation/mobile/components/results.php");
		//}

		//require_file("/components/navigation/mobile/components/messages.php");
		//require_file("/components/navigation/mobile/components/notifications.php");
		$nav_name = "messages"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}	
		$nav_name = "notifications"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){require_file("/components/navigation/mobile/components/".$nav_name.".php");}				

		
		echo "<a class='about_us nav-links wide-nav'";
		if(check_url('/account/') == 1 OR $_GET['primary_folder'] == 'account'){echo "style='color:".$_SESSION['masked_domain_highlight_colour'] .";'";}
		else{echo "style='color: white;'";}
		echo " title='All your account based fun.'  href='/account/'>account</a>";	
	
		if($_SESSION['dreamboat_crew'] != 'yes'){
			echo "<a class='about_us nav-links wide-nav' style='";
			if(check_url('/call/') == 1 OR $_GET['primary_folder'] == 'call'){echo "color:".$_SESSION['masked_domain_highlight_colour'] .";'";}
			else{echo "color: red;font-weight:900;'";}
			echo " title='Go on, call as much as you need to.' href='/call/'>call ".$_SESSION['pilots_first_name']."</a>";		
		}
	}
	
	
	
	
if(	//$_SESSION['logged_in'] 		!= 'yes' OR 
	check_url('/snapshot/') 	== 1 	OR
	check_url('/problem/') 		== 1 	OR
	check_url('/solution/') 	== 1	OR
	check_url('/processes/') 	== 1 	OR
	check_url('/slideshows/') 	== 1 	OR
	check_url('/letter/') 	== 1 	
	//check_url('/contact_us/') 	== 1
	){

	if(check_url('/home/') 	!= 1 	){


				echo "<a class='about_us nav-links wide-nav' style='";	
					if($_SESSION['logged_in'] != 'yes'){	
						if(check_url('/account/security/') == 1){echo "color:".$_SESSION['masked_domain_highlight_colour'] .";'";}
						else{echo "color:red;'";}
						echo "href='/account/security/' title='Happy days, let&#39;s log in'>login</a>";
					}
					else{
						echo "color:red;'";
						echo "href='/account/security/' title='Back we go<<<' >go back</a>";	
					}

			/*	
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/snapshot/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/snapshot/'>snapshot</a>";
			*/
			
			
			
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/knowledgebase/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/knowledgebase/'>knowledgebase</a>";
			/*	
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/solution/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/solution/'>solution</a>";
			*/
			
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/support/contact_us/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/support/contact_us/'>contact</a>";
		}				
			
			/*
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/processes/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/processes/'>processes</a>";
			
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/impact/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/impact/'>impact</a>";
			*/
			
				echo "<a class='about_us nav-links wide-nav' style='";	
				if(check_url('/legal/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
				echo "' title=''  href='/legal/'>legal</a>";	
			

	
						
}
						
	echo "</div>";					
echo "</div>";	
?>
	