<?php
if(!isset($_SESSION)){session_start();}

//first let's set the defaults just incase they are not set
//these will be reflected within the selects in display.php too obviously
if(!isset($_SESSION['critical_node_include_1'])){		        $_SESSION['critical_node_include_1'] 	 	    = 'all';}
if(!isset($_SESSION['critical_node_include_2'])){		        $_SESSION['critical_node_include_2'] 	 	    = 'activities';}
if(!isset($_SESSION['critical_node_include_3'])){		        $_SESSION['critical_node_include_3'] 	 	    = 'activities';}
if(!isset($_SESSION['critical_node_include_4'])){		        $_SESSION['critical_node_include_4'] 	 	    = 'activities';}

if(!isset($_SESSION['current_issues_setting'])){	    $_SESSION['current_issues_setting'] 	= 'issues_on';}
//if(!isset($_SESSION['current_connection_control'])){	$_SESSION['current_connection_control'] = 'show_all';}
//if(!isset($_SESSION['current_map_display'])){		    $_SESSION['current_map_display'] 	    = 'relationship_centric';}
if(!isset($_SESSION['map_edge_color'])){		    	$_SESSION['map_edge_color']   			= 'non_descript';} //this should probably ultimately be adjusted depening on the phase the user is up to 
if(!isset($_SESSION['map_edge_thickness'])){		    $_SESSION['map_edge_thickness']   		= 'non_descript';} 

