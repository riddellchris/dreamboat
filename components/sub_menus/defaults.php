<?php
if(!isset($_SESSION)){session_start();}
//where possible set the second folder/sub_menu pages in further

if(!isset($_SESSION['home_page'])){						$_SESSION['home_page'] 					= 'display_no_menu';}

if(!isset($_SESSION['plan_page'])){						$_SESSION['plan_page'] 					= 'display_no_menu';}
if(!isset($_SESSION['problem_page'])){					$_SESSION['problem_page'] 				= 'display_no_menu';}
if(!isset($_SESSION['solution_page'])){					$_SESSION['solution_page'] 				= 'institutional';}
if(!isset($_SESSION['solutions_page'])){				$_SESSION['solutions_page'] 			= 'perspective_change';}
if(!isset($_SESSION['processes_page'])){				$_SESSION['processes_page'] 			= 'individual';}
if(!isset($_SESSION['impact_page'])){					$_SESSION['impact_page'] 				= 'on_you';}
if(!isset($_SESSION['contact_us_page'])){				$_SESSION['contact_us_page'] 			= 'display_no_menu';}

if(!isset($_SESSION['profile_page'])){					$_SESSION['profile_page'] 				= 'details';}
	if(!isset($_SESSION['profile_flow_page'])){			$_SESSION['profile_flow_page'] 			= 'focus';}
	if(!isset($_SESSION['profile_wellbeing_page'])){	$_SESSION['profile_wellbeing_page'] 	= 'mood';}
	if(!isset($_SESSION['profile_settings_page'])){		$_SESSION['profile_settings_page'] 		= 'email_preferences';}
	if(!isset($_SESSION['profile_reviews_page'])){		$_SESSION['profile_reviews_page'] 		= 'weekly_time';}
if(!isset($_SESSION['business_page'])){					$_SESSION['business_page'] 				= 'products';}
if(!isset($_SESSION['network_page'])){					$_SESSION['network_page'] 				= 'people';}

if(!isset($_SESSION['interrogation_page'])){			$_SESSION['interrogation_page'] 		= 'all';}
if(!isset($_SESSION['notes_page'])){					$_SESSION['notes_page'] 				= 'pilot_notes';}
	if(!isset($_SESSION['notes_pilot_notes_page'])){	$_SESSION['notes_pilot_notes_page'] 	= 'for_sales_and_meetings';}

	if(!isset($_SESSION['walkthroughs_page'])){			$_SESSION['walkthroughs_page'] 			= 'critical_background';}		
if(!isset($_SESSION['data_page'])){						$_SESSION['data_page'] 					= 'apis';}	
if(!isset($_SESSION['map_page'])){						$_SESSION['map_page'] 					= 'personal';}
	if(!isset($_SESSION['map_apis_page'])){				$_SESSION['map_apis_page'] 				= 'display_no_menu';}
	if(!isset($_SESSION['map_personal_page'])){			$_SESSION['map_personal_page'] 			= 'main_view';}
	if(!isset($_SESSION['map_business_page'])){			$_SESSION['map_business_page'] 			= 'main_view';}
	if(!isset($_SESSION['map_economy_page'])){			$_SESSION['map_economy_page'] 			= 'display_no_menu';}
if(!isset($_SESSION['insights_page'])){					$_SESSION['insights_page'] 				= 'display';}
if(!isset($_SESSION['highlights_page'])){				$_SESSION['highlights_page'] 				= 'display_no_menu';}
if(!isset($_SESSION['overview_page'])){					$_SESSION['overview_page'] 				= 'display_no_menu';}
if(!isset($_SESSION['biz_dev_page'])){					$_SESSION['biz_dev_page'] 				= 'one_to_ones';}
if(!isset($_SESSION['sales_page'])){					$_SESSION['sales_page'] 				= 'all';}
	if(!isset($_SESSION['sales_worksheets_page'])){		$_SESSION['sales_worksheets_page'] 		= 'client_product_matrix';}
	if(!isset($_SESSION['sales_insights_page'])){		$_SESSION['sales_insights_page'] 		= 'top_10_client_share';}
if(!isset($_SESSION['marketing_page'])){				$_SESSION['marketing_page'] 			= 'promotions';}
if(!isset($_SESSION['management_page'])){				$_SESSION['management_page'] 			= 'clients';}
if(!isset($_SESSION['wheelhouse_page'])){				$_SESSION['wheelhouse_page'] 			= 'tasks';}
if(!isset($_SESSION['wheelhouse_insights_page'])){		$_SESSION['wheelhouse_insights_page'] 	= 'wip_valuation';}
if(!isset($_SESSION['activities_page'])){				$_SESSION['activities_page'] 			= 'doing';}
if(!isset($_SESSION['time_page'])){						$_SESSION['time_page'] 					= 'this_week';}
	if(!isset($_SESSION['time_this_week_page'])){		$_SESSION['time_this_week_page'] 		= 'by_client';}
	if(!isset($_SESSION['time_this_month_page'])){		$_SESSION['time_this_month_page'] 		= 'by_client';}
	if(!isset($_SESSION['time_past_year_page'])){		$_SESSION['time_past_year_page'] 		= 'by_client';}
