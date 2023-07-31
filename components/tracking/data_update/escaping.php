<?php
if(!isset($_SESSION)){session_start();}

function escape_tracking_variables($root_name, $arrays, $database_connection, $month_combo){
	$target = 'no';	
	for($i = 0; $i < count($month_combo) ; $i ++){	
		
		if(isset($_POST[$root_name.'_'.$month_combo[$i]])){
			$arrays[$root_name][$target][$i]	=	mysqli_real_escape_string($database_connection, $_POST[$root_name.'_'.$month_combo[$i]]);
		}
	}

	$target = 'yes';
	for($i = 0; $i < count($month_combo); $i ++){

	if(isset($_POST[$root_name.'_'.$month_combo[$i]])){
		$arrays[$root_name][$target][$i]	=	mysqli_real_escape_string($database_connection, $_POST[$root_name.'_target_'.$month_combo[$i]]);}
	}

	return $arrays;
}
//array_merge*/
$escaped_variables = array();
$tracking_variables = array('commission','sales','expenses','revenue','profit','income','hours','productivity','kpi_1','kpi_2','kpi_3','kpi_4','time_spent_by_user','financial_flow','related_kpi_a','related_kpi_b');

foreach($tracking_variables as $variable){
	$escaped_variables = array_merge(escape_tracking_variables($variable, 	$escaped_variables, $conn, $month_combo_reverse), $escaped_variables);
}

// echo '<pre>' , var_dump($escaped_variables) , '</pre>';
// exit();