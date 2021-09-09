<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/components/full_screen/styling.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/positioning/start_centered.php";

require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/set.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/set.php";

require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/set_select_defaults.php"; //this has to be prior to initial critical for view obviously

require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/initial_critical_for_view.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/issues_required.php"; 	
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/finalise.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/find_positioned.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/mark_positioned.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/add_link.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/declare_unpositioned.php";



//now at this point we have all the nodes we need and all the issues
require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/compile/build.php";
//require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/present/create_layer.php";







//require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/layouts/central_issues/fixed_x_y/connect_points.php"; //depending on the view that is chosen
require $_SERVER['DOCUMENT_ROOT']."/map/components/layers/fixed/display.php";

//this is initially set in 
if($_SESSION['display_map_diagnostics'] != 'on'){    require $_SERVER['DOCUMENT_ROOT']."/map/components/layers/sliding/display.php";}
if($_SESSION['display_map_diagnostics'] == 'on'){    require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/display.php";}