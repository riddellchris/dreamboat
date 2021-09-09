<?php
if(!isset($_SESSION)){session_start();}

//first let's set the defaults just incase they are not set
//these will be reflected within the selects in display.php too obviously
if(!isset($_SESSION['current_map_view'])){		$_SESSION['current_map_view'] 	 	= 'all';}
if(!isset($_SESSION['current_issues_setting'])){	$_SESSION['current_issues_setting'] 	= 'issues_on';}
if(!isset($_SESSION['current_connection_control'])){	$_SESSION['current_connection_control'] = 'show_all';}
if(!isset($_SESSION['current_map_display'])){		$_SESSION['current_map_display'] 	= 'relationship_centric';}
if(!isset($_SESSION['current_edge_display'])){		$_SESSION['current_edge_display'] 	= 'non_descript';} //this should probably ultimately be adjusted depening on the phase the user is up to 