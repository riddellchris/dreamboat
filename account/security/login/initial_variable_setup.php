<?php
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['user_id'] 				= $row['user_id'];
$_SESSION['logged_in'] 				= 'yes';
$_SESSION['first_name'] 			= $row['first_name'];
$_SESSION['last_name'] 				= $row['second_name'];
$_SESSION['users_homepage'] 		= $row['home_page'];
$_SESSION['display_demo_charts'] 	= $row['demos_on'];
$_SESSION['viewing_client_id'] 		= $row['user_id'];


//simply just batch this
require $_SERVER['DOCUMENT_ROOT']."/account/security/login/intial_variable_setup_pieces/user_type.php";




//this is true for all users for obvious reasons                                
$_SESSION['display_map_fullscreen'] = 'no';

/*CODE OUT
if($_SESSION['user_id'] == 1){	$_SESSION['display_map_diagnostics'] = 'on';	}
else{							$_SESSION['display_map_diagnostics'] = 'off';	}
*/

$_SESSION['display_map_diagnostics'] = 'off';
require $_SERVER['DOCUMENT_ROOT'] . "/account/variables/run_critical_variable_update.php";

// To ensure customiser menu has default 6 month 
$_SESSION['is_date_customised'] = false;