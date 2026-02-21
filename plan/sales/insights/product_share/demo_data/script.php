<script name='product_share' type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_wages_chart_script);

      function drawChart_wages_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   '#1 Product');   
        data.addColumn('number',   '#2 Product');   
        data.addColumn('number',   '#3 Product');   
        data.addColumn('number',   '#4 Product');   
        data.addColumn('number',   '#5 Product');       
        data.addColumn('number',   '#6 Product');   
        data.addColumn('number',   '#7 Product');   
        data.addColumn('number',   '#8 Product');   
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

   


[new Date(2020,1,1),   30000,   35000,  40000,  8000,  5000,  2000, 0, 0, null],
[new Date(2020,2,1),   30000,   36000,  41500,  9000,  5000,  2000, 0, 0, null],
[new Date(2020,3,1),   30000,   37000,  40250,  9000,  5000, 2000, 0, 0, null],
[new Date(2020,4,1),   30000,   33000,  39000,  9000,  5000, 2000, 0, 0, null],
[new Date(2020,5,1),   30000,   32000,  37500,  9000,  5000, 2000, 0, 0, null],
[new Date(2020,6,1),   30000,   33000,  35000,  9000,  5000, 2000, 0, 0, null],
[new Date(2020,7,1),   30000,   28000,  33000,  9000,  5000, 2000, 400, 0, null],
[new Date(2020,8,1),   30000,   25000,  32000,  9000,  5000, 2000, 450, 0, null],
[new Date(2020,9,1),   30000,   29000,  31500,  9000,  5000, 2000, 500, 0, null],
[new Date(2020,10,1),  30000,   31000,  30500,  9000,  5000, 2000, 800, 0, null],
[new Date(2020,11,1),  30000,   33000,  29500,  9000,  5000, 2000, 1200, 0, null],
[new Date(2020,12,1),  30000,   38000,  27600,  9000,  5000, 2000, 1600, 0, null],
[new Date(2021,1,1),   30000,   35000,  25000,  9000,  5000, 2000, 1800, 0, null],
[new Date(2021,2,1),   30000,   29000,  26000,  9000,  5000, 2000, 2200, 0, null],
[new Date(2021,3,1),   30000,   28000,  27000,  9000,  5000, 2000, 2400, 200, null],
[new Date(2021,4,1),   30000,   26000,  25000,  9000,  5000, 2000, 2600, 400, null],
[new Date(2021,5,1),   30000,   22000,  24000,  9000,  5000, 2000, 2800, 600, null],
[new Date(2021,6,1),   30000,   25000,  22500,  10000,  5000, 2000, 3300, 700, null],
[new Date(2021,7,1),   30000,   29000,  21500,  11000,  5000, 2000, 3900, 800, null],
[new Date(2021,8,1),   30000,   26000,  22000,  12000,  5000, 2000, 4400, 900, null],
[new Date(2021,9,1),   30000,   25000,  23000,  13000,  5000, 2000, 4500, 950, null],
[new Date(2021,10,1),  30000,   23000,  24000,  14000,  5000, 2000, 4500, 1100, null],
[new Date(2021,11,1),  30000,   28000,  24500,  15000,  5000, 2000, 5200, 1200, null],
[new Date(2021,12,1),  45000,   30000,  25000,  16000,  12000,  7000, 6000, 1500, null]   
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
                bold: true,
                
            },   
            format: 'percent',
            gridlines: {color: 'none'}}

        };
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages'));
        chart.draw(data,  options);
        var chart = new google.visualization.AreaChart(document.getElementById('economic_background_wages_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_wages_chart_script();});	
      </script>