<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/require_functions.php";



$current_primary_layer   = $_SESSION['admin_principle_menu_layer'];
$current_secondary_layer = $_SESSION['admin_secondary_menu_layer_for'.$current_primary_layer];

function check_2_crew_bar_layers($primary_layer, $secondary_layer){
//debugging only
//	echo $primary_layer.",".$_SESSION['admin_principle_menu_layer'].",".$secondary_layer.",".$_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']]."<br>";

	if(	$primary_layer 		== $_SESSION['admin_principle_menu_layer'] &&
		$secondary_layer 	== $_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']]){	return true;	}
	else{	return false;}
}



//users

//notes

//interrogation

if(check_2_crew_bar_layers('advice',        'advice')){         require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/".$current_primary_layer."/".$current_secondary_layer."/index.php";}

if(check_2_crew_bar_layers('knowledge',     'q_and_a')){        require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/".$current_primary_layer."/".$current_secondary_layer."/index.php";}
if(check_2_crew_bar_layers('knowledge',     'feed')){           require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/".$current_primary_layer."/".$current_secondary_layer."/index.php";}
//if(check_2_crew_bar_layers('knowledge',   'page_specific')){  ;}

/*
if($current_primary_layer == 'comparison'){
	//compare data for this page

	/*
	if($current_secondary_layer == "time_allocations_to_income_improvements"){
	//CR 20.07.20 This should really only be for when are on some page "results/five years or similar... leave it for now- it's the only test we have so let's not overcomplicate the shit out of it
		require $_SERVER['DOCUMENT_ROOT']."/comparison/tests/time_allocation_to_income_improvement/form.php";
	}
	if($current_secondary_layer == "time_allocations_per_activity_group"){
		require $_SERVER['DOCUMENT_ROOT']."/comparison/tests/time_allocations_per_activity_group/form.php";
	}	
	if($current_secondary_layer == "time_efficiency_and_effectiveness"){
		require $_SERVER['DOCUMENT_ROOT']."/comparison/tests/time_efficiency_and_effectiveness/form.php";
	}	

}*/

if(check_2_crew_bar_layers('controls',     'all')){              require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/controls/initial_read_me_content.php";}
if(check_2_crew_bar_layers('controls',     'page_specific')){    echo "e.g. if 10 entries // allow for better system // more data/ auto coach to be turned on.";}

/*
if(check_2_crew_bar_layers('technology',   'issues')){       	//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/two_column_layout/body.php";
                                                                //require $_SERVER['DOCUMENT_ROOT']."/components/lists/1985.php";
                                                                }
*/

if(check_2_crew_bar_layers('other',         'business_management')){ 
	
//	echo "hhi";
//	exit();
	 require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/".$current_primary_layer."/".$current_secondary_layer."/index.php";}


//just for debugging only really
/*
echo "<div style='bottom:50;position:fixed;color:#cecece;'>";
	echo $_GET['primary_folder'];
	echo "<br>";
	echo $_GET['secondary_folder'];
	echo "<br>";
	echo $_GET['tertiary_folder'];
echo "</div>";
*/

//this will probably be required for when there are longer lists and a scrollbar is required... perhaps earlier in the page somewhere
//require $_SERVER['DOCUMENT_ROOT']."/components/lists/main_sql_query.php";
//number of list items to show
//echo $number_of_results_to_display;