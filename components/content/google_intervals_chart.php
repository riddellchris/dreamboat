    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', '');
        data.addColumn('number', '');
        data.addColumn({id:'i0', type:'number', role:'interval'});
        data.addColumn({id:'i1', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
  
        data.addRows([
            [1, 100, 90, 110, 85, 96, 104, 120],
            [2, 120, 95, 130, 90, 113, 124, 140],
            [3, 130, 105, 140, 100, 117, 133, 139],
            [4, 90, 85, 95, 85, 88, 92, 95],
            [5, 70, 74, 63, 67, 69, 70, 72],
            [6, 30, 39, 22, 21, 28, 34, 40],
            [7, 80, 77, 83, 70, 77, 85, 90],
            [8, 100, 90, 110, 85, 95, 102, 110]]);
  
        // The intervals data as narrow lines (useful for showing raw source data)
        var options_lines = {
            title: '',
            curveType: 'function',
            lineWidth: 4,
     
            legend: 'none',
                hAxis: {
          		title: '', 
          		minValue: 1,   
          		textPosition: 'none',       		
          		maxValue: 8, 
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          vAxis: {	title: '',
		textPosition: 'none',
          		maxValue: 160, 
          		
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          
         'chartArea': {'width': '125%', 'height': '125%'},
        };
  
        var chart_lines = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart_lines.draw(data, options_lines);
      };
      
       $(window).resize(function(){
		drawChart();
	});
    </script>