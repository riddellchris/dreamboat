<?php
if(!isset($_SESSION)){session_start();}

echo "<script type='text/javascript' name='time_charts_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']."'>";
?>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_script);

      function drawChart_gdp_per_capita_percentage_change_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'GDP per Capita Annual Change (%)');      
        data.addRows([
<?php
/**/
?>


[new Date(2021,3,1),  1.89209623038058],
[new Date(2021,4,1),  1.89209623038058],
[new Date(2021,5,1),  1.89209623038058],
[new Date(2021,6,1),  1.89209623038058],
[new Date(2021,7,1),  1.89209623038058],
[new Date(2021,8,1),  1.89209623038058],
[new Date(2021,9,1),  1.89209623038058],
[new Date(2021,10,1),  1.89209623038058],
[new Date(2021,11,1),  1.89209623038058],
[new Date(2021,12,1),  1.89209623038058],
[new Date(2022,1,1),  1.89209623038058],
[new Date(2022,2,1),  1.89209623038058],
[new Date(2022,3,1),  1.89209623038058]


        ]);




        var options = {
          title: 'GDP per Capita Annual % Change (Source: ABS)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },

                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 


          hAxis: {
            format: 'MMM/yy', 
            gridlines: {color: 'none'}, 
            
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            }

            		
            		
            		
            		
          }, 
          vAxis: {
            gridlines: {color: 'none'}, 
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            minValue: 0,
            ticks: [ -3, -2, -1, 0, 1, 2, 3, 4],
            viewWindowMode:'explicit',
            viewWindow: {
              max:4.2,
              min:-3
            }
          },

                    series: {          
                       1: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }     ,                
                      2: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }
                    
                    }
        };
        <?php
        echo "
        var chart = new google.visualization.LineChart(document.getElementById('time_charts_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']."'));";
        ?>
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_script();});	
      </script>