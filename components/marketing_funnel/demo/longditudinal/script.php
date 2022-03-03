<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_script);

      function drawChart_gdp_per_capita_percentage_change_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Conversion rate');
        data.addColumn('number',   'Qualified Leads');
        data.addColumn('number',   'New Enrolments');        
        data.addRows([
<?php



echo "  [new Date(2020,3,1),    32.5    ,400,130],          ";  
echo "  [new Date(2020,4,1),    24,500,120],            ";
echo "  [new Date(2020,5,1),    18.33333333,600,110],    ";
echo "  [new Date(2020,6,1),    16.66666667,600,100],             ";
echo "  [new Date(2020,7,1),    12.85714286,700,90],    ";
echo "  [new Date(2020,8,1),    12,750,90],    ";
echo "  [new Date(2020,9,1),    10,1000,100],           ";
echo "  [new Date(2020,10,1),   10.90909091,1100,120],    ";
echo "  [new Date(2020,11,1),   11.66666667,1200,140],    ";
echo "  [new Date(2020,12,1),   14.44444444,900,130],    ";
echo "  [new Date(2021,1,1),    13.75,800,110],    ";
echo "  [new Date(2021,2,1),    11.11111111,900,100],               ";
echo "  [new Date(2021,3,1),    14,700,98],    ";
echo "  [new Date(2021,4,1),    12,800,96],    ";
echo "  [new Date(2021,5,1),    12.85714286,700,90],    ";
echo "  [new Date(2021,6,1),    10,900,90],    ";
echo "  [new Date(2021,7,1),    12.5,800,100],    ";
echo "  [new Date(2021,8,1),    11,1000,110],    ";
echo "  [new Date(2021,9,1),    10,1100,110],    ";
echo "  [new Date(2021,10,1),   10,1200,120],    ";
echo "  [new Date(2021,11,1),   7.692307692,1300,100],    ";
echo "  [new Date(2021,12,1),   9.473684211,950,90],    ";
echo "  [new Date(2022,1,1),    9.444444444,900,85],    ";
echo "  [new Date(2022,2,1),    8,1000,80]    ";


?>
        ]);




        var options = {
          title: 'Critical Marketing Metrics (Source: Internal/Hubspot)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 30 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },

                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: { position: 'bottom', alignment: 'center' },

   // Draw a trendline for data series 0.,
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
            0:{
              gridlines: {color: 'none'}, 
              textStyle : {
                  fontName: 'Barlow Semi Condensed',
                  bold: true
              },
              minValue: 0,

              title: 'Numbers of Students',
            },
            1:{
              gridlines: {color: 'none'}, 
              textStyle : {
                  fontName: 'Barlow Semi Condensed',
                  bold: true
              },
              minValue: 0,
              title: 'Conversion Ratio',
              titleTextStyle: { color: 'red' },
              textStyle:{color: 'red'},
            }


          },

                    series: {    
                                             1: { color: 'green', lineWidth: 3, lineDashStyle: [10, 2], targetAxisIndex:0 }     ,            
                      0: { color: 'red', lineWidth: 5,  targetAxisIndex:1 }     , 
          
                      2: { color: 'orange', lineWidth: 3, lineDashStyle: [10, 2], targetAxisIndex:0 }
                    
                    }
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change'));
        chart.draw(data,  options);

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_script();});	
      </script>