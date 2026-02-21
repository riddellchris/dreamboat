<?php
if(!isset($_SESSION)){session_start();}
?>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Productivity','10% - Lower target bound', '15% - Upper target bound'],
          
       <?php
       
        require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/charting/display_month_combo.php";
	    
         ?>
  
  
          [<?php echo "'".$display_month_combo[0]."'";?>,  100, 100 	,100],
          [<?php echo "'".$display_month_combo[1]."'";?>,  102, 101.6 	,102.36],
          [<?php echo "'".$display_month_combo[2]."'";?>,  102, 103.26 	,104.78],
          [<?php echo "'".$display_month_combo[3]."'";?>,  106, 104.88 	,107.25],
          [<?php echo "'".$display_month_combo[4]."'";?>,  108, 106.56 	,109.78],        
          [<?php echo "'".$display_month_combo[5]."'";?>,  112, 108.26 	,112.37],          
          [<?php echo "'".$display_month_combo[6]."'";?>,  111, 110.00 	,115.02],          
          [<?php echo "'".$display_month_combo[7]."'";?>,  117, 111.75 	,117.74],          
          [<?php echo "'".$display_month_combo[8]."'";?>,  122, 113.54 	,120.52],          
          [<?php echo "'".$display_month_combo[9]."'";?>,  123, 115.36 	,123.36], 
          [<?php echo "'".$display_month_combo[10]."'";?>, 122, 117.20 	,126.27],          
          [<?php echo "'".$display_month_combo[11]."'";?>, 125, 119.08 	,129.25],                    
          [<?php echo "'".$display_month_combo[12]."'";?>, 129, 120.98 	,132.30],                 
          
        ]);

        var options = {
          title: '',
          curveType: 'function',
                   vAxes:[
	      {title: 'PRODUCTIVITY ~ Defined as most appropriate per person'} // Left axis

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

