<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];

require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu


// get date range
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
//add connection for sql
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

?>

<!-- Prepare data for google chart -->
<?php
// Get kpi_1 data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_1' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_1);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_1[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_1[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_1[$month_combo[6]] = 1;}
	}
// Get kpi_1_target data     
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_1_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_1_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_1_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_1_target[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_1_target[$month_combo[6]] = 1;}
	}
	// Get kpi_2 data    
		$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_2' ORDER BY entry_id DESC LIMIT 1"; // select column
		$result = mysqli_query($conn, $sql);
		unset($kpi_2);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$all_null = 'yes';
			foreach($month_combo as $item){
				if($row[$item] != 0){
					$kpi_2[$item] = $row[$item];
					$all_null = 'no';
				}else{
					$kpi_2[$item] = 'null';
				}	
			}
				if($all_null == 'yes'){$kpi_2[$month_combo[6]] = 1;}
		}

	// Get kpi_2_target data    
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
		$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_2_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_2_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_2_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_2_target[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_2_target[$month_combo[6]] = 1;}
	}

	// Get kpi_3 data    
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_3' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_3);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_3[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_3[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_3[$month_combo[6]] = 1;}
	}

	// Get kpi_3_target data    
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_3_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_3_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_3_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_3_target[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_3_target[$month_combo[6]] = 1;}
	}
	// Get kpi_4 data    
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_4' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_4);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_4[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_4[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_4[$month_combo[6]] = 1;}
	}

	// Get kpi_4_target data    
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='kpi_4_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($kpi_4_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$kpi_4_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$kpi_4_target[$item] = 'null';
			}	
		}
			if($all_null == 'yes'){$kpi_4_target[$month_combo[6]] = 1;}
	}

// convert date display format
	for($i = 0; $i<$month_to_loop; $i++){
		$display_month_combo[$i]  = str_replace('_', '/', $month_combo[$i]);
	}

	// Create array to combine array from different categories, and data have to be number
	$chartDataArray = array(); 
		for($i=0;$i<$month_to_loop;$i++){
			$newChartData = [
				$display_month_combo[$i],
				floatval($kpi_1[$month_combo_reverse[$i]]), 
				floatval($kpi_1_target[$month_combo_reverse[$i]]),
				floatval($kpi_2[$month_combo_reverse[$i]]), 
				floatval($kpi_2_target[$month_combo_reverse[$i]]),
				floatval($kpi_3[$month_combo_reverse[$i]]), 
				floatval($kpi_3_target[$month_combo_reverse[$i]]),
				floatval($kpi_4[$month_combo_reverse[$i]]), 
				floatval($kpi_4_target[$month_combo_reverse[$i]]),
			];
			array_push($chartDataArray,$newChartData);
		}
?>

<!-- Draw google chart -->
<script type="text/javascript" name="results_kpi">
	console.log('are you here')
	// convert php array to js array	
	let arrOfTitle = ['Year', 'HELLO', 'kpi_1 Target','kpi_2','kpi_2 Target','kpi_3','kpi_3 Target','kpi_4','kpi_4 Target'];
	
	let arrOfInputs = <?=json_encode($chartDataArray); ?>;
	console.log(arrOfInputs);

	let options = {
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

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		// Set Chart Data
		let dataArray = [arrOfTitle,...arrOfInputs];
		let data = google.visualization.arrayToDataTable(dataArray);
		let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

		chart.draw(data, options);
	}
	$(window).resize(function(){drawChart();});
</script>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/tracking/display_elements/end_of_page_requires.php";
?>