<?php 
//session start code is just few rows down on this page only

if($_SERVER['SERVER_PORT'] == 8888){
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}
else{
	//turn off all errors for live
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(0);
}

if(!isset($_SESSION)){session_start();}


if(!isset($_SESSION['logged_in'])){		$_SESSION['logged_in'] = 'no';}
if(!isset($_SESSION['dreamboat_crew'])){	$_SESSION['dreamboat_crew'] = 'no';}
if(!isset($_SESSION['dreamboat_developer'])){	$_SESSION['dreamboat_developer'] = 'no';}







//development assessments
require $_SERVER['DOCUMENT_ROOT']."/components/functions/connect_to_database.php";	//20.07.08 CR Not sure how much it is used right now 
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/analytics/update_page_load_number.php";
	//function per file usage plays a part here
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/analytics/store_file_usage.php";
//more to build
	//track class usage
	//find and indenfity duplicated styling notes to clean up "style=''" usages within common classes
	//build a straight cleanup process for where styling actually needs to be
//ideally we will pull out and update our own comments too to build a unique develoment process. //https://stackoverflow.com/questions/3228978/php-read-file-comments-not-file-content-forgotten
	//someone with better software/dev ops knowledge will probably be able to nail this though



//folder calculations alerts & warnings



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/initial_folder_settings.php";
if(isset($_SESSION['logged_in'])){
	if($_SESSION['logged_in'] == 'yes'){
		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/demos_on_check.php";
		require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/alert_check_and_update.php";
		require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/artifical_intelligence/calculations_and_warnings.php";

		if($_GET['primary_folder'] == 'results'){
			require $_SERVER['DOCUMENT_ROOT']."/results/ensure_initialisation.php";

		}


	}
}




//ensure initialisation of the navigation menu and settings if there isn't the / an appropriate setup for this user.
	//this only matters if logged in
	if(isset($_SESSION['logged_in'])){
		if($_SESSION['logged_in'] == 'yes'){
			//check against the most most critical user
			//if they have the default pages turned on or not
			//the same applies when it comes to allowing multiple users to figure this stuff out
				//what controls are we going to apply there?
					//I think for now it doesn't matter
					//anyone with multi user access can have total access across everything frankly
					//Just let that run for now
					//I don't need to control that

					//therefore:
						//


		}
	}



//actual html outputs
require $_SERVER['DOCUMENT_ROOT']."/components/whitelabeling/style_changes.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/html/index.php"; 
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/index.php"; //this is where all the google chart scripts are for the main body of the platform






//CR 03.08.20
//unset the selected prompts and text if page has changed... 
//this should be adjusted to only use $_GET variables NOT session variables...
//not for today

if(	isset($_SESSION['selected_prompt_primary_folder']) && 
	isset($_SESSION['selected_prompt_secondary_folder']) && 
	isset($_SESSION['selected_prompt_tertiary_folder'])){
	if(	$_SESSION['selected_prompt_primary_folder'] 	!= $_GET['primary_folder']  	OR
		$_SESSION['selected_prompt_secondary_folder'] 	!= $_GET['secondary_folder'] 	OR
		$_SESSION['selected_prompt_tertiary_folder'] 	!= $_GET['tertiary_folder']){	unset($_SESSION['selected_prompt_text']);
																						unset($_SESSION['selected_prompt_id']);
																						unset($_SESSION['selected_prompt_primary_folder']);
																						unset($_SESSION['selected_prompt_secondary_folder']);
																						unset($_SESSION['selected_prompt_tertiary_folder']);
		}
	}

	
$scrollbar_for = "body";
require $_SERVER['DOCUMENT_ROOT']."/components/design/scrollbar_design/versions/2.1.php";

