<script name='top_10_client_share' type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_wages_chart_script);

      function drawChart_wages_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Not top 10 clients total');
        data.addColumn('number',   'Client 10');         
        data.addColumn('number',   'Client 9');    
        data.addColumn('number',   'Client 8');   
        data.addColumn('number',   'Client 7');   
        data.addColumn('number',   'Client 6');   
        data.addColumn('number',   'Client 5');   
        data.addColumn('number',   'Client 4');       
        data.addColumn('number',   'Client 3');   
        data.addColumn('number',   'Client 2');   
        data.addColumn('number',   'Client 1');   
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

   


[new Date(2020,1,1),    60, 1.1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,2,1),    60, 1.2, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,3,1),    60, 1.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,4,1),    60, 2, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,5,1),    60, 2.2, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,6,1),    60, 2.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,7,1),    60, 2.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,8,1),    60, 2.31, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,9,1),    60, 2.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,10,1),   60, 2.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,11,1),   60, 2.3, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2020,12,1),   60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,1,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,2,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,3,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,4,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,5,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,6,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,7,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,8,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,9,1),    60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,10,1),   60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,11,1),   60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null],
[new Date(2021,11,1),   60, 1, 2,  3,  4,  5,  3,  4,  3,  4, 5, null]      
        ]);

	


        var options = {
            isStacked: 'relative',
          title: 'Top 10 clients share of revenue (Source: Xero)', 
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
            
            gridlines: {color: 'none'}}

        };
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages'));
        chart.draw(data,  options);
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_wages_chart_script();});	
      </script>