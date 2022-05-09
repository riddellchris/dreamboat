<?php
if(!isset($_SESSION)){session_start();}


if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_sales_mix';

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


          ['Month',     'Dollars', { role: 'annotation' }],
          ['Website',       450,  '450']     ,    
          ['Other',          450,  '450'],
          ['Wholesale',       288,  '288'],
          ['Distribution',   288,  '288']
        ]);



                       
        var options = {
          title : 'Sales Mix',
          vAxis: {title: '$'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#f6b26b', '#3c78d8', 'green', 'red'],
        isStacked: true
        };


        <?php
          $chart_type = "PieChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }

      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>