$scroll_defined_as = '';
//if(	check_primary_folder('knowledgebase')){ 															$scroll_defined_as = 'on';}
if(isset($_GET['tertiary_folder'])){
	if($_GET['primary_folder'] == 'account'	){	if($_GET['tertiary_folder'] 	!= 'default_pages'	){	$scroll_defined_as = 'off';	}}
	if($_GET['primary_folder'] == 'account'	){ 	if($_GET['tertiary_folder'] 	== 'default_pages'	){	$scroll_defined_as = 'on';	}}
	if($_GET['primary_folder'] == 'account'	){ 	if($_GET['tertiary_folder'] 	== 'work_schedule'	){	$scroll_defined_as = 'on';	}}
}
if($_GET['primary_folder'] == 'map' 	){	if($_GET['secondary_folder'] 	== 'views'			){	$scroll_defined_as = 'off';	}} //i suspect that discussion should probably occur here and therefore the map probably should be scrollable but really it would be better to keep it bounded




if($_GET['primary_folder'] == 'map'){
	echo "
		<style>
		#body:fullscreen 		       {  		overflow: scroll; }
		</style>
	";
}
echo "
<body id='body' name='top ";
		if(	$_GET['primary_folder'] == 'slideshows' OR 
			$_GET['secondary_folder'] == 'letter' 

				){ echo " mobile_scrolling_for_slideshow ";}	

	echo "'";
if($scroll_defined_as == 'on'){		echo " style = 'overflow-y: scroll;' ";}//this ensures that after one "opening" that it doesn't jar with the scrollbar suddenly appearing	
if($scroll_defined_as == 'off'){	echo " style = 'overflow-y: hidden;' ";}


//anything else will just be defined as acceptable
echo "	>";

//we want scroll to be on for the slideshow when under a certain number of pixels wide.
//therefore we create a new style class - which shouldn't really affect the scrolling stuff above as it's not really a problem right now
if($_GET['primary_folder'] == 'slideshows' OR 
			$_GET['secondary_folder'] == 'letter' ){
	echo "
		<style>";
			//this really should be all better based on a better $mobile_split but not yet

echo "
			@media screen and (max-width: 930px) {	.mobile_scrolling_for_slideshow{ {overflow-y: auto;}}
			@media screen and (min-width: 930px) {	.mobile_scrolling_for_slideshow{ {overflow-y: hidden;}}	




			}
		</style>	
	";
}
//this holds all the styling required for all segments
//when $_SESSION['dreamboat_developer'] including a link to the __FILE__ name would be awesome - so awesome
require $_SERVER['DOCUMENT_ROOT']."/components/styling/load_required.php";

$checked_background = 'no';
if(isset($_SESSION['display_map_diagnostics']) && isset($_GET['tertiary_folder'])){
	if($_SESSION['display_map_diagnostics'] == 'off' && $_GET['primary_folder'] == 'map' && $_GET['secondary_folder'] == 'personal' && $_GET['tertiary_folder'] == 'main_view'){	$checked_background = 'yes';}
	if($_SESSION['display_map_diagnostics'] == 'off' && $_GET['primary_folder'] == 'map' && $_GET['secondary_folder'] == 'business' && $_GET['tertiary_folder'] == 'main_view'){	$checked_background = 'yes';}
	if($_SESSION['display_map_diagnostics'] == 'off' && $_GET['primary_folder'] == 'map' && $_GET['secondary_folder'] == 'economy'){	$checked_background = 'yes';}
}



if($checked_background == 'yes'){
/*

.big-div{
  background:
    repeating-linear-gradient(to right,
        transparent 0  calc(100px - 2px),
        #e3e3e3 calc(100px - 2px) 100px),
        
    repeating-linear-gradient(to bottom,
        transparent 0 calc(100px - 2px),
        #e3e3e3 calc(100px - 2px) 100px)     
    white;
}
*/

$grid_line_color = '#f2f2f2';
echo "
<style>
#body{
  background:
    repeating-linear-gradient(to right,
        transparent 0  calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px),
        
    repeating-linear-gradient(to bottom,
        transparent 0 calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px)     
    white;
}
#body:fullscreen {
  background:
    repeating-linear-gradient(to right,
        transparent 0  calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px),
        
    repeating-linear-gradient(to bottom,
        transparent 0 calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px)     
    white;
}
.big-div{background-color: transparent;}

