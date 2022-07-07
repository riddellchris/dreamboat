<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_expenses_operating';

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
    $_SESSION['viewing_client_id'] == 4387 OR 
    $_SESSION['viewing_client_id'] == 4388 OR 
    $_SESSION['viewing_client_id'] == 4389 OR 
    $_SESSION['viewing_client_id'] == 4390 OR 
    $_SESSION['viewing_client_id'] == 4391 OR 
    $_SESSION['viewing_client_id'] == 4392 OR 


    //Steve Rouget's Clients
    $_SESSION['viewing_client_id'] == '4402' OR
        $_SESSION['viewing_client_id'] == '4400' OR
        $_SESSION['viewing_client_id'] == '4401' OR
        $_SESSION['viewing_client_id'] == '4399' OR
        
    $_SESSION['viewing_client_id'] == 1){





      if($_SESSION['viewing_client_id'] == 4383){
        $revenue_target['Aug 22']['value'] = 70000;
        $revenue_target['Jul 22']['value'] = 60000;
        $revenue_target['Jun 22']['value'] = 50000;
        $revenue_target['May 22']['value'] = 50000;
        $revenue_target['Apr 22']['value'] = 50000;
        $revenue_target['Mar 22']['value'] = 50000;
        $revenue_target['Feb 22']['value'] = 50000;
        $revenue_target['Jan 22']['value'] = 50000;
        $revenue_target['Dec 21']['value'] = 50000;
        $revenue_target['Nov 21']['value'] = 50000;
        $revenue_target['Oct 21']['value'] = 50000;
        $revenue_target['Sep 21']['value'] = 50000;
        $revenue_target['Aug 21']['value'] = 70000;
        $revenue_target['Jul 21']['value'] = 60000;
        $revenue_target['Jun 21']['value'] = 50000;
        $revenue_target['May 21']['value'] = 50000;
        $revenue_target['Apr 21']['value'] = 50000;
        $revenue_target['Mar 21']['value'] = 50000;
        $revenue_target['Feb 22']['value'] = 50000;
        $revenue_target['Jan 22']['value'] = 50000;
        $revenue_target['Dec 20']['value'] = 50000;
        $revenue_target['Nov 20']['value'] = 50000;
        $revenue_target['Oct 20']['value'] = 50000;
        $revenue_target['Sep 20']['value'] = 50000;






    
    
      }
      else{
        $revenue_target['Aug 22']['value'] = 50000;
        $revenue_target['Jul 22']['value'] = 50000;
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
        $revenue_target['Aug 21']['value'] = 70000;
        $revenue_target['Jul 21']['value'] = 60000;
        $revenue_target['Jun 21']['value'] = 50000;
        $revenue_target['May 21']['value'] = 50000;
        $revenue_target['Apr 21']['value'] = 50000;
        $revenue_target['Mar 21']['value'] = 50000;
        $revenue_target['Feb 22']['value'] = 50000;
        $revenue_target['Jan 22']['value'] = 50000;
        $revenue_target['Dec 20']['value'] = 50000;
        $revenue_target['Nov 20']['value'] = 50000;
        $revenue_target['Oct 20']['value'] = 50000;
        $revenue_target['Sep 20']['value'] = 50000;





      }




    //EXTRACT
    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
            AND           latest_version_for_this_user = 'yes'
            AND           account_name = 'Total Operating Expenses'
            AND           date_index > -24
            ORDER BY date_index ASC          
            ";
    $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $display_chart['period_for_chart_display'][$row['date_index']]  = $row['period_for_chart_display'];
      $display_chart['Total Income'][$row['date_index']]              = $row['value'];
      $sub_title = $row['accurate_as_at_string'];
    //RAW_Contract Manufacturing not included as not a sales item    
  } 

  
  $display_default_months = 'yes';
  if($_SESSION['viewing_client_id'] == '4231'){
    $months_to_display = 12;
    $display_default_months = 'no'; 
  }
  if($display_default_months == 'yes'){
    $months_to_display = 6;
  }
  unset($display_default_months);
  //therefore
  $max_extract_to_for_sql = $months_to_display * -1 - 1;
  $extraction_counter_start = $months_to_display * -1; 

  echo " ['Month', 'LAST YEAR', { role: 'annotation' }, 'Operating Expenses', { role: 'annotation' }, 'Target'],";

  for($date_index = $extraction_counter_start; $date_index <= -1; $date_index ++){

    $last_year_index = $date_index-12;

    //NULL CHECKS PER COLUMN
    if(!isset($display_chart['period_for_chart_display'][$date_index])){$display_chart['period_for_chart_display'][$date_index] = '0.00';}
 //   if(!isset($display_chart['period_for_chart_display'][$date_index])){$display_chart['period_for_chart_display'][$date_index] = 'NULL';}
  //  if(!isset($display_chart['period_for_chart_display'][$date_index])){$display_chart['period_for_chart_display'][$date_index] = 'NULL';}
   // if(!isset($display_chart['period_for_chart_display'][$date_index])){$display_chart['period_for_chart_display'][$date_index] = 'NULL';}
   // if(!isset($display_chart['period_for_chart_display'][$date_index])){$display_chart['period_for_chart_display'][$date_index] = 'NULL';}


    echo " [  '".$display_chart['period_for_chart_display'][$date_index]."',       
               ".$display_chart['Total Income'][$last_year_index].",      
              '".$display_chart['Total Income'][$last_year_index]."',               
              ".$display_chart['Total Income'][$date_index].",      
              '".$display_chart['Total Income'][$date_index]."', 
              ".$revenue_target[$display_chart['period_for_chart_display'][$date_index]]['value']."]      ";


    if($date_index <> -1){echo ",";}
  }

}
else{
  echo "
  ['Month',     'Operating Expenses', { role: 'annotation' },'Target'],
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
                echo "title: 'Operating Expenses";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";
                ?>
          vAxis: {title: '$'},
          //hAxis: {title: 'Month'},
          legend: { position: 'top'},
          seriesType: 'bars',

          <?php

          if(
              $_SESSION['viewing_client_id'] == 4231 OR     
              $_SESSION['viewing_client_id'] == 4383 OR 
              $_SESSION['viewing_client_id'] == 4387 OR 
              $_SESSION['viewing_client_id'] == 4388 OR 
              $_SESSION['viewing_client_id'] == 4389 OR 
              $_SESSION['viewing_client_id'] == 4390 OR 
              $_SESSION['viewing_client_id'] == 4391 OR 
              $_SESSION['viewing_client_id'] == 4392 OR 


    //Steve Rouget's Clients
    $_SESSION['viewing_client_id'] == '4402' OR
        $_SESSION['viewing_client_id'] == '4400' OR
        $_SESSION['viewing_client_id'] == '4401' OR
        $_SESSION['viewing_client_id'] == '4399' OR

              $_SESSION['viewing_client_id'] == 1){

                echo "
                series: {
                    0: {                              color: '#281e96'}  ,
                    1: {                              color: '#3c78d8'}  ,                          
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