<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/tracking/date_update_system/current_month_and_year_combo.php";
$first_six_date_combos_for_sql 	= ",".$month_combo[0].",".$month_combo[1].",".$month_combo[2].",".$month_combo[3].",".$month_combo[4].",".$month_combo[5];
$second_six_date_combos_for_sql = ",".$month_combo[6].",".$month_combo[7].",".$month_combo[8].",".$month_combo[9].",".$month_combo[10].",".$month_combo[11].",".$month_combo[12]; 
$all_the_dates = $first_six_date_combos_for_sql.$second_six_date_combos_for_sql;
$escapedPOST = array_map('mysql_real_escape_string', $_POST);

if(isset($_POST['revenue_target_'.$month_combo[6]])){$revenue_target_6		=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[6]]);}
if(isset($_POST['revenue_target_'.$month_combo[7]])){$revenue_target_7		=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[7]]);}
if(isset($_POST['revenue_target_'.$month_combo[8]])){$revenue_target_8		=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[8]]);}
if(isset($_POST['revenue_target_'.$month_combo[9]])){$revenue_target_9		=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[9]]);}
if(isset($_POST['revenue_target_'.$month_combo[10]])){$revenue_target_10	=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[10]]);}
if(isset($_POST['revenue_target_'.$month_combo[11]])){$revenue_target_11	=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[11]]);}
if(isset($_POST['revenue_target_'.$month_combo[12]])){$revenue_target_12	=	mysqli_real_escape_string($conn, $_POST['revenue_target_'.$month_combo[12]]);}

if(isset($_POST['revenue_'.$month_combo[0]])){$revenue_0	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[0]]);}
if(isset($_POST['revenue_'.$month_combo[1]])){$revenue_1	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[1]]);}
if(isset($_POST['revenue_'.$month_combo[2]])){$revenue_2	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[2]]);}
if(isset($_POST['revenue_'.$month_combo[3]])){$revenue_3	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[3]]);}
if(isset($_POST['revenue_'.$month_combo[4]])){$revenue_4	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[4]]);}
if(isset($_POST['revenue_'.$month_combo[5]])){$revenue_5	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[5]]);}
if(isset($_POST['revenue_'.$month_combo[6]])){$revenue_6	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[6]]);}
if(isset($_POST['revenue_'.$month_combo[7]])){$revenue_7	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[7]]);}
if(isset($_POST['revenue_'.$month_combo[8]])){$revenue_8	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[8]]);}
if(isset($_POST['revenue_'.$month_combo[9]])){$revenue_9	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[9]]);}
if(isset($_POST['revenue_'.$month_combo[10]])){$revenue_10	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[10]]);}
if(isset($_POST['revenue_'.$month_combo[11]])){$revenue_11	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[11]]);}
if(isset($_POST['revenue_'.$month_combo[12]])){$revenue_12	=	mysqli_real_escape_string($conn, $_POST['revenue_'.$month_combo[12]]);}

if(isset($_POST['profit_target_'.$month_combo[6]])){$profit_target_6	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[6]]);}
if(isset($_POST['profit_target_'.$month_combo[7]])){$profit_target_7	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[7]]);}
if(isset($_POST['profit_target_'.$month_combo[8]])){$profit_target_8	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[8]]);}
if(isset($_POST['profit_target_'.$month_combo[9]])){$profit_target_9	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[9]]);}
if(isset($_POST['profit_target_'.$month_combo[10]])){$profit_target_10	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[10]]);}
if(isset($_POST['profit_target_'.$month_combo[11]])){$profit_target_11	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[11]]);}
if(isset($_POST['profit_target_'.$month_combo[12]])){$profit_target_12	=	mysqli_real_escape_string($conn, $_POST['profit_target_'.$month_combo[12]]);}

