<?php
if(!isset($_SESSION)){session_start();}

			



//see head for appropraite calculations
if(check_primary_folder('activities')){		require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/div.php";}				
if(check_primary_folder('issues')){			require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/div.php";}	
if(check_primary_folder('upgrades')){		require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/charts/div.php";}	

$display_guiding_words = 'no';

if($_GET['primary_folder'] == 'activities' && tertiary_folders_name() != 'item'){
	$display_guiding_words = 'yes';
		if(secondary_folders_name() == 'doing'){	$string = "Doing the work";}
		if(secondary_folders_name() == 'planning'){	$string = "Planning ahead";}
		if(secondary_folders_name() == 'managing'){	$string = "Managing people, assets, processes";}
		if(secondary_folders_name() == 'growing'){	$string = "Selling, networking, marketing";}		
		if(secondary_folders_name() == 'administrating'){$string = "records, paperwork, Legal, financials";}
		if(secondary_folders_name() == 'supporting'){$string = "helping people, above, beside / around you";}		
}


if($display_guiding_words == 'yes'){
	echo "<span class='prompt-font blink_me' style='color:red;'>".$string."</span>";
	unset($string);
}


$left_done = 'no';


if(check_primary_folder('highlights')){
	require $_SERVER['DOCUMENT_ROOT']."/highlights/styling.php";




	echo "<div class='highlights_package'>
				<span class='highlights_number' style='color: green;'>1000</span>
				<br>
				<span class='highlights_text' style='color:green;'>New leads this month</span>
			</div>";
	echo "<div class='highlights_package'>
			<span class='highlights_number' style='color:red;'>	8% </span>
			<br>
			<span class='highlights_text' style='color:red;'>conversion ratio</span>
		</div>";
	echo "<div class='highlights_package'>
			<span class='highlights_number' style='color:orange;'>	80 </span>
			<br>
			<span class='highlights_text' style='color:orange;'>New sales this month</span>

	
	</div>";
	$left_done = 'yes';
}



if(check_folders_two_deep('marketing','funnel')){
	//or there is real data here that should replace this
	if($_SESSION['display_demo_charts'] == 'yes'){ 	require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/longditudinal/div.php";}
	$left_done = 'yes';
}
if(check_folders_two_deep('overview','display_no_menu')){
	//or there is real data here that should replace this
	if($_SESSION['display_demo_charts'] == 'yes'){ 	require $_SERVER['DOCUMENT_ROOT']."/components/marketing_funnel/demo/longditudinal/div.php";}
	$left_done = 'yes';
}


//CR 20.08.21 I don't believe thie one is being used any more right now
//if(	check_folders_two_deep('management','administration'){	require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php"; 		$left_done = 'yes';	}
if(	check_folders_two_deep('profile','details') OR
	check_folders_two_deep('business','details')){		require $_SERVER['DOCUMENT_ROOT']."/".$_GET['primary_folder']."/details/body.php";	$left_done = 'yes';	}
if(	check_folders_two_deep('users','details')){			require $_SERVER['DOCUMENT_ROOT']."/profile/details/body.php";	$left_done = 'yes';	}	
	
if(	check_primary_folder('network') 	OR 
	check_primary_folder('biz_dev')		OR 
	(check_primary_folder('sales') AND $_GET['secondary_folder'] != 'all') 	OR
	check_folders_two_deep('management','clients')){	require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_display.php";				}
							
if($left_done == 'no'){
	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
}