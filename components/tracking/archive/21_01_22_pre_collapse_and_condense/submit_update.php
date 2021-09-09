<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/compile_insert_query_values.php";

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
$first_six_date_combos_for_sql 	= ",".$month_combo[0].",".$month_combo[1].",".$month_combo[2].",".$month_combo[3].",".$month_combo[4].",".$month_combo[5];
$second_six_date_combos_for_sql = ",".$month_combo[6].",".$month_combo[7].",".$month_combo[8].",".$month_combo[9].",".$month_combo[10].",".$month_combo[11].",".$month_combo[12]; 
$all_the_dates = $first_six_date_combos_for_sql.$second_six_date_combos_for_sql;
$escapedPOST = array_map('mysql_real_escape_string', $_POST);


require $_SERVER['DOCUMENT_ROOT']."/components/tracking/submit_update_pieces/escaping_for_results.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/submit_update_pieces/escaping_for_links.php";


function update_all_so_far_as_no($database, $user_id, $other_conditions){
	if($other_conditions != "none"){

	
	}
}




if(		
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'commission' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='commission'";
	
	
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'commission', 
		'".$commission_0."',
		'".$commission_1."',
		'".$commission_2."',
		'".$commission_3."',
		'".$commission_4."',
		'".$commission_5."',
		'".$commission_6."',
		'".$commission_7."',
		'".$commission_8."',
		'".$commission_9."',
		'".$commission_10."',
		'".$commission_11."',
		'".$commission_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='commission_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'commission_target', 
	'".$commission_target_6."',
	'".$commission_target_7."',
	'".$commission_target_8."',
	'".$commission_target_9."',
	'".$commission_target_10."',
	'".$commission_target_11."',
	'".$commission_target_12."')";
mysqli_query($conn, $sql);
}

if($_SESSION['results_page'] == 'productivity' OR	
	$_SESSION['results_page'] == 'sales' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='sales'";
	
	
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'sales', 
		'".$sales_0."',
		'".$sales_1."',
		'".$sales_2."',
		'".$sales_3."',
		'".$sales_4."',
		'".$sales_5."',
		'".$sales_6."',
		'".$sales_7."',
		'".$sales_8."',
		'".$sales_9."',
		'".$sales_10."',
		'".$sales_11."',
		'".$sales_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='sales_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'sales_target', 
	'".$sales_target_6."',
	'".$sales_target_7."',
	'".$sales_target_8."',
	'".$sales_target_9."',
	'".$sales_target_10."',
	'".$sales_target_11."',
	'".$sales_target_12."')";
mysqli_query($conn, $sql);
}

if(		$_SESSION['results_page'] == 'finances' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='expenses'";
	
	
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'expenses', 
		'".$expenses_0."',
		'".$expenses_1."',
		'".$expenses_2."',
		'".$expenses_3."',
		'".$expenses_4."',
		'".$expenses_5."',
		'".$expenses_6."',
		'".$expenses_7."',
		'".$expenses_8."',
		'".$expenses_9."',
		'".$expenses_10."',
		'".$expenses_11."',
		'".$expenses_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='expenses_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'expenses_target', 
	'".$expenses_target_6."',
	'".$expenses_target_7."',
	'".$expenses_target_8."',
	'".$expenses_target_9."',
	'".$expenses_target_10."',
	'".$expenses_target_11."',
	'".$expenses_target_12."')";
mysqli_query($conn, $sql);
}




if(	$_SESSION['results_page'] == 'productivity' OR
	$_SESSION['results_page'] == 'finances' OR
		$_SESSION['results_page'] == 'inputs'	
	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='revenue'";
	
	
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'revenue', 
		'".$revenue_0."',
		'".$revenue_1."',
		'".$revenue_2."',
		'".$revenue_3."',
		'".$revenue_4."',
		'".$revenue_5."',
		'".$revenue_6."',
		'".$revenue_7."',
		'".$revenue_8."',
		'".$revenue_9."',
		'".$revenue_10."',
		'".$revenue_11."',
		'".$revenue_12."')";
	mysqli_query($conn, $sql);
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='revenue_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'revenue_target', 
	'".$revenue_target_6."',
	'".$revenue_target_7."',
	'".$revenue_target_8."',
	'".$revenue_target_9."',
	'".$revenue_target_10."',
	'".$revenue_target_11."',
	'".$revenue_target_12."')";
