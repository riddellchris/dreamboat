<script  type="text/javascript">
	google.load('visualization', '1', { packages: ['corechart', 'line'] });
	google.setOnLoadCallback(draw_chart_1);

	function draw_chart_1(){
	    var data = new google.visualization.DataTable();
	    data.addColumn('number', 'X');
	    data.addColumn('number', '');
	
	    data.addRows([
	      [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
	      [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
	      [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
	      [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
	      [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
	      [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
	      [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
	      [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
	      [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
	      [54, 71], [55, 72], [56, 73], [57, 75]
	    ]);
	
	    var options = {
		//animation: {"startup": true,duration: 6000,easing: 'out'},
	        hAxis: {
	            title: '',
	            minorGridlines: {count: 0 }, 
	            gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff',  
	           lineWidth: 10,
	          titleTextStyle: {
		            color: "#281e96",
		            fontName: "Comfortaa",
		            fontSize: 25,
		            bold: true,
		            italic: false
        		}
	        },
	        vAxis: {
	            	title: '',
	            	minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0 },
	            	lineWidth: 80,
			baselineColor: '#ffffff',
         		gridlineColor: '#ffffff',
	        	titleTextStyle: {
		            color: "#281e96",
		            fontName: "Comfortaa",
		            fontSize: 25,
		            bold: true,
		            italic: false
        		} 
	        },
	        backgroundColor: '#ffffff',
	        legend: 'none',
	         lineWidth: 10,
	         colors: [
	         		<?php echo "'".$color."'"; ?>

	         		
	         		],
	        curveType: 'function',
	        'chartArea': {'width': '105%', 'height': '105%'},
	    };
	
	    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
	    google.visualization.events.addOneTimeListener(chart, 'ready', function () {
	        
	    });
	    chart.draw(data, options);
	}
        
      $(window).resize(function(){
		draw_chart_1();
	});
	
	

		
</script>