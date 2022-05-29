<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_expenses_adspend_vs_return';

}

?>



<?php
    echo "<script name='".$location_string."' type='text/javascript'>";
    echo "

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(".$location_string.");";?>

      function <?php echo $location_string; ?>()            
                    {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([


          ['Month',     'Return', { role: 'annotation' }, 'Websales', { role: 'annotation' }, 'Adspend', { role: 'annotation' }],
          ['Dec-21',   4,  '4',     614.6, '614',     614.6, '614'],          
          ['Jan-22',   5,  '5',     614.6, '614',     614.6, '614'],
          ['Feb-22',   6,  '6',     682, '682',     614.6, '614'],
          ['Mar-22',   5,  '5',     623, '623',     614.6, '614'],
          ['Apr-22',   5,   '5',    609.4, '609',     614.6, '614'],
          ['May-22',   5,   '5',    569.6, '569',     614.6, '614']
        ]);



                       
        var options = {
          title : 'Adpend vs Return',
          vAxes: {  0: {title: '%'},
                    1: {title: '$'},
                    },
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#3c78d8', '#f6b26b'],
          series: { 0: {targetAxisIndex:0, color: '#cecece'},
                    1: {targetAxisIndex:1, color: '#f6b26b', type: 'line',  lineWidth: 10},
                    2: {targetAxisIndex:1, color: '#3c78d8', type: 'line',  lineWidth: 10}
        }
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>