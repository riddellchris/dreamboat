   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Year', 'Current TOTAL subscription value'],
          
       <?php
   	if(!isset($_SESSION)){session_start();}
   
   
   
   
   
        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
        	$sql = "SELECT * FROM admin_finance_tracking WHERE pilot_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'"; // select column
	$result = mysqli_query($conn, $sql);


	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		$display[$i]['value'] 	= $row['current_revenue'];
		$display[$i]['year'] 	= $row['year'];		
		$display[$i]['month'] 	= $row['month'];		
		$display[$i]['day'] 	= $row['day'];		
		
		$i ++;
	}
	
	$i_max = $i;
	
	for($i = 0; $i < $i_max ; $i ++){
		echo "['".$display[$i]['day'].",".$display[$i]['month']."',  ".$display[$i]['value']."]";
       		if($i != ($i_max - 1)){echo ",";}
       	
       	}
          
         
                    
  echo "      ]);";
  ?>

        var options = {
          title: '',
          curveType: 'function',
          vAxes:[{title: 'Current TOTAL subscription value' }],
        
        'chartArea': {'width': '85%', 'height': '85%'},
	  series: {
            0: { lineWidth: 5 },
            1: { lineWidth: 10,lineDashStyle: [4, 4] },
            2: { lineWidth: 5 },
            3: { lineWidth: 10,lineDashStyle: [4, 4] }
          },
       colors: ['#4332ff', '#281e96'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('finance_tracker'));

        chart.draw(data, options);
      }


        $(window).resize(function(){
		drawChart();
	});
    </script>