if(isset($_POST['profit_'.$month_combo[0]])){$profit_0		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[0]]);}
if(isset($_POST['profit_'.$month_combo[1]])){$profit_1		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[1]]);}
if(isset($_POST['profit_'.$month_combo[2]])){$profit_2		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[2]]);}
if(isset($_POST['profit_'.$month_combo[3]])){$profit_3		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[3]]);}
if(isset($_POST['profit_'.$month_combo[4]])){$profit_4		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[4]]);}
if(isset($_POST['profit_'.$month_combo[5]])){$profit_5		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[5]]);}
if(isset($_POST['profit_'.$month_combo[6]])){$profit_6		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[6]]);}
if(isset($_POST['profit_'.$month_combo[7]])){$profit_7		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[7]]);}
if(isset($_POST['profit_'.$month_combo[8]])){$profit_8		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[8]]);}
if(isset($_POST['profit_'.$month_combo[9]])){$profit_9		=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[9]]);}
if(isset($_POST['profit_'.$month_combo[10]])){$profit_10	=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[10]]);}
if(isset($_POST['profit_'.$month_combo[11]])){$profit_11	=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[11]]);}
if(isset($_POST['profit_'.$month_combo[12]])){$profit_12	=	mysqli_real_escape_string($conn, $_POST['profit_'.$month_combo[12]]);}

if(isset($_POST['income_target_'.$month_combo[6]])){$income_target_6	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[6]]);}
if(isset($_POST['income_target_'.$month_combo[7]])){$income_target_7	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[7]]);}
if(isset($_POST['income_target_'.$month_combo[8]])){$income_target_8	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[8]]);}
if(isset($_POST['income_target_'.$month_combo[9]])){$income_target_9	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[9]]);}
if(isset($_POST['income_target_'.$month_combo[10]])){$income_target_10	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[10]]);}
if(isset($_POST['income_target_'.$month_combo[11]])){$income_target_11	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[11]]);}
if(isset($_POST['income_target_'.$month_combo[12]])){$income_target_12	=	mysqli_real_escape_string($conn, $_POST['income_target_'.$month_combo[12]]);}

if(isset($_POST['income_'.$month_combo[0]])){$income_0		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[0]]);}
if(isset($_POST['income_'.$month_combo[1]])){$income_1		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[1]]);}
if(isset($_POST['income_'.$month_combo[2]])){$income_2		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[2]]);}
if(isset($_POST['income_'.$month_combo[3]])){$income_3		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[3]]);}
if(isset($_POST['income_'.$month_combo[4]])){$income_4		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[4]]);}
if(isset($_POST['income_'.$month_combo[5]])){$income_5		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[5]]);}
if(isset($_POST['income_'.$month_combo[6]])){$income_6		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[6]]);}
if(isset($_POST['income_'.$month_combo[7]])){$income_7		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[7]]);}
if(isset($_POST['income_'.$month_combo[8]])){$income_8		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[8]]);}
if(isset($_POST['income_'.$month_combo[9]])){$income_9		=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[9]]);}
if(isset($_POST['income_'.$month_combo[10]])){$income_10	=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[10]]);}
if(isset($_POST['income_'.$month_combo[11]])){$income_11	=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[11]]);}
if(isset($_POST['income_'.$month_combo[12]])){$income_12	=	mysqli_real_escape_string($conn, $_POST['income_'.$month_combo[12]]);}

if(isset($_POST['hours_target_'.$month_combo[6]])){$hours_target_6	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[6]]);}
if(isset($_POST['hours_target_'.$month_combo[7]])){$hours_target_7	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[7]]);}
if(isset($_POST['hours_target_'.$month_combo[8]])){$hours_target_8	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[8]]);}
if(isset($_POST['hours_target_'.$month_combo[9]])){$hours_target_9	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[9]]);}
if(isset($_POST['hours_target_'.$month_combo[10]])){$hours_target_10	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[10]]);}
if(isset($_POST['hours_target_'.$month_combo[11]])){$hours_target_11	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[11]]);}
if(isset($_POST['hours_target_'.$month_combo[12]])){$hours_target_12	=	mysqli_real_escape_string($conn, $_POST['hours_target_'.$month_combo[12]]);}

