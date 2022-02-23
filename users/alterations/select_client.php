<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['viewing_client_id'] = $_GET['clients_user_id'];

require $_SERVER['DOCUMENT_ROOT']."/account/variables/run_critical_variable_update.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/update_processes/master.php";
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/what_to_display.php";

unset($_SESSION['viewing_client_cooling_off_date']);  // not immediately required on change/// so leave it out for now
					//is created by /admin/users/alterations/get_cooling_off_date.php though
unset($_SESSION['viewing_contract_sent_date']);					


if($_SESSION['user_id'] != $_SESSION['viewing_client_id']){$_SESSION['notifications_for_current_client'] = 'off';}
else{unset($_SESSION['notifications_for_current_client']);}


unset($_SESSION['profile_page']);
	unset($_SESSION['profile_settings_page']);
	unset($_SESSION['wellbeing_page']);
	unset($_SESSION['flow_page']);
unset($_SESSION['notes_page']);	
unset($_SESSION['interrogation_page']);	
unset($_SESSION['activities_page']);		
unset($_SESSION['business_page']);	
unset($_SESSION['network_page']);
unset($_SESSION['biz_dev_page']);
unset($_SESSION['sales_page']);
unset($_SESSION['marketing_page']);
unset($_SESSION['management_page']);
unset($_SESSION['improvements_page']);
unset($_SESSION['issues_page']);
unset($_SESSION['wheelhouse_page']);
unset($_SESSION['time_page']);
unset($_SESSION['time_tracking_page']);
unset($_SESSION['time_utilisation_page']);
unset($_SESSION['results_page']);

unset($_SESSION['messages_page']);
unset($_SESSION['notifications_page']);
//unset($_SESSION['admin_page']); //don't remove this or uncomment this as it breaks the system on changing clients if you do
unset($_SESSION['legal_page']);
unset($_SESSION['funnel_focus']);


unset($_SESSION['insights_menu']['headline_chart']); 
unset($_SESSION['tag_use']); //from insight development

//reset all session variable starting with AI
foreach (array_keys($_SESSION) as $key) {
/*	echo $key;
	echo " -- ";
	echo substr($key, 0 , 3);
	echo "<br>";*/

    if (substr($key, 0 , 3) == 'ai_') {
        unset($_SESSION[$key]);
    }
}
//exit();
//echo $debug['xero_data_upate'];
//exit();

/*
if($_SESSION['user_id'] != $_SESSION['viewing_client_id']){
	$_SESSION['show_as_dreamboat_crew'] 	= 'yes';
}
else{	$_SESSION['show_as_dreamboat_crew'] 	= 'no';}
*/

if($changing_subscription_value == 'yes'){
	$_SESSION['viewing_client_current_subscription_value'] = $row['current_subscription_value'];
}
if($changing_subscription_value != 'yes'){
	header("Location: /issues/");
	exit();
}


?>