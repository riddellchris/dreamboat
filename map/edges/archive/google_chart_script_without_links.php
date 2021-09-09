      
        
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', 	'a','',''],
		[250, 				250, 	null, 	null],
		[310, 				250, 	null,	null],
		[250, 				null, 	250, 	null],		
		[310,				null, 	250, 	null],
		[240, 				null, 	null,	250],
		[320, 				null, 	null, 	250]
        ]);



       <!-- then finally fill the /components/items/go_to.php?d=i=.      lines that hold issues -->


        var options = {
          legend: 'none',
          'chartArea': {'width': '100%', 'height': '100%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { trigger: 'none' },
          colors: ['#ff0000','#f7f7f7','#f7f7f7'],
          series: {

<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->
                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
                1: { pointShape: 'circle', pointSize:0, lineWidth: 10},
                2: { pointShape: 'circle', pointSize:0, lineWidth: 0},                         
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);

 
        
         $(window).resize(function(){drawChart();});	 
      }
    </script>