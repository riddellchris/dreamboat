<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/components/full_screen/styling.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/positioning/start_centered.php";


require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/set.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/triggers/set.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/set.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/set.php";

require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/set_select_defaults.php"; //this has to be prior to initial critical for view obviously

require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/initial_critical_for_view.php";
if($map_triggers['initial_node_count'] > 0){
    if(	$_SESSION['current_issues_setting'] == 'issues_on'){		
        require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/issues_required.php"; 	
        require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/finalise.php";
    }
    $diagnostics['all_nodes_to_display'] = $nodes;
    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/positioned/find.php";
    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/positioned/mark.php";
    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/add_link.php";
    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/declare_unpositioned.php";

    if($map_triggers['initial_node_count'] > 1){//obviously if less than 1 there are simply none there
        require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/compile/build.php";
    }

}
require $_SERVER['DOCUMENT_ROOT']."/map/components/layers/fixed/display.php";

//this is initially set in 
if($_SESSION['display_map_diagnostics'] != 'on'){    require $_SERVER['DOCUMENT_ROOT']."/map/components/layers/sliding/display.php";}
if($_SESSION['display_map_diagnostics'] == 'on'){    require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/display.php";}