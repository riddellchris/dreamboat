<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_expenses_total';

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


          ['Month',     'Rwanda', { role: 'annotation' }],
          ['2004/05',   450,  '450'],          
          ['2004/05',   450,  '450'],
          ['2005/06',   288,  '288'],
          ['2006/07',   397,  '397'],
          ['2007/08',   215,   '215'],
          ['2008/09',   366,   '366']
        ]);



                       
        var options = {
          title : 'Expenses Total',
          vAxis: {title: '$'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#3c78d8', '#f6b26b'],
         legend: {position: 'none'},
        isStacked: true
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }

      $(window).resize(function(){<?php echo $location_string; ?>();});	

    </script>