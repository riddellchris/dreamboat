<?php
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['user_id'] 		= $row['user_id'];
$_SESSION['logged_in'] 		= 'yes';
$_SESSION['first_name'] 	= $row['first_name'];
$_SESSION['last_name'] 		= $row['second_name'];
$_SESSION['users_homepage'] = $row['home_page'];
if ($row['client_or_crew'] == 'crew') {
	$_SESSION['dreamboat_crew'] 						= 'yes';
	$_SESSION['pilots_id'] 								= $_SESSION['user_id']; // for when they have dreamboat crew display off still to enter the right stuff
	$_SESSION['viewing_client_id'] 						= $row['user_id'];
	$_SESSION['show_as_dreamboat_crew'] 				= 'no';
	$_SESSION['dreamboat_crew_navigation_option_on'] 	= 'yes';
	$_SESSION['pilots_first_name'] 						= $row['first_name'];
	$_SESSION['pilots_number'] 							= $row['phone_number'];

	if ($row['dreamboat_management'] == 'yes') {
		$_SESSION['dreamboat_management'] 		= 'yes';
	}
	if ($row['dreamboat_admin'] 		== 'yes') {
		$_SESSION['dreamboat_admin'] 			= 'yes';
	}
	if ($row['dreamboat_developer'] 	== 'yes') {
		$_SESSION['dreamboat_developer'] 		= 'yes';
		$_SESSION['dreamboat_developer_view'] 	= 'live';
	}
}
if ($row['client_or_crew'] == 'client') {
	$_SESSION['dreamboat_crew'] = 'no';
	$_SESSION['pilots_id'] = $row['pilots_id'];
	$_SESSION['viewing_client_id'] 				= $row['user_id'];
	//get pilots first name for the call button			
	$sql = "SELECT * FROM user_account_details 
							WHERE user_id = '" . mysqli_real_escape_string($conn, $_SESSION['pilots_id']) . "'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION['pilots_first_name'] = $row['first_name'];
	$_SESSION['pilots_number'] = $row['phone_number'];
}


//this is true for all users for obvious reasons                                
$_SESSION['display_map_fullscreen'] = 'no';

/*CODE OUT
if($_SESSION['user_id'] == 1){	$_SESSION['display_map_diagnostics'] = 'on';	}
else{							$_SESSION['display_map_diagnostics'] = 'off';	}
*/

$_SESSION['display_map_diagnostics'] = 'off';
require $_SERVER['DOCUMENT_ROOT'] . "/account/variables/run_critical_variable_update.php";
