<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_productivity_chart_script);

      function drawChart_productivity_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Date');
        data.addColumn('number',   'Productivity Index');
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

          [new Date(1985,9,1),64.6,null],
[new Date(1985,12,1),64,null],
[new Date(1986,3,1),63,null],
[new Date(1986,6,1),62.5,null],
[new Date(1986,9,1),62.4,null],
[new Date(1986,12,1),63.1,null],
[new Date(1987,3,1),63.1,null],
[new Date(1987,6,1),63.8,null],
[new Date(1987,9,1),64.6,null],
[new Date(1987,12,1),65,null],
[new Date(1988,3,1),64.7,null],
[new Date(1988,6,1),65.1,null],
[new Date(1988,9,1),64.8,null],
[new Date(1988,12,1),64.1,null],
[new Date(1989,3,1),63.8,null],
[new Date(1989,6,1),64.7,null],
[new Date(1989,9,1),63.8,null],
[new Date(1989,12,1),63.2,null],
[new Date(1990,3,1),64.3,null],
[new Date(1990,6,1),64.1,null],
[new Date(1990,9,1),63.6,null],
[new Date(1990,12,1),65.1,null],
[new Date(1991,3,1),64.9,null],
[new Date(1991,6,1),65.2,null],
[new Date(1991,9,1),65.7,null],
[new Date(1991,12,1),65.8,null],
[new Date(1992,3,1),66.1,null],
[new Date(1992,6,1),66.6,null],
[new Date(1992,9,1),67.1,null],
[new Date(1992,12,1),69.1,null],
[new Date(1993,3,1),68.6,null],
[new Date(1993,6,1),69.1,null],
[new Date(1993,9,1),69.4,null],
[new Date(1993,12,1),69,null],
[new Date(1994,3,1),69.5,null],
[new Date(1994,6,1),70.1,null],
[new Date(1994,9,1),69.8,null],
[new Date(1994,12,1),70.3,null],
[new Date(1995,3,1),69.7,null],
[new Date(1995,6,1),68.7,null],
[new Date(1995,9,1),70,null],
[new Date(1995,12,1),69.7,null],
[new Date(1996,3,1),70.6,null],
[new Date(1996,6,1),71.1,null],
[new Date(1996,9,1),71.3,null],
[new Date(1996,12,1),71.4,null],
[new Date(1997,3,1),72.1,null],
[new Date(1997,6,1),74.2,null],
[new Date(1997,9,1),74.4,null],
[new Date(1997,12,1),74.7,null],
[new Date(1998,3,1),75.1,null],
[new Date(1998,6,1),75.2,null],
[new Date(1998,9,1),76.5,null],
[new Date(1998,12,1),77.4,null],
[new Date(1999,3,1),77.6,null],
[new Date(1999,6,1),77.8,null],
[new Date(1999,9,1),78,null],
[new Date(1999,12,1),78.2,null],
[new Date(2000,3,1),78.3,null],
[new Date(2000,6,1),78.2,null],
[new Date(2000,9,1),77.7,null],
[new Date(2000,12,1),78.8,null],
[new Date(2001,3,1),79.9,null],
[new Date(2001,6,1),80.1,null],
[new Date(2001,9,1),80.9,null],
[new Date(2001,12,1),81.7,null],
[new Date(2002,3,1),82.3,null],
[new Date(2002,6,1),83.8,null],
[new Date(2002,9,1),83.8,null],
[new Date(2002,12,1),83.4,null],
[new Date(2003,3,1),83.7,null],
[new Date(2003,6,1),83.5,null],
[new Date(2003,9,1),84.5,null],
[new Date(2003,12,1),85.2,null],
[new Date(2004,3,1),85.6,null],
[new Date(2004,6,1),85.7,null],
[new Date(2004,9,1),86.4,null],
[new Date(2004,12,1),85.7,null],
[new Date(2005,3,1),84.9,null],
[new Date(2005,6,1),84.4,null],
[new Date(2005,9,1),85,null],
[new Date(2005,12,1),85.9,null],
[new Date(2006,3,1),85.7,null],
[new Date(2006,6,1),85.2,null],
[new Date(2006,9,1),85.8,null],
[new Date(2006,12,1),86.1,null],
[new Date(2007,3,1),87.1,null],
[new Date(2007,6,1),86.7,null],
[new Date(2007,9,1),87.2,null],
[new Date(2007,12,1),86.6,null],
[new Date(2008,3,1),86.6,null],
[new Date(2008,6,1),85.7,null],
[new Date(2008,9,1),85.8,null],
[new Date(2008,12,1),85.8,null],
[new Date(2009,3,1),87,null],
[new Date(2009,6,1),88.5,null],
[new Date(2009,9,1),88.6,null],
[new Date(2009,12,1),88.5,null],
[new Date(2010,3,1),88.7,null],
[new Date(2010,6,1),88.2,null],
[new Date(2010,9,1),88.6,null],
[new Date(2010,12,1),88.2,null],
[new Date(2011,3,1),87.6,null],
[new Date(2011,6,1),88.9,null],
[new Date(2011,9,1),89.9,null],
[new Date(2011,12,1),90.3,null],
[new Date(2012,3,1),90.8,null],
[new Date(2012,6,1),91.5,null],
[new Date(2012,9,1),92.3,null],
[new Date(2012,12,1),92.3,null],
[new Date(2013,3,1),92.6,null],
[new Date(2013,6,1),92.3,null],
[new Date(2013,9,1),93,null],
[new Date(2013,12,1),94,null],
[new Date(2014,3,1),95.1,null],
[new Date(2014,6,1),95.2,null],
[new Date(2014,9,1),95.2,null],
[new Date(2014,12,1),95.6,null],
[new Date(2015,3,1),95.2,null],
[new Date(2015,6,1),95.1,null],
[new Date(2015,9,1),95.8,null],
[new Date(2015,12,1),96,null],
[new Date(2016,3,1),96.5,null],
[new Date(2016,6,1),97.2,null],
[new Date(2016,9,1),97,null],
[new Date(2016,12,1),97.5,null],
[new Date(2017,3,1),96.8,null],
[new Date(2017,6,1),96.8,null],
[new Date(2017,9,1),97,null],
[new Date(2017,12,1),96.7,null],
[new Date(2018,3,1),97.4,null],
[new Date(2018,6,1),97.1,null],
[new Date(2018,9,1),97.2,null],
[new Date(2018,12,1),97.2,null],
[new Date(2019,3,1),96.3,null],
[new Date(2019,6,1),97.4,null],
[new Date(2019,9,1),97.6,null],
[new Date(2019,12,1),98,null],
[new Date(2020,3,1),98.8,null],
[new Date(2020,6,1),100.5,null],
[new Date(2020,9,1),100.1,null],
[new Date(2020,12,1),99.8,null],
[new Date(2021,3,1),100.7,null],
[new Date(2021,6,1),99.4,null],
[new Date(2021,9,1),100.5,null],
[new Date(2021,12,1),101.5,null],
[new Date(2022,3,1),102.2,null],
[new Date(2022,6,1),99.3,null],
[new Date(2022,9,1),99.7,null]
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
              new Date(2024,1,1),
                    new Date(2023,1,1),       
                    new Date(2022,1,1),              
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