if(isset($_POST['hours_'.$month_combo[0]])){$hours_0	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[0]]);}
if(isset($_POST['hours_'.$month_combo[1]])){$hours_1	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[1]]);}
if(isset($_POST['hours_'.$month_combo[2]])){$hours_2	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[2]]);}
if(isset($_POST['hours_'.$month_combo[3]])){$hours_3	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[3]]);}
if(isset($_POST['hours_'.$month_combo[4]])){$hours_4	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[4]]);}
if(isset($_POST['hours_'.$month_combo[5]])){$hours_5	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[5]]);}
if(isset($_POST['hours_'.$month_combo[6]])){$hours_6	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[6]]);}
if(isset($_POST['hours_'.$month_combo[7]])){$hours_7	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[7]]);}
if(isset($_POST['hours_'.$month_combo[8]])){$hours_8	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[8]]);}
if(isset($_POST['hours_'.$month_combo[9]])){$hours_9	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[9]]);}
if(isset($_POST['hours_'.$month_combo[10]])){$hours_10	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[10]]);}
if(isset($_POST['hours_'.$month_combo[11]])){$hours_11	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[11]]);}
if(isset($_POST['hours_'.$month_combo[12]])){$hours_12	=	mysqli_real_escape_string($conn, $_POST['hours_'.$month_combo[12]]);}

if(isset($_POST['productivity_target_'.$month_combo[6]])){$productivity_target_6	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[6]]);}
if(isset($_POST['productivity_target_'.$month_combo[7]])){$productivity_target_7	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[7]]);}
if(isset($_POST['productivity_target_'.$month_combo[8]])){$productivity_target_8	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[8]]);}
if(isset($_POST['productivity_target_'.$month_combo[9]])){$productivity_target_9	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[9]]);}
if(isset($_POST['productivity_target_'.$month_combo[10]])){$productivity_target_10	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[10]]);}
if(isset($_POST['productivity_target_'.$month_combo[11]])){$productivity_target_11	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[11]]);}
if(isset($_POST['productivity_target_'.$month_combo[12]])){$productivity_target_12	=	mysqli_real_escape_string($conn, $_POST['productivity_target_'.$month_combo[12]]);}

if(isset($_POST['productivity_'.$month_combo[0]])){$productivity_0	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[0]]);}
if(isset($_POST['productivity_'.$month_combo[1]])){$productivity_1	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[1]]);}
if(isset($_POST['productivity_'.$month_combo[2]])){$productivity_2	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[2]]);}
if(isset($_POST['productivity_'.$month_combo[3]])){$productivity_3	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[3]]);}
if(isset($_POST['productivity_'.$month_combo[4]])){$productivity_4	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[4]]);}
if(isset($_POST['productivity_'.$month_combo[5]])){$productivity_5	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[5]]);}
if(isset($_POST['productivity_'.$month_combo[6]])){$productivity_6	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[6]]);}
if(isset($_POST['productivity_'.$month_combo[7]])){$productivity_7	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[7]]);}
if(isset($_POST['productivity_'.$month_combo[8]])){$productivity_8	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[8]]);}
if(isset($_POST['productivity_'.$month_combo[9]])){$productivity_9	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[9]]);}
if(isset($_POST['productivity_'.$month_combo[10]])){$productivity_10	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[10]]);}
if(isset($_POST['productivity_'.$month_combo[11]])){$productivity_11	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[11]]);}
if(isset($_POST['productivity_'.$month_combo[12]])){$productivity_12	=	mysqli_real_escape_string($conn, $_POST['productivity_'.$month_combo[12]]);}

if(isset($_POST['kpi_1_'.$month_combo[0]])){$kpi_1_0	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[0]]);}
if(isset($_POST['kpi_1_'.$month_combo[1]])){$kpi_1_1	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[1]]);}
if(isset($_POST['kpi_1_'.$month_combo[2]])){$kpi_1_2	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[2]]);}
if(isset($_POST['kpi_1_'.$month_combo[3]])){$kpi_1_3	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[3]]);}
if(isset($_POST['kpi_1_'.$month_combo[4]])){$kpi_1_4	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[4]]);}
if(isset($_POST['kpi_1_'.$month_combo[5]])){$kpi_1_5	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[5]]);}
if(isset($_POST['kpi_1_'.$month_combo[6]])){$kpi_1_6	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[6]]);}
if(isset($_POST['kpi_1_'.$month_combo[7]])){$kpi_1_7	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[7]]);}
if(isset($_POST['kpi_1_'.$month_combo[8]])){$kpi_1_8	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[8]]);}
if(isset($_POST['kpi_1_'.$month_combo[9]])){$kpi_1_9	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[9]]);}
if(isset($_POST['kpi_1_'.$month_combo[10]])){$kpi_1_10	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[10]]);}
if(isset($_POST['kpi_1_'.$month_combo[11]])){$kpi_1_11	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[11]]);}
if(isset($_POST['kpi_1_'.$month_combo[12]])){$kpi_1_12	=	mysqli_real_escape_string($conn, $_POST['kpi_1_'.$month_combo[12]]);}

