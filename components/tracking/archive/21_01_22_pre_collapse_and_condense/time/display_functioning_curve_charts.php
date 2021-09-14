<?php
if(!isset($_SESSION)){session_start();}

if($_GET['category'] == 'productivity'	){$_SESSION['menu_set_productivity_tracker_category'] = 'productivity';}
if($_GET['category'] == 'dollars'	){$_SESSION['menu_set_productivity_tracker_category'] = 'dollars';}
if($_GET['category'] == 'time'		){$_SESSION['menu_set_productivity_tracker_category'] = 'time';}
//if($_GET['category'] == 'goals'		){$_SESSION['menu_set_productivity_tracker_category'] = 'goals';}

if($_GET['period'] == 'daily'	  ){$_SESSION['menu_set_productivity_tracker_period'] = 'daily';}
if($_GET['period'] == 'weekly'  ){$_SESSION['menu_set_productivity_tracker_period'] = 'weekly';}
if($_GET['period'] == 'monthly'){$_SESSION['menu_set_productivity_tracker_period'] = 'monthly';}

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";


if($_SESSION['menu_set_productivity_tracker_category'] ==  'productivity'){
	echo "productivity line with blue time numbers, red dollar numbers and average period for calculating";
	//https://developers.google.com/chart/interactive/docs/gallery/combochart
	echo "<br>";
	echo "competency chart";
	//https://developers.google.com/chart/interactive/docs/gallery/areachart //stacked chart
	echo "<br>";
	echo "value chart";
	echo "<br>";
	echo "efficiency chart";
}

if($_SESSION['menu_set_productivity_tracker_category'] ==  'dollars'	){
	echo "dollars chart and goal date and time";
	echo "<br>";
	echo "value chart";
	echo "<br>";
	echo "efficiency chart";
	echo "<br>";
	echo "competency chart";	
}

if($_SESSION['menu_set_productivity_tracker_category'] ==  'time'	){
	echo "time spent chart and goal date and time";
	echo "<br>";
	echo "efficiency chart";
	echo "<br>";
	echo "competency chart";
	echo "value chart";
	echo "<br>";
}
   
?>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    	data.addColumn('date', 'Date');
    var data = google.visualization.arrayToDataTable([
        ['day','income'],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'"; // select column
	$result = mysqli_query($conn, $sql);
        

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){




                        
            echo     "['".$row['date_day']."', ";
            
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){echo round($row['income']/($row['minutes_worked']/60),2);}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'dollars'){echo $row['income'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){echo $row['minutes_worked'];}           
            
            echo "],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title: 'Daily Income',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

</script>

 <div id="chart_div" style="width: 900px; height: 500px;margin:auto;margin-top:200px;"></div>




<?php
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
?>
