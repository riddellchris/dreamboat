<script  type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'scatter']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
    var data = google.visualization.arrayToDataTable([
      ['Mon', 8, 9, 38, 45],
      ['Tue', 12, 19, 55, 66],
      ['Wed', 15, 25, 77, 80],
      ['Thu', 23, 37, 66, 50],
      ['Fri', 35, 36, 50, 45],
      ['Mon', 33, 36, 38, 45],
      ['Tue', 38, 38, 55, 66],
      ['Wed', 43, 55, 77, 80],
      ['Thu', 56, 77, 66, 80],
      ['Fri', 68, 66, 72, 85],
      ['Mon', 72, 78, 55, 85],
      ['Tue', 84, 88, 55, 66],
      ['Wed', 86, 95, 77, 80],
      ['Thu', 98, 100, 111, 125]
      // Treat first row as data as well.
    ], true);

    var options = {
          title: '',
          //animation: {"startup": true,duration: 10000, easing: 'out'},
          bar: { groupWidth: '85%' },
          hAxis: {
          		title: '', 
          		
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          vAxis: {	title: '',

          		
          		minorGridlines: {count: 0 }, 
	            	gridlines: {count: 0, } ,
	       		baselineColor: '#ffffff',
         		gridlineColor: '#ffffff'
          		},
          legend: 'none',
         'chartArea': {'width': '105%', 'height': '105%'},
  	colors: ['#31e300'],
	        backgroundColor: '#ffffff',
	        legend: 'none', 
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
        
      $(window).resize(function(){
		drawStuff();
	});
	
	

		
</script>