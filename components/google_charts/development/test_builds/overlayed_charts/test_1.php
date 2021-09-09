<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        var piechart_options = {title:'Pie Chart: How Much Pizza I Ate Last Night',
                       width:400,
                       height:300,
                       backgroundColor: { fill:'transparent' }
                       };
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: How Much Pizza I Ate Last Night',
                       width:400,
                       height:300,
                       legend: 'none',
                       backgroundColor: { fill:'transparent' }
                       };
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }
</script>

<style>
	#container {
	  width: 100px;
	  height: 100px;
	  position: relative;
	}
	#piechart_div,
	#barchart_div {
	  width: 100%;
	  height: 100%;
	  position: absolute;
	  top: 0;
	  left: 0;
	}
	#barchart_div {
	  z-index: 10;
	}
</style>


<body>
    <!--Table and divs that hold the pie charts-->
    <div id="container">
	    <div id="piechart_div" style="border: 1px solid #ccc"></div>
	    <div id="barchart_div" style="border: 1px solid #ccc"></div>
</div>		    
  </body>
</html>