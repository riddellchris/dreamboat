<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/alert_removal.php";




//just turn them all off for now
//profile
$_SESSION['user_alerts_notes'] 					= 'off';
$_SESSION['user_alerts_walkthroughs'] 					= 'off';
$_SESSION['user_alerts_data'] 					= 'off';
	$_SESSION['user_alerts_map_apis'] 				= 'off';
	$_SESSION['user_alerts_map_matching'] 			= 'off';

$_SESSION['user_alerts_map'] 					= 'off';
	$_SESSION['user_alerts_map_personal'] 			= 'off';
		$_SESSION['user_alerts_map_personal_main_view']	= 'off';
		$_SESSION['user_alerts_map_personal_matching']	= 'off';
		$_SESSION['user_alerts_map_personal_interplay'] = 'off';
		$_SESSION['user_alerts_map_personal_valuation'] = 'off';
	$_SESSION['user_alerts_map_business'] 			= 'off';
		$_SESSION['user_alerts_map_business_main_view']	= 'off';
		$_SESSION['user_alerts_map_business_grouping']	= 'off';
		$_SESSION['user_alerts_map_business_matching'] 	= 'off';
		$_SESSION['user_alerts_map_business_interplay'] = 'off';
		$_SESSION['user_alerts_map_business_valuation'] = 'off';
		$_SESSION['user_alerts_map_business_permissions'] = 'off';
	$_SESSION['user_alerts_map_economy'] 			= 'off';
$_SESSION['user_alerts_highlights'] 				= 'off';
$_SESSION['user_alerts_overview'] 					= 'off';
$_SESSION['user_alerts_insights'] 					= 'off';
$_SESSION['user_alerts_profile'] 					= 'off';
	$_SESSION['user_alerts_profile_settings'] 			= 'off';
	$_SESSION['user_alerts_profile_details'] 			= 'off';
	$_SESSION['user_alerts_profile_wellbeing'] 			= 'off';
	//	$_SESSION['user_alerts_profile_wellbeing_progress_plus']= 'off';
		$_SESSION['user_alerts_profile_wellbeing_health'] 	= 'off';
		$_SESSION['user_alerts_profile_wellbeing_energy'] 	= 'off';
		$_SESSION['user_alerts_profile_wellbeing_stress'] 	= 'off';
		$_SESSION['user_alerts_profile_wellbeing_mood'] 	= 'off';
	$_SESSION['user_alerts_profile_flow'] 				= 'off';
		$_SESSION['user_alerts_profile_flow_reflect'] 		= 'off';	
		$_SESSION['user_alerts_profile_flow_dream'] 		= 'off';
		$_SESSION['user_alerts_profile_flow_vent'] 			= 'off';
		$_SESSION['user_alerts_profile_flow_think'] 		= 'off';
		$_SESSION['user_alerts_profile_flow_plan'] 			= 'off';
		$_SESSION['user_alerts_profile_flow_focus'] 		= 'off';	
	$_SESSION['user_alerts_profile_progress'] 				= 'off';	
$_SESSION['user_alerts_business'] 					= 'off';
	$_SESSION['user_alerts_business_settings'] 			= 'off';
	$_SESSION['user_alerts_business_products'] 			= 'off';
	$_SESSION['user_alerts_business_services'] 			= 'off';
$_SESSION['user_alerts_network'] 					= 'off';
	$_SESSION['user_alerts_network_groups'] 			= 'off';
	$_SESSION['user_alerts_network_businesses'] 		= 'off';
	$_SESSION['user_alerts_network_people'] 			= 'off';
$_SESSION['user_alerts_biz_dev'] 					= 'off';
	$_SESSION['user_alerts_biz_dev_events'] 			= 'off';
	$_SESSION['user_alerts_biz_dev_one_to_ones'] 		= 'off';
	$_SESSION['user_alerts_biz_dev_referrers'] 			= 'off';
