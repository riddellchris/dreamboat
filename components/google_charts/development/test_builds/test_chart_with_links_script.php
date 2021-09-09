  <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Expected Value', 'link', 'Criticality'],
          [1, 'http://www.thefreedictionary.com/work', -11],
          [2, 'http://www.thefreedictionary.com/eat', 2],
          [-3, 'http://www.thefreedictionary.com/commute', 2],
          [4, 'http://www.thefreedictionary.com/television',2],
          [5,  'http://www.thefreedictionary.com/sleep', 7]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 2]);

        var options = {
          title: '',
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart( 
          document.getElementById('chart_div'));
        chart.draw(view, options);

        var selectHandler = function(e) {
         window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
        }

        // Add our selection handler.
        google.visualization.events.addListener(chart, 'select', selectHandler);
      }
      
        $(window).resize(function(){
		drawChart();
	});
    </script>