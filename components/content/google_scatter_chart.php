<script  type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'scatter']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = new google.visualization.DataTable();
        data.addColumn('number', '');
        data.addColumn('number', '');
        
        data.addRows([
        
        
        <?php
        	//$first = 'yes';
        	for($i = 0; $i <= 500; $i++){
        	
        		$coordinates = "[".rand(0,1000).",".rand(6000,10000)."]";
        	
        		$jmax = rand(0,5);
        		for($j = 0; $j <= $jmax; $j++){
        			echo $coordinates;
        			if($j != $jmax){echo ",";}
        		}
        	
        	
        	if($i != 500){echo ",";}
        //	$first = 'no';
        
        	}
        	?>

        ]);

        var options = {
	//	animation: {"startup": true,duration: 1000,easing: 'out'},
          title: '',
          hAxis: {
          		title: '', 
          		
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          vAxis: {	title: '',
			minValue: 5900, 
          		maxValue: 10100, 
          		
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          legend: 'none',
         'chartArea': {'width': '105%', 'height': '105%'},

	        backgroundColor: '#ffffff',
	        legend: 'none', 
	        colors: ['#e61062'],
	         pointSize: 9
         
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    };
        
      $(window).resize(function(){
		drawStuff();
	});
	
	

		
</script>