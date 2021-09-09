<?php
if(!isset($_SESSION)){session_start();}

//so let's start by setting up the two most important arrays that are really going to see us through from start to finish here
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/points_array/set.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/relationships_array/set.php";
///\/\/\/\ These will carry the data through every step of the preparatory phase and be manipulated as we go


//this sets the defaults for the map views that are critical to define now for the script 
//BUT are also used later in the selects to display those defaults if none have already been defined.
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/set_defaults_for_the_selects.php";


//this gets out the nodes that are essential to display in this view
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/add_critical_nodes_for_this_view.php";

/*
CR 21.02.14 We are actually going to skip over this for now - it seems really unessecary at the moment
//then we filter if needed by those which in relationships or not 
	//IFF and only IFF required
if(	$_SESSION['current_connection_control'] == 'connected_only' OR
	$_SESSION['current_connection_control'] == 'unconnected_only'){	

	//strip those which are not required	
	//critically these must be connected with each other 
		//because then we add the issues later
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/adjust_depending_on_edge_status.php"; 

}
*/

//then we tackle how to handle and display issues related to the nodes we have left
//if related issues off then we do nothing
if(	$_SESSION['current_issues_setting'] == 'issues_on' OR 
	$_SESSION['current_issues_setting'] == 'issues_only'){	
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/adjust_depending_on_issue_display.php"; 	
	}

//now at this point we have all the nodes we need and all the issues
//so before we press on really nail down the chart display details let's pull out what relationships exist and build the relationships array
//as we are doing that we should really also add to the points array a number of relationships to display count as well
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/relationships_array/build.php";



require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/connect_points_to_x_and_y.php"; //depending on the view that is chosen
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/pre_data_table_script.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/create_data_table.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/build_chart_options.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/post_options_script.php";   
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/tooltip_script.php"; 
echo "</script>";   
?>
    
