<?php
if(!isset($_SESSION)){session_start();}

if(isset($_POST['commission_target_'.$month_combo[6]])){$commission_target_6		=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[6]]);}
if(isset($_POST['commission_target_'.$month_combo[7]])){$commission_target_7		=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[7]]);}
if(isset($_POST['commission_target_'.$month_combo[8]])){$commission_target_8		=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[8]]);}
if(isset($_POST['commission_target_'.$month_combo[9]])){$commission_target_9		=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[9]]);}
if(isset($_POST['commission_target_'.$month_combo[10]])){$commission_target_10	=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[10]]);}
if(isset($_POST['commission_target_'.$month_combo[11]])){$commission_target_11	=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[11]]);}
if(isset($_POST['commission_target_'.$month_combo[12]])){$commission_target_12	=	mysqli_real_escape_string($conn, $_POST['commission_target_'.$month_combo[12]]);}

if(isset($_POST['commission_'.$month_combo[0]])){$commission_0	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[0]]);}
if(isset($_POST['commission_'.$month_combo[1]])){$commission_1	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[1]]);}
if(isset($_POST['commission_'.$month_combo[2]])){$commission_2	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[2]]);}
if(isset($_POST['commission_'.$month_combo[3]])){$commission_3	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[3]]);}
if(isset($_POST['commission_'.$month_combo[4]])){$commission_4	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[4]]);}
if(isset($_POST['commission_'.$month_combo[5]])){$commission_5	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[5]]);}
if(isset($_POST['commission_'.$month_combo[6]])){$commission_6	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[6]]);}
if(isset($_POST['commission_'.$month_combo[7]])){$commission_7	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[7]]);}
if(isset($_POST['commission_'.$month_combo[8]])){$commission_8	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[8]]);}
if(isset($_POST['commission_'.$month_combo[9]])){$commission_9	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[9]]);}
if(isset($_POST['commission_'.$month_combo[10]])){$commission_10	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[10]]);}
if(isset($_POST['commission_'.$month_combo[11]])){$commission_11	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[11]]);}
if(isset($_POST['commission_'.$month_combo[12]])){$commission_12	=	mysqli_real_escape_string($conn, $_POST['commission_'.$month_combo[12]]);}

if(isset($_POST['sales_target_'.$month_combo[6]])){$sales_target_6		=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[6]]);}
if(isset($_POST['sales_target_'.$month_combo[7]])){$sales_target_7		=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[7]]);}
if(isset($_POST['sales_target_'.$month_combo[8]])){$sales_target_8		=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[8]]);}
if(isset($_POST['sales_target_'.$month_combo[9]])){$sales_target_9		=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[9]]);}
if(isset($_POST['sales_target_'.$month_combo[10]])){$sales_target_10	=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[10]]);}
if(isset($_POST['sales_target_'.$month_combo[11]])){$sales_target_11	=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[11]]);}
if(isset($_POST['sales_target_'.$month_combo[12]])){$sales_target_12	=	mysqli_real_escape_string($conn, $_POST['sales_target_'.$month_combo[12]]);}

if(isset($_POST['sales_'.$month_combo[0]])){$sales_0	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[0]]);}
if(isset($_POST['sales_'.$month_combo[1]])){$sales_1	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[1]]);}
if(isset($_POST['sales_'.$month_combo[2]])){$sales_2	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[2]]);}
if(isset($_POST['sales_'.$month_combo[3]])){$sales_3	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[3]]);}
if(isset($_POST['sales_'.$month_combo[4]])){$sales_4	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[4]]);}
if(isset($_POST['sales_'.$month_combo[5]])){$sales_5	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[5]]);}
if(isset($_POST['sales_'.$month_combo[6]])){$sales_6	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[6]]);}
if(isset($_POST['sales_'.$month_combo[7]])){$sales_7	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[7]]);}
if(isset($_POST['sales_'.$month_combo[8]])){$sales_8	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[8]]);}
if(isset($_POST['sales_'.$month_combo[9]])){$sales_9	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[9]]);}
if(isset($_POST['sales_'.$month_combo[10]])){$sales_10	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[10]]);}
if(isset($_POST['sales_'.$month_combo[11]])){$sales_11	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[11]]);}
if(isset($_POST['sales_'.$month_combo[12]])){$sales_12	=	mysqli_real_escape_string($conn, $_POST['sales_'.$month_combo[12]]);}

if(isset($_POST['expenses_target_'.$month_combo[6]])){$expenses_target_6		=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[6]]);}
if(isset($_POST['expenses_target_'.$month_combo[7]])){$expenses_target_7		=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[7]]);}
if(isset($_POST['expenses_target_'.$month_combo[8]])){$expenses_target_8		=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[8]]);}
if(isset($_POST['expenses_target_'.$month_combo[9]])){$expenses_target_9		=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[9]]);}
if(isset($_POST['expenses_target_'.$month_combo[10]])){$expenses_target_10	=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[10]]);}
if(isset($_POST['expenses_target_'.$month_combo[11]])){$expenses_target_11	=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[11]]);}
if(isset($_POST['expenses_target_'.$month_combo[12]])){$expenses_target_12	=	mysqli_real_escape_string($conn, $_POST['expenses_target_'.$month_combo[12]]);}

if(isset($_POST['expenses_'.$month_combo[0]])){$expenses_0	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[0]]);}
if(isset($_POST['expenses_'.$month_combo[1]])){$expenses_1	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[1]]);}
if(isset($_POST['expenses_'.$month_combo[2]])){$expenses_2	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[2]]);}
if(isset($_POST['expenses_'.$month_combo[3]])){$expenses_3	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[3]]);}
if(isset($_POST['expenses_'.$month_combo[4]])){$expenses_4	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[4]]);}
if(isset($_POST['expenses_'.$month_combo[5]])){$expenses_5	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[5]]);}
if(isset($_POST['expenses_'.$month_combo[6]])){$expenses_6	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[6]]);}
if(isset($_POST['expenses_'.$month_combo[7]])){$expenses_7	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[7]]);}
if(isset($_POST['expenses_'.$month_combo[8]])){$expenses_8	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[8]]);}
if(isset($_POST['expenses_'.$month_combo[9]])){$expenses_9	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[9]]);}
if(isset($_POST['expenses_'.$month_combo[10]])){$expenses_10	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[10]]);}
if(isset($_POST['expenses_'.$month_combo[11]])){$expenses_11	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[11]]);}
if(isset($_POST['expenses_'.$month_combo[12]])){$expenses_12	=	mysqli_real_escape_string($conn, $_POST['expenses_'.$month_combo[12]]);}

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










