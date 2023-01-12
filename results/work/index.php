<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];

require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>

<!-- Prepare data for google chart -->
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
if(!isset($_SESSION)){session_start();}

// Get Income data
$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income' ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
unset($income);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$all_null = 'yes';
	for($i=0;$i<$month_to_loop;$i++){
		if($row[$month_combo[$i]] != 0){
			$income[$month_combo[$i]] = $row[$month_combo[$i]];
			$all_null = 'no';
		}else{
			$income[$month_combo[$i]] = 0;
		}
	}
}
	// Get Income_target data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='income_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($income_target);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0;$i<$month_to_loop;$i++){
			if($row[$month_combo[$i]] != 0){
				$income_target[$month_combo[$i]] = $row[$month_combo[$i]];
				$all_null = 'no';
			}else{
				$income_target[$month_combo[$i]] = 0;
			}
		}
	}
	// Get Hours data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_worked' ORDER BY entry_id DESC LIMIT 1"; // select column

	$result = mysqli_query($conn, $sql);
	unset($hours_worked);

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0;$i<$month_to_loop;$i++){
			if($row[$month_combo[$i]] != 0){
				$hours_worked[$month_combo[$i]] = $row[$month_combo[$i]];
				$all_null = 'no';
			}else{
				$hours_worked[$month_combo[$i]] = 0;
			}
		}
	}

	// Get Hours target_data
	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='hours_worked_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	unset($hours_worked_target);
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0;$i<$month_to_loop;$i++){
			if($row[$month_combo[$i]] != 0){
				$hours_worked_target[$month_combo[$i]] = $row[$month_combo[$i]];$all_null = 'no';
			}else{
				$hours_worked_target[$month_combo[$i]] = 0;
			}
			
		}
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
				floatval($income[$month_combo[$i]]), 
				floatval($income_target[$month_combo[$i]]),
				floatval($hours_worked[$month_combo[$i]]),
				floatval($hours_worked_target[$month_combo[$i]]),
			];
			array_push($chartDataArray,$newChartData);
		}
?>
<!-- Draw google chart -->
    <script name='results_work' type="text/javascript">
			let arrOfTitle = ['Year', 'Income', 'Income Target', 'Hours Worked', 'Hours Worked Target'];
			// convert php array to js array
			let arrOfInputs = <?=json_encode($chartDataArray); ?>;
			console.log(arrOfInputs);

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			let options = {
				title: '',
				curveType: 'function',				
				vAxes:[{
					title: 'INCOME - DOLLARS', 
					titleTextStyle:{color: 'green'}, 
					gridlines: {color: 'none'}, 
					textStyle:{color: 'green'}
				}, // Left axis
				{
					title: 'HOURS WORKED - HOURS', 
					titleTextStyle: {color: 'purple'}, 
					gridlines: {color: 'none'} ,   
					viewWindowMode:'explicit', 
					viewWindow: { max:200, min:0 }, 
					textStyle:{color: 'purple'}
				}], // Right axis
				series: {
					0: { 
						lineWidth: 5,
						targetAxisIndex:0 
					},
					1: { 
						lineWidth: 10,
						lineDashStyle: [4, 4],
						targetAxisIndex:0 
					},
					2: { 
						lineWidth: 5 ,
						targetAxisIndex:1
					},
					3: { 
						lineWidth: 10,
						lineDashStyle: [4, 4],
						targetAxisIndex:1 
					}
				},
				colors: ['#0dc10d', 'green', 'pink', 'purple'],
				legend: { 
					position: 'bottom' 
			}};
      function drawChart() {
				let dataArray = [arrOfTitle,...arrOfInputs]
				
				let data = google.visualization.arrayToDataTable(dataArray);
				let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

				chart.draw(data, options);
      }
			$(window).resize(function(){drawChart();});	  
    </script>