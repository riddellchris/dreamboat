<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_productivity_chart_script);

      function drawChart_productivity_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Date');
        data.addColumn('number',   'Productivity Index');
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([
			[new Date(1985,9,1),65.8,null],
			[new Date(1985,12,1),65.2,null],
			[new Date(1986,3,1),64.2,null],
			[new Date(1986,6,1),63.8,null],
			[new Date(1986,9,1),63.7,null],
			[new Date(1986,12,1),64.3,null],
			[new Date(1987,3,1),64.4,null],
			[new Date(1987,6,1),65,null],
			[new Date(1987,9,1),65.8,null],
			[new Date(1987,12,1),66.4,null],
			[new Date(1988,3,1),66.1,null],
			[new Date(1988,6,1),66.5,null],
			[new Date(1988,9,1),66.1,null],
			[new Date(1988,12,1),65.4,null],
			[new Date(1989,3,1),65.2,null],
			[new Date(1989,6,1),66,null],
			[new Date(1989,9,1),65.3,null],
			[new Date(1989,12,1),64.6,null],
			[new Date(1990,3,1),65.7,null],
			[new Date(1990,6,1),65.3,null],
			[new Date(1990,9,1),64.9,null],
			[new Date(1990,12,1),66.4,null],
			[new Date(1991,3,1),66.3,null],
			[new Date(1991,6,1),66.6,null],
			[new Date(1991,9,1),67.1,null],
			[new Date(1991,12,1),67.3,null],
			[new Date(1992,3,1),67.6,null],
			[new Date(1992,6,1),68,null],
			[new Date(1992,9,1),68.6,null],
			[new Date(1992,12,1),70.6,null],
			[new Date(1993,3,1),70.1,null],
			[new Date(1993,6,1),70.6,null],
			[new Date(1993,9,1),70.8,null],
			[new Date(1993,12,1),70.5,null],
			[new Date(1994,3,1),71.1,null],
			[new Date(1994,6,1),71.7,null],
			[new Date(1994,9,1),71.4,null],
			[new Date(1994,12,1),71.7,null],
			[new Date(1995,3,1),71.2,null],
			[new Date(1995,6,1),69.9,null],
			[new Date(1995,9,1),71.1,null],
			[new Date(1995,12,1),71,null],
			[new Date(1996,3,1),71.9,null],
			[new Date(1996,6,1),72.5,null],
			[new Date(1996,9,1),73,null],
			[new Date(1996,12,1),73.4,null],
			[new Date(1997,3,1),74.1,null],
			[new Date(1997,6,1),76.2,null],
			[new Date(1997,9,1),76.4,null],
			[new Date(1997,12,1),77.1,null],
			[new Date(1998,3,1),77.4,null],
			[new Date(1998,6,1),77.7,null],
			[new Date(1998,9,1),79,null],
			[new Date(1998,12,1),79.6,null],
			[new Date(1999,3,1),80.2,null],
			[new Date(1999,6,1),80.4,null],
			[new Date(1999,9,1),80.3,null],
			[new Date(1999,12,1),80.6,null],
			[new Date(2000,3,1),80.5,null],
			[new Date(2000,6,1),80.9,null],
			[new Date(2000,9,1),79.9,null],
			[new Date(2000,12,1),81.1,null],
			[new Date(2001,3,1),81.8,null],
			[new Date(2001,6,1),82.4,null],
			[new Date(2001,9,1),83.6,null],
			[new Date(2001,12,1),84.4,null],
			[new Date(2002,3,1),84.4,null],
			[new Date(2002,6,1),85.8,null],
			[new Date(2002,9,1),85.4,null],
			[new Date(2002,12,1),85.2,null],
			[new Date(2003,3,1),84.7,null],
			[new Date(2003,6,1),85.4,null],
			[new Date(2003,9,1),86.1,null],
			[new Date(2003,12,1),86.8,null],
			[new Date(2004,3,1),86.9,null],
			[new Date(2004,6,1),87,null],
			[new Date(2004,9,1),87.7,null],
			[new Date(2004,12,1),87,null],
			[new Date(2005,3,1),86.5,null],
			[new Date(2005,6,1),86.2,null],
			[new Date(2005,9,1),86.9,null],
			[new Date(2005,12,1),87.5,null],
			[new Date(2006,3,1),87.8,null],
			[new Date(2006,6,1),86.8,null],
			[new Date(2006,9,1),87.5,null],
			[new Date(2006,12,1),88.2,null],
			[new Date(2007,3,1),89.5,null],
			[new Date(2007,6,1),88.6,null],
			[new Date(2007,9,1),89.3,null],
			[new Date(2007,12,1),88.5,null],
			[new Date(2008,3,1),88.6,null],
			[new Date(2008,6,1),88.4,null],
			[new Date(2008,9,1),88.2,null],
			[new Date(2008,12,1),88.3,null],
			[new Date(2009,3,1),89.8,null],
			[new Date(2009,6,1),91.1,null],
			[new Date(2009,9,1),91.4,null],
			[new Date(2009,12,1),91.3,null],
			[new Date(2010,3,1),91.2,null],
			[new Date(2010,6,1),90.6,null],
			[new Date(2010,9,1),90.8,null],
			[new Date(2010,12,1),90.8,null],
			[new Date(2011,3,1),89.8,null],
			[new Date(2011,6,1),91.2,null],
			[new Date(2011,9,1),91.7,null],
			[new Date(2011,12,1),92.6,null],
			[new Date(2012,3,1),93.3,null],
			[new Date(2012,6,1),94,null],
			[new Date(2012,9,1),94.5,null],
			[new Date(2012,12,1),94.7,null],
			[new Date(2013,3,1),94.6,null],
			[new Date(2013,6,1),94.4,null],
			[new Date(2013,9,1),95,null],
			[new Date(2013,12,1),96.4,null],
			[new Date(2014,3,1),97.1,null],
			[new Date(2014,6,1),97.6,null],
			[new Date(2014,9,1),97.8,null],
			[new Date(2014,12,1),98.4,null],
			[new Date(2015,3,1),97.7,null],
			[new Date(2015,6,1),97.1,null],
			[new Date(2015,9,1),98.4,null],
			[new Date(2015,12,1),98.5,null],
			[new Date(2016,3,1),99,null],
			[new Date(2016,6,1),100,null],
			[new Date(2016,9,1),99.4,null],
			[new Date(2016,12,1),99.6,null],
			[new Date(2017,3,1),99.6,null],
			[new Date(2017,6,1),99.1,null],
			[new Date(2017,9,1),99.8,null],
			[new Date(2017,12,1),99.6,null],
			[new Date(2018,3,1),100.7,null],
			[new Date(2018,6,1),99.9,null],
			[new Date(2018,9,1),100.1,null],
			[new Date(2018,12,1),100,null],
			[new Date(2019,3,1),99.6,null],
			[new Date(2019,6,1),100.3,null],
			[new Date(2019,9,1),100.2,null],
			[new Date(2019,12,1),100.5,null],
			[new Date(2020,3,1),101.2,null]   
        ]);

	var chartwidth = $('economic_background_productivity').width();
	var chartheight = $('economic_background_productivity').height();


        var options = {
          title: 'ABS Australian Productivity Index (INDEX)', 
          'chartArea': {'width': '84%', 'height': '90%'},

          legend: 'none', 
          hAxis: {
            format: 'yy', 
            ticks: [	new Date(2020,1,1), 
            		new Date(2018,1,1), 
            		new Date(2016,1,1), 
            		new Date(2014,1,1), 
            		new Date(2012,1,1), 
            		new Date(2010,1,1), 
            		new Date(2008,1,1), 
            		new Date(2006,1,1), 
            		new Date(2004,1,1), 
            		new Date(2002,1,1), 
            		new Date(2000,1,1), 
            		new Date(1998,1,1), 
            		new Date(1996,1,1), 
            		new Date(1994,1,1), 
            		new Date(1992,1,1), 
            		new Date(1990,1,1), 
            		new Date(1988,1,1), 
            		new Date(1986,1,1)
            		
            		
            		
            		]
          }, 
          vAxis: {
            gridlines: {color: 'none'}, 
    
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_productivity'));
        chart.draw(data,  options);
         var chart = new google.visualization.LineChart(document.getElementById('economic_background_productivity_print'));
        chart.draw(data,  options);       
        
      }
      
     $(window).resize(function(){drawChart_productivity_chart_script();});	
      </script>