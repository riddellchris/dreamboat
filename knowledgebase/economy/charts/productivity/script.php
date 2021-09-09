<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_productivity_chart_script);

      function drawChart_productivity_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Date');
        data.addColumn('number',   'Productivity Index');
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

[new Date(1988,6,1),66.3,null],
[new Date(1988,9,1),66,null],
[new Date(1988,12,1),65.3,null],
[new Date(1989,3,1),65.1,null],
[new Date(1989,6,1),65.9,null],
[new Date(1989,9,1),65.1,null],
[new Date(1989,12,1),64.5,null],
[new Date(1990,3,1),65.6,null],
[new Date(1990,6,1),65.2,null],
[new Date(1990,9,1),64.8,null],
[new Date(1990,12,1),66.3,null],
[new Date(1991,3,1),66.1,null],
[new Date(1991,6,1),66.5,null],
[new Date(1991,9,1),67,null],
[new Date(1991,12,1),67.2,null],
[new Date(1992,3,1),67.5,null],
[new Date(1992,6,1),67.9,null],
[new Date(1992,9,1),68.5,null],
[new Date(1992,12,1),70.5,null],
[new Date(1993,3,1),70,null],
[new Date(1993,6,1),70.5,null],
[new Date(1993,9,1),70.7,null],
[new Date(1993,12,1),70.4,null],
[new Date(1994,3,1),71,null],
[new Date(1994,6,1),71.5,null],
[new Date(1994,9,1),71.2,null],
[new Date(1994,12,1),71.6,null],
[new Date(1995,3,1),71,null],
[new Date(1995,6,1),69.7,null],
[new Date(1995,9,1),71,null],
[new Date(1995,12,1),70.9,null],
[new Date(1996,3,1),71.8,null],
[new Date(1996,6,1),72.3,null],
[new Date(1996,9,1),72.9,null],
[new Date(1996,12,1),73.3,null],
[new Date(1997,3,1),74,null],
[new Date(1997,6,1),76.1,null],
[new Date(1997,9,1),76.3,null],
[new Date(1997,12,1),77,null],
[new Date(1998,3,1),77.2,null],
[new Date(1998,6,1),77.5,null],
[new Date(1998,9,1),78.9,null],
[new Date(1998,12,1),79.5,null],
[new Date(1999,3,1),80.1,null],
[new Date(1999,6,1),80.3,null],
[new Date(1999,9,1),80.2,null],
[new Date(1999,12,1),80.4,null],
[new Date(2000,3,1),80.4,null],
[new Date(2000,6,1),80.7,null],
[new Date(2000,9,1),79.8,null],
[new Date(2000,12,1),81,null],
[new Date(2001,3,1),81.7,null],
[new Date(2001,6,1),82.2,null],
[new Date(2001,9,1),83.4,null],
[new Date(2001,12,1),84.3,null],
[new Date(2002,3,1),84.3,null],
[new Date(2002,6,1),85.7,null],
[new Date(2002,9,1),85.2,null],
[new Date(2002,12,1),85.1,null],
[new Date(2003,3,1),84.6,null],
[new Date(2003,6,1),85.2,null],
[new Date(2003,9,1),86,null],
[new Date(2003,12,1),86.7,null],
[new Date(2004,3,1),86.8,null],
[new Date(2004,6,1),86.9,null],
[new Date(2004,9,1),87.5,null],
[new Date(2004,12,1),86.8,null],
[new Date(2005,3,1),86.3,null],
[new Date(2005,6,1),86.1,null],
[new Date(2005,9,1),86.7,null],
[new Date(2005,12,1),87.4,null],
[new Date(2006,3,1),87.7,null],
[new Date(2006,6,1),86.6,null],
[new Date(2006,9,1),87.4,null],
[new Date(2006,12,1),88.1,null],
[new Date(2007,3,1),89.4,null],
[new Date(2007,6,1),88.5,null],
[new Date(2007,9,1),89.2,null],
[new Date(2007,12,1),88.4,null],
[new Date(2008,3,1),88.5,null],
[new Date(2008,6,1),88.3,null],
[new Date(2008,9,1),88,null],
[new Date(2008,12,1),88.2,null],
[new Date(2009,3,1),89.6,null],
[new Date(2009,6,1),90.9,null],
[new Date(2009,9,1),91.3,null],
[new Date(2009,12,1),91.2,null],
[new Date(2010,3,1),91.1,null],
[new Date(2010,6,1),90.5,null],
[new Date(2010,9,1),90.6,null],
[new Date(2010,12,1),90.6,null],
[new Date(2011,3,1),89.6,null],
[new Date(2011,6,1),91,null],
[new Date(2011,9,1),91.6,null],
[new Date(2011,12,1),92.5,null],
[new Date(2012,3,1),93.1,null],
[new Date(2012,6,1),93.9,null],
[new Date(2012,9,1),94.4,null],
[new Date(2012,12,1),94.6,null],
[new Date(2013,3,1),94.5,null],
[new Date(2013,6,1),94.3,null],
[new Date(2013,9,1),94.9,null],
[new Date(2013,12,1),96.3,null],
[new Date(2014,3,1),97,null],
[new Date(2014,6,1),97.5,null],
[new Date(2014,9,1),97.7,null],
[new Date(2014,12,1),98.3,null],
[new Date(2015,3,1),97.5,null],
[new Date(2015,6,1),97,null],
[new Date(2015,9,1),98.3,null],
[new Date(2015,12,1),98.4,null],
[new Date(2016,3,1),98.8,null],
[new Date(2016,6,1),99.8,null],
[new Date(2016,9,1),99.2,null],
[new Date(2016,12,1),99.4,null],
[new Date(2017,3,1),99.3,null],
[new Date(2017,6,1),98.8,null],
[new Date(2017,9,1),99.7,null],
[new Date(2017,12,1),99.4,null],
[new Date(2018,3,1),100.4,null],
[new Date(2018,6,1),99.7,null],
[new Date(2018,9,1),100,null],
[new Date(2018,12,1),99.9,null],
[new Date(2019,3,1),99.6,null],
[new Date(2019,6,1),100.5,null],
[new Date(2019,9,1),100,null],
[new Date(2019,12,1),100.1,null],
[new Date(2020,3,1),100.8,null],
[new Date(2020,6,1),103.8,null],
[new Date(2020,9,1),102.9,null],
[new Date(2020,12,1),102,null],
[new Date(2021,3,1),102.5,null],
        ]);

	var chartwidth = $('economic_background_productivity').width();
	var chartheight = $('economic_background_productivity').height();


        var options = {
          title: 'Australian Labour Productivity Index (Source: ABS)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
          'chartArea': {'width': '90%', 'height': '90%'},

          legend: 'none', 
          hAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },   
            format: 'yy', 
                        gridlines: {color: 'none'}, 
            titleTextStyle: {
            	fontName: "Helvetica"
            },
            ticks: [	
                    new Date(2021,1,1),       
                    new Date(2020,1,1), 
                    new Date(2019,1,1),
                    new Date(2018,1,1), 
                    new Date(2017,1,1),
                    new Date(2016,1,1), 
                    new Date(2015,1,1),
                    new Date(2014,1,1), 
                    new Date(2013,1,1),
                    new Date(2012,1,1), 
                    new Date(2011,1,1),
                    new Date(2010,1,1), 
                    new Date(2009,1,1),
                    new Date(2008,1,1), 
                    new Date(2007,1,1),
                    new Date(2006,1,1), 
                    new Date(2005,1,1),
                    new Date(2004,1,1), 
                    new Date(2003,1,1),
                    new Date(2002,1,1), 
                    new Date(2001,1,1),
                    new Date(2000,1,1), 
                    new Date(1999,1,1),
                    new Date(1998,1,1), 
                    new Date(1997,1,1),
                    new Date(1996,1,1), 
                    new Date(1995,1,1),
                    new Date(1994,1,1), 
                    new Date(1993,1,1),
                    new Date(1992,1,1), 
                    new Date(1991,1,1),
                    new Date(1990,1,1),
                    new Date(1989,1,1), 
                    new Date(1988,1,1)
            		
            		
            		
            		]
          }, 
          vAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },   
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