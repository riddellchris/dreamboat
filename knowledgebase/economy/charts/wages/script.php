<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_wages_chart_script);

      function drawChart_wages_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Wages, annual percent increase');
        data.addColumn('number',   'Inflation');        
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

          [new Date(1998,9,1),3.1,1.3,null],
[new Date(1998,12,1),3.3,1.4,null],
[new Date(1999,3,1),3.1,1.1,null],
[new Date(1999,6,1),3.1,0.9,null],
[new Date(1999,9,1),3.1,1.7,null],
[new Date(1999,12,1),2.9,1.9,null],
[new Date(2000,3,1),2.9,2.8,null],
[new Date(2000,6,1),3,3.1,null],
[new Date(2000,9,1),3.1,6,null],
[new Date(2000,12,1),3.4,5.7,null],
[new Date(2001,3,1),3.6,5.9,null],
[new Date(2001,6,1),3.6,6,null],
[new Date(2001,9,1),3.6,2.5,null],
[new Date(2001,12,1),3.4,3.1,null],
[new Date(2002,3,1),3.2,2.9,null],
[new Date(2002,6,1),3.2,2.8,null],
[new Date(2002,9,1),3.3,3.2,null],
[new Date(2002,12,1),3.4,2.9,null],
[new Date(2003,3,1),3.5,3.3,null],
[new Date(2003,6,1),3.6,2.6,null],
[new Date(2003,9,1),3.7,2.5,null],
[new Date(2003,12,1),3.7,2.4,null],
[new Date(2004,3,1),3.6,2,null],
[new Date(2004,6,1),3.6,2.5,null],
[new Date(2004,9,1),3.5,2.3,null],
[new Date(2004,12,1),3.7,2.5,null],
[new Date(2005,3,1),3.9,2.3,null],
[new Date(2005,6,1),4,2.4,null],
[new Date(2005,9,1),4.2,3,null],
[new Date(2005,12,1),4.1,2.8,null],
[new Date(2006,3,1),4.1,2.9,null],
[new Date(2006,6,1),4.2,4,null],
[new Date(2006,9,1),4.1,3.9,null],
[new Date(2006,12,1),4.1,3.3,null],
[new Date(2007,3,1),4,2.5,null],
[new Date(2007,6,1),4,2.1,null],
[new Date(2007,9,1),4.1,1.9,null],
[new Date(2007,12,1),4,2.9,null],
[new Date(2008,3,1),4.1,4.2,null],
[new Date(2008,6,1),4.3,4.3,null],
[new Date(2008,9,1),4.2,4.8,null],
[new Date(2008,12,1),4.3,3.6,null],
[new Date(2009,3,1),4.1,2.4,null],
[new Date(2009,6,1),3.8,1.4,null],
[new Date(2009,9,1),3.1,1.2,null],
[new Date(2009,12,1),2.9,2,null],
[new Date(2010,3,1),2.9,2.9,null],
[new Date(2010,6,1),3.1,3.1,null],
[new Date(2010,9,1),3.6,2.8,null],
[new Date(2010,12,1),3.9,2.7,null],
[new Date(2011,3,1),3.9,3.1,null],
[new Date(2011,6,1),3.8,3.4,null],
[new Date(2011,9,1),3.7,3.3,null],
[new Date(2011,12,1),3.6,2.9,null],
[new Date(2012,3,1),3.7,1.6,null],
[new Date(2012,6,1),3.6,1.2,null],
[new Date(2012,9,1),3.7,2,null],
[new Date(2012,12,1),3.4,2.2,null],
[new Date(2013,3,1),3.1,2.5,null],
[new Date(2013,6,1),2.9,2.4,null],
[new Date(2013,9,1),2.7,2.2,null],
[new Date(2013,12,1),2.6,2.8,null],
[new Date(2014,3,1),2.6,3,null],
[new Date(2014,6,1),2.6,3.1,null],
[new Date(2014,9,1),2.5,2.4,null],
[new Date(2014,12,1),2.5,1.8,null],
[new Date(2015,3,1),2.4,1.4,null],
[new Date(2015,6,1),2.3,1.6,null],
[new Date(2015,9,1),2.2,1.6,null],
[new Date(2015,12,1),2.2,1.8,null],
[new Date(2016,3,1),2.1,1.4,null],
[new Date(2016,6,1),2.1,1.1,null],
[new Date(2016,9,1),2,1.3,null],
[new Date(2016,12,1),1.9,1.4,null],
[new Date(2017,3,1),1.9,2.1,null],
[new Date(2017,6,1),1.9,1.9,null],
[new Date(2017,9,1),2,1.8,null],
[new Date(2017,12,1),2.1,1.9,null],
[new Date(2018,3,1),2.1,1.8,null],
[new Date(2018,6,1),2.1,2,null],
[new Date(2018,9,1),2.3,1.8,null],
[new Date(2018,12,1),2.3,1.7,null],
[new Date(2019,3,1),2.3,1.3,null],
[new Date(2019,6,1),2.3,1.5,null],
[new Date(2019,9,1),2.2,1.6,null],
[new Date(2019,12,1),2.2,1.8,null],
[new Date(2020,3,1),2.1,2.1,null]
          
        ]);

	


        var options = {
          title: 'Annual Wages vs CPI change (Source: ABS)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
          'chartArea': {'width': '90%', 'height': '90%'},
          legend: {position: 'top', alignment: 'start'},
          hAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },   

            format: 'yy', 
                        gridlines: {color: 'none'}, 
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
            
            gridlines: {color: 'none'}}

        };
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages'));
        chart.draw(data,  options);
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_wages_chart_script();});	
      </script>