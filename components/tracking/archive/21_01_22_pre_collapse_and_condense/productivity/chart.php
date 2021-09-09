   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Year', 'Productivity', 'Productivity Target','Hours', 'Hours Target'],
          
       <?php
   	if(!isset($_SESSION)){session_start();}
   
   
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
   
   
        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$hours[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$hours[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$hours[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$hours[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$hours[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$hours[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$hours[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$hours[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$hours[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$hours[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$hours[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$hours[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$hours[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$hours[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$hours[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$hours[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$hours[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$hours[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$hours[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$hours[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$hours[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$hours[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$hours[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$hours[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$hours[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$hours[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$hours[$month_combo[6]] = 1;}
	
	//echo $all_null;
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$hours_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$hours_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$hours_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$hours_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$hours_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$hours_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$hours_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$hours_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$hours_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$hours_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$hours_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$hours_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$hours_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$hours_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$hours_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$hours_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$hours_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$hours_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$hours_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$hours_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$hours_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}else{$hours_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$hours_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}else{$hours_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$hours_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}else{$hours_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$hours_target[$month_combo[6]] = 1;}	
	}   
	
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	if($row[$month_combo[0]] != 0){$productivity[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{$productivity[$month_combo[0]] = 'null';}
	if($row[$month_combo[1]] != 0){$productivity[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{$productivity[$month_combo[1]] = 'null';}
	if($row[$month_combo[2]] != 0){$productivity[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{$productivity[$month_combo[2]] = 'null';}
	if($row[$month_combo[3]] != 0){$productivity[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{$productivity[$month_combo[3]] = 'null';}
	if($row[$month_combo[4]] != 0){$productivity[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{$productivity[$month_combo[4]] = 'null';}
	if($row[$month_combo[5]] != 0){$productivity[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{$productivity[$month_combo[5]] = 'null';}
	if($row[$month_combo[6]] != 0){$productivity[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$productivity[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$productivity[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$productivity[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$productivity[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$productivity[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$productivity[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$productivity[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$productivity[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}	else{$productivity[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$productivity[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}	else{$productivity[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$productivity[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}	else{$productivity[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$productivity[$month_combo[6]] = 1;}
	
	//echo $all_null;
	}     

        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	/*if($row[$month_combo[0]] != 0){$productivity_target[$month_combo[0]] = $row[$month_combo[0]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[0]] = 'null';//}
	/*if($row[$month_combo[1]] != 0){$productivity_target[$month_combo[1]] = $row[$month_combo[1]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[1]] = 'null';//}
	/*if($row[$month_combo[2]] != 0){$productivity_target[$month_combo[2]] = $row[$month_combo[2]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[2]] = 'null';//}
	/*if($row[$month_combo[3]] != 0){$productivity_target[$month_combo[3]] = $row[$month_combo[3]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[3]] = 'null';//}
	/*if($row[$month_combo[4]] != 0){$productivity_target[$month_combo[4]] = $row[$month_combo[4]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[4]] = 'null';//}
	/*if($row[$month_combo[5]] != 0){$productivity_target[$month_combo[5]] = $row[$month_combo[5]];$all_null = 'no';}	else{*/$productivity_target[$month_combo[5]] = 'null';//}
	if($row[$month_combo[6]] != 0){$productivity_target[$month_combo[6]] = $row[$month_combo[6]];$all_null = 'no';}	else{$productivity_target[$month_combo[6]] = 'null';}
	if($row[$month_combo[7]] != 0){$productivity_target[$month_combo[7]] = $row[$month_combo[7]];$all_null = 'no';}	else{$productivity_target[$month_combo[7]] = 'null';}
	if($row[$month_combo[8]] != 0){$productivity_target[$month_combo[8]] = $row[$month_combo[8]];$all_null = 'no';}	else{$productivity_target[$month_combo[8]] = 'null';}
	if($row[$month_combo[9]] != 0){$productivity_target[$month_combo[9]] = $row[$month_combo[9]];$all_null = 'no';}	else{$productivity_target[$month_combo[9]] = 'null';}
	if($row[$month_combo[10]] != 0){$productivity_target[$month_combo[10]] = $row[$month_combo[10]];$all_null = 'no';}else{$productivity_target[$month_combo[10]] = 'null';}
	if($row[$month_combo[11]] != 0){$productivity_target[$month_combo[11]] = $row[$month_combo[11]];$all_null = 'no';}else{$productivity_target[$month_combo[11]] = 'null';}
	if($row[$month_combo[12]] != 0){$productivity_target[$month_combo[12]] = $row[$month_combo[12]];$all_null = 'no';}else{$productivity_target[$month_combo[12]] = 'null';}	
	if($all_null == 'yes'){$productivity_target[$month_combo[6]] = 1;}	
	}
	    
       
 
 $display_month_combo[0]  = str_replace('_', '/', $month_combo[0]);
 $display_month_combo[1]  = str_replace('_', '/', $month_combo[1]);
 $display_month_combo[2]  = str_replace('_', '/', $month_combo[2]);
 $display_month_combo[3]  = str_replace('_', '/', $month_combo[3]);
 $display_month_combo[4]  = str_replace('_', '/', $month_combo[4]);
 $display_month_combo[5]  = str_replace('_', '/', $month_combo[5]);
 $display_month_combo[6]  = str_replace('_', '/', $month_combo[6]);
 $display_month_combo[7]  = str_replace('_', '/', $month_combo[7]);
 $display_month_combo[8]  = str_replace('_', '/', $month_combo[8]);
 $display_month_combo[9]  = str_replace('_', '/', $month_combo[9]);
 $display_month_combo[10]  = str_replace('_', '/', $month_combo[10]);
 $display_month_combo[11]  = str_replace('_', '/', $month_combo[11]);
 $display_month_combo[12]  = str_replace('_', '/', $month_combo[12]);
 
   ?>
 
 
 
 
 
          
          [<?php echo "'".$display_month_combo[0]."'";?>,  <?php echo $productivity[$month_combo[0]];?>,  	<?php echo $productivity_target[$month_combo[0]];?>,  <?php echo $hours[$month_combo[0]];?>,  	<?php echo $hours_target[$month_combo[0]];?>,  ],
          [<?php echo "'".$display_month_combo[1]."'";?>,  <?php echo $productivity[$month_combo[1]];?>,  	<?php echo $productivity_target[$month_combo[1]];?>,  <?php echo $hours[$month_combo[1]];?>,  	<?php echo $hours_target[$month_combo[1]];?>,  ],
          [<?php echo "'".$display_month_combo[2]."'";?>,  <?php echo $productivity[$month_combo[2]];?>,  	<?php echo $productivity_target[$month_combo[2]];?>,  <?php echo $hours[$month_combo[2]];?>,  	<?php echo $hours_target[$month_combo[2]];?>,  ],
          [<?php echo "'".$display_month_combo[3]."'";?>,  <?php echo $productivity[$month_combo[3]];?>,  	<?php echo $productivity_target[$month_combo[3]];?>,  <?php echo $hours[$month_combo[3]];?>,  	<?php echo $hours_target[$month_combo[3]];?>,  ],
          [<?php echo "'".$display_month_combo[4]."'";?>,  <?php echo $productivity[$month_combo[4]];?>, 	<?php echo $productivity_target[$month_combo[4]];?>,  <?php echo $hours[$month_combo[4]];?>,  	<?php echo $hours_target[$month_combo[4]];?>,  ],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  <?php echo $productivity[$month_combo[5]];?>, 	<?php echo $productivity_target[$month_combo[5]];?>,  <?php echo $hours[$month_combo[5]];?>,  	<?php echo $hours_target[$month_combo[5]];?>,  ],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  <?php echo $productivity[$month_combo[6]];?>, 	<?php echo $productivity_target[$month_combo[6]];?>,  <?php echo $hours[$month_combo[6]];?>,  	<?php echo $hours_target[$month_combo[6]];?>,  ],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  <?php echo $productivity[$month_combo[7]];?>, 	<?php echo $productivity_target[$month_combo[7]];?>,  <?php echo $hours[$month_combo[7]];?>,  	<?php echo $hours_target[$month_combo[7]];?>,  ],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  <?php echo $productivity[$month_combo[8]];?>, 	<?php echo $productivity_target[$month_combo[8]];?>,  <?php echo $hours[$month_combo[8]];?>,  	<?php echo $hours_target[$month_combo[8]];?>,  ],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  <?php echo $productivity[$month_combo[9]];?>,  	<?php echo $productivity_target[$month_combo[9]];?>,  <?php echo $hours[$month_combo[9]];?>,  	<?php echo $hours_target[$month_combo[9]];?>,  ], 
          [<?php echo "'".$display_month_combo[10]."'";?>,  <?php echo $productivity[$month_combo[10]];?>,  	<?php echo $productivity_target[$month_combo[10]];?>, <?php echo $hours[$month_combo[10]];?>,  	<?php echo $hours_target[$month_combo[10]];?>,  ],          
          [<?php echo "'".$display_month_combo[11]."'";?>,  <?php echo $productivity[$month_combo[11]];?>,  	<?php echo $productivity_target[$month_combo[11]];?>, <?php echo $hours[$month_combo[11]];?>,  	<?php echo $hours_target[$month_combo[11]];?>,  ],                    
          [<?php echo "'".$display_month_combo[12]."'";?>,  <?php echo $productivity[$month_combo[12]];?>,  	<?php echo $productivity_target[$month_combo[12]];?>, <?php echo $hours[$month_combo[12]];?>,  	<?php echo $hours_target[$month_combo[12]];?>,  ], 
          
          
                    
        ]);

        var options = {
          title: '',
          curveType: 'function',
          vAxes:[{title: 'DOLLARS per hour worked' }],
	  series: {
            0: { lineWidth: 5 },
            1: { lineWidth: 10,lineDashStyle: [4, 4] },
            2: { lineWidth: 5 },
            3: { lineWidth: 10,lineDashStyle: [4, 4] }
          },
       colors: ['#4332ff', '#281e96','#ffc0cb', '#800080'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>