mysqli_query($conn, $sql);
}



if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'finances' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='profit'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'profit', 
		'".$profit_0."',
		'".$profit_1."',
		'".$profit_2."',
		'".$profit_3."',
		'".$profit_4."',
		'".$profit_5."',
		'".$profit_6."',
		'".$profit_7."',
		'".$profit_8."',
		'".$profit_9."',
		'".$profit_10."',
		'".$profit_11."',		
		'".$profit_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='profit_target'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'profit_target', 
	'".$profit_target_6."',
	'".$profit_target_7."',
	'".$profit_target_8."',
	'".$profit_target_9."',
	'".$profit_target_10."',
	'".$profit_target_11."',
	'".$profit_target_12."')";
mysqli_query($conn, $sql);
	
	
	
}



if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'revenue_and_income'
	OR $_SESSION['results_page'] == 'work' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='income'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'income', 
		'".$income_0."',
		'".$income_1."',
		'".$income_2."',
		'".$income_3."',
		'".$income_4."',
		'".$income_5."',
		'".$income_6."',
		'".$income_7."',
		'".$income_8."',
		'".$income_9."',
		'".$income_10."',
		'".$income_11."',		
		'".$income_12."')";
	mysqli_query($conn, $sql);
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='income_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'income_target', 
	'".$income_target_6."',
	'".$income_target_7."',
	'".$income_target_8."',
	'".$income_target_9."',
	'".$income_target_10."',
	'".$income_target_11."',
	'".$income_target_12."')";
mysqli_query($conn, $sql);
	
}




if(

$_SESSION['results_page'] == 'work' OR
	$_SESSION['results_page'] == 'productivity' OR
	
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='hours'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'hours', 
		'".$hours_0."',
		'".$hours_1."',
		'".$hours_2."',
		'".$hours_3."',
		'".$hours_4."',
		'".$hours_5."',
		'".$hours_6."',
		'".$hours_7."',
		'".$hours_8."',
		'".$hours_9."',
		'".$hours_10."',
		'".$hours_11."',		
		'".$hours_12."')";
	mysqli_query($conn, $sql);
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='hours_target'";
	mysqli_query($conn, $sql);	
	
$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'hours_target', 
	'".$hours_target_6."',
	'".$hours_target_7."',
	'".$hours_target_8."',
	'".$hours_target_9."',
	'".$hours_target_10."',
	'".$hours_target_11."',
	'".$hours_target_12."')";
mysqli_query($conn, $sql);
}



if($_SESSION['results_page'] == 'productivity'	OR $_SESSION['results_page'] == 'work' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='productivity'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'productivity', 												
		'".$productivity_0."',
		'".$productivity_1."',
		'".$productivity_2."',
		'".$productivity_3."',
		'".$productivity_4."',
		'".$productivity_5."',
		'".$productivity_6."',
		'".$productivity_7."',
		'".$productivity_8."',
		'".$productivity_9."',
		'".$productivity_10."',
		'".$productivity_11."',
		'".$productivity_12."'
		)";
		
		
		
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='productivity_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'productivity_target', 
	'".$productivity_target_6."',
	'".$productivity_target_7."',
	'".$productivity_target_8."',
	'".$productivity_target_9."',
	'".$productivity_target_10."',
	'".$productivity_target_11."',
	'".$productivity_target_12."')";
	
	
mysqli_query($conn, $sql);
}






if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'kpis' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_1'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_1', 
		'".$kpi_1_0."',
		'".$kpi_1_1."',
		'".$kpi_1_2."',
		'".$kpi_1_3."',
		'".$kpi_1_4."',
		'".$kpi_1_5."',
		'".$kpi_1_6."',
		'".$kpi_1_7."',
		'".$kpi_1_8."',
		'".$kpi_1_9."',
		'".$kpi_1_10."',
		'".$kpi_1_11."',		
		'".$kpi_1_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_1_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_1_target', 
	'".$kpi_1_target_6."',
	'".$kpi_1_target_7."',
	'".$kpi_1_target_8."',
	'".$kpi_1_target_9."',
	'".$kpi_1_target_10."',
	'".$kpi_1_target_11."',
	'".$kpi_1_target_12."')";
	//echo $sql;
	//exit();
