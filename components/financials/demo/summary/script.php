<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_financials_demo_summary);

      function drawChart_financials_demo_summary() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Revenue');
        data.addColumn('number',   'Profit Margin');
        data.addColumn('number',   '');        
        data.addRows([
<?php
/**/
?>


[new Date(2009,3,1),    124364  ,0.1,null],
[new Date(2009,6,1),    134846 ,0.1,null],
[new Date(2009,9,1),    144889 ,0.1,null],
[new Date(2009,12,1),   2500000 ,0.1,null],
[new Date(2010,3,1),    2500000 ,0.1,null],
[new Date(2010,6,1),  2500000   ,0.1,null],
[new Date(2010,9,1),  2500000,0.1,null],
[new Date(2010,12,1), 2500000,0.1,null],
[new Date(2011,3,1),  2500000,0.1,null],
[new Date(2011,6,1),  2500000,0.1,null],
[new Date(2011,9,1),  2500000,4.2,null],
[new Date(2011,12,1), 2500000,4.3,null],
[new Date(2012,3,1),  2500000,4.4,null],
[new Date(2012,6,1),  2500000,4.5,null],
[new Date(2012,9,1),  2500000,4.6,null],
[new Date(2012,12,1), 2500000,4.7,null],
[new Date(2013,3,1),  2500000,0.1,null],
[new Date(2013,6,1),  2500000,0.1,null],
[new Date(2013,9,1),  2500000,0.1,null],
[new Date(2013,12,1), 2500000,0.1,null],
[new Date(2014,3,1),  2500000,0.1,null],
[new Date(2014,6,1),  2500000,0.1,null],
[new Date(2014,9,1),  2500000,0.1,null],
[new Date(2014,12,1), 2500000,0.1,null],
[new Date(2015,3,1),  2500000,0.1,null],
[new Date(2015,6,1),  2500000,0.1,null],
[new Date(2015,9,1),  2500000,6.0,null],
[new Date(2015,12,1), 2500000,0.1,null],
[new Date(2016,3,1),  2500000,0.1,null],
[new Date(2016,6,1),  2500000,0.1,null],
[new Date(2016,9,1),  2500000,0.1,null],
[new Date(2016,12,1), 2500000,0.1,null],
[new Date(2017,3,1),  2500000,0.1,null],
[new Date(2017,6,1),  2500000,0.1,null],
[new Date(2017,9,1),  2500000,0.1,null],
[new Date(2017,12,1), 2500000,0.1,null],
[new Date(2018,3,1),  2500000,0.1,null],
[new Date(2018,6,1),  2500000,9.2,null],
[new Date(2018,9,1),  2500000,9.3,null],
[new Date(2018,12,1), 2500000,9.4,null],
[new Date(2019,3,1),  2500000,9.5,null],
[new Date(2019,6,1),  2500000,9.5,null],
[new Date(2019,9,1),  2500000,9.7,null],
[new Date(2019,12,1), 2500000,9.6,null],
[new Date(2020,3,1),  2500000,9.8,null],
[new Date(2020,6,1),  2500000,10.1,null],
[new Date(2020,9,1),  2500000,10.2,null],
[new Date(2020,12,1), 2500000,10.4,null],
[new Date(2021,3,1),  2500000,10.2,null],
[new Date(2021,6,1),  2500000,10,null]



        ]);




        var options = {
          title: 'Critical Financial Metrics (Source: Internal/Xero)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 30 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },
          subtitle: 'GDP per Capita Annual % Change (Source: ABS)',
                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 


          hAxis: {
            format: 'yy', 
            gridlines: {color: 'none'}, 
            
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            ticks: [

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

                ]
            		
            		
            		
            		
          }, 
          vAxes: {

            0: {           
              gridlines: {color: 'none'}, 
              textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
              },
              title: 'Annuallised Revenue ($m)',
              textStyle:{color: '#4332ff'},
              minValue: 0,
              ticks: [ 0, 500000, 1000000, 1500000, 2000000, 2500000, 3000000],
              format: 'short'
            },
            1: {           
              gridlines: {color: 'none'}, 
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
              },title: 'Gross Margin (%)',
              textStyle:{color: '#ff5e00'},
              minValue: 0,
              ticks: [ 0, 2, 4, 6, 8, 10, 12,14]
              
            } 
 
          },

                    series: {   
                      0: { color: '#4332ff', lineWidth: 10, targetAxisIndex:0 }     ,   
                       1: { color: '#ff5e00', lineWidth: 10, targetAxisIndex:1 }     ,                
                      2: { color: '#ff5e00', lineWidth: 25 , lineDashStyle: [60, 20]}
                    
                    }
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('financials_demo_summary_div'));
        chart.draw(data,  options);


      }
      
     $(window).resize(function(){drawChart_financials_demo_summary();});	
      </script>