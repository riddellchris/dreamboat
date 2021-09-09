<?php
if(!isset($_SESSION)){session_start();}


if($_POST['map_view'] == 'all'){			$_SESSION['current_map_view'] = $_POST['map_view'];}
if($_POST['map_view'] == 'activities'){			$_SESSION['current_map_view'] = $_POST['map_view'];}
if($_POST['map_view'] == 'people_and_organisations'){	$_SESSION['current_map_view'] = $_POST['map_view'];}
if($_POST['map_view'] == 'sales_and_marketing'){	$_SESSION['current_map_view'] = $_POST['map_view'];}
if($_POST['map_view'] == 'wheelhouse'){			$_SESSION['current_map_view'] = $_POST['map_view'];}
if($_POST['map_view'] == 'products_and_services'){	$_SESSION['current_map_view'] = $_POST['map_view'];}


if($_POST['connection_control'] == 'connected_only'){	$_SESSION['current_connection_control'] = $_POST['connection_control'];}
if($_POST['connection_control'] == 'unconnected_only'){	$_SESSION['current_connection_control'] = $_POST['connection_control'];}
if($_POST['connection_control'] == 'show_all'){		$_SESSION['current_connection_control'] = $_POST['connection_control'];}


if($_POST['issues_control'] == 'issues_on'){	$_SESSION['current_issues_setting'] = $_POST['issues_control'];}
if($_POST['issues_control'] == 'issues_off'){	$_SESSION['current_issues_setting'] = $_POST['issues_control'];}
if($_POST['issues_control'] == 'issues_only'){	$_SESSION['current_issues_setting'] = $_POST['issues_control'];}


if($_POST['map_display'] == 'relationship_centric'){	$_SESSION['current_map_display'] = $_POST['map_display'];}
if($_POST['map_display'] == 'central_issues'){		$_SESSION['current_map_display'] = $_POST['map_display'];}


if($_POST['edge_displays'] == 'non_descript'){		$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'productivity'){		$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'financial'){		$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'users_time'){		$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'communication'){		$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'kpi_1'){			$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'kpi_2'){			$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'kpi_3'){			$_SESSION['current_edge_display']  = $_POST['edge_displays'];}
if($_POST['edge_displays'] == 'kpi_4'){			$_SESSION['current_edge_display']  = $_POST['edge_displays'];}

	
//on off// this will need to set criteria  or be entirely model driven
//if($_POST['map_display_comparative_variance'] == 'comparative_variance'){	$_SESSION['current_map_display'] = $_POST['map_display'];}


header("Location: /map/personal/");
exit();

