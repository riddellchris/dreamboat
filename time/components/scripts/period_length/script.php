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
                        ['Northern Electrics',  1.34963880043759,   2,  2,  3,  3,  3],
                        ['Peninsula Massage',   1.11461495303138,   2,  2,  3,  3,  3],
                        ['Big Bobs Mobility',   1.03466733329246,   2,  2,  3,  3,  3],
                        ['Green Point Plastics',1.39174066850022,   2,  2,  3,  3,  3],
                        ['Administrating',      1.89209623038058,   2,  2,  3,  3,  3],
                        ['Growing',             1.89209623038058,   2,  2,  3,  3,  3]
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
            ['Northern Electrics',  1.34963880043759,   2,  2,  3,  3,  3],
            ['Peninsula Massage',   1.11461495303138,   2,  2,  3,  3,  3],
            ['Big Bobs Mobility',   1.03466733329246,   2,  2,  3,  3,  3],
            ['Green Point Plastics',1.39174066850022,   2,  2,  3,  3,  3],
            ['Administrating',      1.89209623038058,   2,  2,  3,  3,  3],
            ['Growing',             1.89209623038058,   2,  2,  3,  3,  3]
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
                       1: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }     ,                
                      2: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }
                    
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