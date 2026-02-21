      
        
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', { role: 'link' },	'nodes','',''],
		[250, 	'/map/personal/index.php?primary_folder=map&primary_folder=map&secondary_folder=personal&quarternary_folder=unknown',			250, 	null, 	null],
		[310, 	'/map/personal/index.php?primary_folder=map&primary_folder=map&secondary_folder=personal&quarternary_folder=unknown',			250, 	null,	null],
		[250, 	'/map/personal/index.php?primary_folder=map&primary_folder=map&secondary_folder=personal&quarternary_folder=unknown',			        null, 	250, 	null],		
		[310,	'/map/personal/index.php?primary_folder=map&primary_folder=map&secondary_folder=personal&quarternary_folder=unknown',			        null, 	250, 	null],
		[240, 	null,			        null, 	null,	250],
		[320, 	null,			        null, 	null, 	250]
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


	google.visualization.events.addListener(chart, 'select', selectHandler); 
         var selectHandler = function(e) {
         window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
        }
        
         $(window).resize(function(){drawChart();});	 
      }
    </script>