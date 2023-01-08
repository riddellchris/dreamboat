<?php
if(!isset($_SESSION)){session_start();}

//needed for color selection further down the page
require_once $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";

// Get $display_variable_name
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
$display_variable_name = strip_underscores($_SESSION['viewing_client_what_is_productivity']);
if(substr($display_variable_name, 0, 3) != 'kpi'){
	$display_variable_name = ucfirst($display_variable_name);
}else{
	$sql = "SELECT ".$_SESSION['viewing_client_what_is_productivity']."_title FROM tracking_kpi_settings 
		WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
		ORDER BY entry_id DESC LIMIT 1"; // select column

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	if($row[$_SESSION['viewing_client_what_is_productivity']."_title"] != ''){
		$display_variable_name = $row[$_SESSION['viewing_client_what_is_productivity']."_title"];
	}else{
		$display_variable_name = "KPI".substr($display_variable_name, 3);
	}
}
?>


<!-- Prepare data for google chart -->
<?php
	// get date range
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
	//add connection for sql
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	$number_of_month = count($month_combo);

	//FIXME:this seems not connect to database Get data of $what_is_productivity ($display_variable_name)
	if(!isset($_SESSION)){session_start();}
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='".$_SESSION['viewing_client_what_is_productivity']."' ORDER BY entry_id DESC LIMIT 1"; // select column

	$result = mysqli_query($conn, $sql);
	unset($what_is_productivity);

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i = 0;$i<$number_of_month;$i++){
			if($row[$month_combo[$i]] != 0){
				$what_is_productivity[$month_combo[$i]] = $row[$month_combo[$i]];
				$all_null = 'no';
			}	else{
				$what_is_productivity[$month_combo[$i]] = 0;
			}
		};
		if($all_null == 'yes'){
			$what_is_productivity[$month_combo[6]] = 1;
		} //REVIEW:Why does this need to be set to 1. Maybe it is to avoid nothing shown on the screen. If that's the case. $month_combo[middle_point]
	}

	// Get data of $what_is_productivity_target ($display_variable_name_target)
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='".$_SESSION['viewing_client_what_is_productivity']."_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($what_is_productivity_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0;$i<$number_of_month;$i++){
			if($row[$month_combo[$i]] != 0){
				$what_is_productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];
				$all_null = 'no';
			}else{
				$what_is_productivity_target[$month_combo[$i]] = 0;
			}
		};
		// if($all_null == 'yes'){
		// 	$what_is_productivity_target[$month_combo[6]] = 1;
		// };	
	};

	// Get Hours data
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0; $i<$number_of_month; $i++){
			if($row[$month_combo[$i]] != 0){
				$hours[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';
			}else{
				$hours[$month_combo[$i]] = 0;
			}
			// if($all_null == 'yes'){
			// 	$hours[$month_combo[6]] = 1;
			// }
		}
	
	}

	// Get Hours_target data
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0; $i<$number_of_month; $i++){
			if($row[$month_combo[$i]] != 0){
				$hours_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';
			}else{
				$hours_target[$month_combo[$i]] = 0;
			}
			// if($all_null == 'yes'){
			// 	$hours_target[$month_combo[6]] = 1;
			// }
		}
	}

	//Get productivity data
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0; $i<$number_of_month; $i++){
			if($row[$month_combo[$i]] != 0){
				$productivity[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';
			}else{
				$productivity[$month_combo[$i]] = 0;
			}
			// if($all_null == 'yes'){
			// 	$productivity[$month_combo[6]] = 1;
			// }
		}

	}

	//Get productivity_target data
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($productivity_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0; $i<$number_of_month; $i++){
			if($row[$month_combo[$i]] != 0){
				$productivity_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';
			}else{
				$productivity_target[$month_combo[$i]] = 0;
			}
			// if($all_null == 'yes'){
			// 	$productivity_target[$month_combo[6]] = 1;
			// }
		}
	}


	// convert date display format
	for($i = 0; $i<$number_of_month; $i++){
		$display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);
	}
	
	// Create array to combine array from different categories
	$chartDataArray = array(); 
		for($i=0;$i<$number_of_month;$i++){
			$newChartData = [
				$display_month_combo[$i],
				$what_is_productivity[$month_combo[$i]], 
				$what_is_productivity_target[$month_combo[$i]],
				$hours[$month_combo[$i]],
				$hours_target[$month_combo[$i]],
				$productivity[$month_combo[$i]],
				$productivity_target[$month_combo[$i]]
			];
			array_push($chartDataArray,$newChartData);
		}
?>

<!-- Draw google chart -->
<script type="text/javascript">
	// convert php array to js array	
	let arrOfTitle = <?=
			"['Date', '".$display_variable_name."', '".$display_variable_name." Target','Hours','Hours Target','Productivity', 'Productivity Target']"; ?>;
	
	let arrOfInputs = <?=json_encode($chartDataArray); ?>;
	console.log(arrOfInputs);

	const primaryColor = '<?=$results_colors[$_SESSION['viewing_client_what_is_productivity']]?>';
	const target_color = '<?=$results_colors[$_SESSION['viewing_client_what_is_productivity']."_target"]?>'
	let options = {
		title: '',
		curveType: 'function',
		vAxes: {
			// Adds titles to each axis.
			0: {title: <?php echo "'".ucfirst($display_variable_name)."'";?>},
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
		legend: { position: 'bottom' },
		colors: [primaryColor, target_color,'#ffc0cb', '#800080','#4332ff', '#281e96'],
	};   
		
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart(){
			// Set Chart Data
			let dataArray = [arrOfTitle,...arrOfInputs]

			let data = google.visualization.arrayToDataTable(dataArray);
			let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));
			
			chart.draw(data, options);
		};
	  $(window).resize(function(){drawChart();});	  
    </script>