<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_tracker';

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
          ['Month',     'Revenue', { role: 'annotation' },'Target'],
          ['Dec-21',   450,   '450',   614.6],          
          ['Jan-22',   450,    '450',   614.6],
          ['Feb-22',   288,    '450',   682],
          ['Mar-22',   397,    '450',   623],
          ['Apr-22',   215,     '450',  609.4],
          ['May-22',   366,     '450',  569.6]
        ]);

        var options = {
          title : 'REVENUE TRACKER',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {1: {type: 'line',  lineWidth: 10, color: '#cecece'}}
        };

        <?php
          $chart_type = "ComboChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>