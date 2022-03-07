<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];
?>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'kpi_1', 'kpi_1 Target','kpi_2','kpi_2 Target','kpi_3','kpi_3 Target','kpi_4','kpi_4 Target'],
          
       <?php
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_1' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_1);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$kpi_1[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$kpi_1[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$kpi_1[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$kpi_1[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$kpi_1[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$kpi_1[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$kpi_1[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$kpi_1[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$kpi_1[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$kpi_1[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$kpi_1[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$kpi_1[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$kpi_1[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_1[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_1[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_1[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_1[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_1[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_1[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_1[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_1[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_1[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_1[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_1[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_1[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_1[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_1[$month_combo[6]] = 1;}
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_1_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_1_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$kpi_1_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$kpi_1_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$kpi_1_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$kpi_1_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$kpi_1_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$kpi_1_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$kpi_1_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$kpi_1_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_1_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_1_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_1_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_1_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_1_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_1_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_1_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_1_target[$month_combo[6]] = 1;}	
	}   
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_2' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_2);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$kpi_2[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$kpi_2[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$kpi_2[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$kpi_2[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$kpi_2[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$kpi_2[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$kpi_2[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$kpi_2[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$kpi_2[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$kpi_2[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$kpi_2[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$kpi_2[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$kpi_2[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_2[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_2[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_2[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_2[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_2[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_2[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_2[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_2[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_2[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_2[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_2[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_2[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_2[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_2[$month_combo[6]] = 1;}
	} 	
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_2_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_2_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$kpi_2_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$kpi_2_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$kpi_2_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$kpi_2_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$kpi_2_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$kpi_2_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$kpi_2_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$kpi_2_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_2_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_2_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_2_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_2_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_2_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_2_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_2_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_2_target[$month_combo[6]] = 1;}	
	} 	

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_3' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_3);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$kpi_3[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$kpi_3[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$kpi_3[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$kpi_3[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$kpi_3[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$kpi_3[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$kpi_3[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$kpi_3[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$kpi_3[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$kpi_3[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$kpi_3[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$kpi_3[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$kpi_3[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_3[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_3[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_3[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_3[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_3[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_3[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_3[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_3[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_3[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_3[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_3[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_3[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_3[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_3[$month_combo[6]] = 1;}
	} 	
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_3_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_3_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$kpi_3_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$kpi_3_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$kpi_3_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$kpi_3_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$kpi_3_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$kpi_3_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$kpi_3_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$kpi_3_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_3_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_3_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_3_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_3_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_3_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_3_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_3_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_3_target[$month_combo[6]] = 1;}	
	} 

       require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_4' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_4);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$kpi_4[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$kpi_4[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$kpi_4[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$kpi_4[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$kpi_4[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$kpi_4[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$kpi_4[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$kpi_4[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$kpi_4[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$kpi_4[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$kpi_4[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$kpi_4[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$kpi_4[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_4[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_4[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_4[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_4[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_4[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_4[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_4[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_4[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_4[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_4[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_4[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_4[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_4[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_4[$month_combo[6]] = 1;}
	} 	
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_4_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_4_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$kpi_4_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$kpi_4_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$kpi_4_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$kpi_4_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$kpi_4_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$kpi_4_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$kpi_4_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$kpi_4_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$kpi_4_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$kpi_4_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$kpi_4_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$kpi_4_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$kpi_4_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$kpi_4_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$kpi_4_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$kpi_4_target[$month_combo[6]] = 1;}	
	} 

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/charting/display_month_combo.php";	    
         ?>
          
          [<?php echo "'".$display_month_combo[0]."'";?>,  	<?php echo $kpi_1[$month_combo[0]];?>,  <?php echo $kpi_1_target[$month_combo[0]];?>,     <?php echo $kpi_2[$month_combo[0]];?>,     <?php echo $kpi_2_target[$month_combo[0]];?>,     
          				<?php echo $kpi_3[$month_combo[0]];?>,     <?php echo $kpi_3_target[$month_combo[0]];?>,     <?php echo $kpi_4[$month_combo[0]];?>,     <?php echo $kpi_4_target[$month_combo[0]];?>],
          [<?php echo "'".$display_month_combo[1]."'";?>,  	<?php echo $kpi_1[$month_combo[1]];?>,  <?php echo $kpi_1_target[$month_combo[1]];?>,     <?php echo $kpi_2[$month_combo[1]];?>,     <?php echo $kpi_2_target[$month_combo[1]];?>,
               				<?php echo $kpi_3[$month_combo[1]];?>,     <?php echo $kpi_3_target[$month_combo[1]];?>,     <?php echo $kpi_4[$month_combo[1]];?>,     <?php echo $kpi_4_target[$month_combo[1]];?>],
          [<?php echo "'".$display_month_combo[2]."'";?>,  	<?php echo $kpi_1[$month_combo[2]];?>,  <?php echo $kpi_1_target[$month_combo[2]];?>,     <?php echo $kpi_2[$month_combo[2]];?>,     <?php echo $kpi_2_target[$month_combo[2]];?>,     
          				<?php echo $kpi_3[$month_combo[2]];?>,     <?php echo $kpi_3_target[$month_combo[2]];?>,     <?php echo $kpi_4[$month_combo[2]];?>,     <?php echo $kpi_4_target[$month_combo[2]];?>],
          [<?php echo "'".$display_month_combo[3]."'";?>,  	<?php echo $kpi_1[$month_combo[3]];?>,  <?php echo $kpi_1_target[$month_combo[3]];?>,     <?php echo $kpi_2[$month_combo[3]];?>,     <?php echo $kpi_2_target[$month_combo[3]];?>,     
          				<?php echo $kpi_3[$month_combo[3]];?>,     <?php echo $kpi_3_target[$month_combo[3]];?>,     <?php echo $kpi_4[$month_combo[3]];?>,     <?php echo $kpi_4_target[$month_combo[3]];?>],
          [<?php echo "'".$display_month_combo[4]."'";?>,  	<?php echo $kpi_1[$month_combo[4]];?>,  <?php echo $kpi_1_target[$month_combo[4]];?>,     <?php echo $kpi_2[$month_combo[4]];?>,     <?php echo $kpi_2_target[$month_combo[4]];?>,     
          				<?php echo $kpi_3[$month_combo[4]];?>,     <?php echo $kpi_3_target[$month_combo[4]];?>,     <?php echo $kpi_4[$month_combo[4]];?>,     <?php echo $kpi_4_target[$month_combo[4]];?>],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  	<?php echo $kpi_1[$month_combo[5]];?>,  <?php echo $kpi_1_target[$month_combo[5]];?>,     <?php echo $kpi_2[$month_combo[5]];?>,     <?php echo $kpi_2_target[$month_combo[5]];?>,     
          				<?php echo $kpi_3[$month_combo[5]];?>,     <?php echo $kpi_3_target[$month_combo[5]];?>,     <?php echo $kpi_4[$month_combo[5]];?>,     <?php echo $kpi_4_target[$month_combo[5]];?>],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  	<?php echo $kpi_1[$month_combo[6]];?>, <?php echo $kpi_1_target[$month_combo[6]];?>,    <?php echo $kpi_2[$month_combo[6]];?>,    <?php echo $kpi_2_target[$month_combo[6]];?>,    
          				<?php echo $kpi_3[$month_combo[6]];?>,    <?php echo $kpi_3_target[$month_combo[6]];?>,     <?php echo $kpi_4[$month_combo[6]];?>,     <?php echo $kpi_4_target[$month_combo[6]];?>],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  	<?php echo $kpi_1[$month_combo[7]];?>, <?php echo $kpi_1_target[$month_combo[7]];?>,    <?php echo $kpi_2[$month_combo[7]];?>,    <?php echo $kpi_2_target[$month_combo[7]];?>,    
          				<?php echo $kpi_3[$month_combo[7]];?>,    <?php echo $kpi_3_target[$month_combo[7]];?>,     <?php echo $kpi_4[$month_combo[7]];?>,     <?php echo $kpi_4_target[$month_combo[7]];?>],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  	<?php echo $kpi_1[$month_combo[8]];?>, <?php echo $kpi_1_target[$month_combo[8]];?>,    <?php echo $kpi_2[$month_combo[8]];?>,   <?php echo $kpi_2_target[$month_combo[8]];?>,    
          				<?php echo $kpi_3[$month_combo[8]];?>,    <?php echo $kpi_3_target[$month_combo[8]];?>,     <?php echo $kpi_4[$month_combo[9]];?>,     <?php echo $kpi_4_target[$month_combo[8]];?>],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  	<?php echo $kpi_1[$month_combo[9]];?>,  <?php echo $kpi_1_target[$month_combo[9]];?>,     <?php echo $kpi_2[$month_combo[9]];?>,     <?php echo $kpi_2_target[$month_combo[9]];?>,     
          				<?php echo $kpi_3[$month_combo[9]];?>,     <?php echo $kpi_3_target[$month_combo[9]];?>,     <?php echo $kpi_4[$month_combo[9]];?>,     <?php echo $kpi_4_target[$month_combo[9]];?>], 
          [<?php echo "'".$display_month_combo[10]."'";?>,  	<?php echo $kpi_1[$month_combo[10]];?>,  <?php echo $kpi_1_target[$month_combo[10]];?>,     <?php echo $kpi_2[$month_combo[10]];?>,     <?php echo $kpi_2_target[$month_combo[10]];?>,     
          				<?php echo $kpi_3[$month_combo[10]];?>,     <?php echo $kpi_3_target[$month_combo[10]];?>,     <?php echo $kpi_4[$month_combo[10]];?>,     <?php echo $kpi_4_target[$month_combo[10]];?>],          
          [<?php echo "'".$display_month_combo[11]."'";?>,  	<?php echo $kpi_1[$month_combo[11]];?>,  <?php echo $kpi_1_target[$month_combo[11]];?>,     <?php echo $kpi_2[$month_combo[11]];?>,    <?php echo $kpi_2_target[$month_combo[11]];?>,     
          				<?php echo $kpi_3[$month_combo[11]];?>,     <?php echo $kpi_3_target[$month_combo[11]];?>,     <?php echo $kpi_4[$month_combo[11]];?>,     <?php echo $kpi_4_target[$month_combo[11]];?>],                    
          [<?php echo "'".$display_month_combo[12]."'";?>,  	<?php echo $kpi_1[$month_combo[12]];?>,  <?php echo $kpi_1_target[$month_combo[12]];?>,     <?php echo $kpi_2[$month_combo[12]];?>,    <?php echo $kpi_2_target[$month_combo[12]];?>,     
          				<?php echo $kpi_3[$month_combo[12]];?>,     <?php echo $kpi_3_target[$month_combo[12]];?>,     <?php echo $kpi_4[$month_combo[12]];?>,     <?php echo $kpi_4_target[$month_combo[12]];?>],          
        ]);

        var options = {
          title: '',
          curveType: 'function',
	  series: {
            0: { lineWidth: 5 },
            1: { lineWidth: 10,lineDashStyle: [4, 4] },
            2: { lineWidth: 5 },
            3: { lineWidth: 10,lineDashStyle: [4, 4] },
            4: { lineWidth: 5 },
            5: { lineWidth: 10,lineDashStyle: [4, 4] },
            6: { lineWidth: 5 },
            7: { lineWidth: 10,lineDashStyle: [4, 4] }
          },
       colors: ['#ff0000', '#d63a22', 'blue', '#281e96', 'orange', '#ff7b00', '#00ff00', 'green'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }

	  $(window).resize(function(){drawChart();});	  
    </script>
    


	<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>