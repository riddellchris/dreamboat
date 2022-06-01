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





      if($_SESSION['viewing_client_id'] == 4383){
        $revenue_target['Aug 22']['value'] = 70000;
        $revenue_target['Jul 22']['value'] = 60000;
        $revenue_target['Jun 22']['value'] = 50000;
        $revenue_target['May 22']['value'] = 50000;
        $revenue_target['Apr 22']['value'] = 50000;
        $revenue_target['Mar 22']['value'] = 50000;
        $revenue_target['May 22']['value'] = 50000;
        $revenue_target['Feb 22']['value'] = 50000;
        $revenue_target['Jan 22']['value'] = 50000;
        $revenue_target['Dec 21']['value'] = 50000;
        $revenue_target['Nov 21']['value'] = 50000;
        $revenue_target['Oct 21']['value'] = 50000;
        $revenue_target['Sep 21']['value'] = 50000;
    
    
      }
      else{
        $revenue_target['Aug 22']['value'] = 1000;
        $revenue_target['Jul 22']['value'] = 1000;
        $revenue_target['Jun 22']['value'] = 1000;
        $revenue_target['May 22']['value'] = 1000;
        $revenue_target['Apr 22']['value'] = 1000;
        $revenue_target['Mar 22']['value'] = 1000;
        $revenue_target['May 22']['value'] = 1000;
        $revenue_target['Feb 22']['value'] = 1000;
        $revenue_target['Jan 22']['value'] = 1000;
        $revenue_target['Dec 21']['value'] = 1000;
        $revenue_target['Nov 21']['value'] = 800;
        $revenue_target['Oct 21']['value'] = 1000;
        $revenue_target['Sep 21']['value'] = 1000;
      }




    //EXTRACT
    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
            AND           latest_version_for_this_user = 'yes'
            AND           account_name = 'Total Income'
            AND           date_index > -24
            ORDER BY date_index ASC          
            ";
    $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $display_chart['period_for_chart_display'] = $row['period_for_chart_display'];
      $display_chart['Total Income'][$row['date_index']] = $row['value'];
      $sub_title = $row['accurate_as_at_string'];
    //RAW_Contract Manufacturing not included as not a sales item    
  } 

  
  $months_to_display = 6;
  //therefore
  $max_extract_to_for_sql = $months_to_display * -1 - 1;
  $extraction_counter_start = $months_to_display * -1; 

  for($i = $extraction_counter_start; $i <= -1; $i ++){

    echo " ['Month', 'Revenue', { role: 'annotation' }, 'LAST YEAR', { role: 'annotation' },'Target'],";
    echo " ['".$row['period_for_chart_display']."',       
              ".$display_chart['Total Income'][$date_index].",      
              '".$display_chart['Total Income'][$date_index]."', 
              ".$display_chart['Total Income'][$date_index-12].",      
              '".$display_chart['Total Income'][$date_index-12]."',               
              ".$revenue_target[$row['period_for_chart_display']]['value']."],      ";
  }

}
else{
  echo "
  ['Month',     'Revenue', { role: 'annotation' },'Target'],
  ['Dec 21',   450, '450',  614.6],          
  ['Jan 22',   450, '450',  614.6],
  ['Feb 22',   288, '288',  682],
  ['Mar 22',   397, '397',  623],
  ['Apr 22',   215, '215',  609.4],
  ['May 22',   366, '366',  569.6]
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

          <?php

          if(
              $_SESSION['viewing_client_id'] == 4231 OR     
              $_SESSION['viewing_client_id'] == 4383 OR 
              $_SESSION['viewing_client_id'] == 1){

                echo "
                series: {
                    1: {                              color: '#271e96'}            
                    2: {type: 'line',  lineWidth: 10, color: '#cecece'}
                  }
                ";
              }
              else{
                echo "
                series: {       
                    1: {type: 'line',  lineWidth: 10, color: '#cecece'}
                  }
                ";

              }

          ?>

        };

        <?php
          $chart_type = "ComboChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>