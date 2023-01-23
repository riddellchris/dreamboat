<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'content'){
	if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];


	$user_to_display = $_SESSION['viewing_client_id'];
	require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu
//	$database_to_use = 'tracking_inputs';

}
else{
	$user_to_display = 2;
	//$database_to_use = 'dummy_tracking_data';
	
	}

?>
<!-- Prepare data for google chart -->

<?php
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
					
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php"; 

	// Get Revenue data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='revenue' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($revenue);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$revenue[$item] = $row[$item];$all_null = 'no';
			}else{
				$revenue[$item] = 'null';
			}}
			if($all_null == 'yes'){$revenue[$month_combo_reverse[6]] = 0;}
	}     

	// Get Revenue Target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='revenue_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($revenue_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$revenue_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$revenue_target[$item] = 'null';
			}
		}
		if($all_null == 'yes'){$revenue_target[$month_combo_reverse[6]] = 0;}
	} 

	// Get Expenses data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='expenses' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($expenses);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$expenses[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$expenses[$item] = 'null';
			}
		}
		if($all_null == 'yes'){$expenses[$month_combo_reverse[6]] = 0;}
	} 
	// Get Expenses Target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='expenses_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	unset($expenses_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$expenses_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$expenses_target[$item] = 'null';
			}
		}
		if($all_null == 'yes'){$expenses_target[$month_combo_reverse[6]] = 0;}
	} 
	// Get Profit  data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='profit' ORDER BY entry_id DESC LIMIT 1"; // select column
	unset($profit);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$profit[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$profit[$item] = 'null';
			}
		}
		if($all_null == 'yes'){$profit[$month_combo_reverse[6]] = 0;}
	}
	// Get Profit Target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='profit_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($profit_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo_reverse as $item){
			if($row[$item] != 0){
				$profit_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$profit_target[$item] = 'null';
			}
		}
		if($all_null == 'yes'){$profit_target[$month_combo_reverse[6]] = 0;}
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
				floatval($revenue[$month_combo_reverse[$i]]), 
				floatval($revenue_target[$month_combo_reverse[$i]]),
				floatval($expenses[$month_combo_reverse[$i]]),
				floatval($expenses_target[$month_combo_reverse[$i]]),
				floatval($profit[$month_combo_reverse[$i]]),
				floatval($profit_target[$month_combo_reverse[$i]]),
			];
			array_push($chartDataArray,$newChartData);
		}
?>

<!-- Draw google chart -->
<script name='results_financials' type="text/javascript">
	let arrOfTitle = ['Year', 'Revenue', 'Revenue Target','Expenses','Expenses Target','Profit','Profit Target'];
	// convert php array to js array
	let arrOfInputs = <?=json_encode($chartDataArray); ?>;
	console.log(arrOfInputs);
	
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	
	let options = {
		title: '',
		curveType: 'function',
		vAxes:[{
			title: 'DOLLARS per month'} // Left axis
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

	
		function drawChart() {
		let dataArray = [arrOfTitle,...arrOfInputs]

		let data = google.visualization.arrayToDataTable(dataArray);
		let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

		chart.draw(data, options);
	}
	

	$(window).resize(function(){drawChart();});	  
</script>

    
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>