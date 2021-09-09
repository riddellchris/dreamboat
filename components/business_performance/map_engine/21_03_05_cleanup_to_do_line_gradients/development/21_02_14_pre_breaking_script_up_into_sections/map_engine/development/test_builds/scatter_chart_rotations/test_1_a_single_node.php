<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
        
<?php

//count all nodes
$nodes_count = 2;

//create positions of each node
if($nodes_count == 1){$node[1][x] = 250; $node[1][y] = 500;}

if($nodes_count == 2){	$node[1][x] = 250 - sin(15); $node[1][y] = 250 + 250*cos(15);
			$node[2][x] = 250 - sin(15); $node[2][y] = 250 + 250*cos(15);
			}
//draw lines

//build final array

//print







?>        
        
        
        
          ['x', 'Nodes','link_1' ],
          [0,  165, null],          
          [1,  165, null],
          [2,  135, 135],
          [250,  250, 250],
          [3,  139, null],
          [4,  136, null],
          [500,  500, null]          
        ]);

        var options = {
          title : '',
          vAxis: {title: ''},
          hAxis: {title: ''},
          seriesType: 'scatter'
          <?php
          //series for each line
          
          if($nodes_count == 2){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}
          if($nodes_count == 3){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}        
          if($nodes_count == 4){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}        
          if($nodes_count == 5){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}
          if($nodes_count == 6){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}      
          if($nodes_count == 7){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}          
          if($nodes_count == 8){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}          
          if($nodes_count == 9){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}
          if($nodes_count == 10){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}         
                          
          
          ?>
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>