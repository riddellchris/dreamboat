<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'content'){
	if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];

	echo "<div style='width:100%;text-align:center;' class='prompt-font'>To address various budgets <a style='color:red;' href='/financials/budgets/'>click here></a></div>";


	$user_to_display = $_SESSION['viewing_client_id'];
//	$database_to_use = 'tracking_inputs';

}
else{
	$user_to_display = 2;
	//$database_to_use = 'dummy_tracking_data';
	
	}



?>


    <script name='results_financials' type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Revenue', 'Revenue Target','Expenses','Expenses Target','Profit','Profit Target'],       
       <?php
       
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php"; 
        $sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='revenue' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($revenue);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$revenue[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$revenue[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$revenue[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$revenue[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$revenue[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$revenue[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$revenue[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$revenue[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$revenue[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$revenue[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$revenue[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$revenue[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$revenue[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$revenue[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$revenue[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$revenue[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$revenue[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$revenue[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$revenue[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$revenue[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$revenue[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$revenue[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$revenue[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$revenue[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$revenue[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$revenue[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$revenue[$month_combo[6]] = 1;}
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='revenue_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($revenue_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$revenue_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$revenue_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$revenue_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$revenue_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$revenue_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$revenue_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$revenue_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$revenue_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$revenue_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$revenue_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$revenue_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$revenue_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$revenue_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$revenue_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$revenue_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$revenue_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$revenue_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$revenue_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$revenue_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$revenue_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$revenue_target[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$revenue_target[$month_combo[6]] = 1;}
	}   

       require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php"; 
        $sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='expenses' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($expenses);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$expenses[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$expenses[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$expenses[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$expenses[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$expenses[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$expenses[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$expenses[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$expenses[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$expenses[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$expenses[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$expenses[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$expenses[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$expenses[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$expenses[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$expenses[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$expenses[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$expenses[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$expenses[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$expenses[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$expenses[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$expenses[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$expenses[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$expenses[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$expenses[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$expenses[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$expenses[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$expenses[$month_combo[6]] = 1;}
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='expenses_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($expenses_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$expenses_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$expenses_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$expenses_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$expenses_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$expenses_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$expenses_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$expenses_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$expenses_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$expenses_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$expenses_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$expenses_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$expenses_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$expenses_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$expenses_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$expenses_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$expenses_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$expenses_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$expenses_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$expenses_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$expenses_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$expenses_target[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$expenses_target[$month_combo[6]] = 1;}
	}   



	


	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='profit' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($profit);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$profit[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$profit[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$profit[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$profit[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$profit[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$profit[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$profit[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$profit[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$profit[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$profit[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$profit[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$profit[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$profit[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$profit[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$profit[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$profit[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$profit[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$profit[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$profit[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$profit[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$profit[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$profit[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$profit[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$profit[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$profit[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$profit[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$profit[$month_combo[6]] = 1;}
	} 	
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='profit_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($profit_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$profit_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$profit_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$profit_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$profit_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$profit_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$profit_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$profit_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$profit_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$profit_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$profit_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$profit_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$profit_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$profit_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$profit_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$profit_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$profit_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$profit_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$profit_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$profit_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$profit_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$profit_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$profit_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$profit_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$profit_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$profit_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$profit_target[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$profit_target[$month_combo[6]] = 1;}	
	} 	


	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/charting/display_month_combo.php";
	    

  /*
 	echo "         ['".$display_month_combo[0]."',	".$revenue[$month_combo[0]].",	".$revenue_target[$month_combo[0]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],
          ['".$display_month_combo[1]."',	".$revenue[$month_combo[1]].",	".$revenue_target[$month_combo[1]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],
          ['".$display_month_combo[2]."',	".$revenue[$month_combo[2]].",	".$revenue_target[$month_combo[2]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],
          ['".$display_month_combo[3]."',	".$revenue[$month_combo[3]].",	".$revenue_target[$month_combo[3]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],
          ['".$display_month_combo[4]."',	".$revenue[$month_combo[4]].",	".$revenue_target[$month_combo[4]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],        
          ['".$display_month_combo[5]."',	".$revenue[$month_combo[5]].",	".$revenue_target[$month_combo[5]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],          
          ['".$display_month_combo[6]."',	".$revenue[$month_combo[6]].",	".$revenue_target[$month_combo[6]].",	".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],          
          ['".$display_month_combo[7]."',	".$revenue[$month_combo[7]].",	".$revenue_target[$month_combo[7]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],          
          ['".$display_month_combo[8]."',	".$revenue[$month_combo[8]].",	".$revenue_target[$month_combo[8]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],          
          ['".$display_month_combo[9]."',	".$revenue[$month_combo[9]].",	".$revenue_target[$month_combo[9]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."], 
          ['".$display_month_combo[10]."',	".$revenue[$month_combo[10]].",	".$revenue_target[$month_combo[10]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],          
          ['".$display_month_combo[11]."',	".$revenue[$month_combo[11]].",	".$revenue_target[$month_combo[11]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],                    
          ['".$display_month_combo[12]."',	".$revenue[$month_combo[12]].",	".$revenue_target[$month_combo[12]].",		".$profit[$month_combo[0]].",	".$profit_target[$month_combo[0]]."],  ";       */       
    ?>   [<?php echo "'".$display_month_combo[0]."'";?>,  <?php echo $revenue[$month_combo[0]];?>,  <?php echo $revenue_target[$month_combo[0]];?>,     <?php echo $expenses[$month_combo[0]];?>,     <?php echo $expenses_target[$month_combo[0]];?>,     <?php echo $profit[$month_combo[0]];?>,     <?php echo $profit_target[$month_combo[0]];?>],
          [<?php echo "'".$display_month_combo[1]."'";?>,  <?php echo $revenue[$month_combo[1]];?>,  <?php echo $revenue_target[$month_combo[1]];?>,     <?php echo $expenses[$month_combo[1]];?>,     <?php echo $expenses_target[$month_combo[1]];?>,     <?php echo $profit[$month_combo[1]];?>,     <?php echo $profit_target[$month_combo[1]];?>],
          [<?php echo "'".$display_month_combo[2]."'";?>,  <?php echo $revenue[$month_combo[2]];?>,  <?php echo $revenue_target[$month_combo[2]];?>,     <?php echo $expenses[$month_combo[2]];?>,     <?php echo $expenses_target[$month_combo[2]];?>,     <?php echo $profit[$month_combo[2]];?>,     <?php echo $profit_target[$month_combo[2]];?>],
          [<?php echo "'".$display_month_combo[3]."'";?>,  <?php echo $revenue[$month_combo[3]];?>,  <?php echo $revenue_target[$month_combo[3]];?>,     <?php echo $expenses[$month_combo[3]];?>,     <?php echo $expenses_target[$month_combo[3]];?>,     <?php echo $profit[$month_combo[3]];?>,     <?php echo $profit_target[$month_combo[3]];?>],
          [<?php echo "'".$display_month_combo[4]."'";?>,  <?php echo $revenue[$month_combo[4]];?>,  <?php echo $revenue_target[$month_combo[4]];?>,     <?php echo $expenses[$month_combo[4]];?>,     <?php echo $expenses_target[$month_combo[4]];?>,     <?php echo $profit[$month_combo[4]];?>,     <?php echo $profit_target[$month_combo[4]];?>],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  <?php echo $revenue[$month_combo[5]];?>,  <?php echo $revenue_target[$month_combo[5]];?>,     <?php echo $expenses[$month_combo[5]];?>,     <?php echo $expenses_target[$month_combo[5]];?>,     <?php echo $profit[$month_combo[5]];?>,     <?php echo $profit_target[$month_combo[5]];?>],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  <?php echo $revenue[$month_combo[6]];?>, <?php echo $revenue_target[$month_combo[6]];?>,     <?php echo $expenses[$month_combo[6]];?>,     <?php echo $expenses_target[$month_combo[6]];?>,    <?php echo $profit[$month_combo[6]];?>,    <?php echo $profit_target[$month_combo[6]];?>],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  <?php echo $revenue[$month_combo[7]];?>, <?php echo $revenue_target[$month_combo[7]];?>,     <?php echo $expenses[$month_combo[7]];?>,     <?php echo $expenses_target[$month_combo[7]];?>,    <?php echo $profit[$month_combo[7]];?>,    <?php echo $profit_target[$month_combo[7]];?>],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  <?php echo $revenue[$month_combo[8]];?>, <?php echo $revenue_target[$month_combo[8]];?>,     <?php echo $expenses[$month_combo[8]];?>,     <?php echo $expenses_target[$month_combo[8]];?>,     <?php echo $profit[$month_combo[8]];?>,   <?php echo $profit_target[$month_combo[8]];?>],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  <?php echo $revenue[$month_combo[9]];?>,  <?php echo $revenue_target[$month_combo[9]];?>,     <?php echo $expenses[$month_combo[9]];?>,     <?php echo $expenses_target[$month_combo[9]];?>,     <?php echo $profit[$month_combo[9]];?>,     <?php echo $profit_target[$month_combo[9]];?>], 
          [<?php echo "'".$display_month_combo[10]."'";?>,  <?php echo $revenue[$month_combo[10]];?>,  <?php echo $revenue_target[$month_combo[10]];?>,     <?php echo $expenses[$month_combo[10]];?>,     <?php echo $expenses_target[$month_combo[10]];?>,     <?php echo $profit[$month_combo[10]];?>,     <?php echo $profit_target[$month_combo[10]];?>],          
          [<?php echo "'".$display_month_combo[11]."'";?>,  <?php echo $revenue[$month_combo[11]];?>,  <?php echo $revenue_target[$month_combo[11]];?>,     <?php echo $expenses[$month_combo[11]];?>,     <?php echo $expenses_target[$month_combo[11]];?>,      <?php echo $profit[$month_combo[11]];?>,    <?php echo $profit_target[$month_combo[11]];?>],                    
          [<?php echo "'".$display_month_combo[12]."'";?>,  <?php echo $revenue[$month_combo[12]];?>,  <?php echo $revenue_target[$month_combo[12]];?>,     <?php echo $expenses[$month_combo[12]];?>,     <?php echo $expenses_target[$month_combo[12]];?>,      <?php echo $profit[$month_combo[12]];?>,    <?php echo $profit_target[$month_combo[12]];?>],  
    
       
        ]);

        var options = {
          title: '',
          curveType: 'function',
                   vAxes:[
	      {title: 'DOLLARS per month'} // Left axis

    		],
	  series: {
            0: { lineWidth: 5 },
            1: { lineWidth: 10,lineDashStyle: [4, 4] },
            2: { lineWidth: 5 },
            3: { lineWidth: 10,lineDashStyle: [4, 4] },
            4: { lineWidth: 5 },
            5: { lineWidth: 10,lineDashStyle: [4, 4] },
          },
       colors: ['#9e9e9e', '#9c8e8e', 'red', '#d63a22', 'black', 'black'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }

      $(window).resize(function(){
		drawChart();
	});      
      
    </script>
    
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>