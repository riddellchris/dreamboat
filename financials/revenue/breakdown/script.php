<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_breakdown';

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


          ['Month',     'Website', { role: 'annotation' }, 'Other', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }, 'Distribution', { role: 'annotation' }],
          ['2004/05',   450,  '450',                       614.6, '614',                       614.6, '614',                       614.6, '614'],          
          ['2004/05',   450,  '450',     614.6, '614',                       614.6, '614',                       614.6, '614'],
          ['2005/06',   288,  '288',     682, '682',                       614.6, '614',                       614.6, '614'],
          ['2006/07',   397,  '397',     623, '623',                       614.6, '614',                       614.6, '614'],
          ['2007/08',   215,   '215',    609.4, '609',                       614.6, '614',                       614.6, '614'],
          ['2008/09',   366,   '366',    569.6, '569',                       614.6, '614',                       614.6, '614']
        ]);



                       
        var options = {
          title : 'Revenue Breakdown',
          vAxis: {title: '$'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#f6b26b', '#3c78d8', 'green', 'red'],
        isStacked: true,
        legend: {position: 'bottom'}
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>