$_SESSION['user_alerts_marketing'] 					= 'off';
	$_SESSION['user_alerts_marketing_target_markets'] 	= 'off';
	$_SESSION['user_alerts_marketing_channels'] 		= 'off';
	$_SESSION['user_alerts_marketing_angles'] 			= 'off';	
	$_SESSION['user_alerts_marketing_promotions'] 		= 'off';
$_SESSION['user_alerts_sales'] 						= 'off';
	$_SESSION['user_alerts_sales_new_potentials'] 		= 'off';
	$_SESSION['user_alerts_sales_potential_upsells'] 	= 'off';
	$_SESSION['user_alerts_sales_recurring_sales'] 		= 'off';	
		$_SESSION['user_alerts_sales_insights_top_10_client_share']	= 'off';
		$_SESSION['user_alerts_sales_insights_new_client_share']	= 'off';
		$_SESSION['user_alerts_sales_insights_product_share']		= 'off';
$_SESSION['user_alerts_management'] 				= 'off';
	$_SESSION['user_alerts_management_assets'] 			= 'off';
	$_SESSION['user_alerts_management_systems'] 		= 'off';
	$_SESSION['user_alerts_management_staff'] 			= 'off';
	$_SESSION['user_alerts_management_clients'] 		= 'off';
	$_SESSION['user_alerts_management_other'] 			= 'off';
$_SESSION['user_alerts_wheelhouse'] 				= 'off';
	$_SESSION['user_alerts_wheelhouse_dreams'] 			= 'off';
	$_SESSION['user_alerts_wheelhouse_goals'] 			= 'off';
	$_SESSION['user_alerts_wheelhouse_milestones'] 		= 'off';
	$_SESSION['user_alerts_wheelhouse_tasks'] 			= 'off';
$_SESSION['user_alerts_activities'] 				= 'off';
	$_SESSION['user_alerts_activities_doing'] 				= 'off';
	$_SESSION['user_alerts_activities_planning'] 			= 'off';
	$_SESSION['user_alerts_activities_managing'] 			= 'off';
	$_SESSION['user_alerts_activities_supporting'] 			= 'off';
	$_SESSION['user_alerts_activities_administrating'] 		= 'off';
	$_SESSION['user_alerts_activities_growing'] 			= 'off';
	$_SESSION['user_alerts_activities_all'] 				= 'off';
$_SESSION['user_alerts_time'] 					= 'off';	
$_SESSION['user_alerts_issues'] 					= 'off';
	$_SESSION['user_alerts_issues_critical'] 			= 'off';
	$_SESSION['user_alerts_issues_important'] 			= 'off';
	$_SESSION['user_alerts_issues_other'] 				= 'off';
	$_SESSION['user_alerts_issues_all'] 				= 'off';	
$_SESSION['user_alerts_upgrades'] 					= 'off';
	$_SESSION['user_alerts_upgrades_completed']			= 'off';
	$_SESSION['user_alerts_upgrades_underway'] 			= 'off';
	$_SESSION['user_alerts_upgrades_planned'] 			= 'off';
	$_SESSION['user_alerts_upgrades_all'] 				= 'off';
	$_SESSION['user_alerts_upgrades_homework'] 			= 'off';		
$_SESSION['user_alerts_results'] 					= 'off';
	$_SESSION['user_alerts_results_productivity'] 		= 'off';
	$_SESSION['user_alerts_results_income_and_hours'] 	= 'off';
	$_SESSION['user_alerts_results_revenue_and_income'] = 'off';
	$_SESSION['user_alerts_results_revenue_and_profit'] = 'off';
	$_SESSION['user_alerts_results_kpis'] 				= 'off';
$_SESSION['user_alerts_financials'] 					= 'off';	
$_SESSION['user_alerts_messages'] 					= 'off';	
$_SESSION['user_alerts_notifications'] 				= 'off';
$_SESSION['user_alerts_users'] 						= 'off';
$_SESSION['user_alerts_account'] 					= 'off';
$_SESSION['user_alerts_call'] 						= 'off';


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_type_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['dreamboat_crew'] == 'yes'){$crew = 'yes';}else{$crew = 'no';}




