<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_shopify_comparison';

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


          ['Month',     'Total Revenue', { role: 'annotation' }, 'Shopify Revenue', { role: 'annotation' }],
          ['Dec-21',   450,  '450',     614.6, '614'],          
          ['Jan-22',   450,  '450',     614.6, '614'],
          ['Feb-22',   288,  '288',     682, '682'],
          ['Mar-22',   397,  '397',     623, '623'],
          ['Apr-22',   215,   '215',    609.4, '609'],
          ['May-22',   366,   '366',    569.6, '569']
        ]);



                       
        var options = {
          title : 'Shopify Comparison',
          vAxis: {title: '$'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#3c78d8', '#f6b26b']
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>