mysqli_query($conn, $sql);
}


if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'kpis' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_2'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_2', 
		'".$kpi_2_0."',
		'".$kpi_2_1."',
		'".$kpi_2_2."',
		'".$kpi_2_3."',
		'".$kpi_2_4."',
		'".$kpi_2_5."',
		'".$kpi_2_6."',
		'".$kpi_2_7."',
		'".$kpi_2_8."',
		'".$kpi_2_9."',
		'".$kpi_2_10."',
		'".$kpi_2_11."',		
		'".$kpi_2_12."')";
		
		
//		echo $sql;
//		
//		echo "<Br>";
//echo '<pre>' , var_dump($_POST) , '</pre>';
//		exit();
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_2_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_2_target', 
	'".$kpi_2_target_6."',
	'".$kpi_2_target_7."',
	'".$kpi_2_target_8."',
	'".$kpi_2_target_9."',
	'".$kpi_2_target_10."',
	'".$kpi_2_target_11."',
	'".$kpi_2_target_12."')";
mysqli_query($conn, $sql);
}

if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'kpis' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_3'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_3', 
		'".$kpi_3_0."',
		'".$kpi_3_1."',
		'".$kpi_3_2."',
		'".$kpi_3_3."',
		'".$kpi_3_4."',
		'".$kpi_3_5."',
		'".$kpi_3_6."',
		'".$kpi_3_7."',
		'".$kpi_3_8."',
		'".$kpi_3_9."',
		'".$kpi_3_10."',
		'".$kpi_3_11."',		
		'".$kpi_3_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_3_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_3_target', 
		'".$kpi_3_target_6."',
		'".$kpi_3_target_7."',
		'".$kpi_3_target_8."',
		'".$kpi_3_target_9."',
		'".$kpi_3_target_10."',
		'".$kpi_3_target_11."',
		'".$kpi_3_target_12."')";
mysqli_query($conn, $sql);
}

if(
$_SESSION['results_page'] == 'productivity' OR
$_SESSION['results_page'] == 'kpis' OR
		$_SESSION['results_page'] == 'inputs'	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_4'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".$_SESSION['viewing_client_id']."',     'kpi_4',  
		'".$kpi_4_0."',
		'".$kpi_4_1."',
		'".$kpi_4_2."',
		'".$kpi_4_3."',
		'".$kpi_4_4."',
		'".$kpi_4_5."',
		'".$kpi_4_6."',
		'".$kpi_4_7."',
		'".$kpi_4_8."',
		'".$kpi_4_9."',
		'".$kpi_4_10."',
		'".$kpi_4_11."',
		'".$kpi_4_12."')";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND data_type='kpi_4_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".$_SESSION['viewing_client_id']."',    'kpi_4_target', 
	'".$kpi_4_target_6."',
	'".$kpi_4_target_7."',
	'".$kpi_4_target_8."',
	'".$kpi_4_target_9."',
	'".$kpi_4_target_10."',
	'".$kpi_4_target_11."',
	'".$kpi_4_target_12."')";
mysqli_query($conn, $sql);
}