if(isset($_POST['kpi_1_target_'.$month_combo[6]])){$kpi_1_target_6	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[6]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[7]])){$kpi_1_target_7	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[7]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[8]])){$kpi_1_target_8	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[8]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[9]])){$kpi_1_target_9	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[9]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[10]])){$kpi_1_target_10	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[10]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[11]])){$kpi_1_target_11	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[11]]);}
if(isset($_POST['kpi_1_target_'.$month_combo[12]])){$kpi_1_target_12	=	mysqli_real_escape_string($conn, $_POST['kpi_1_target_'.$month_combo[12]]);}

if(isset($_POST['kpi_2_'.$month_combo[0]])){$kpi_2_0	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[0]]);}
if(isset($_POST['kpi_2_'.$month_combo[1]])){$kpi_2_1	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[1]]);}
if(isset($_POST['kpi_2_'.$month_combo[2]])){$kpi_2_2	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[2]]);}
if(isset($_POST['kpi_2_'.$month_combo[3]])){$kpi_2_3	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[3]]);}
if(isset($_POST['kpi_2_'.$month_combo[4]])){$kpi_2_4	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[4]]);}
if(isset($_POST['kpi_2_'.$month_combo[5]])){$kpi_2_5	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[5]]);}
if(isset($_POST['kpi_2_'.$month_combo[6]])){$kpi_2_6	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[6]]);}
if(isset($_POST['kpi_2_'.$month_combo[7]])){$kpi_2_7	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[7]]);}
if(isset($_POST['kpi_2_'.$month_combo[8]])){$kpi_2_8	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[8]]);}
if(isset($_POST['kpi_2_'.$month_combo[9]])){$kpi_2_9	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[9]]);}
if(isset($_POST['kpi_2_'.$month_combo[10]])){$kpi_2_10	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[10]]);}
if(isset($_POST['kpi_2_'.$month_combo[11]])){$kpi_2_11	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[11]]);}
if(isset($_POST['kpi_2_'.$month_combo[12]])){$kpi_2_12	=	mysqli_real_escape_string($conn, $_POST['kpi_2_'.$month_combo[12]]);}

if(isset($_POST['kpi_2_target_'.$month_combo[6]])){$kpi_2_target_6	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[6]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[7]])){$kpi_2_target_7	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[7]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[8]])){$kpi_2_target_8	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[8]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[9]])){$kpi_2_target_9	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[9]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[10]])){$kpi_2_target_10	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[10]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[11]])){$kpi_2_target_11	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[11]]);}
if(isset($_POST['kpi_2_target_'.$month_combo[12]])){$kpi_2_target_12	=	mysqli_real_escape_string($conn, $_POST['kpi_2_target_'.$month_combo[12]]);}

if(isset($_POST['kpi_3_'.$month_combo[0]])){$kpi_3_0	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[0]]);}
if(isset($_POST['kpi_3_'.$month_combo[1]])){$kpi_3_1	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[1]]);}
if(isset($_POST['kpi_3_'.$month_combo[2]])){$kpi_3_2	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[2]]);}
if(isset($_POST['kpi_3_'.$month_combo[3]])){$kpi_3_3	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[3]]);}
if(isset($_POST['kpi_3_'.$month_combo[4]])){$kpi_3_4	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[4]]);}
if(isset($_POST['kpi_3_'.$month_combo[5]])){$kpi_3_5	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[5]]);}
if(isset($_POST['kpi_3_'.$month_combo[6]])){$kpi_3_6	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[6]]);}
if(isset($_POST['kpi_3_'.$month_combo[7]])){$kpi_3_7	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[7]]);}
if(isset($_POST['kpi_3_'.$month_combo[8]])){$kpi_3_8	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[8]]);}
if(isset($_POST['kpi_3_'.$month_combo[9]])){$kpi_3_9	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[9]]);}
if(isset($_POST['kpi_3_'.$month_combo[10]])){$kpi_3_10	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[10]]);}
if(isset($_POST['kpi_3_'.$month_combo[11]])){$kpi_3_11	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[11]]);}
if(isset($_POST['kpi_3_'.$month_combo[12]])){$kpi_3_12	=	mysqli_real_escape_string($conn, $_POST['kpi_3_'.$month_combo[12]]);}

