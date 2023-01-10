<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];

$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu
?>



    <script name='results_work' type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Year', 'Income', 'Income Target', 'Hours Worked', 'Hours Worked Target'],
          
       <?php
 
 
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
 
        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($income);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$income[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$income[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$income[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$income[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$income[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$income[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$income[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$income[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$income[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$income[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$income[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$income[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$income[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$income[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$income[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$income[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$income[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$income[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$income[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$income[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$income[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$income[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$income[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$income[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$income[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$income[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$income[$month_combo[6]] = 1;}
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($income_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$income_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$income_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$income_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$income_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$income_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$income_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$income_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$income_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$income_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$income_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$income_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$income_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$income_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$income_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$income_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$income_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$income_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$income_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$income_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$income_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$income_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$income_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$income_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$income_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$income_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$income_target[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$income_target[$month_combo[6]] = 1;}	
	}   
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_worked' ORDER BY entry_id DESC LIMIT 1"; // select column
	//echo $sql; exit();
	$result = mysqli_query($conn, $sql);
	unset($hours_worked);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$hours_worked[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$hours_worked[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$hours_worked[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$hours_worked[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$hours_worked[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$hours_worked[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$hours_worked[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$hours_worked[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$hours_worked[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$hours_worked[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$hours_worked[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$hours_worked[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$hours_worked[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$hours_worked[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$hours_worked[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$hours_worked[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$hours_worked[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$hours_worked[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$hours_worked[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$hours_worked[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$hours_worked[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$hours_worked[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$hours_worked[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$hours_worked[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$hours_worked[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$hours_worked[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$hours_worked[$month_combo[6]] = 1;}	
	} 	
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_worked_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours_worked_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$hours_worked_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$hours_worked_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$hours_worked_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$hours_worked_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$hours_worked_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$hours_worked_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$hours_worked_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$hours_worked_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}		else{$hours_worked_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$hours_worked_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}		else{$hours_worked_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$hours_worked_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}		else{$hours_worked_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$hours_worked_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}		else{$hours_worked_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$hours_worked_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$hours_worked_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$hours_worked_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$hours_worked_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$hours_worked_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$hours_worked_target[$month_combo[12]] = 'null';}
	if($all_null == 'yes'){$hours_worked_target[$month_combo[6]] = 1;}	
	} 	



require $_SERVER['DOCUMENT_ROOT']."/components/tracking/charting/display_month_combo.php";
	    
         ?>
          
          [<?php echo "'".$display_month_combo[0]."'";?>,  <?php echo $income[$month_combo[0]];?>,  <?php echo $income_target[$month_combo[0]];?>,     <?php echo $hours_worked[$month_combo[0]];?>,     <?php echo $hours_worked_target[$month_combo[0]];?>],
          [<?php echo "'".$display_month_combo[1]."'";?>,  <?php echo $income[$month_combo[1]];?>,  <?php echo $income_target[$month_combo[1]];?>,     <?php echo $hours_worked[$month_combo[1]];?>,     <?php echo $hours_worked_target[$month_combo[1]];?>],
          [<?php echo "'".$display_month_combo[2]."'";?>,  <?php echo $income[$month_combo[2]];?>,  <?php echo $income_target[$month_combo[2]];?>,     <?php echo $hours_worked[$month_combo[2]];?>,     <?php echo $hours_worked_target[$month_combo[2]];?>],
          [<?php echo "'".$display_month_combo[3]."'";?>,  <?php echo $income[$month_combo[3]];?>,  <?php echo $income_target[$month_combo[3]];?>,     <?php echo $hours_worked[$month_combo[3]];?>,     <?php echo $hours_worked_target[$month_combo[3]];?>],
          [<?php echo "'".$display_month_combo[4]."'";?>,  <?php echo $income[$month_combo[4]];?>,  <?php echo $income_target[$month_combo[4]];?>,     <?php echo $hours_worked[$month_combo[4]];?>,     <?php echo $hours_worked_target[$month_combo[4]];?>],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  <?php echo $income[$month_combo[5]];?>,  <?php echo $income_target[$month_combo[5]];?>,     <?php echo $hours_worked[$month_combo[5]];?>,     <?php echo $hours_worked_target[$month_combo[5]];?>],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  <?php echo $income[$month_combo[6]];?>, <?php echo $income_target[$month_combo[6]];?>,    <?php echo $hours_worked[$month_combo[6]];?>,    <?php echo $hours_worked_target[$month_combo[6]];?>],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  <?php echo $income[$month_combo[7]];?>, <?php echo $income_target[$month_combo[7]];?>,    <?php echo $hours_worked[$month_combo[7]];?>,    <?php echo $hours_worked_target[$month_combo[7]];?>],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  <?php echo $income[$month_combo[8]];?>, <?php echo $income_target[$month_combo[8]];?>,     <?php echo $hours_worked[$month_combo[8]];?>,   <?php echo $hours_worked_target[$month_combo[8]];?>],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  <?php echo $income[$month_combo[9]];?>,  <?php echo $income_target[$month_combo[9]];?>,     <?php echo $hours_worked[$month_combo[9]];?>,     <?php echo $hours_worked_target[$month_combo[9]];?>], 
          [<?php echo "'".$display_month_combo[10]."'";?>,  <?php echo $income[$month_combo[10]];?>,  <?php echo $income_target[$month_combo[10]];?>,     <?php echo $hours_worked[$month_combo[10]];?>,     <?php echo $hours_worked_target[$month_combo[10]];?>],          
          [<?php echo "'".$display_month_combo[11]."'";?>,  <?php echo $income[$month_combo[11]];?>,  <?php echo $income_target[$month_combo[11]];?>,      <?php echo $hours_worked[$month_combo[11]];?>,    <?php echo $hours_worked_target[$month_combo[11]];?>],                    
          [<?php echo "'".$display_month_combo[12]."'";?>,  <?php echo $income[$month_combo[12]];?>,  <?php echo $income_target[$month_combo[12]];?>,      <?php echo $hours_worked[$month_combo[12]];?>,    <?php echo $hours_worked_target[$month_combo[12]];?>],  
          
                    
        ]);

        var options = {
          title: '',
          curveType: 'function',
         
          vAxes:[
	      {title: 'INCOME - DOLLARS', titleTextStyle: {color: 'green'}, gridlines: {color: 'none'}, textStyle:{color: 'green'}}, // Left axis
	      {title: 'HOURS WORKED - HOURS', titleTextStyle: {color: 'purple'}, gridlines: {color: 'none'} ,   viewWindowMode:'explicit', viewWindow: { max:200, min:0 }, textStyle:{color: 'purple'}} // Right axis
    		],
	  series: {
            0: { lineWidth: 5,targetAxisIndex:0 },
            1: { lineWidth: 10,lineDashStyle: [4, 4],targetAxisIndex:0 },
            2: { lineWidth: 5 ,targetAxisIndex:1},
            3: { lineWidth: 10,lineDashStyle: [4, 4],targetAxisIndex:1 }
          },
       colors: ['#0dc10d', 'green', 'pink', 'purple'],
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