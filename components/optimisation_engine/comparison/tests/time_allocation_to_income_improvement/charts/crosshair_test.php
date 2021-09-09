<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart", 'line']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('number');
        data.addColumn('number');
        for (var i = 0; i < 100; i++)
          data.addRow([Math.floor(Math.random()*100),
                       Math.floor(Math.random()*100)]);
        var options = {
          legend: 'none',
          crosshair: { trigger: 'both' } // Display crosshairs on focus and selection.
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart", 'line']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('number');
        data.addColumn('number');
        for (var i = 0; i < 100; i++)
          data.addRow([Math.floor(Math.random()*100),
                       Math.floor(Math.random()*100)]);
        var options = {
          legend: 'none',
          crosshair: { trigger: 'both' } // Display crosshairs on focus and selection.
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <div id="chart_div2" style="width: 900px; height: 500px;"></div>
  </body>
</html>