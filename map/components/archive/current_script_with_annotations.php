<?php
if(!isset($_SESSION)){session_start();}

//so let's start this with a points array();
$points = array();
$points['database'] = array();
$points['id'] = array();
$points['primary_folder'] = array();
$points['secondary_folder'] = array();
$points['title'] = array();


//then as we go through each step we can run against various $sql queries and temporary sub arrays but ultimately we will cut all of that crap and get to a clean updated points array at the end of each and every step.
//we should also start a relationships array such that we can do a similar thing with each of the relationships that we will display 
$relationships = array();
	//this array can simply be 
$relationships['item_a_database'] = array();
$relationships['item_a_id'] 	= array();
$relationships['item_b_database'] = array();
$relationships['item_b_id'] 	= array();
$relationships[thickness_score]	= array();
$relationships[color_score]	= array();



//so the biggest trick then will be quickly building out an $sql query from either of the arrays to then clean and change/just manipulate the points or relationships array at each stage.
//then it becomes actually pretty simple and very manageable the whole way along! YAY!
//Nice! So.


//this sets the defaults for the map views that are critical to define now for the script 
//BUT are also used later in the selects to display those defaults if none have already been defined.
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/set_defaults.php";

//this gets out the nodes that are essential to display in this view
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/add_critical_nodes_for_this_view.php";

//then we filter if needed by those which in relationships or not 
	//IFF and only IFF required
	
if(	$_SESSION['current_connection_control'] == 'connected_only' OR
	$_SESSION['current_connection_control'] == 'unconnected_only'){	

	//strip those which are not required	
	//critically these must be connected with each other 
		//because then we add the issues later
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/find_those_in_active_relationships.php"; 

}


//then we tackle how to handle and display issues related to the nodes we have left
if($_SESSION['current_issues_setting'] == 'issues_on'){	
	//if include related issues then we find the related active issues and add them
		//find related active issues
	
	}
//if related issues off then we do nothing
//if related issues only then we first find the related issues and remove all others 	
if($_SESSION['current_issues_setting'] == 'issues_only'){	
		//find related active issues
	
		//remove non issues
	}
//this should really be done only with arrays going in and out

//require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/connect_points_to_x_and_y.php";
if($_SESSION['current_map_display'] == 'relationship_centric'){
	//circle out from the inside
	//based solely on the number of relationships each point has
	
	//ideally add some sort of total relationship distance algorithm ontop of this but far from critical today
}

if($_SESSION['current_map_display'] == 'central_issues'){
	//circle out from the inside doing issues as a central ring and then working your way out from there

}

require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/pre_data_table_script.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/create_data_table.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/build_chart_options.php";
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/post_options_script.php";   
require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/tooltip_script.php"; 
echo "</script>";   
?>
    