#body:fullscreen #map_engine_sliding_container{
  background:
    repeating-linear-gradient(to right,
        transparent 0  calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px),
        
    repeating-linear-gradient(to bottom,
        transparent 0 calc(100px - 2px),
        ".$grid_line_color." calc(100px - 2px) 100px)     
    white;
}
</style>
";
}
else{
	echo "
<style>	
	.big-div{background-color: white;}
</style>	
	";
}




echo "
	<div class='big-div";
		if($_GET['primary_folder'] == 'slideshows' OR 
			$_GET['secondary_folder'] == 'letter' ){ echo " mobile_scrolling_for_slideshow ";}			
	echo "'>";	

?>




		<style>
						
			<?php
			if(!isset($_SESSION)){session_start();}

			if($_GET['primary_folder'] == 'slideshows' OR 
			$_GET['secondary_folder'] == 'letter' ){
				echo ".big-div{
							//	background-image: url('/components/design/images/Dreamboat_Pattern_color.png');
							//	opacity: 0.2;
								}";
			}





			//THIS JUST DEFINES AT WHAT PIXEL WIDTH THE MOBILE MENU IS TRIGGERED
			if(	$_SESSION['logged_in']	== 'yes' && 
				$_GET['primary_folder'] != 'content'
				
				){
													if($_SESSION['dreamboat_crew'] == 'yes'){	$mobile_split = 1850;}
													else{					 					$mobile_split = 1960;}
													}
			else{																				$mobile_split = 1030;}		
				echo "
			@media screen and (max-width: ".$mobile_split."px) {	.hide_for_mobile {display:none;}	#mobile_menu_icon{display:inline-block;}		.menu-div{display:none;}}
			@media screen and (min-width: ".$mobile_split."px) {	.hide_for_mobile {display:block;}	#mobile_menu_icon{display:none;}				.mobile_menu{display:none;}	}";

			?>	
			//old heavy shadow
			//.nav-div.shadow{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.nav-div.shadow{box-shadow: 0 4px 8px 0px rgb(0 0 0 / 13%);}
		</style>


	<?php	

if(!isset($_GET['tertiary_folder'])){$_GET['tertiary_folder'] = '';}

	if(	$_GET['primary_folder'] != 'slideshows' AND 
		$_GET['secondary_folder'] != 'letter' AND
		$_GET['tertiary_folder'] != 'print' 	
			){	



			echo "
			<div id='main_top_nav_bar' class='nav-div shadow' 
			";
				echo "style='";
				//if(check_primary_folder('home')){echo "background-color:transparent;box-shadow:unset;";}		
				echo "text-align:center;z-index: 2000;'>";

                require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/dreamboat_logo/display.php";
				require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/live_or_not_reminder.php";

				if($_SESSION['logged_in'] == 'yes'){
					require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/what_to_display.php";		
				}

				//if($_SESSION['logged_in'] == 'yes'						){	
				require $_SERVER['DOCUMENT_ROOT']."/components/navigation/non_mobile/display.php"; 
				//}
				//this is the file that holds the mobile icon - don't delete so can always easily find it to be honest					
				//if($_SESSION['logged_in'] == 'yes' OR $_GET['primary_folder'] == 'knowledgebase'){	
				if($_GET['primary_folder'] != 'home' && $_GET['primary_folder'] != 'slideshows'  && $_GET['secondary_folder'] != 'letter' 
				
				){
				require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile_hamburger_icon.php"; 
				}
				//}
		echo "</div>";
	}

		require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile_menu_javascript.php";
		//we use the knowledgebase menu if that is required
		//it has the #mobile_menu_icon
		if($_GET['primary_folder'] != 'knowledgebase'){require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile/display.php";}



	if($_GET['primary_folder'] != 'slideshows' AND 
			$_GET['secondary_folder'] != 'letter' AND
			$_GET['tertiary_folder'] != 'print' 	
			
			){	
		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/adjustable_top_spacer.php"; //this enusres that the 'page' starts below the nav bar
	}
	
		//CR 3.8.20
		//off for now until we actually want to send them emails through this...
		//AND until the bottom section doesn't kill the whole thing by popping up
		//require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/pilot_created_notification_management.php";  
		
		
		
		//CR 20.09.07 Cuts out displaying the menu when it's in these folders... this isn't ideal but allows for the basic $_GET folder assessments, alterations and management to function right now
		if(	$_GET['primary_folder'] == 'knowledgebase' 		OR
			($_GET['primary_folder'] == 'support' AND $_SESSION['logged_in'] != 'yes') OR
			$_GET['tertiary_folder'] == 'print'
			){$sub_menus = 'off';}
		else{$sub_menus = 'on';}
		
		if($sub_menus == 'on'){	require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/index.php";}


		if(		$_GET['primary_folder'] 	== 'sales' 				
				//&&
				//$_GET['tertiary_folder'] 	== 'top_10_client_share'
				){	
			require $_SERVER['DOCUMENT_ROOT']."/map/components/warnings/styling.php";	
			if(isset($_GET['tertiary_folder'])){
				echo "<div id='warnings_box'>";
					if($_GET['tertiary_folder'] == 'top_10_client_share'){	
						if($_SESSION['sales']['insights']['top_10_client_share']['specific_view'] == 'info'){				echo "General info";}
						if($_SESSION['sales']['insights']['top_10_client_share']['specific_view'] == 'designs'){			echo "Current designs";}
						if($_SESSION['sales']['insights']['top_10_client_share']['specific_view'] == 'under_construction'){	echo "Under Construction";}
						if($_SESSION['sales']['insights']['top_10_client_share']['specific_view'] == 'demo_data'){			echo "Demo data";}
						if($_SESSION['sales']['insights']['top_10_client_share']['specific_view'] == 'live_data'){			echo "Live data";}
					}
					if($_GET['tertiary_folder'] == 'new_client_share'){	
						if($_SESSION['sales']['insights']['new_client_share']['specific_view'] == 'info'){					echo "General info";}
						if($_SESSION['sales']['insights']['new_client_share']['specific_view'] == 'designs'){				echo "Current designs";}
						if($_SESSION['sales']['insights']['new_client_share']['specific_view'] == 'under_construction'){	echo "Under Construction";}
						if($_SESSION['sales']['insights']['new_client_share']['specific_view'] == 'demo_data'){				echo "Demo data";}
						if($_SESSION['sales']['insights']['new_client_share']['specific_view'] == 'live_data'){				echo "Live data";}
					}
					if($_GET['tertiary_folder'] == 'product_share'){	
						if($_SESSION['sales']['insights']['product_share']['specific_view'] == 'info'){					echo "General info";}
						if($_SESSION['sales']['insights']['product_share']['specific_view'] == 'designs'){				echo "Current designs";}
						if($_SESSION['sales']['insights']['product_share']['specific_view'] == 'under_construction'){	echo "Under Construction";}
						if($_SESSION['sales']['insights']['product_share']['specific_view'] == 'demo_data'){			echo "Demo data";}
						if($_SESSION['sales']['insights']['product_share']['specific_view'] == 'live_data'){			echo "Live data";}
					}
					if($_GET['tertiary_folder'] == 'client_product_matrix'){	
						if($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'] == 'info'){				echo "General info";}
						if($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'] == 'designs'){			echo "Current designs";}
						if($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'] == 'under_construction'){	echo "Under Construction";}
						if($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'] == 'demo_data'){			echo "Demo data";}
						if($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'] == 'live_data'){			echo "Live data";}
					}
				echo "</div>";
			}
		}

		?>
