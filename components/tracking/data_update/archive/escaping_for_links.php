<?php
if(!isset($_SESSION)){session_start();}

//$root_name 	  = ;
//$target_yes_or_no = ;
 //if target then we go 6-12
 //if not target then we go 0-12 -- yes doubling up on the rest of it
 
 
//on this page the name roots are:
/*
time_spent_by_user
financial_flow
related_kpi_a
related_kpi_b
*/

//out of it we need a two dimensional array
$escaped_variables = array();
$escaped_variables['root_name'] = array();
$escaped_variables['root_name']['target_yes_no'] = array();
$escaped_variables['root_name']['target_yes_no']['month_count'] = array(); 
//0-12 for now. I'm sure in time this will expand to be far more significant, probably a unix month equivalent
//https://www.php.net/manual/en/function.date.php

/*
function escape_tracking_variables($root_name, $inbound_arrays){

	$target = 'no';	
	for($i = 0; $i <= 12; $i ++){	
	if(isset($_POST[$root_name.'_'.$month_combo[$i]])){$escaped_variables[$root_name][$target][$i]	=	mysqli_real_escape_string($conn, $_POST[$root_name.'_'.$month_combo[$i]]);}
	}
	
	$target = 'yes';
	for($i = 6; $i <= 12; $i ++){
	if(isset($_POST[$root_name.'_'.$month_combo[$i]])){$escaped_variables[$root_name][$target][$i]	=	mysqli_real_escape_string($conn, $_POST[$root_name.'_'.$month_combo[$i]]);}
	}

	return $new_arrays;
}
//array_merge*/

$escaped_variables = array_merge(escape_tracking_variables('time_spent_by_user', $escaped_variables), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('financial_flow', $escaped_variables), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('related_kpi_a', $escaped_variables), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('related_kpi_b', $escaped_variables), $escaped_variables);


/* Original code FYI.
if(isset($_POST['time_spent_by_user_'.$month_combo[0]])){$time_spent_by_user_0	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[0]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[1]])){$time_spent_by_user_1	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[1]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[2]])){$time_spent_by_user_2	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[2]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[3]])){$time_spent_by_user_3	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[3]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[4]])){$time_spent_by_user_4	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[4]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[5]])){$time_spent_by_user_5	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[5]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[6]])){$time_spent_by_user_6	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[6]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[7]])){$time_spent_by_user_7	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[7]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[8]])){$time_spent_by_user_8	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[8]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[9]])){$time_spent_by_user_9	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[9]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[10]])){$time_spent_by_user_10	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[10]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[11]])){$time_spent_by_user_11	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[11]]);}
if(isset($_POST['time_spent_by_user_'.$month_combo[12]])){$time_spent_by_user_12	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_'.$month_combo[12]]);}

if(isset($_POST['time_spent_by_user_target_'.$month_combo[6]])){$time_spent_by_user_target_6	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[6]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[7]])){$time_spent_by_user_target_7	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[7]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[8]])){$time_spent_by_user_target_8	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[8]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[9]])){$time_spent_by_user_target_9	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[9]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[10]])){$time_spent_by_user_target_10	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[10]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[11]])){$time_spent_by_user_target_11	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[11]]);}
if(isset($_POST['time_spent_by_user_target_'.$month_combo[12]])){$time_spent_by_user_target_12	=	mysqli_real_escape_string($conn, $_POST['time_spent_by_user_target_'.$month_combo[12]]);}
*/

if(isset($_POST['financial_flow_'.$month_combo[0]])){$financial_flow_0	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[0]]);}
if(isset($_POST['financial_flow_'.$month_combo[1]])){$financial_flow_1	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[1]]);}
if(isset($_POST['financial_flow_'.$month_combo[2]])){$financial_flow_2	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[2]]);}
if(isset($_POST['financial_flow_'.$month_combo[3]])){$financial_flow_3	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[3]]);}
if(isset($_POST['financial_flow_'.$month_combo[4]])){$financial_flow_4	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[4]]);}
if(isset($_POST['financial_flow_'.$month_combo[5]])){$financial_flow_5	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[5]]);}
if(isset($_POST['financial_flow_'.$month_combo[6]])){$financial_flow_6	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[6]]);}
if(isset($_POST['financial_flow_'.$month_combo[7]])){$financial_flow_7	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[7]]);}
if(isset($_POST['financial_flow_'.$month_combo[8]])){$financial_flow_8	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[8]]);}
if(isset($_POST['financial_flow_'.$month_combo[9]])){$financial_flow_9	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[9]]);}
if(isset($_POST['financial_flow_'.$month_combo[10]])){$financial_flow_10	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[10]]);}
if(isset($_POST['financial_flow_'.$month_combo[11]])){$financial_flow_11	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[11]]);}
if(isset($_POST['financial_flow_'.$month_combo[12]])){$financial_flow_12	=	mysqli_real_escape_string($conn, $_POST['financial_flow_'.$month_combo[12]]);}

