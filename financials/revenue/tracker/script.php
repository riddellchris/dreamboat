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


          <?php




if( $_SESSION['viewing_client_id'] == 4231 OR 
    $_SESSION['viewing_client_id'] == 4383 OR 
    $_SESSION['viewing_client_id'] == 1){

    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
            AND           latest_version_for_this_user = 'yes'
            AND           account_name = 'Total Income'
            AND           date_index > -7
            ORDER BY date_index ASC          
            ";
    $result = mysqli_query($conn, $sql);

    echo " ['Month',         'Revenue',                   { role: 'annotation' }, 'Target'],";

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      echo " ['".$row['period_for_chart_display']."',       ".$row['value'].",      '".$row['value']."', 614.6],      ";

    $sub_title = $row['accurate_as_at_string'];

    //RAW_Contract Manufacturing not included as not a sales item

  }   
}
else{
  echo "
  ['Month',     'Revenue', { role: 'annotation' },'Target'],
  ['Dec 21',   450,   '450',   614.6],          
  ['Jan 22',   450,    '450',   614.6],
  ['Feb 22',   288,    '450',   682],
  ['Mar 22',   397,    '450',   623],
  ['Apr 22',   215,     '450',  609.4],
  ['May 22',   366,     '450',  569.6]
  ";

  $sub_title = "Dummy data only";




}

?>

        ]);

        var options = {
          <?php
                echo "title: 'Revenue Tracker";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";
                ?>
          vAxis: {title: '$'},
          //hAxis: {title: 'Month'},
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