<?php
if(!isset($_SESSION)){session_start();}

//this is where check primary and secondary folders come from
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";

$right_done = 'no';

if(check_folders_two_deep('marketing','funnel')){
	//or there is real data here that should replace this
	if($_SESSION['display_demo_charts'] == 'yes'){ require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/funnel/div.php"; }
	$right_done = 'yes';	
}
if(check_folders_two_deep('overview','display_no_menu')){
	//or there is real data here that should replace this
	if($_SESSION['display_demo_charts'] == 'yes'){ require $_SERVER['DOCUMENT_ROOT']."/components/financials/demo/summary/div.php"; }
	$right_done = 'yes';	
}


if(check_primary_folder('highlights')){
	require $_SERVER['DOCUMENT_ROOT']."/highlights/styling.php";




	echo "<div class='highlights_package' style='margin-top: 7vh;'>
				<span class='highlights_number' style='color: orange;'>$80,000</span>
				<br>
				<span class='highlights_text' style='color: orange;'>Revenue this month</span>
			</div>";
	echo "<div class='highlights_package'>
			<span class='highlights_number' style='color: #32a852'>	10% </span>
			<br>
			<span class='highlights_text' style='color: #32a852'>Net Margin last month</span>
		</div>";

	$right_done = 'yes';
}




if(check_folders_two_deep('management','administration')){	$right_done = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";}
if(check_folders_two_deep('profile','reviews')){			$right_done = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/profile/reviews/".$_GET['tertiary_folder']."/display.php";}				

if(	check_folders_two_deep('profile',	'details') 		OR
	check_folders_two_deep('business', 	'details')  	OR
	check_folders_two_deep('users',		'details') 			){	$right_done = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/".$_GET['primary_folder']."_".$_GET['secondary_folder'].".php";}	
if(	check_folders_two_deep('sales',		'new_potentials') 		OR
	check_folders_two_deep('sales',		'potential_upsells')	){
							   	//RIGHT DONE ISN'T MARKED YES WITHIN SALES BECAUSE WE WANT TO DISPLAY THE LIST UNDER THE CHARTS ISN'T DONE WITHIN	
						   		//$right_done = 'yes';
											//see head for appropraite calculations
															require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_display.php";
															echo "<div style='height:80px;>&nbsp;</div>";}
if(	check_folders_two_deep('interrogation','all')){	require $_SERVER['DOCUMENT_ROOT']."/interrogation/components/rhs_links.php"; $right_done = 'yes';}
											
//	echo $right_done;exit();													
if($right_done == 'no'){
	require $_SERVER['DOCUMENT_ROOT']."/components/items/lists/full_color_full_box.php";
}