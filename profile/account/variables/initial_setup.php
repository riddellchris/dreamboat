<?php
if(!isset($_SESSION)){session_start();}

//essentially just updating critical variables from the table user_account_details					
$_SESSION['viewing_client_first_name'] 							= $row['first_name'];
$_SESSION['viewing_client_last_name'] 							= $row['second_name'];
$_SESSION['viewing_client_email'] 								= $row['email'];
$_SESSION['viewing_client_phone_number'] 						= $row['phone_number'];
$_SESSION['viewing_client_business_name'] 						= $row['business_name'];
$_SESSION['viewing_client_business_website'] 					= $row['business_website'];
$_SESSION['viewing_client_what_clients_are_called'] 			= $row['what_clients_are_called'];	
$_SESSION['viewing_client_business_name'] 						= $row['business_name'];
$_SESSION['viewing_client_own_yes_no'] 							= $row['own_yes_no'];
$_SESSION['viewing_client_network_access_yes_no'] 				= $row['network_access_yes_no'];
$_SESSION['viewing_client_work_solo_yes_no'] 					= $row['work_solo_yes_no'];
$_SESSION['viewing_client_work_in_a_team_yes_no'] 				= $row['work_in_a_team_yes_no'];	
$_SESSION['viewing_client_sales_process_involvement_yes_no'] 	= $row['sales_process_involvement_yes_no'];	
$_SESSION['viewing_client_overall_management_yes_no'] 			= $row['overall_management_yes_no'];	
$_SESSION['viewing_client_financial_management_yes_no'] 		= $row['financial_management_yes_no'];	
$_SESSION['viewing_client_staff_management_yes_no'] 			= $row['staff_management_yes_no'];	
$_SESSION['viewing_client_direction_involvement_yes_no'] 		= $row['direction_involvement_yes_no'];	
$_SESSION['viewing_client_client_engagement_yes_no'] 			= $row['client_engagement_yes_no'];	
$_SESSION['viewing_client_commission_yes_no'] 					= $row['commission_yes_no'];
$_SESSION['viewing_client_what_is_productivity'] 				= $row['what_is_productivity'];	
$_SESSION['viewing_client_type_of_person'] 						= $row['type_of_person'];	
$_SESSION['viewing_client_proven_referrer'] 					= $row['proven_referrer'];	
$_SESSION['viewing_client_home_page'] 							= $row['home_page'];

//critical for tests//
$_SESSION['viewing_client_primary_industry'] 					= $row['primary_industry'];
$_SESSION['viewing_client_business_definition'] 				= $row['business_definition'];
$_SESSION['viewing_client_business_size_group'] 				= $row['business_size_group'];
$_SESSION['viewing_client_time_in_business_group'] 				= $row['time_in_business_group'];
$_SESSION['viewing_client_time_in_business'] 					= $row['time_in_business'];




//the actual services currently paid for... and therefore the access levels they are allowed.
//really the only one that matters today that limits anything is just the mental health only platform:
//therefore:
if(	$row['mental_health_platform'] 	== 'yes' &&
	$row['digital'] 		!= 'yes' &&
	$row['text'] 			!= 'yes' &&	
	$row['audio_monthly'] 		!= 'yes' &&
	$row['audio_fortnightly'] 	!= 'yes' &&
	$row['audio'] 			!= 'yes' &&
	$row['audio_hour_full'] 	!= 'yes'){$_SESSION['viewing_client_mental_health_only'] = 'yes';
	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "UPDATE user_account_details SET home_page = 'profile' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
	mysqli_query($conn, $sql);
	
	$_SESSION['users_homepage'] = 'profile';
	
	}
else{$_SESSION['viewing_client_mental_health_only'] = 'no';}
