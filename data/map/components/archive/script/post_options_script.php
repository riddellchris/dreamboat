      	<!--draws the chart-->
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
  
 	<!--enables clickable function on the chart nodes-->
 	<!--as yet we dont know about how to make the lines clickable too without endless endpoints... I guess you could do that as huge number of points the same thickness but wow that would be tough-->
	<!--https://stackoverflow.com/questions/6205621/how-to-add-links-in-google-chart-api -->
	google.visualization.events.addListener(chart, 'select', selectHandler); 
	
	function selectHandler(e)     {   
	window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
	}
  
        <!--ensures the chart resizes as you change the window size-->
        $(window).resize(function(){drawChart();});	 
}