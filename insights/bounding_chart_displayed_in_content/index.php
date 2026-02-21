<?php
if(!isset($_SESSION)){session_start();}
?>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Productivity','10% - Lower bounds', '20% - Upper bounds'],
          
       <?php
       
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/charting/display_month_combo.php";
	    
         ?>
  
  
          [<?php echo "'".$display_month_combo[0]."'";?>,  100, 100 	,100],
          [<?php echo "'".$display_month_combo[1]."'";?>,  102, 101.6 	,103.09],
          [<?php echo "'".$display_month_combo[2]."'";?>,  102, 103.26 	,106.28],
          [<?php echo "'".$display_month_combo[3]."'";?>,  106, 104.88 	,109.56],
          [<?php echo "'".$display_month_combo[4]."'";?>,  108, 106.56 	,112.94],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  112, 108.26 	,116.43],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  111, 110.00 	,120.03],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  117, 111.75 	,123.74],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  122, 113.54 	,127.57],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  128, 115.36 	,131.51], 
          [<?php echo "'".$display_month_combo[10]."'";?>, 132, 117.20 	,135.57],          
          [<?php echo "'".$display_month_combo[11]."'";?>, 140, 119.08 	,139.76],                    
          [<?php echo "'".$display_month_combo[12]."'";?>, 142, 120.98 	,144.08],                 
          
        ]);

        var options = {
          title: '',
          curveType: 'function',
                   vAxes:[
	      {title: 'PRODUCTIVITY ~ Actual dollars earnt per hour'} // Left axis

    		],
	  series: {
            0: { lineWidth: 5 },
            1: { lineWidth: 10,lineDashStyle: [4, 4] },
            2: { lineWidth: 10,lineDashStyle: [4, 4] }
          },
       colors: ['#4332ff', '#d63a22', '#00ff00', 'grey', ],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }

      $(window).resize(function(){
		drawChart();
	});      
      
    </script>
    


	<div id="curve_chart1" style='max-width:1100px;margin:auto;height:650px;width:100%;'></div>