if(isset($_POST['kpi_3_target_'.$month_combo[6]])){$kpi_3_target_6	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[6]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[7]])){$kpi_3_target_7	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[7]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[8]])){$kpi_3_target_8	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[8]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[9]])){$kpi_3_target_9	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[9]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[10]])){$kpi_3_target_10	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[10]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[11]])){$kpi_3_target_11	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[11]]);}
if(isset($_POST['kpi_3_target_'.$month_combo[12]])){$kpi_3_target_12	=	mysqli_real_escape_string($conn, $_POST['kpi_3_target_'.$month_combo[12]]);}

if(isset($_POST['kpi_4_'.$month_combo[0]])){$kpi_4_0	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[0]]);}
if(isset($_POST['kpi_4_'.$month_combo[1]])){$kpi_4_1	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[1]]);}
if(isset($_POST['kpi_4_'.$month_combo[2]])){$kpi_4_2	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[2]]);}
if(isset($_POST['kpi_4_'.$month_combo[3]])){$kpi_4_3	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[3]]);}
if(isset($_POST['kpi_4_'.$month_combo[4]])){$kpi_4_4	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[4]]);}
if(isset($_POST['kpi_4_'.$month_combo[5]])){$kpi_4_5	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[5]]);}
if(isset($_POST['kpi_4_'.$month_combo[6]])){$kpi_4_6	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[6]]);}
if(isset($_POST['kpi_4_'.$month_combo[7]])){$kpi_4_7	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[7]]);}
if(isset($_POST['kpi_4_'.$month_combo[8]])){$kpi_4_8	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[8]]);}
if(isset($_POST['kpi_4_'.$month_combo[9]])){$kpi_4_9	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[9]]);}
if(isset($_POST['kpi_4_'.$month_combo[10]])){$kpi_4_10	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[10]]);}
if(isset($_POST['kpi_4_'.$month_combo[11]])){$kpi_4_11	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[11]]);}
if(isset($_POST['kpi_4_'.$month_combo[12]])){$kpi_4_12	=	mysqli_real_escape_string($conn, $_POST['kpi_4_'.$month_combo[12]]);}

if(isset($_POST['kpi_4_target_'.$month_combo[6]])){$kpi_4_target_6	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[6]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[7]])){$kpi_4_target_7	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[7]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[8]])){$kpi_4_target_8	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[8]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[9]])){$kpi_4_target_9	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[9]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[10]])){$kpi_4_target_10	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[10]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[11]])){$kpi_4_target_11	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[11]]);}
if(isset($_POST['kpi_4_target_'.$month_combo[12]])){$kpi_4_target_12	=	mysqli_real_escape_string($conn, $_POST['kpi_4_target_'.$month_combo[12]]);}















if(		$_SESSION['tracking_page'] == 'revenue_and_profit'
	OR 	$_SESSION['tracking_page'] == 'revenue_and_income'
	){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='revenue'";
	
	
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'revenue', 
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
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='revenue_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'revenue_target', 
	'".$revenue_target_6."',
	'".$revenue_target_7."',
	'".$revenue_target_8."',
	'".$revenue_target_9."',
	'".$revenue_target_10."',
	'".$revenue_target_11."',
	'".$revenue_target_12."')";
mysqli_query($conn, $sql);
}



if($_SESSION['tracking_page'] == 'revenue_and_profit'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='profit'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'profit', 
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
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='profit_target'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'profit_target', 
	'".$profit_target_6."',
	'".$profit_target_7."',
	'".$profit_target_8."',
	'".$profit_target_9."',
	'".$profit_target_10."',
	'".$profit_target_11."',
	'".$profit_target_12."')";
mysqli_query($conn, $sql);
	
	
	
}



if($_SESSION['tracking_page'] == 'revenue_and_income'
	OR $_SESSION['tracking_page'] == 'income_and_hours'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='income'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'income', 
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
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='income_target'";
	mysqli_query($conn, $sql);		
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'income_target', 
	'".$income_target_6."',
	'".$income_target_7."',
	'".$income_target_8."',
	'".$income_target_9."',
	'".$income_target_10."',
	'".$income_target_11."',
	'".$income_target_12."')";
