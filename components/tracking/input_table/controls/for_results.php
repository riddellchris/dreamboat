<?php
if(!isset($_SESSION)){session_start();}


if(	
	$_GET['secondary_folder'] != 'inputs' AND
	$_SESSION['results_page'] == 'productivity'){
	if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_1'){	$variable_name = 'kpi_1';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_2'){	$variable_name = 'kpi_2';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_3'){	$variable_name = 'kpi_3';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_4'){	$variable_name = 'kpi_4';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'sales'){	$variable_name = 'sales';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'commission'){	$variable_name = 'commission';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'revenue'){	$variable_name = 'revenue';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'profit'){	$variable_name = 'profit';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
	if($_SESSION['viewing_client_what_is_productivity'] == 'income'){	$variable_name = 'income';	require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}

}

if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'kpis'){		
							$variable_name = 'kpi_1';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';
							$variable_name = 'kpi_2';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';
							$variable_name = 'kpi_3';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';
							$variable_name = 'kpi_4';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';							
							}

							
//secondary_folder == 'inputs' is because this should display on the inputs page just as much as in the charting page							
if(	$_GET['secondary_folder'] == 'inputs' 			OR
	$_SESSION['results_page'] == 'sales' ){	$variable_name = 'sales';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'commission'){	$variable_name = 'commission';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}	
	
	
	
	
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'financials'){	$variable_name = 'revenue';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}

if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'financials'){	$variable_name = 'expenses';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'financials'){	$variable_name = 'profit';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'work' ){			$variable_name = 'income';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'work' OR
	$_SESSION['results_page'] == 'productivity'	){	$variable_name = 'hours';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'productivity' OR
   	$_SESSION['results_page'] == 'income_and_hours'	){	$variable_name = 'productivity';require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';}