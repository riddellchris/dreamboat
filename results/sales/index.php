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


	//Get Sales data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='sales' ORDER BY entry_id DESC LIMIT 1"; // select column
	
	$result = mysqli_query($conn, $sql);
	unset($sales);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$sales[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$sales[$item] = 'null';
			}	
		}
			// if($all_null == 'yes'){$sales[$month_combo[6]] = 1;}
	} 

	//Get Sales_target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='sales_target'"; // select column
	$result = mysqli_query($conn, $sql);
	unset($sales_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$sales_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$sales_target[$item] = 'null';
			}	
		}
			// if($all_null == 'yes'){$sales[$month_combo[6]] = 1;}
	}
	// Get Income data -- follow the original code to query income, although it might not be needed 
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income'"; // select column
	$result = mysqli_query($conn, $sql);
	unset($income);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$income[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$income[$item] = 'null';
			}	
		}
			// if($all_null == 'yes'){$income[$month_combo[6]] = 1;}
	}
	
	// Get Income_target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income_target'"; // select column
	$result = mysqli_query($conn, $sql);
	unset($income_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		foreach($month_combo as $item){
			if($row[$item] != 0){
				$income_target[$item] = $row[$item];
				$all_null = 'no';
			}else{
				$income_target[$item] = 'null';
			}	
		}
			// if($all_null == 'yes'){$income_target[$month_combo[6]] = 1;}
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
				floatval($sales[$month_combo_reverse[$i]]),  
				floatval($sales_target[$month_combo_reverse[$i]]),
			];
			array_push($chartDataArray,$newChartData);
		}
?>
<script type="text/javascript" name="results_sales">
	// convert php array to js array	
	let arrOfTitle = ['Year', 'Sales', 'Sales Target'];
	
	let arrOfInputs = <?=json_encode($chartDataArray); ?>;
	console.log(arrOfInputs);

	let options = {
		title: '',
		curveType: 'function',
		vAxes:[{title: 'DOLLARS per month' }],
		series: {
			0: { lineWidth: 5 },
			1: { lineWidth: 10,lineDashStyle: [4, 4] }
		},
		colors: ['black', 'black'],
		legend: { position: 'bottom' }
		}; 
		
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart(){
			// Set Chart Data
			let dataArray = [arrOfTitle,...arrOfInputs];

			let data = google.visualization.arrayToDataTable(dataArray);
			let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));
			
			chart.draw(data, options);
		};
	$(window).resize(function(){drawChart();});	  
</script>
    

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>