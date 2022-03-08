<?php
if(!isset($_SESSION)){session_start();}


//google chart scripts
	//this one in particluar will most liklely be only needed when using the page /time/ but that's not something we are at just yet 20.07.20
//	if($_SESSION['dreamboat_crew'] == 'yes'){require $_SERVER['DOCUMENT_ROOT']."/comparison/tests/time_allocation_to_income_improvement/charts/script_test.php";}
	
	if(check_primary_folder('home')){					require $_SERVER['DOCUMENT_ROOT']."/home/script_for_background/home_page_only.php";}	

/*
	if(check_primary_folder('map')){
		if(check_secondary_folder(	'edges')){		require $_SERVER['DOCUMENT_ROOT']."/map/edges/google_chart_script.php";}
	//just here for testing the clickable fucntion as comparison
	//		if(check_secondary_folder(	'edges')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/compiler.php";}
		if(check_secondary_folder(	'personal')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/compiler.php";}
		if(check_secondary_folder(	'business')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/compiler.php";}
		if(check_secondary_folder(	'economy')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/compiler.php";}
	}
*/

	//be careful NOT to add in a secondary folder here as much calculating gets done when in the /insights/preparation/
	if(check_primary_folder('insights')			            ){	require $_SERVER['DOCUMENT_ROOT']."/insights/pages/script_control.php";}	

	if(check_primary_folder('map')){
		if(check_secondary_folder(	'edges')){		require $_SERVER['DOCUMENT_ROOT']."/map/edges/google_chart_script.php";}
	//just here for testing the clickable fucntion as comparison
	//		if(check_secondary_folder(	'edges')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/compiler.php";}
/* CR 02/08/21 Deleted as no longer using google charts
		//road_signs_script
		if(check_secondary_folder(	'personal')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/current_version.php";}
		if(check_secondary_folder(	'business')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/current_version.php";}
		if(check_secondary_folder(	'economy')){	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/script/current_version.php";}
*/
	}


	if(check_primary_folder('walkthroughs')){
		require $_SERVER['DOCUMENT_ROOT']."/walkthroughs/other_samples_and_examples/gauge_script.php";



	}



	if(check_primary_folder(	'overview'	)){	
		require $_SERVER['DOCUMENT_ROOT']."/components/financials/demo/summary/script.php";
		//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_problem/script.php";
		require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/longditudinal/script.php";		
	}	



	if(check_folders_two_deep(	'time','this_week'	)){	require $_SERVER['DOCUMENT_ROOT']."/time/components/scripts/period_length/script.php";}	
	if(check_folders_two_deep(	'time','this_month'	)){	require $_SERVER['DOCUMENT_ROOT']."/time/components/scripts/period_length/script.php";}	
	if(check_folders_two_deep(	'time','past_year'	)){	require $_SERVER['DOCUMENT_ROOT']."/time/components/scripts/longditudinal/script.php";}	
	
	


	if(check_folders_two_deep(	'marketing','funnel'	)){	require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/funnel/script.php";}	
	if(check_folders_two_deep(	'marketing','funnel'	)){	require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/longditudinal/script.php";}	


	if(check_primary_folder(	'network'			)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations.php";}
	if(check_primary_folder(	'biz_dev'			)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations.php";}
	if(check_primary_folder(	'sales'				)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations.php";}
	
	if(check_folders_two_deep(	'sales','new_potentials'	)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";
										                        require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_chart_script.php";}
											 
	if(check_folders_two_deep(	'sales','potential_upsells'	)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";
										                        require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_chart_script.php";}
										
	if(check_folders_two_deep(	'management','clients'		)){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations.php";}
	
	if(check_primary_folder(	'activities'		)){	require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/script.php";}						
	if(check_primary_folder(	'issues'			)){	require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/script.php";}	
	if(check_primary_folder(	'upgrades'			)){	require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/script.php";}	
	
	if(	check_folders_two_deep('knowledgebase','system') 	  && 
		$_GET['tertiary_folder'] 	== 'versions'		){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/system/versions/chart_script/current_version.php";}	
	
	if(check_folders_two_deep('knowledgebase','abstract')			){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/include_all_scripts.php";}	
	if(check_folders_two_deep('knowledgebase','executive_summary')	){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/include_all_scripts.php";}	
	if(check_folders_two_deep('knowledgebase','economy')			){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/include_all_scripts.php";}
	
	if(check_primary_folder('slideshows') && check_secondary_folder('central_thesis') && check_tertiary_folder('zero')	){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_problem/script.php";}		
	if(check_primary_folder('slideshows') && check_secondary_folder('central_thesis') && check_tertiary_folder('one')	){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/script.php";}	
	if(check_primary_folder('slideshows') && check_secondary_folder('central_thesis') && check_tertiary_folder('two')	){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_target/script.php";}	

	if(check_primary_folder('problem')			            ){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/include_all_scripts.php";}
	if(check_primary_folder('solution')			            ){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/include_all_scripts.php";}	
	
	//if(check_folders_two_deep(	'components'	,'diagrams'		)){	require $_SERVER['DOCUMENT_ROOT']."/components/diagrams/development/test_builds/basic_diagram_play/google_chart_and_icon_overlap_script.php";}


	//CR 20.08.21 This is empty right now
	//require $_SERVER['DOCUMENT_ROOT']."/components/functions/javascript/required.php";
?>