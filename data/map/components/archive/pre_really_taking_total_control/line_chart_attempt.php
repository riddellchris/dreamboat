  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', '1', '2', '3', '4', '5', '6'],
              [1, 2, null, null, null, null, null],
              [2, 2, 3, null, null, null, null],
               [2, null, 3, null, null, null, null],             
               [6, null, 3, null, null, null, null],                  
              [3, 2, null, 4, null, null, null],
              [6, 5, null, null, null, null, 7],
              [4, null, null, null, 5, null, null],
              [5, null, null, null, null, 6, null]

        ]);

        var options = {
          legend: 'none',
          pointSize: 30,
          series: {
                0: { pointShape: 'circle', lineWidth: 20, pointSize:0},
                1: { pointShape: 'triangle', lineWidth: 10},
                2: { pointShape: 'square' },
                3: { pointShape: 'diamond' },
                4: { pointShape: 'star' },
                5: { pointShape: 'polygon' }
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>