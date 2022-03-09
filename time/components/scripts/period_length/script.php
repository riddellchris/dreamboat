<?php
if(!isset($_SESSION)){session_start();}

echo "<script type='text/javascript' name='time_charts_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']."'>";
?>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_script);

      function drawChart_gdp_per_capita_percentage_change_script() {

        var data = new google.visualization.DataTable();

<?php
    if($_GET['secondary_folder'] == 'this_week' && $_GET['tertiary_folder'] == 'by_activity'){
        echo "
        data.addColumn('string',   'GDP per Capita Annual Change (%)');    
        data.addColumn('number',   'On site');           
        data.addColumn('number',   'Client meetings');
        data.addColumn('number',   'Documentation');   
        
        ['Internal',                4,   2,  6,  2,  3,  3],
        ['Northern Electrics',      4,   0,  2,  3,  1.5,  0],
        ['Peninsula Massage',       3,   0,  2,  3,  1,  0],
        ['Big Bobs Mobility',       2,   0,  0.2,  0,  0,  0],
        ['Green Point Plastics',    2,   1,  0.2,  0,  0,  0],                        
        ['James Thomas Gardening',  2,   0,  0.2,  1,  0,  0],
        ['Illusive Blinks',         2,   0,  0.2,  0,  0.5,  0],
        ['AXZ Manufacturing',       1,   1,  0,  0,  0.25,  0],
        ['The T Shop'       ,       0.5, 0,  0,  0,  0,  0],                        
        ['Hello Goodbye Cards',     0.5, 0,  0,  0,  0,  0],
        ['We talk phones',          0.5, 0,  0,  0,  0,  0],
        ['John & Sons Concrete',    0.5, 0,  0,  0,  0,  0],
        ['Richmond Athletic',       0.5, 0,  0,  0,  0,  0]        


        data.addRows([
                        ['Doing',           6,2,4],
                        ['Planning',        0,0,0],
                        ['Managing',        0,0,0],
                        ['Supporting',      0,0,0],
                        ['Administrating',  0,0,0],
                        ['Growing',         0,0,0]
        ";
    }

    if($_GET['secondary_folder'] == 'this_week' && $_GET['tertiary_folder'] == 'by_client'){
        echo "
        data.addColumn('string',   'GDP per Capita Annual Change (%)');    
        data.addColumn('number',   'Doing');  
        data.addColumn('number',   'Planning');  
        data.addColumn('number',   'Managing');  
        data.addColumn('number',   'Supporting');  
        data.addColumn('number',   'Administrating');  
        data.addColumn('number',   'Growing');          
        
        data.addRows([
          ['Internal',                4,   2,  6,  2,  3,  3],
          ['Northern Electrics',      4,   0,  2,  3,  1.5,  0],
          ['Peninsula Massage',       3,   0,  2,  3,  1,  0],
          ['Big Bobs Mobility',       2,   0,  0.2,  0,  0,  0],
          ['Green Point Plastics',    2,   1,  0.2,  0,  0,  0],                        
          ['James Thomas Gardening',  2,   0,  0.2,  1,  0,  0],
          ['Illusive Blinks',         2,   0,  0.2,  0,  0.5,  0],
          ['AXZ Manufacturing',       1,   1,  0,  0,  0.25,  0],
          ['The T Shop'       ,       0.5, 0,  0,  0,  0,  0],                        
          ['Hello Goodbye Cards',     0.5, 0,  0,  0,  0,  0],
          ['We talk phones',          0.5, 0,  0,  0,  0,  0],
          ['John & Sons Concrete',    0.5, 0,  0,  0,  0,  0],
          ['Richmond Athletic',       0.5, 0,  0,  0,  0,  0]
        ";
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////
    /* this month */

    if($_GET['secondary_folder'] == 'this_month' && $_GET['tertiary_folder'] == 'by_activity'){
        echo "
        data.addColumn('string',   'GDP per Capita Annual Change (%)');    
        data.addColumn('number',   'Hours this ');              
        data.addRows([
                        ['Doing',           1.34963880043759],
                        ['Planning',        1.11461495303138],
                        ['Managing',        1.03466733329246],
                        ['Supporting',      1.39174066850022],
                        ['Administrating',  1.89209623038058],
                        ['Growing',         1.89209623038058]
        ";
    }

    if($_GET['secondary_folder'] == 'this_month' && $_GET['tertiary_folder'] == 'by_client'){
        echo "
        data.addColumn('string',   'GDP per Capita Annual Change (%)');    
        data.addColumn('number',   'Doing');  
        data.addColumn('number',   'Planning');  
        data.addColumn('number',   'Managing');  
        data.addColumn('number',   'Supporting');  
        data.addColumn('number',   'Administrating');  
        data.addColumn('number',   'Growing');                
        data.addRows([
          ['Internal',                5,  2,  6,  2,  3,  3],
          ['Northern Electrics',      18, 1,  2,  3,  1.5,  0],
          ['Peninsula Massage',       15, 1,  2,  3,  1,  0],
          ['Big Bobs Mobility',       8,  1,  0.2,  0,  0,  0],
          ['Green Point Plastics',    6,  3,  0.2,  0,  0,  0],                        
          ['James Thomas Gardening',  6,  1,  0.2,  1,  0,  0],
          ['Illusive Blinks',         4,  1,  0.2,  0,  0.5,  0],
          ['AXZ Manufacturing',       4,  2,  0,  0,  0.25,  0],
          ['The T Shop'       ,       4,  1,  0,  0,  0,  0],                        
          ['Hello Goodbye Cards',     3,  1,  0,  0,  0,  0],
          ['We talk phones',          2,  0,  0,  0,  0,  0],
          ['John & Sons Concrete',    2,  0,  0,  0,  0,  0],
          ['Richmond Athletic',       1,  0,  0,  0,  0,  0]
        ";
    }


?>

        ]);




        var options = {
            isStacked: true,
          <?php
          echo "title: 'Hours";
            if($_GET['secondary_folder'] == 'this_week'){   echo " this week";}
            if($_GET['secondary_folder'] == 'this_month'){  echo " this month";}
            echo " per ";
            if($_GET['tertiary_folder'] == 'by_activity'){  echo " activity";}
            if($_GET['tertiary_folder'] == 'by_client'){    echo " client";}
            echo " (Source: Internal Time Tracking)";
          echo "',";
          ?>
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },

                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 

          trendlines: { 0: {   color: 'red',

<?php
if(!isset($_SESSION)){session_start();}
if($_GET['primary_folder'] == 'slideshows'){echo "lineWidth:13,";}
else{ echo "lineWidth:10,";}
?>

                 
                 		opacity: 1
                 } },    // Draw a trendline for data series 0.,
          hAxis: {
            format: 'yy', 
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
            title: 'Hours',
            minValue: 0
          },
          
                    series: {        
                    0: { color: 'green', lineWidth: 3, lineDashStyle: [10, 2] }     ,    
                       1: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }     ,                
                      2: { color: 'red', lineWidth: 3, lineDashStyle: [10, 2] } ,                
                      3: { color: 'purple', lineWidth: 3, lineDashStyle: [10, 2] } ,                
                      4: { color: 'black', lineWidth: 3, lineDashStyle: [10, 2] } ,                
                      5: { color: 'orange', lineWidth: 3, lineDashStyle: [10, 2] }
                    
                    }
        };
        <?php
        echo "
        var chart = new google.visualization.ColumnChart(document.getElementById('time_charts_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']."'));";
        ?>
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_script();});	
      </script>