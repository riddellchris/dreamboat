<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";

//require $_SERVER['DOCUMENT_ROOT']."/services/network/feed/network_loop.php";


//require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
//$sql = "SELECT * FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'"; // select column
//$result = mysqli_query($conn, $sql);
       //  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){    
          //   echo    "[".strtotime($row["timestamp"]).", ".$row["mood"].", ".$row["achievement"].", ".$row["energy"].", ".$row["focus"].", ".$row["joy"].", ".$row["direction"].", ".$row["passion"].", ".$row["clarity"].", ".$row["productivity"].", ".$row["enthusiasm"]."],";
   //  echo 'hi<br>';       }
     
?>

<br><br><br><br>
income<br>
time --
productivty<br>
adjustment of inputs to actuals in dollars<br>

dollars earnt for you and business<br>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
        ['energy','productivity'],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'"; // select column
$result = mysqli_query($conn, $sql);
        
        
        	$number = 1;
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                        
            echo     "[".$row['date_year'].", ".$row['date_month']."], ".$row['date_day']."], ".$row['daily_productivity']."],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title: 'Daily Productivity',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

</script>

 <div id="chart_div" style="width: 900px; height: 500px;margin:auto;margin-top:200px;"></div>




<?php
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
?>
