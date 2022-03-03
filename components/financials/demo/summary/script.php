<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_financials_demo_summary);

      function drawChart_financials_demo_summary() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Annualised Revenue');
        data.addColumn('number',   'Net Margin');
     
        data.addRows([
<?php
/**/



echo "  [new Date(2020,3,1),    1400000,  14],          ";  
echo "  [new Date(2020,4,1),    1450000,  13],            ";
echo "  [new Date(2020,5,1),    1500000,  12],    ";
echo "  [new Date(2020,6,1),    1300000,  12],             ";
echo "  [new Date(2020,7,1),    1400000,  12],    ";
echo "  [new Date(2020,8,1),    1500000,  13],    ";
echo "  [new Date(2020,9,1),    1600000,  14],           ";
echo "  [new Date(2020,10,1),   1650000,  15],    ";
echo "  [new Date(2020,11,1),   1700000,  16],    ";
echo "  [new Date(2020,12,1),   1750000,15],    ";
echo "  [new Date(2021,1,1),    1650000,14],    ";
echo "  [new Date(2021,2,1),    1500000,13],               ";
echo "  [new Date(2021,3,1),    1500000,12],    ";
echo "  [new Date(2021,4,1),    1900000,14],    ";
echo "  [new Date(2021,5,1),    1600000,15],    ";
echo "  [new Date(2021,6,1),    1800000,14],    ";
echo "  [new Date(2021,7,1),    1850000,13],    ";
echo "  [new Date(2021,8,1),    1900000,12],    ";
echo "  [new Date(2021,9,1),    1800000,13],    ";
echo "  [new Date(2021,10,1),   1900000,14],    ";
echo "  [new Date(2021,11,1),   2100000,15],    ";
echo "  [new Date(2021,12,1),   2150000,15],    ";
echo "  [new Date(2022,1,1),    2200000,16],    ";
echo "  [new Date(2022,2,1),    2100000,14]    ";
?>


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
    legend: { position: 'bottom', alignment: 'center' }, 


          hAxis: {
            format: 'MMM/yy', 
            gridlines: {color: 'none'}, 
            
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            ticks: [


              new Date(2022,2,1),             
                new Date(2022,1,1),  
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
                new Date(2020,5,1)

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
              },title: 'Net Margin (%)',
              textStyle:{color: '#ff5e00'},
              minValue: 0,
              ticks: [ 0, 2, 4, 6, 8, 10, 12,14,16,18]
              
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