<?php 
if(!isset($_SESSION)){session_start();} 

if($_SESSION['this_page'] != $_SERVER['REQUEST_URI']){
	//the order here is really important
	$_SESSION['last_page_used'] = $_SESSION['this_page'];
	$_SESSION['this_page'] = $_SERVER['REQUEST_URI'];
	}

require $_SERVER['DOCUMENT_ROOT']."/components/functions/required_functions.php";

if(primary_folders_name() != 'components'){
	$_GET['primary_folder'] 	= primary_folders_name();
	$_GET['secondary_folder'] 	= secondary_folders_name();
	$_GET['item_id'] 	= item_id_from_url();
	}
	
$_GET['tertiary_folder'] 	= tertiary_folders_name();	//this line has probably inaccurately been used as a test - with 'items'
$_SESSION['quaternary_folder'] 	= quaternary_folders_name();	//this isn't really used at all yet
$_SESSION['final_file_name'] 	= final_file_name();		//neither is this


require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/alert_check_and_update.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/html/index.php"; 
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/index.php"; 

?>


	<body >

<?php	
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes'){
	echo "<style>
			@media screen and (max-width: 1320px) {.pilot_sides {display:none;} 	.anti_pilot_sides{width:100%;}}
			@media screen and (min-width: 1320px) and (max-height: 1150px){.pilot_sides {display:none;} 	.anti_pilot_sides{width:100%;}}
			@media screen and (min-width: 1320px) and (min-height: 1150px){.pilot_sides {display:block;} 	.anti_pilot_sides{width:60%;float:left;}}
		</style>";

//this is when technology comes back in becaue the colors are correct
//	echo "<div class='pilot_sides' style='width:20%;float: left;background-image: linear-gradient(to bottom, #34e349 0% ,#bb8aff 60%,#9a8aff 100%);height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
	echo "<div class='pilot_sides' style='width:20%;float: left;background-image: linear-gradient(to bottom, #34e349 0% ,#00a113 100%);height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
		require $_SERVER['DOCUMENT_ROOT']."/components/performance/display.php";
	echo"</div>";
	
	
	

	echo "<div class='pilot_sides'  style='width:20%;float: right;background-color: #f75b52;height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
		if(	$_SESSION['primary_folder_knowledgebase_set_for'] 	!= $_GET['primary_folder']		OR
			$_SESSION['secondary_folder_knowledgebase_set_for'] 	!= $_GET['secondary_folder']	OR
			$_SESSION['tertiary_folder_knowledgebase_set_for'] 	!= $_GET['tertiary_folder']
			){			
				unset($_SESSION['primary_folder_knowledgebase_set_for']);
				unset($_SESSION['secondary_folder_knowledgebase_set_for']);			
				unset($_SESSION['tertiary_folder_knowledgebase_set_for']);			
				unset($_SESSION['displaying_knowledgebase_category']);			
				unset($_SESSION['displaying_knowledgebase_title']);					
			}


		require $_SERVER['DOCUMENT_ROOT']."/components/knowledgebase/display.php";
		if($_SESSION['viewing_client_id'] != $_SESSION['user_id']){
			require $_SERVER['DOCUMENT_ROOT']."/components/notes/display.php";
			}

	echo"</div>";	
}
?>
	
	
		<div 
			<?php 
				echo "class='big-div";
					if($_SESSION['dreamboat_crew'] == 'yes'  && $_SESSION['show_as_dreamboat_crew'] == 'yes'){echo " anti_pilot_sides ";}
				echo "'>";
			?> 
		
		
		
		
		
		
		<style>
					
					
			/* Style the hamburger menu */
			.nav-div a.icon { 
			  display: block;
			  position: absolute;
			  right: 0;
			  top: 0;
			  z-index:101;
			}
			@media screen and (max-width: 480px)  and (max-height: 812px) {#mobile_menu_icon{padding-top:4px;}}
			@media screen and (max-width: 480px)  and (min-height: 812px) {#mobile_menu_icon{padding-top:4px;}}
			@media screen and (min-width: 480px)  and (min-height: 812px) {#mobile_menu_icon{padding-top:9px;}}
			@media screen and (min-width: 480px)  and (max-height: 812px) {#mobile_menu_icon{padding-top:9px;}}
			
			#mobile_menu_icon:hover{
			color:#00ff00;
			}
			.mobile_menu_red{
			color:#00ff00;
			}
			.mobile_menu_white{
			color:#fff;
			}		
			


			//this is where you alter the split in mobile vs non-mobile menus - currently it is 1550px
			@media screen and (max-width: 1550px) {
				.hide_for_mobile {display:none;}
				.menu-div{display:none;}
				.fa{display:inline-block;}
			}
			@media screen and (min-width: 1550px) {
				.hide_for_mobile {display:block;}
				.mobile_menu{display:none;}
			}
			
			@media screen and (min-width: 1550px)  and (min-height: 812px){
			.menu-div{text-align:center;background-color:#4332ff;padding:6px;z-index:100px;}
			.mobile_menu{display:none;}
			.fa{display:none;}
			}
			@media screen and (min-width: 1550px) and (min-height: 812px){.big-menu-icons {display:inline-block;}}
			@media screen and (min-width: 1550px) and (max-height: 812px){.big-menu-icons {display:none;}}

			
			.nav-div.shadow{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
		</style>
		
		
	<div id='main_top_nav_bar' 
		<?php 
			echo " class='nav-div shadow ";
				if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes'){echo " anti_pilot_sides ";}
			echo "'";
			//if($_SESSION['logged_in'] != 'yes'){echo "style='text-align:center;'";}
			echo "style='text-align:center;'";
			echo ">";
		?>
<?php
echo"		
<style>
	.dreamboat-logo{
	text-decoration:none;
	font-family: Helvetica;
	font-weight:700;
	text-transform:uppercase;
	color:#fff;
	letter-spacing: 0.1em;";
	//if($_SESSION['logged_in'] == 'yes'){echo "float:left;";}else{echo "float:none;";}
	echo "float:left;";
echo "	}
	.dreamboat-logo:hover{
	color:#00ff00;
	}
	@media screen and (min-width: 480px) {
		.dreamboat-logo{
		font-size:42px;";
	//if($_SESSION['logged_in'] == 'yes'){echo "padding-left:18px;";}else{echo "padding-left:0px;";}
	echo "padding-left:18px;";
		
echo "		}
	}
	@media screen and (max-width: 480px) {
		.dreamboat-logo{
		font-size:32px;";
		
	//if($_SESSION['logged_in'] == 'yes'){echo "padding-left:10px;";}else{echo "padding-left:0px;";}
	echo "padding-left:10px;";
echo "		}
	}
</style>";			
?>		
		
		<div class='logo-div'>	
		<?php
			echo "<a class='dreamboat-logo' href='/'>DREAMBOAT</a>";
			//this is the file that holds the mobile icon - don't delete so can always easily find it to be honest
			//require_once $_SERVER['DOCUMENT_ROOT']."/components/design/spacing/lines_and_menus.php";
			require $_SERVER['DOCUMENT_ROOT']."/components/navigation/non_mobile.php";
		?>
		</div>
	</div>
<?php 


require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile_menu_javascript.php";
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/adjustable_top_spacer.php"; //this enusres that the 'page' starts below the nav bar
//require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/pilot_created_notification_management.php";  //not needed now
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/index.php";
?>	


	

				
		