/* where it should 
	if(!isset($_SESSION['time_this_week_page'])){		$_SESSION['time_this_week_page'] 		= 'by_activity';}
	if(!isset($_SESSION['time_this_month_page'])){		$_SESSION['time_this_month_page'] 		= 'by_activity';}
	if(!isset($_SESSION['time_past_year_page'])){		$_SESSION['time_past_year_page'] 		= 'by_revenue';}
*/

if(!isset($_SESSION['issues_page'])){					$_SESSION['issues_page'] 				= 'all';}
if(!isset($_SESSION['opportunities_page'])){			$_SESSION['opportunities_page'] 		= 'all';}
if(!isset($_SESSION['improvements_page'])){				$_SESSION['improvements_page'] 			= 'all';}
if(!isset($_SESSION['upgrades_page'])){					$_SESSION['upgrades_page'] 				= 'underway';}
if(!isset($_SESSION['results_page'])){					$_SESSION['results_page'] 				= 'productivity';}
if(!isset($_SESSION['financials_page'])){					$_SESSION['financials_page'] 				= 'cashflow';}

	if(!isset($_SESSION['financials_cashflow_page'])){			$_SESSION['financials_cashflow_page'] 			= 'actuals';}
	if(!isset($_SESSION['financials_profit_and_loss_page'])){	$_SESSION['financials_profit_and_loss_page'] 	= 'actuals';}
	if(!isset($_SESSION['financials_balance_sheet_page'])){		$_SESSION['financials_balance_sheet_page'] 		= 'actuals';}
	if(!isset($_SESSION['financials_worksheets_page'])){		$_SESSION['financials_worksheets_page'] 		= 'margins';}
	if(!isset($_SESSION['financials_cash_page'])){			$_SESSION['financials_cash_page'] 		= 'at_bank';}
	if(!isset($_SESSION['financials_revenue_page'])){		$_SESSION['financials_revenue_page'] 	= 'tracker';}
	if(!isset($_SESSION['financials_expenses_page'])){		$_SESSION['financials_expenses_page'] 	= 'total';}
	if(!isset($_SESSION['financials_billing_page'])){		$_SESSION['financials_billing_page'] 	= 'invoices';}	

if(!isset($_SESSION['reporting_page'])){					$_SESSION['reporting_page'] 				= '6_chart_A4';}

if(!isset($_SESSION['messages_page'])){					$_SESSION['messages_page'] 				= 'all';}
if(!isset($_SESSION['notifications_page'])){			$_SESSION['notifications_page'] 		= 'alerts';}
if(!isset($_SESSION['account_page'])){					$_SESSION['account_page'] 				= 'settings';}
	if(!isset($_SESSION['account_settings_page'])){		$_SESSION['account_settings_page']		= 'email_preferences';}
if(!isset($_SESSION['users_page'])){					$_SESSION['users_page']  				= 'regular_users';}

if(!isset($_SESSION['admin_page'])){					$_SESSION['admin_page'] 				= 'technology';}
	if(!isset($_SESSION['admin_management_page'])){		$_SESSION['admin_management_page']		= 'staff';}
	if(!isset($_SESSION['admin_financials_page'])){		$_SESSION['admin_financials_page']  		= 'overview';}
	if(!isset($_SESSION['admin_technology_page'])){		$_SESSION['admin_technology_page']		= 'support_requests';}	
	if(!isset($_SESSION['admin_knowledge_page'])){		$_SESSION['admin_knowledge_page'] 		= 'standard_engagement_timeline';}	
	if(!isset($_SESSION['admin_advice_page'])){			$_SESSION['admin_advice_page']  		= 'general';}
	if(!isset($_SESSION['admin_notes_page'])){			$_SESSION['admin_notes_page']  			= 'general_notes';}
if(!isset($_SESSION['call_page'])){						$_SESSION['call_page'] 					= 'pilot';}
if(!isset($_SESSION['talking_points_page'])){			$_SESSION['talking_points_page'] 		= 'effective_time';}
if(!isset($_SESSION['talking_points_chris_page'])){		$_SESSION['talking_points_chris_page'] 	= 'effective_time';}

if(!isset($_SESSION['legal_page'])){					$_SESSION['legal_page'] 				= 'privacy_policy';}
if(!isset($_SESSION['knowledgebase_page'])){			$_SESSION['knowledgebase_page'] 		= 'welcome';}

if(!isset($_SESSION['support_page'])){					$_SESSION['support_page'] 				= 'requests';}
?>