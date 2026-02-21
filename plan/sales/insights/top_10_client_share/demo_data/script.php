<script name='top_10_client_share' type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_wages_chart_script);

      function drawChart_wages_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Other');
        data.addColumn('number',   '#10 Client');         
        data.addColumn('number',   '#9 Client');    
        data.addColumn('number',   '#8 Client');   
        data.addColumn('number',   '#7 Client');   
        data.addColumn('number',   '#6 Client');   
        data.addColumn('number',   '#5 Client');   
        data.addColumn('number',   '#4 Client');       
        data.addColumn('number',   '#3 Client');   
        data.addColumn('number',   '#2 Client');   
        data.addColumn('number',   '#1 Client');   
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

   


[new Date(2020,1,1),    50000,  6000, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 25000, null],
[new Date(2020,2,1),    47568,  6100, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 25000, null],
[new Date(2020,3,1),    52300,  6100, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 26000, null],
[new Date(2020,4,1),    49000,  6100, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 24000, null],
[new Date(2020,5,1),    53000,  6100, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 25000, null],
[new Date(2020,6,1),    55000,  6100, 6200,  7000,  8000, 9000, 11000,  10000, 12000, 15000, 26000, null],
[new Date(2020,7,1),    57000,  6100, 6200,  8250,  8000, 9000, 11000,  10000, 12000, 15000, 27000, null],
[new Date(2020,8,1),    63000,  6100, 6200,  8250,  8000, 9000, 11000,  10000, 12000, 15000, 28000, null],
[new Date(2020,9,1),    64000,  6100, 6200,  8250,  8000, 9000, 11000,  10000, 12000, 15000, 29000, null],
[new Date(2020,10,1),   66000,  6100, 6200,  8250,  8000, 9000, 11000,  10000, 12000, 15000, 28000, null],
[new Date(2020,11,1),   68000,  6100, 6200,  8250,  8000, 9000, 11000,  10000, 12000, 15000, 27000, null],
[new Date(2020,12,1),   72000,  6100, 6200,  9000,  8000, 9000, 13000,  10000, 12000, 15000, 29000, null],
[new Date(2021,1,1),    75000,  6100, 6200,  9000,  8000, 9000, 13000,  10000, 12000, 15000, 28000, null],
[new Date(2021,2,1),    81000,  6100, 6200,  9000,  8000, 9000, 13000,  10000, 12000, 15000, 30000, null],
[new Date(2021,3,1),    82000,  6100, 6200,  9000,  8000, 9000, 13000,  10000, 12000, 15000, 29000, null],
[new Date(2021,4,1),    85000,  6100, 6200,  9000,  8000, 9000, 13000,  10000, 12000, 15000, 32000, null],
[new Date(2021,5,1),    87000,  6100, 6200,  8600,  8000, 9000, 13000,  10000, 12000, 15000, 28000, null],
[new Date(2021,6,1),    95000,  6100, 6200,  8600,  8000, 9000, 13000,  10000, 12000, 15000, 38000, null],
[new Date(2021,7,1),    102000, 6100, 6200,  8600,  8000, 9000, 13000,  10000, 12000, 15000, 45000, null],
[new Date(2021,8,1),    105000, 6100, 6200,  8600,  8000, 9000, 13000,  10000, 12000, 15000, 48000, null],
[new Date(2021,9,1),    121000, 6100, 6200,  8600,  8000, 9000, 13000,  10000, 12000, 15000, 52000, null],
[new Date(2021,10,1),   111000, 6100, 6200,  7500,  8000, 9000, 13000,  10000, 12000, 15000, 55000, null],
[new Date(2021,11,1),   110000, 6100, 6200,  7500,  8000, 9000, 13000,  10000, 12000, 15000, 58000, null],
[new Date(2021,12,1),   120000, 6100, 6200,  7500,  8000, 9000, 13000,  10000, 12000, 15000, 61000, null]      
        ]);

	


        var options = {
            isStacked: 'relative',
          title: 'Top 10 clients share of revenue (Source: Xero)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
          'chartArea': {'width': '90%', 'height': '90%'},
          legend: {position: 'bottom', alignment: 'center'},
          hAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },   

            format: 'MMM-yy', 
                        gridlines: {color: 'none'}, 
          ticks: [
                    new Date(2021,12,1),       
                    new Date(2021,11,1), 
                    new Date(2021,10,1),
                    new Date(2021,9,1), 
                    new Date(2021,8,1),
                    new Date(2021,7,1), 
                    new Date(2021,6,1),
                    new Date(2021,5,1), 
                    new Date(2021,4,1),
                    new Date(2021,3,1), 
                    new Date(2021,2,1),
                    new Date(2021,1,1), 
                    new Date(2020,12,1),       
                    new Date(2020,11,1), 
                    new Date(2020,10,1),
                    new Date(2020,9,1), 
                    new Date(2020,8,1),
                    new Date(2020,7,1), 
                    new Date(2020,6,1),
                    new Date(2020,5,1), 
                    new Date(2020,4,1),
                    new Date(2020,3,1), 
                    new Date(2020,2,1),
                    new Date(2020,1,1) 


            		
            		
            		
            		]
          }, 
          vAxis: {
                    title: '% of revenue in that month',
                    textStyle : {
                    fontName: 'Barlow Semi Condensed',
                    bold: true
            },   
            
            gridlines: {color: 'none'},
                format: 'percent'
        
        }

        };
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages'));
        chart.draw(data,  options);
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_wages_chart_script();});	
      </script>