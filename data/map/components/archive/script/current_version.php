<?php
if(!isset($_SESSION)){session_start();}

//this sets the defaults for the map views that are critical to define now for the script 
//BUT are also used later in the selects to display those defaults if none have already been defined.
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/display_options/set_select_defaults.php";


//so let's start by setting up the two most important arrays that are really going to see us through from start to finish here
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/data_manipulation/arrays/points/set.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/data_manipulation/arrays/relationships/set.php";
///\/\/\/\ These will carry the data through every step of the preparatory phase and be manipulated as we go


//this gets out the nodes that are essential to display in this view
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/data_manipulation/add_critical_nodes_for_this_view.php";


//then we tackle how to handle and display issues related to the nodes we have left
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/data_manipulation/adjust_depending_on_issue_display.php"; 	


//now at this point we have all the nodes we need and all the issues
//so before we press on really nail down the chart display details let's pull out what relationships exist and build the relationships array
//as we are doing that we should really also add to the points array a number of relationships to display count as well
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/data_manipulation/arrays/relationships/build.php";

require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/layouts/central_issues/fixed_x_y/connect_points.php"; //depending on the view that is chosen

require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/pre_data_table_script.php";

//this datatable should actually be created earlier and then just printed out here
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/print_data_table.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/build_chart_options.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/post_options_script.php";   
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/tooltip/script.php"; 
echo "</script>";   
?>
    