if(isset($_POST['financial_flow_target_'.$month_combo[6]])){$financial_flow_target_6	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[6]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[7]])){$financial_flow_target_7	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[7]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[8]])){$financial_flow_target_8	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[8]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[9]])){$financial_flow_target_9	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[9]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[10]])){$financial_flow_target_10	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[10]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[11]])){$financial_flow_target_11	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[11]]);}
if(isset($_POST['financial_flow_target_'.$month_combo[12]])){$financial_flow_target_12	=	mysqli_real_escape_string($conn, $_POST['financial_flow_target_'.$month_combo[12]]);}

if(isset($_POST['related_kpi_a_'.$month_combo[0]])){$related_kpi_a_0	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[0]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[1]])){$related_kpi_a_1	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[1]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[2]])){$related_kpi_a_2	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[2]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[3]])){$related_kpi_a_3	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[3]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[4]])){$related_kpi_a_4	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[4]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[5]])){$related_kpi_a_5	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[5]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[6]])){$related_kpi_a_6	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[6]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[7]])){$related_kpi_a_7	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[7]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[8]])){$related_kpi_a_8	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[8]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[9]])){$related_kpi_a_9	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[9]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[10]])){$related_kpi_a_10	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[10]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[11]])){$related_kpi_a_11	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[11]]);}
if(isset($_POST['related_kpi_a_'.$month_combo[12]])){$related_kpi_a_12	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_'.$month_combo[12]]);}

if(isset($_POST['related_kpi_a_target_'.$month_combo[6]])){$related_kpi_a_target_6	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[6]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[7]])){$related_kpi_a_target_7	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[7]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[8]])){$related_kpi_a_target_8	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[8]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[9]])){$related_kpi_a_target_9	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[9]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[10]])){$related_kpi_a_target_10	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[10]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[11]])){$related_kpi_a_target_11	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[11]]);}
if(isset($_POST['related_kpi_a_target_'.$month_combo[12]])){$related_kpi_a_target_12	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_target_'.$month_combo[12]]);}

if(isset($_POST['related_kpi_b_'.$month_combo[0]])){$related_kpi_b_0	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[0]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[1]])){$related_kpi_b_1	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[1]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[2]])){$related_kpi_b_2	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[2]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[3]])){$related_kpi_b_3	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[3]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[4]])){$related_kpi_b_4	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[4]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[5]])){$related_kpi_b_5	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[5]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[6]])){$related_kpi_b_6	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[6]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[7]])){$related_kpi_b_7	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[7]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[8]])){$related_kpi_b_8	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[8]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[9]])){$related_kpi_b_9	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[9]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[10]])){$related_kpi_b_10	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[10]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[11]])){$related_kpi_b_11	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[11]]);}
if(isset($_POST['related_kpi_b_'.$month_combo[12]])){$related_kpi_b_12	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_'.$month_combo[12]]);}

if(isset($_POST['related_kpi_b_target_'.$month_combo[6]])){$related_kpi_b_target_6	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[6]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[7]])){$related_kpi_b_target_7	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[7]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[8]])){$related_kpi_b_target_8	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[8]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[9]])){$related_kpi_b_target_9	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[9]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[10]])){$related_kpi_b_target_10	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[10]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[11]])){$related_kpi_b_target_11	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[11]]);}
if(isset($_POST['related_kpi_b_target_'.$month_combo[12]])){$related_kpi_b_target_12	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_target_'.$month_combo[12]]);}