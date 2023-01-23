<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/compile_insert_query_values.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";

//month combo comes from the file /components/tracking/date_update_system/current_month_and_year_combo.php
function dates_combo($target_or_not, $month_combo){
	$sql = "";
	foreach($month_combo as $value){
		$sql .= $value.",";
	};
	$sql = substr($sql, 0, -1);
	return $sql;
}

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/data_update/escaping.php";


function make_not_last_version_of_tracking_data($data_type, $target_or_not, $database_connection){
	$sql = "UPDATE tracking_inputs 
		SET latest_version_of_this_data_type = 'no' 
		WHERE user_id = '".mysqli_real_escape_string($database_connection, $_SESSION['viewing_client_id'])."' 
		AND data_type='".$data_type;		
	if($target_or_not == 'yes'){$sql .="_target' AND target_yes_no = 'yes'";}else{
		$sql .="' AND target_yes_no = 'no'";
	}	
	mysqli_query($database_connection, $sql);
}

function start_of_input_query($data_type, $target_or_not, $escaped_variables, $month_combo, $database_connection){
	$sql = "INSERT INTO tracking_inputs (user_id, data_type, target_yes_no, ";
	
	if($target_or_not == 'yes'){
		$sql .= dates_combo('yes', 	$month_combo);
	}else{
		$sql .= dates_combo('no', $month_combo);
	}

	$sql .= ") VALUES('".mysqli_real_escape_string($database_connection, $_SESSION['viewing_client_id'])."','".$data_type;
	if($target_or_not == 'yes'){	$sql .= "_target";}	
	$sql .= "', '".$target_or_not."',";

	return $sql;
}

function end_of_input_query($data_type, $target_or_not, $escaped_variables,$month_combo){
	// if($target_or_not == 'yes'){$for_start = 6;}
	// else{$for_start = 0;}
	
	// if($target_or_not == 'yes'){$target = 'yes';}
	// else{$target = 'no';}
		if($target_or_not == 'yes'){
			// $for_start = 6;
			$for_start = 0;
			$target = 'yes';
		}else{
			$for_start = 0;
			$target = 'no';
		}
	$root_name = $data_type;
	
	$sql = '';
	for($i = $for_start; $i < count($month_combo); $i++){
		$sql .= "'".$escaped_variables[$root_name][$target][$i]."'";
		if($i < count($month_combo)-1){$sql .= ",";}
		else{$sql .= ")";}
	}
	
	return $sql;
}

function update_and_submit($data_type, $database_connection, $month_combo, $escaped_variables){
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";

	//run both the following queries twice:
		//once for the target data
		//once for the non-target data

		$target = 'yes';
		for($i = 1; $i <= 2; $i ++){
			make_not_last_version_of_tracking_data($data_type, $target, $database_connection);		
			$sql =  start_of_input_query($data_type, $target, $escaped_variables, $month_combo_reverse, $database_connection);
			$sql .= end_of_input_query($data_type, $target, $escaped_variables,$month_combo);	
			
			mysqli_query($database_connection, $sql);		
			
			$target = 'no';
		}

		
}

function check_array_keys($data_type, $array_keys_array){

	$number_of_array_keys = count($array_keys_array);
	$return_value = 'false';
	
	for($i = 0; $i < $number_of_array_keys ; $i ++){
	//	echo $array_keys_array[$i]." -- ".$data_type." -- ";
	
	
		//if within then return true
		if(strpos($array_keys_array[$i], $data_type) !== false){$return_value = 'true';}	
		
	//	echo $return_value;
		
	//	echo "<br>";	
	}

	return $return_value; 
}

$array_keys = array_keys($_POST);

//if there is any post variables starting with the root name then run the function to do it all
//if not then don't touch anything

$data_type = 'commission';
if(check_array_keys($data_type, $array_keys) == 'true'){
	update_and_submit($data_type, $conn , $month_combo, $escaped_variables);
}
$data_type = 'sales'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'expenses'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'revenue'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'profit'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'income'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'hours'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'productivity'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_1'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_2'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_3'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_4'; 				if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'related_kpi_a'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'related_kpi_b'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'time_spent_by_user'; 	if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'financial_flow'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}





