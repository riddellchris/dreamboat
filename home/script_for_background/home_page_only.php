      
        
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', 	'a','','',''],
		[250, 				250, 			null, 			null, 			null],
		[264.51531373598, 		308.21774357656, 	308.21774357656, 	null, 			null],		
		[264.51531373598, 		308.21774357656, 	308.21774357656, 	null, 			null],		
		
		[264.51531373598, 		308.21774357656, 	308.21774357656, 	null, 			null],
		[206.83961197968, 		291.67950222754, 	291.67950222754, 	null, 			null],
		[314, 				null, 			null, 			null, 			233.46175865098],
		[310, 				233.46175865098, 	null, 			null, 			null],
		[310, 				null, 			233.46175865098, 	null, 			null],		
		[235.67746285783,		null, 			299.94862290205, 	299.94862290205, 	null],
  		[250, 				null, 			250, 			null, 			null] 

        ]);



       <!-- then finally fill the /components/items/go_to.php?d=i=.      lines that hold issues -->


        var options = {
          legend: 'none',
          'chartArea': {'width': '100%', 'height': '100%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          colors: ['#ffbfbf','#f7f7f7','#d5d1ff'],
          series: {

<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->
                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
                1: { pointShape: 'circle', pointSize:0, lineWidth: 10},
                2: { pointShape: 'circle', pointSize:10, lineWidth: 0},    
                3: { pointShape: 'circle', pointSize:0, lineWidth: 0}            
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
 
 
<!-- https://stackoverflow.com/questions/6205621/how-to-add-links-in-google-chart-api -->
    google.visualization.events.addListener(chart, 'select', selectHandler); 

    function selectHandler(e)     {   
        window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
    }
 
        
         $(window).resize(function(){drawChart();});	 
      }
    </script>