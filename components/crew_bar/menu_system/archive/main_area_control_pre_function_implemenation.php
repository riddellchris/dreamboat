<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/require_functions.php";

//$current_primary_layer   = $_SESSION['admin_principle_menu_layer'];
//$current_secondary_layer = $_SESSION['admin_secondary_menu_layer_for'.$current_primary_layer];


function check_2_crew_bar_layers($primary_layer, $secondary_layer){
	if($_SESSION['admin_principle_menu_layer'] == $primary_layer &&
		$_SESSION['admin_secondary_menu_layer_for'.$current_primary_layer]	== $secondary_layer){
			return true;
	}
	else{return false;}
}



//users
//notes
//interrogation


if($current_primary_layer == 'advice'){	if($current_secondary_layer == "central_advice_page"){require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/advice/central_advice_page/index.php";}}
	
if($current_primary_layer == 'knowledge'){	if($current_secondary_layer == "q_and_a"){				require $_SERVER['DOCUMENT_ROOT']."/knowledge/q_and_a/index.php";	}	
									if($current_secondary_layer == "feed"){					require $_SERVER['DOCUMENT_ROOT']."/knowledge/feed/index.php";		}	
	//								if($current_secondary_layer == "page_specific"){}
}

if($current_primary_layer == 'other'){		if($current_secondary_layer == "business_management"){		require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/pages/".$current_primary_layer."/q_and_a/index.php";}}

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
	*/
}
if($current_primary_layer == 'charts'){
	echo "'uncomparative' charts - RELATED TO THIS PAGE - giving a critical overview of the business, the person and the economy thus driving the most important things to do for each client.<br>
		Ideally these are optimised for everyone based on a level of criticality too<br>
		and 6345.0 Wage Price Index, Australia etc etc ABS DATA";
}
if($current_primary_layer == 'controls'){	if($current_secondary_layer == "all"){				require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/controls/initial_read_me_content.php";}
									if($current_secondary_layer == "page_specific"){	echo "e.g. if 10 entries // allow for better system // more data/ auto coach to be turned on.";}
}
if($current_primary_layer == 'technology'){
	$_GET['primary_folder'] = 'issues';
	//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/two_column_layout/body.php";

//	require $_SERVER['DOCUMENT_ROOT']."/components/lists/1985.php";
}



//just for debugging only really
echo "<div style='bottom:50;position:fixed;color:#cecece;'>";
	echo $_GET['primary_folder'];
	echo "<br>";
	echo $_GET['secondary_folder'];
	echo "<br>";
	echo $_GET['tertiary_folder'];
echo "</div>";

//this will probably be required for when there are longer lists and a scrollbar is required... perhaps earlier in the page somewhere
//require $_SERVER['DOCUMENT_ROOT']."/components/lists/main_sql_query.php";
//number of list items to show
//echo $number_of_results_to_display;