//and finally we'll leave this for now to ensure that updating takes place as appropriate.
if(isset($_POST['kpi_1_title']	)){$kpi_1_title	=	mysqli_real_escape_string($conn, $_POST['kpi_1_title']);}	else{$kpi_1_title 	=	'';}
if(isset($_POST['kpi_1_units']	)){$kpi_1_units	=	mysqli_real_escape_string($conn, $_POST['kpi_1_units']);}	else{$kpi_1_units 	=	'';}
if(isset($_POST['kpi_1_max']	)){$kpi_1_max	=	mysqli_real_escape_string($conn, $_POST['kpi_1_max']);}		else{$kpi_1_max 	=  	0;}
if(isset($_POST['kpi_1_min']	)){$kpi_1_min	=	mysqli_real_escape_string($conn, $_POST['kpi_1_min']);}		else{$kpi_1_min 	=	0;}
if(isset($_POST['kpi_2_title']	)){$kpi_2_title	=	mysqli_real_escape_string($conn, $_POST['kpi_2_title']);}	else{$kpi_2_title 	=	'';}
if(isset($_POST['kpi_2_units']	)){$kpi_2_units	=	mysqli_real_escape_string($conn, $_POST['kpi_2_units']);}	else{$kpi_2_units 	=	'';}
if(isset($_POST['kpi_2_max']	)){$kpi_2_max	=	mysqli_real_escape_string($conn, $_POST['kpi_2_max']);}		else{$kpi_2_max 	=  	0;}
if(isset($_POST['kpi_2_min']	)){$kpi_2_min	=	mysqli_real_escape_string($conn, $_POST['kpi_2_min']);}		else{$kpi_2_min 	=  	0;}
if(isset($_POST['kpi_3_title']	)){$kpi_3_title	=	mysqli_real_escape_string($conn, $_POST['kpi_3_title']);}	else{$kpi_3_title 	=	'';}
if(isset($_POST['kpi_3_units']	)){$kpi_3_units	=	mysqli_real_escape_string($conn, $_POST['kpi_3_units']);}	else{$kpi_3_units 	=	'';}
if(isset($_POST['kpi_3_max']	)){$kpi_3_max	=	mysqli_real_escape_string($conn, $_POST['kpi_3_max']);}		else{$kpi_3_max 	=  	0;}
if(isset($_POST['kpi_3_min']	)){$kpi_3_min	=	mysqli_real_escape_string($conn, $_POST['kpi_3_min']);}		else{$kpi_3_min 	=  	0;}
if(isset($_POST['kpi_4_title']	)){$kpi_4_title	=	mysqli_real_escape_string($conn, $_POST['kpi_4_title']);}	else{$kpi_4_title 	=	'';}
if(isset($_POST['kpi_4_units']	)){$kpi_4_units	=	mysqli_real_escape_string($conn, $_POST['kpi_4_units']);}	else{$kpi_4_units 	=	'';}
if(isset($_POST['kpi_4_max']	)){$kpi_4_max	=	mysqli_real_escape_string($conn, $_POST['kpi_4_max']);}		else{$kpi_4_max 	=  	0;}
if(isset($_POST['kpi_4_min']	)){$kpi_4_min	=	mysqli_real_escape_string($conn, $_POST['kpi_4_min']);}		else{$kpi_4_min 	=  	0;}

if(isset($_POST['related_kpi_a_title']	)){$related_kpi_a_title	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_title']);}
if(isset($_POST['related_kpi_a_units']	)){$related_kpi_a_units	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_units']);}
if(isset($_POST['related_kpi_a_max']	)){$related_kpi_a_max	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_max']);}
if(isset($_POST['related_kpi_a_min']	)){$related_kpi_a_min	=	mysqli_real_escape_string($conn, $_POST['related_kpi_a_min']);}
if(isset($_POST['related_kpi_b_title']	)){$related_kpi_b_title	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_title']);}
if(isset($_POST['related_kpi_b_units']	)){$related_kpi_b_units	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_units']);}
if(isset($_POST['related_kpi_b_max']	)){$related_kpi_b_max	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_max']);}
if(isset($_POST['related_kpi_b_min']	)){$related_kpi_b_min	=	mysqli_real_escape_string($conn, $_POST['related_kpi_b_min']);}






//tracking_user_defined_settings




//this is very very lazy and yes I (CR) knows it
if($_SESSION['results_page'] == 'kpis'){

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
	VALUES  (	'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."', 				
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
	
	//echo $sql;exit();
	mysqli_query($conn, $sql);

}






if(isset($_POST['what_is_productivity'])){
	$_SESSION['viewing_client_what_is_productivity'] = $_POST['what_is_productivity'];
	$sql = "UPDATE user_account_details SET what_is_productivity = '".mysqli_real_escape_string($conn,$_POST['what_is_productivity'])."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ";
	mysqli_query($conn, $sql);
//exit();


}

if(isset($_POST['go_to_after_update'])){
	if($_POST['go_to_after_update'] == 'financial_revenue_tracker'){
		unset($_SESSION['go_to_after_update']);
		header("Location: /financials/revenue/tracker/");
	}


}
else{
	header("Location: /results/");
}
		
//echo "go to now";
// exit();
?>