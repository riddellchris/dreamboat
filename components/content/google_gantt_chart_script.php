 <script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function daysToMilliseconds(days) {
      return days * 24 * 60 * 60 * 1000;
    }

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');

      data.addRows([
        ['Research', '',
         new Date(2015, 0, 1), new Date(2015, 0, 5), null,  100,  null],
        ['Write', '',
         null, new Date(2015, 0, 9), daysToMilliseconds(3), 25, ''],
        ['Cite', '',
         null, new Date(2015, 0, 7), daysToMilliseconds(1), 20, ''],
        ['Complete', '',
         null, new Date(2015, 0, 10), daysToMilliseconds(1), 0, ''],
        ['Outline', '',
         null, new Date(2015, 0, 6), daysToMilliseconds(1), 100, '']
      ]);

      var options = {
        height: 275,
        'chartArea': {'width': '125%', 'height': '100%', bottom: 50},

        gantt: {   
                         labelStyle: {fontSize: 1, color: '#ffffff' },
          criticalPathEnabled: false,
          innerGridHorizLine: {
          	stroke: '#ffffff',
            	strokeWidth: 8
          	},
          innerGridTrack: {fill: '#ffffff'},
          innerGridDarkTrack: {fill: '#ffffff'}   
        }
          
          

  
                 
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    
    $(window).resize(function(){
	drawChart();
     });
  </script>