mysqli_query($conn, $sql);
	
}




if($_SESSION['tracking_page'] == 'income_and_hours'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='hours_worked'";
	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'hours_worked', 
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
	
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='hours_worked_target'";
	mysqli_query($conn, $sql);	
	
$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'hours_worked_target', 
	'".$hours_target_6."',
	'".$hours_target_7."',
	'".$hours_target_8."',
	'".$hours_target_9."',
	'".$hours_target_10."',
	'".$hours_target_11."',
	'".$hours_target_12."')";
mysqli_query($conn, $sql);
}



if($_SESSION['tracking_page'] == 'productivity'	OR $_SESSION['tracking_page'] == 'income_and_hours'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='productivity'";
	mysqli_query($conn, $sql);
echo	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'productivity', 												
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
	
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='productivity_target'";


	mysqli_query($conn, $sql);	
echo	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'productivity_target', 
	'".$productivity_target_6."',
	'".$productivity_target_7."',
	'".$productivity_target_8."',
	'".$productivity_target_9."',
	'".$productivity_target_10."',
	'".$productivity_target_11."',
	'".$productivity_target_12."')";
	
	
mysqli_query($conn, $sql);
}






if($_SESSION['tracking_page'] == 'kpis'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_1'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_1', 
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
	
echo	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_1_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_1_target', 
	'".$kpi_1_target_6."',
	'".$kpi_1_target_7."',
	'".$kpi_1_target_8."',
	'".$kpi_1_target_9."',
	'".$kpi_1_target_10."',
	'".$kpi_1_target_11."',
	'".$kpi_1_target_12."')";
mysqli_query($conn, $sql);
}


if($_SESSION['tracking_page'] == 'kpis'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_2'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_2', 
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
	mysqli_query($conn, $sql);
	
echo	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_2_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_2_target', 
	'".$kpi_2_target_6."',
	'".$kpi_2_target_7."',
	'".$kpi_2_target_8."',
	'".$kpi_2_target_9."',
	'".$kpi_2_target_10."',
	'".$kpi_2_target_11."',
	'".$kpi_2_target_12."')";
mysqli_query($conn, $sql);
}

if($_SESSION['tracking_page'] == 'kpis'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_3'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_3', 
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
	
echo	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_3_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_3_target', 
		'".$kpi_3_target_6."',
		'".$kpi_3_target_7."',
		'".$kpi_3_target_8."',
		'".$kpi_3_target_9."',
		'".$kpi_3_target_10."',
		'".$kpi_3_target_11."',
		'".$kpi_3_target_12."')";
mysqli_query($conn, $sql);
}

if($_SESSION['tracking_page'] == 'kpis'){
	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_4'";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO tracking_inputs 
		(			      user_id, 	data_type ".$all_the_dates.")
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',     'kpi_4',  
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
	
echo	$sql = "UPDATE tracking_inputs SET latest_version_of_this_data_type = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND data_type='kpi_4_target'";


	mysqli_query($conn, $sql);	
	$sql = "INSERT INTO tracking_inputs 
	(			      user_id, 	data_type ".$second_six_date_combos_for_sql.")
VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',    'kpi_4_target', 
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


if($_SESSION['tracking_page'] == 'kpis'){

	$sql = "INSERT INTO tracking_kpi_settings 
		(client_id, kpi_1_title, kpi_1_units, kpi_1_max, kpi_1_min, kpi_2_title, kpi_2_units, kpi_2_max, kpi_2_min, kpi_3_title, kpi_3_units, kpi_3_max, kpi_3_min, kpi_4_title, kpi_4_units, kpi_4_max, kpi_4_min)
	VALUES  ('".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."', '".$kpi_1_title."','".$kpi_1_units."','".$kpi_1_max."','".$kpi_1_min."','".$kpi_2_title."','".$kpi_2_units."','".$kpi_2_max."','".$kpi_2_min."','".$kpi_3_title."','".$kpi_3_units."','".$kpi_3_max."','".$kpi_3_min."','".$kpi_4_title."','".$kpi_4_units."','".$kpi_4_max."','".$kpi_4_min."')";
	mysqli_query($conn, $sql);

}

header("Location: /tracking/");
exit();
?>