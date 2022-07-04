<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_cashflow_debtor_days';

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
    $_SESSION['viewing_client_id'] == 1){





      if($_SESSION['viewing_client_id'] == 4383){
        $debtor_days_target['Aug 22']['value'] = 45;
        $debtor_days_target['Jul 22']['value'] = 45;
        $debtor_days_target['Jun 22']['value'] = 45;
        $debtor_days_target['May 22']['value'] = 45;
        $debtor_days_target['Apr 22']['value'] = 45;
        $debtor_days_target['Mar 22']['value'] = 45;
        $debtor_days_target['Feb 22']['value'] = 45;
        $debtor_days_target['Jan 22']['value'] = 45;
        $debtor_days_target['Dec 21']['value'] = 45;
        $debtor_days_target['Nov 21']['value'] = 45;
        $debtor_days_target['Oct 21']['value'] = 45;
        $debtor_days_target['Sep 21']['value'] = 45;
        $debtor_days_target['Aug 21']['value'] = 45;
        $debtor_days_target['Jul 21']['value'] = 45;
        $debtor_days_target['Jun 21']['value'] = 45;
        $debtor_days_target['May 21']['value'] = 45;
        $debtor_days_target['Apr 21']['value'] = 45;
        $debtor_days_target['Mar 21']['value'] = 45;
        $debtor_days_target['Feb 22']['value'] = 45;
        $debtor_days_target['Jan 22']['value'] = 45;
        $debtor_days_target['Dec 20']['value'] = 45;
        $debtor_days_target['Nov 20']['value'] = 45;
        $debtor_days_target['Oct 20']['value'] = 45;
        $debtor_days_target['Sep 20']['value'] = 45;






    
    
      }
      else{
        $debtor_days_target['Aug 22']['value'] = 45;
        $debtor_days_target['Jul 22']['value'] = 45;
        $debtor_days_target['Jun 22']['value'] = 45;
        $debtor_days_target['May 22']['value'] = 45;
        $debtor_days_target['Apr 22']['value'] = 45;
        $debtor_days_target['Mar 22']['value'] = 45;
        $debtor_days_target['May 22']['value'] = 45;
        $debtor_days_target['Feb 22']['value'] = 45;
        $debtor_days_target['Jan 22']['value'] = 45;
        $debtor_days_target['Dec 21']['value'] = 45;
        $debtor_days_target['Nov 21']['value'] = 45;
        $debtor_days_target['Oct 21']['value'] = 45;
        $debtor_days_target['Sep 21']['value'] = 45;
        $debtor_days_target['Aug 21']['value'] = 45;
        $debtor_days_target['Jul 21']['value'] = 45;
        $debtor_days_target['Jun 21']['value'] = 45;
        $debtor_days_target['May 21']['value'] = 45;
        $debtor_days_target['Apr 21']['value'] = 45;
        $debtor_days_target['Mar 21']['value'] = 45;
        $debtor_days_target['Feb 22']['value'] = 45;
        $debtor_days_target['Jan 22']['value'] = 45;
        $debtor_days_target['Dec 20']['value'] = 45;
        $debtor_days_target['Nov 20']['value'] = 45;
        $debtor_days_target['Oct 20']['value'] = 45;
        $debtor_days_target['Sep 20']['value'] = 45;





      }




    //EXTRACT
    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
            AND           latest_version_for_this_user = 'yes'
            AND           account_name = 'Total Income'
            AND           date_index > -36
            ORDER BY date_index ASC          
            ";
    $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $display_chart['period_for_chart_display'][$row['date_index']]  = $row['period_for_chart_display'];
      $display_chart['Total Income'][$row['date_index']]              = $row['value'];
      $sub_title = $row['accurate_as_at_string'];
    //RAW_Contract Manufacturing not included as not a sales item    
  } 
  //really this would be a lot easier if nothing else there



  //this probably needs a setting for each client as to the account name for each user



    $sql = "SELECT * FROM api_xero_reports_trial_balance_past_12_separate_calendar_months
    WHERE         user_id = '".$_SESSION['viewing_client_id']."'
    AND           latest_version_for_this_user = 'yes'
    AND           account_name = 'Accounts Payable (800)'
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


    //then sum the P&L numbers together
    //Run the division calculation and print that number as an array










  
  $months_to_display = 6;
  //therefore
  $max_extract_to_for_sql = $months_to_display * -1 - 1;
  $extraction_counter_start = $months_to_display * -1; 

  echo " ['Month', 'LAST YEAR', { role: 'annotation' }, 'Revenue', { role: 'annotation' }, 'Target'],";

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
              ".$debtor_days_target[$display_chart['period_for_chart_display'][$date_index]]['value']."]      ";


    if($date_index <> -1){echo ",";}
  }

}
else{
  echo "
  ['Month',     'Debtor Days', { role: 'annotation' },'Target'],
  ['Dec 21',   95, '95',  45],          
  ['Jan 22',   90, '90',  45],
  ['Feb 22',   92, '92',  45],
  ['Mar 22',   85, '85',  45],
  ['Apr 22',   80, '80',  45],
  ['May 22',   78, '78',  45],
  ['Jun 22',   76, '76',  45],
  ['Jul 22',   74, '74',  45],
  ['Aug 22',   72, '72',  45],
  ['Sep 22',   70, '70',  45],
  ['Oct 22',   68, '68',  45],
  ['Nov 22',   66, '66',  45],
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