<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";

$sql_done = 'no';
if($_GET['primary_folder'] == 'content'){
		$database = 'wheelhouse';
		$sql_for_display = "SELECT * FROM ".$database." WHERE deleted = 'no' AND status = 'active' AND user_id = '2'";
	 	if($_GET['primary_folder'] == 'upgrades'){$sql_for_display .= " AND category = 'upgrades'   AND category = 'planned' ";}
	 	$sql_done = 'yes';
}
if($_GET['primary_folder'] == 'notifications'){
		$database = 'notifications_and_alerts';
		$sql_for_display = "SELECT * FROM ".$database." WHERE for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ORDER BY notification_id DESC;";
	 	$sql_done = 'yes';
}
if($sql_done == 'no'){
		

	
	
		
		
		
		
	$sql_for_display = "SELECT * FROM ".$database." ";//the space just so the whole thing works always
	
	//i.e. if just showing a normal list
	if(!isset($_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] )){
		$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'active';
	}
	if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'deleted' AND
		$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'inactive' AND
		$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'homework'){	$sql_for_display .= "WHERE deleted = 'no' AND status = 'active'";}	
	if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'deleted'){	$sql_for_display .= "WHERE deleted = 'yes'";}	 	
	if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'inactive'){ 	$sql_for_display .= "WHERE status = 'resolved'";}
	if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'homework'){ 	$sql_for_display .= "WHERE deleted = 'no' AND status = 'active' AND homework = 'yes'";}
	
		
	if($_GET['primary_folder'] != 'admin'){		$sql_for_display .= " AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";}

	
	
	if($_GET['primary_folder'] == 'sales'){		$sql_for_display .= " AND category 		= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}		 	
	if($_GET['primary_folder'] == 'wheelhouse'){	$sql_for_display .= " AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}
	if($_GET['primary_folder'] == 'activities'	&& $_GET['secondary_folder'] != 'all'){	$sql_for_display .= " AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	 	
	if($_GET['primary_folder'] == 'issues'		&& $_GET['secondary_folder'] == 'other'){	$sql_for_display .= " AND category 	= 'other' ";}	
	if($_GET['primary_folder'] == 'issues'		&& $_GET['secondary_folder'] == 'notable'){	$sql_for_display .= " AND category 	= 'notable' ";}
	if($_GET['primary_folder'] == 'issues'		&& $_GET['secondary_folder'] == 'important'){	$sql_for_display .= " AND category 	= 'important' ";}	
	if($_GET['primary_folder'] == 'issues'		&& $_GET['secondary_folder'] == 'critical'){	$sql_for_display .= " AND category 	= 'critical' ";}		
	if($_GET['secondary_folder'] == 'technology'){	$sql_for_display .= " AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	if($_GET['primary_folder'] == 'upgrades'	&& $_GET['secondary_folder'] != 'all' && $_GET['secondary_folder'] != 'homework'){	$sql_for_display .= " AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}
	if($_GET['primary_folder'] == 'upgrades'	&& $_GET['secondary_folder'] == 'homework'){$sql_for_display .= " AND homework 	= 'yes' ";}
	if($_GET['secondary_folder'] == 'clients'){	$sql_for_display .= " AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}		 	
	if($_GET['secondary_folder'] == 'staff'){	$sql_for_display .= " AND category	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	if($_GET['secondary_folder'] == 'referrers'){	$sql_for_display .= " AND referrer 	= 'yes' ";}	 			 			
	if($_GET['secondary_folder'] == 'products'){	$sql_for_display .= " AND category	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	if($_GET['secondary_folder'] == 'services'){	$sql_for_display .= " AND category	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	if($_GET['secondary_folder'] == 'businesses'){	$sql_for_display .= " AND category	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	if($_GET['secondary_folder'] == 'groups'){	$sql_for_display .= " AND category	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}	
	
	if(	($_GET['secondary_folder'] == 'new_potentials' OR $_GET['secondary_folder'] == 'potential_upsells') AND
		 isset($_SESSION['funnel_focus'][$_GET['secondary_folder']])){
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '10'){	$sql_for_display.= " AND probability >= 0 AND probability  < 10 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '20'){	$sql_for_display.= " AND probability >= 10 AND probability < 20 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '30'){	$sql_for_display.= " AND probability >= 20 AND probability < 30 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '40'){	$sql_for_display.= " AND probability >= 30 AND probability < 40 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '50'){	$sql_for_display.= " AND probability >= 40 AND probability < 50 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '60'){	$sql_for_display.= " AND probability >= 50 AND probability < 60 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '70'){	$sql_for_display.= " AND probability >= 60 AND probability < 70 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '80'){	$sql_for_display.= " AND probability >= 70 AND probability < 80 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '90'){	$sql_for_display.= " AND probability >= 80 AND probability < 90 ";}
		if($_SESSION['funnel_focus'][$_GET['secondary_folder']] == '100'){	$sql_for_display.= " AND probability >= 90 AND probability < 100 ";}
	}
	
	//unless specifically prescribe lets order all (including inactive and deleted by rank
	$sql_for_display .= "ORDER BY rank ASC;";	

}

//echo $sql_for_display;exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result_for_display = mysqli_query($conn, $sql_for_display);
$number_of_results_to_display = mysqli_num_rows($result_for_display);