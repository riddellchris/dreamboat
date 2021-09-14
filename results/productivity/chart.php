<?php
if(!isset($_SESSION)){session_start();}

//needed for color selection further down the page
require_once $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";



require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
$display_variable_name = strip_underscores($_SESSION['viewing_client_what_is_productivity']);
if(substr($display_variable_name, 0, 3) != 'kpi'){$display_variable_name = ucfirst($display_variable_name);}
else{
$sql = "SELECT ".$_SESSION['viewing_client_what_is_productivity']."_title FROM tracking_kpi_settings 
	WHERE client_id = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' 
	
	ORDER BY entry_id DESC LIMIT 1"; // select column

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if($row[$_SESSION['viewing_client_what_is_productivity']."_title"] != ''){$display_variable_name = $row[$_SESSION['viewing_client_what_is_productivity']."_title"];}else{$display_variable_name = "KPI".substr($display_variable_name, 3);}

}


?>




   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        
        
                  
       <?php
   	if(!isset($_SESSION)){session_start();}
        
        echo"
           ['Year', '".$display_variable_name."', '".$display_variable_name." Target','Hours', 'Hours Target','Productivity', 'Productivity Target'],
	";
   
   
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
   
         require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
         $sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='".$_SESSION['viewing_client_what_is_productivity']."' ORDER BY entry_id DESC LIMIT 1"; // select column
//exit();
	$result = mysqli_query($conn, $sql);
	unset($what_is_productivity);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	$i = 0;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity[$month_combo[$i]] = 'null';}$i ++;
	if($all_null == 'yes'){$what_is_productivity[$month_combo[6]] = 1;}
	
	//echo $all_null;
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='".$_SESSION['viewing_client_what_is_productivity']."_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($what_is_productivity_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
		$i = 0;
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	/*if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$what_is_productivity_target[$month_combo[$i]] = 'null';$i ++;//}
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$what_is_productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$what_is_productivity_target[$month_combo[$i]] = 'null';}	$i ++;
	if($all_null == 'yes'){$what_is_productivity_target[$month_combo[6]] = 1;}	
	}  
        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
		$i = 0;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours[$month_combo[$i]] = 'null';}	$i ++;
	if($all_null == 'yes'){$hours[$month_combo[6]] = 1;}
	
	//echo $all_null;
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
		$i = 0;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$hours_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$hours_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$hours_target[$month_combo[$i]] = 'null';}	$i ++;
	if($all_null == 'yes'){$hours_target[$month_combo[6]] = 1;}	
	}   
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
		$i = 0;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity[$month_combo[$i]] = 'null';}	$i ++;
	if($all_null == 'yes'){$productivity[$month_combo[6]] = 1;}
	
	//echo $all_null;
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	$i = 0;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	/*if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[$i]] = 'null';$i ++;//}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}	else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$productivity_target[$month_combo[$i]] = 'null';}$i ++;
	if($row[$month_combo[$i]] != 0){$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';}else{$productivity_target[$month_combo[$i]] = 'null';}	$i ++;
	if($all_null == 'yes'){$productivity_target[$month_combo[6]] = 1;}	
	}   
	    
       
 $i = 0;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 $display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);$i ++;
 
   ?>
 
 
 
 
 
 
 
          <?php $i = 0; ?>
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],
          <?php $i ++; ?>		
          		
          		
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>, 	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],        
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>, 	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],          
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>, 	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
          		<?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>   ],          
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>, 	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
		          <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>   ],          
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>, 	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
         		 <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>,  <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ],          
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>,  
        		  <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>   ], 
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>, 
         		 <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>   ],          
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>, 
         		 <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>   ],                    
          <?php $i ++; ?>	
          [<?php echo "'".$display_month_combo[$i]."'";?>,  <?php echo $what_is_productivity[$month_combo[$i]];?>,  	<?php echo $what_is_productivity_target[$month_combo[$i]];?>, 
         		 <?php echo $hours[$month_combo[$i]];?>,  	<?php echo $hours_target[$month_combo[$i]];?>, <?php echo $productivity[$month_combo[$i]];?>,  	<?php echo $productivity_target[$month_combo[$i]];?>  ], 
          
                    
        ]);
<?php
/*
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
$display_variable_name = strip_underscores($_SESSION['viewing_client_what_is_productivity']);
if(substr($display_variable_name, 0, 3) != 'kpi'){$display_variable_name = ucfirst($display_variable_name);}
else{
$display_variable_name = "KPI".substr($display_variable_name, 3);
}
*/
?>


        var options = {
          title: '',
          curveType: 'function',
        vAxes: {
          // Adds titles to each axis.
          0: {title: <?php echo "'".ucfirst($display_variable_name)."'},";?>
          1: {title: 'Hours',textPosition: 'out', color:'#800080'   },
          2: {title: 'Productivity',textPosition: 'in'}
        },
	  series: {
            0: { targetAxisIndex: 0, lineWidth: 5,  },
            1: { targetAxisIndex: 0,  lineWidth: 10,lineDashStyle: [4, 4] },
            2: { targetAxisIndex: 1,  lineWidth: 5 },
            3: { targetAxisIndex: 1,  lineWidth: 10,lineDashStyle: [4, 4] },
            4: { targetAxisIndex: 2,  lineWidth: 5 },
            5: { targetAxisIndex: 2,  lineWidth: 10,lineDashStyle: [4, 4] }
          },
          
      <?php

      
      $primary_color = $results_colors[$_SESSION['viewing_client_what_is_productivity']];
      $target_color = $results_colors[$_SESSION['viewing_client_what_is_productivity']."_target"];    
      
      ?>
          
          
          
          
          
          
          
       colors: [<?php echo "'".$primary_color."'"?>, <?php echo "'".$target_color."'"?>,'#ffc0cb', '#800080','#4332ff', '#281e96'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>