//then turn on anything that needs to be on
$sql = "SELECT * FROM notifications_and_alerts WHERE ";
if($crew == 'yes'){ $sql .= " from_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND ";}
$sql .= " for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND alert_on = 'on'";

//echo $sql;
//exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	if($row['primary_folder'] == 'notes'){		$_SESSION['user_alerts_notes'] 						= 'on';}	
	if($row['primary_folder'] == 'map'){		$_SESSION['user_alerts_map'] 						= 'on';}	
	if($row['primary_folder'] == 'profile'){	$_SESSION['user_alerts_profile'] 						= 'on';}
		if($row['secondary_folder'] == 'settings'){	$_SESSION['user_alerts_profile_settings'] 				= 'on';}
		if($row['secondary_folder'] == 'details'){	$_SESSION['user_alerts_profile_details'] 				= 'on';}		
		if($row['secondary_folder'] == 'wellbeing'){	$_SESSION['user_alerts_profile_wellbeing'] 				= 'on';}
			//if($row['tertiary_folder'] == 'progress_plus'){	$_SESSION['user_alerts_wellbeing_progress_plus'] 	= 'on';}
			if($row['tertiary_folder'] == 'health'){		$_SESSION['user_alerts_wellbeing_health'] 		= 'on';}	
			if($row['tertiary_folder'] == 'energy'){		$_SESSION['user_alerts_wellbeing_energy'] 		= 'on';}	
			if($row['tertiary_folder'] == 'stress'){		$_SESSION['user_alerts_wellbeing_stress'] 		= 'on';}	
			if($row['tertiary_folder'] == 'mood'){			$_SESSION['user_alerts_wellbeing_mood'] 		= 'on';}	
		if($row['secondary_folder'] == 'flow'){	$_SESSION['user_alerts_profile_flow'] 					= 'on';}
			if($row['tertiary_folder'] == 'reflect'){	$_SESSION['user_alerts_profile_flow_reflect'] 		= 'on';}		
			if($row['tertiary_folder'] == 'dream'){		$_SESSION['user_alerts_profile_flow_dream'] 		= 'on';}
			if($row['tertiary_folder'] == 'vent'){		$_SESSION['user_alerts_profile_flow_vent'] 			= 'on';}	
			if($row['tertiary_folder'] == 'think'){		$_SESSION['user_alerts_profile_flow_think'] 		= 'on';}	
			if($row['tertiary_folder'] == 'plan'){		$_SESSION['user_alerts_profile_flow_plan'] 			= 'on';}	
			if($row['tertiary_folder'] == 'focus'){		$_SESSION['user_alerts_profile_flow_focus'] 		= 'on';}
		if($row['secondary_folder'] == 'progress'){	$_SESSION['user_alerts_profile_progress'] 				= 'on';}
	if($row['primary_folder'] == 'business'){		$_SESSION['user_alerts_business'] 			= 'on';}
		if($row['secondary_folder'] == 'settings'){	$_SESSION['user_alerts_business_settings'] 		= 'on';}
		if($row['secondary_folder'] == 'products'){	$_SESSION['user_alerts_business_products'] 		= 'on';}	
		if($row['secondary_folder'] == 'services'){	$_SESSION['user_alerts_business_services'] 		= 'on';}			
	if($row['primary_folder'] == 'network'){	$_SESSION['user_alerts_network'] 				= 'on';}
		if($row['secondary_folder'] == 'groups'){		$_SESSION['user_alerts_network_groups'] 	= 'on';}
		if($row['secondary_folder'] == 'businesses'){	$_SESSION['user_alerts_network_businesses']	= 'on';}	
		if($row['secondary_folder'] == 'people'){		$_SESSION['user_alerts_network_people'] 	= 'on';}
	if($row['primary_folder'] == 'biz_dev'){		$_SESSION['user_alerts_biz_dev'] 			= 'on';}
		if($row['secondary_folder'] == 'events'){		$_SESSION['user_alerts_biz_dev_events'] 	= 'on';}
		if($row['secondary_folder'] == 'one_to_ones'){	$_SESSION['user_alerts_biz_dev_one_to_ones']= 'on';}
		if($row['secondary_folder'] == 'referrers'){	$_SESSION['user_alerts_biz_dev_referrers'] 	= 'on';}
	if($row['primary_folder'] == 'sales'){				$_SESSION['user_alerts_sales'] 				= 'on';}
		if($row['secondary_folder'] == 'new_potentials'){		$_SESSION['user_alerts_sales_new_potentials'] 		= 'on';}
		if($row['secondary_folder'] == 'potential_upsells'){	$_SESSION['user_alerts_sales_potential_upsells'] 	= 'on';}
		if($row['secondary_folder'] == 'recurring_sales'){		$_SESSION['user_alerts_sales_recurring_sales'] 		= 'on';}	
	if($row['primary_folder'] == 'marketing'){			$_SESSION['user_alerts_marketing'] 					= 'on';}
		if($row['secondary_folder'] == 'target_markets'){	$_SESSION['user_alerts_marketing_target_markets'] 	= 'on';}
		if($row['secondary_folder'] == 'channels'){			$_SESSION['user_alerts_marketing_channels'] 		= 'on';}
		if($row['secondary_folder'] == 'angles'){			$_SESSION['user_alerts_marketing_angles'] 			= 'on';}	
		if($row['secondary_folder'] == 'promotions'){		$_SESSION['user_alerts_marketing_promotions'] 		= 'on';}			
	if($row['primary_folder'] == 'management'){	$_SESSION['user_alerts_management'] 			= 'on';}
		if($row['secondary_folder'] == 'assets'){	$_SESSION['user_alerts_management_assets'] 		= 'on';}
		if($row['secondary_folder'] == 'systems'){	$_SESSION['user_alerts_management_systems'] 	= 'on';}	
		if($row['secondary_folder'] == 'staff'){	$_SESSION['user_alerts_management_staff'] 		= 'on';}	
		if($row['secondary_folder'] == 'clients'){	$_SESSION['user_alerts_management_clients'] 	= 'on';}	
		if($row['secondary_folder'] == 'other'){	$_SESSION['user_alerts_management_other']		= 'on';}
	if($row['primary_folder'] == 'wheelhouse'){	$_SESSION['user_alerts_wheelhouse'] 				= 'on';}
		if($row['secondary_folder'] == 'dreams'){		$_SESSION['user_alerts_wheelhouse_dreams'] 		= 'on';}	
		if($row['secondary_folder'] == 'goals'){		$_SESSION['user_alerts_wheelhouse_goals'] 		= 'on';}	
		if($row['secondary_folder'] == 'milestones'){	$_SESSION['user_alerts_wheelhouse_milestones'] 	= 'on';}	
		if($row['secondary_folder'] == 'tasks'){		$_SESSION['user_alerts_wheelhouse_tasks'] 		= 'on';}	
	if($row['primary_folder'] == 'activities'){		$_SESSION['user_alerts_activities'] 				= 'on';}
		if($row['secondary_folder'] == 'doing'){			$_SESSION['user_alerts_activities_doing'] 			= 'on';}	
		if($row['secondary_folder'] == 'planning'){			$_SESSION['user_alerts_activities_planning'] 		= 'on';}	
		if($row['secondary_folder'] == 'managing'){			$_SESSION['user_alerts_activities_managing'] 		= 'on';}	
		if($row['secondary_folder'] == 'supporting'){		$_SESSION['user_alerts_activities_supporting'] 		= 'on';}	
		if($row['secondary_folder'] == 'administrating'){	$_SESSION['user_alerts_activities_administrating'] 	= 'on';}	
		if($row['secondary_folder'] == 'growing'){			$_SESSION['user_alerts_activities_growing'] 		= 'on';}	
		if($row['secondary_folder'] == 'all'){				$_SESSION['user_alerts_activities_all'] 			= 'on';}	
	if($row['primary_folder'] == 'issues'){	$_SESSION['user_alerts_issues'] 					= 'on';}
		if($row['secondary_folder'] == 'critical'){		$_SESSION['user_alerts_issues_critical'] 	= 'on';}	
		if($row['secondary_folder'] == 'important'){	$_SESSION['user_alerts_issues_important'] 	= 'on';}	
		if($row['secondary_folder'] == 'other'){		$_SESSION['user_alerts_issues_other'] 		= 'on';}			
		if($row['secondary_folder'] == 'all'){			$_SESSION['user_alerts_issues_all'] 		= 'on';}					
	if($row['primary_folder'] == 'upgrades'){	$_SESSION['user_alerts_upgrades'] 				= 'on';}
		if($row['secondary_folder'] == 'critical'){		$_SESSION['user_alerts_upgrades_critical'] 	= 'on';}	
		if($row['secondary_folder'] == 'important'){	$_SESSION['user_alerts_upgrades_important'] = 'on';}	
		if($row['secondary_folder'] == 'other'){		$_SESSION['user_alerts_upgrades_other'] 	= 'on';}			
		if($row['secondary_folder'] == 'all'){			$_SESSION['user_alerts_upgrades_all'] 		= 'on';}		
	if($row['primary_folder'] == 'results'){	$_SESSION['user_alerts_results'] 						= 'on';}
		if($row['secondary_folder'] == 'productivity'){			$_SESSION['user_alerts_results_productivity'] 			= 'on';}
		if($row['secondary_folder'] == 'income_and_hours'){		$_SESSION['user_alerts_results_income_and_hours'] 		= 'on';}	
		if($row['secondary_folder'] == 'revenue_and_income'){	$_SESSION['user_alerts_results_revenue_and_income'] 	= 'on';}	
		if($row['secondary_folder'] == 'revenue_and_profit'){	$_SESSION['user_alerts_results_revenue_and_profit'] 	= 'on';}	
		if($row['secondary_folder'] == 'kpis'){					$_SESSION['user_alerts_results_kpis']					= 'on';}	
	if($row['primary_folder'] == 'upgrades'){	$_SESSION['user_alerts_upgrades'] 						= 'on';}
		if($row['secondary_folder'] == 'all'){			$_SESSION['user_alerts_upgrades_all'] 			= 'on';}	
		if($row['secondary_folder'] == 'completed'){	$_SESSION['user_alerts_upgrades_completed'] 	= 'on';}
		if($row['secondary_folder'] == 'underway'){		$_SESSION['user_alerts_upgrades_underway'] 		= 'on';}	
		if($row['secondary_folder'] == 'planned'){		$_SESSION['user_alerts_upgrades_planned'] 		= 'on';}
		if($row['secondary_folder'] == 'homework'){		$_SESSION['user_alerts_upgrades_homework'] 		= 'on';}
	if($row['primary_folder'] == 'messages'){	$_SESSION['user_alerts_messages'] 						= 'on';}			
	if($row['primary_folder'] == 'users'){		$_SESSION['user_alerts_users'] 							= 'on';}
	if($row['primary_folder'] == 'account'){	$_SESSION['user_alerts_account'] 						= 'on';}
	if($row['primary_folder'] == 'call'){		$_SESSION['user_alerts_call'] 							= 'on';}	
}



















//echo $_SESSION['user_alerts_network'];

echo "<style>
	.nav-links.alert{color: orange;}
	.nav-links.alert:hover{color: yellow;}	
	
	.sub_menu_div.alert{background-color: orange;}
	.sub_menu_div.alert:hover{background-color: yellow;color:#4332ff;}		
	
	
	</style>";

?>