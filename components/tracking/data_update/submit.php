<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/compile_insert_query_values.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";


//month combo comes from the file /components/tracking/date_update_system/current_month_and_year_combo.php
function dates_combo($target_or_not, $month_combo){

	$sql = "";
	
	if($target_or_not == 'no'){
	$sql .= $month_combo[0].",".$month_combo[1].",".$month_combo[2].",".$month_combo[3].",".$month_combo[4].",".$month_combo[5].",";
	}
	
	$sql .= $month_combo[6].",".$month_combo[7].",".$month_combo[8].",".$month_combo[9].",".$month_combo[10].",".$month_combo[11].",".$month_combo[12]; 
	
	return $sql;
}

$first_six_date_combos_for_sql 	= 
$second_six_date_combos_for_sql = $month_combo[6].",".$month_combo[7].",".$month_combo[8].",".$month_combo[9].",".$month_combo[10].",".$month_combo[11].",".$month_combo[12]; 
$all_the_dates = $first_six_date_combos_for_sql.$second_six_date_combos_for_sql;


require $_SERVER['DOCUMENT_ROOT']."/components/tracking/data_update/escaping.php";



//CR Commentary 21.01.22
//I mean this is actually insane, no question about that
//The steps to fixing that are going to be that we must first 

function make_not_last_version_of_tracking_data($data_type, $target_or_not, $database_connection){
	$sql = "UPDATE tracking_inputs 
		SET latest_version_of_this_data_type = 'no' 
		WHERE user_id = '".$_SESSION['viewing_client_id']."' 
		AND data_type='".$data_type."'";		
	if($target_or_not == 'yes'){$sql .= " AND target_yes_no = 'yes'";}	
	mysqli_query($database_connection, $sql);
}

function start_of_input_query($data_type, $target_or_not, $month_combo){

	$sql = "INSERT INTO 	 tracking_inputs 
				(user_id, data_type, target_yes_no, ";
	
	if($target_or_not == 'yes'){	$sql .= dates_combo('yes', 	$month_combo);}
	else{				$sql .= dates_combo('no', $month_combo, $escaped_variables);}
	
	$sql .= ") VALUES  	('".$_SESSION['viewing_client_id']."',    '".$data_type;
	if($target_or_not == 'yes'){	$sql .= "_target";}	
	$sql .= "', '".$target_or_not."',";
	
	return $sql;
}

function end_of_input_query($data_type, $target_or_not, $escaped_variables){

	if($target_or_not == 'yes'){$for_start = 6;}
	else{$for_start = 0;}
	
	if($target_or_not == 'yes'){$target = 'yes';}
	else{$target = 'no';}
	
	$root_name = $data_type;
	
	$sql = '';
	for($i = $for_start; $i <= 12; $i++){
		$sql .= "'".$escaped_variables[$root_name][$target][$i]."'";
		if($i <> 12){$sql .= ",";}
		else{$sql .= ")";}
	}
		
	return $sql;
}

function update_and_submit($data_type, $database_connection, $month_combo, $escaped_variables){

	//run both the following queries twice:
		//once for the target data
		//once for the non-target data

		$target = 'yes';
		for($i = 1; $i <= 2; $i ++){
			make_not_last_version_of_tracking_data($data_type, $target, $conn);		
			$sql =  start_of_input_query($data_type, $target, $month_combo);
			$sql .= end_of_input_query($data_type, $target, $escaped_variables);	
	//		echo $sql;
	//		echo "<br>";
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

//echo '<pre>' , var_dump($array_keys) , '</pre>';
//exit();


//if there is any post variables starting with the root name then run the function to do it all
//if not then don't touch anything
$data_type = 'commission';		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'sales'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'expenses'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'revenue'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'profit'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'income'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'hours'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'productivity'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_1'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_2'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_3'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'kpi_4'; 			if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'related_kpi_a'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'related_kpi_b'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'time_spent_by_user'; 	if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}
$data_type = 'financial_flow'; 		if(check_array_keys($data_type, $array_keys) == 'true'){update_and_submit($data_type, $conn , $month_combo, $escaped_variables);}





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