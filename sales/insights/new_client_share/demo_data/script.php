<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_wages_chart_script);

      function drawChart_wages_chart_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'New client share of revenue');
        data.addColumn('number',   'Existing client share of revenue');        
        data.addColumn({type: 'string', role: 'style'});
        data.addRows([

   


[new Date(2020,1,1),0,100,null],
[new Date(2020,2,1),4,94,null],
[new Date(2020,3,1),5,95,null],
[new Date(2020,4,1),6,94,null],
[new Date(2020,5,1),8,92,null],
[new Date(2020,6,1),17,83,null],
[new Date(2020,7,1),18,82,null],
[new Date(2020,8,1),19,81,null],
[new Date(2020,9,1),20,80,null],
[new Date(2020,10,1),21,79,null],
[new Date(2020,11,1),22,78,null],
[new Date(2020,12,1),23,77,null],
[new Date(2021,1,1),23,77,null],
[new Date(2021,2,1),24,76,null],
[new Date(2021,3,1),25,75,null],
[new Date(2021,4,1),26,74,null],
[new Date(2021,5,1),26,74,null],
[new Date(2021,6,1),28,72,null],
[new Date(2021,7,1),28,72,null],
[new Date(2021,8,1),28,72,null],
[new Date(2021,9,1),30,70,null],
[new Date(2021,10,1),30,70,null],
[new Date(2021,11,1),30,70,null],
[new Date(2021,12,1),30,70,null]         
        ]);

	


        var options = {
            isStacked: 'relative',
          title: 'New clients from 2020 contribution to total revenue (Source: Xero)', 
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