//and finally we'll leave this for now to ensure that updating takes place as appropriate.
if(isset($_POST['kpi_1_title']	)){$kpi_1_title	=	mysqli_real_escape_string($conn, $_POST['kpi_1_title']);}
if(isset($_POST['kpi_1_units']	)){$kpi_1_units	=	mysqli_real_escape_string($conn, $_POST['kpi_1_units']);}
if(isset($_POST['kpi_1_max']	)){$kpi_1_max	=	mysqli_real_escape_string($conn, $_POST['kpi_1_max']);}
if(isset($_POST['kpi_1_min']	)){$kpi_1_min	=	mysqli_real_escape_string($conn, $_POST['kpi_1_min']);}
if(isset($_POST['kpi_2_title']	)){$kpi_2_title	=	mysqli_real_escape_string($conn, $_POST['kpi_2_title']);}
if(isset($_POST['kpi_2_units']	)){$kpi_2_units	=	mysqli_real_escape_string($conn, $_POST['kpi_2_units']);}
if(isset($_POST['kpi_2_max']	)){$kpi_2_max	=	mysqli_real_escape_string($conn, $_POST['kpi_2_max']);}
if(isset($_POST['kpi_2_min']	)){$kpi_2_min	=	mysqli_real_escape_string($conn, $_POST['kpi_2_min']);}
if(isset($_POST['kpi_3_title']	)){$kpi_3_title	=	mysqli_real_escape_string($conn, $_POST['kpi_3_title']);}
if(isset($_POST['kpi_3_units']	)){$kpi_3_units	=	mysqli_real_escape_string($conn, $_POST['kpi_3_units']);}
if(isset($_POST['kpi_3_max']	)){$kpi_3_max	=	mysqli_real_escape_string($conn, $_POST['kpi_3_max']);}
if(isset($_POST['kpi_3_min']	)){$kpi_3_min	=	mysqli_real_escape_string($conn, $_POST['kpi_3_min']);}
if(isset($_POST['kpi_4_title']	)){$kpi_4_title	=	mysqli_real_escape_string($conn, $_POST['kpi_4_title']);}
if(isset($_POST['kpi_4_units']	)){$kpi_4_units	=	mysqli_real_escape_string($conn, $_POST['kpi_4_units']);}
if(isset($_POST['kpi_4_max']	)){$kpi_4_max	=	mysqli_real_escape_string($conn, $_POST['kpi_4_max']);}
if(isset($_POST['kpi_4_min']	)){$kpi_4_min	=	mysqli_real_escape_string($conn, $_POST['kpi_4_min']);}

if(isset($_POST['related_kpi_a_title']	)){$related_kpi_a_title	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_title']);}
if(isset($_POST['related_kpi_a_units']	)){$related_kpi_a_units	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_units']);}
if(isset($_POST['related_kpi_a_max']	)){$related_kpi_a_max	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_max']);}
if(isset($_POST['related_kpi_a_min']	)){$related_kpi_a_min	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_min']);}
if(isset($_POST['related_kpi_b_title']	)){$related_kpi_b_title	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_title']);}
if(isset($_POST['related_kpi_b_units']	)){$related_kpi_b_units	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_units']);}
if(isset($_POST['related_kpi_b_max']	)){$related_kpi_b_max	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_max']);}
if(isset($_POST['related_kpi_b_min']	)){$related_kpi_b_min	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_min']);}


if($_SESSION['results_page'] == 'kpis' OR
		$_SESSION['results_page'] == 'inputs'	){

	$sql = "INSERT INTO tracking_kpi_settings 
		(client_id, 
		 kpi_1_title, 
		 kpi_1_units, 
		 kpi_1_max, 
		 kpi_1_min, 
		 kpi_2_title, 
		 kpi_2_units, 
		 kpi_2_max, 
		 kpi_2_min, 
		 kpi_3_title, 
		 kpi_3_units, 
		 kpi_3_max, 
		 kpi_3_min, 
		 kpi_4_title, 
		 kpi_4_units, 
		 kpi_4_max, 
		 kpi_4_min)
	VALUES  (	'".$_SESSION['viewing_client_id']."', 				
			'".$kpi_1_title."',
			'".$kpi_1_units."',
			'".$kpi_1_max."',
			'".$kpi_1_min."',
			'".$kpi_2_title."',
			'".$kpi_2_units."',
			'".$kpi_2_max."',
			'".$kpi_2_min."',
			'".$kpi_3_title."',
			'".$kpi_3_units."',
			'".$kpi_3_max."',
			'".$kpi_3_min."',
			'".$kpi_4_title."',
			'".$kpi_4_units."',
			'".$kpi_4_max."',
			'".$kpi_4_min."')";
	
	//echo $sql;
	//exit();
	mysqli_query($conn, $sql);

}






if(isset($_POST['what_is_productivity'])){
	$_SESSION['viewing_client_what_is_productivity'] = $_POST['what_is_productivity'];
	$sql = "UPDATE user_account_details SET what_is_productivity = '".mysqli_real_escape_string($conn,$_POST['what_is_productivity'])."' WHERE user_id = '".$_SESSION['viewing_client_id']."' ";
	mysqli_query($conn, $sql);
//exit();


}


header("Location: ".$_SESSION['this_page']);
exit();
?>