<?php
if(!isset($_SESSION)){session_start();}
//original_version is in the archive of this folder


function escape_tracking_variables($root_name, $arrays, $database_connection, $month_combo){
		
	$target = 'no';	
	for($i = 0; $i <= 12; $i ++){	
	if(isset($_POST[$root_name.'_'.$month_combo[$i]])){$arrays[$root_name][$target][$i]	=	mysqli_real_escape_string($database_connection, $_POST[$root_name.'_'.$month_combo[$i]]);}
	}
	
	$target = 'yes';
	for($i = 6; $i <= 12; $i ++){
	if(isset($_POST[$root_name.'_'.$month_combo[$i]])){$arrays[$root_name][$target][$i]	=	mysqli_real_escape_string($database_connection, $_POST[$root_name.'_target_'.$month_combo[$i]]);}
	}




	return $arrays;
}
//array_merge*/
$escaped_variables = array();

$escaped_variables = array_merge(escape_tracking_variables('commission', 	$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('sales', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('expenses', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('revenue', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('profit', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('income', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('hours', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('productivity', 	$escaped_variables, $conn, $month_combo), $escaped_variables);

$escaped_variables = array_merge(escape_tracking_variables('kpi_1', $escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('kpi_2', $escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('kpi_3', $escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('kpi_4', $escaped_variables, $conn, $month_combo), $escaped_variables);

$escaped_variables = array_merge(escape_tracking_variables('time_spent_by_user', 	$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('financial_flow', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('related_kpi_a', 		$escaped_variables, $conn, $month_combo), $escaped_variables);
$escaped_variables = array_merge(escape_tracking_variables('related_kpi_b', 		$escaped_variables, $conn, $month_combo), $escaped_variables);


//AS AT 5:29 on the 22.01.21 There is no problem with the data coming through to this point.
//Submitting that data now is going to be the only remaining issue which requires it to come our of arrays not epicly long variables.

//echo '<pre>' , var_dump($escaped_variables ) , '</pre>';
//exit();