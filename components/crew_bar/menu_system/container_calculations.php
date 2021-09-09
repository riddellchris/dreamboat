<?php
if(!isset($_SESSION)){session_start();}

//this is here and must remain here because of the AJAX usage of this page.
//it won't duplicate the use of the system on a first run but allows all functions to be used as appropraite on any AJAX query.
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/required.php";

if(!isset($_SESSION['admin_principle_menu_layer'])){$_SESSION['admin_principle_menu_layer'] = 'notes';}

if(!isset($_GET['change_to'])){$_GET['change_to'] = "null";}
if($_GET['change_to'] == 'primary_layer' && isset($_GET['to'])){
	if($_GET['to'] != 'closed'){
		$_SESSION['admin_principle_menu_layer'] = $_GET['to'];
		$_SESSION['admin_open_or_closed'] = 'open';
	}
	else{	
		unset($_SESSION['admin_principle_menu_layer']);
		$_SESSION['admin_open_or_closed'] = 'closed';
	}
}
if($_GET['change_to'] == 'secondary_layer' && isset($_GET['to'])){
		$_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']] = $_GET['to'];
		$_SESSION['admin_open_or_closed'] = 'open';
}
if($_GET['change_to'] == 'tertiary_layer' && isset($_GET['to'])){
		$_SESSION['admin_tertiary_menu_layer_for'.$_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']]] = $_GET['to'];
		$_SESSION['admin_open_or_closed'] = 'open';
}





echo "
<style>
#admin_container{
    position: 		fixed;
    width:  		100%;
    background-color:	#ffdbdb;
    font-family: Comfortaa; ";
if($_SESSION['admin_open_or_closed'] == 'open'  ){echo "bottom:0; 	";
							if(count($top_sub_sub_menu_options) != 0){echo "height: 80vh;";}
							else{echo "height:	90vh;";}
						}
if($_SESSION['admin_open_or_closed'] == 'closed'){echo "bottom:50;	height:	42px;";}
echo "
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {#admin_container{display: block;}}
@media only screen and (max-width: 600px) {#admin_container{display: none;}}

</style>
";

echo "<div id='admin_container' style='z-index: 2000;'>";
//echo "<div id='admin_principle_menu_category_tabs'>";
	//these must adjust up and down as required too using javascript
	//or to be frank they can be completed with AJAX as well just but changing the display..... let's go drive now and just ponder that for a second.
	//i suspect a test is needed
	//that's the first thing when 8i get back
	//require $_SERVER['DOCUMENT_ROOT']."/dreamboat_crew/components/menus/principle_menu_display.php";
	//if one of these changes then we adjust both the sub menu AND the main_display_area
//echo "</div>";

//if($_SESSION['admin_open_or_closed'] == 'closed'	){$admin_display_class = " closed_admin ";}
//if($_SESSION['admin_open_or_closed'] == 'open'		){$admin_display_class = " open_admin ";}	



/*
echo "<div id='admin_secondary_menu_options' class='".$admin_display_class."'>";
	require $_SERVER['DOCUMENT_ROOT']."/dreamboat_crew/components/menus/secondary_menu_display.php";
	//if one of these changes then we only adjust the main display area
echo "</div>";	
*/


echo "<div id='admin_main_display_area'";
// class='".$admin_display_class."'
//if($_SESSION['admin_open_or_closed'] == 'closed'	){echo "style='display: none;'";}
//if($_SESSION['admin_open_or_closed'] == 'open'		){echo "style='display: block;'";}
echo ">";
	require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/menu_system/principle_menu_display.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/menu_system/secondary_menu_display.php";	
	require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/menu_system/tertiary_menu_display.php";		
	
	
	//these must adjust up and down as required too using javascript
	require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/menu_system/main_area_control.php";
	//
echo "</div>";	
echo "</div>";	
