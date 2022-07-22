<?php
if(!isset($_SESSION)){session_start();}


//then pull out the curent debtors
$sql = "SELECT * FROM api_xero_reports_trial_balance_at_calendar_month_end
                            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
                            AND           latest_version_for_this_user = 'yes'
                            AND          ( account_name = 'Accounts Receivable (610)') 
                            ORDER BY date_index ASC          
                            ";
                    $result = mysqli_query($conn, $sql);

                    //now go through this and build calculate all these for the last 12 periods for this date index.
                    //so to do this in the simplest way possible
                    //just pull out each as raw

                    //then calculate totals for each of them for the date index
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $date_index = $row['date_index'];
                        if($row['account_name'] == 'Accounts Receivable (610)'){ $extracted['Accounts Receivable (610)'][$date_index] = $row['YTD_debit'];}
                                                                                    $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];                                    
                      }





$sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
                            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
                            AND           latest_version_for_this_user = 'yes'
                            AND          ( account_name = 'Total Income') 
                            ORDER BY date_index ASC          
                            ";
                    $result = mysqli_query($conn, $sql);

                    //now go through this and build calculate all these for the last 12 periods for this date index.
                    //so to do this in the simplest way possible
                    //just pull out each as raw

                    //then calculate totals for each of them for the date index
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $date_index = $row['date_index'];
                        if($row['account_name'] == 'Total Income'){ $extracted['Total Income'][$date_index] = $row['value'];}
                                                                    $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];                                    
                      }

                      //what we need here is a check for the non entered indexes and if not working then we simply need to pull out the appropriate data and go from there.
                      //it's really that simple.

                      //to fix this we either need a core table or pull from that and then it all works.
                      //not sure right now.
                      //let's hack our way there in the next day or so
                      //other than that it's easy.

$total_sales = array();
$debtor_days = array();
for($i = -12; $i < 0; $i ++){

    $total_sales[$i] = 0;

    $n = $i;
    //therefore
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//1
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//2
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//3
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//4
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//5
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//6
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//7
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//8
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//9
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//10
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//11
    if(isset($extracted['Total Income'][$n])){$total_sales[$i] += $extracted['Total Income'][$n];} $n = $n - 1;//12


    //total accounts receivable = $extracted['Accounts Receivable (610)'][$date_index];
    if( isset($extracted['Accounts Receivable (610)'][$i]) && 
        isset($total_sales[$i])){

            $debtor_days[$i] = $extracted['Accounts Receivable (610)'][$i] / $total_sales[$i] * 365;

    }
    else{$debtor_days[$i] = 0;}
    
   //$debtor_days[$i]; 
 //  $extracted['Accounts Receivable (610)'][$i];
  //  $total_sales[$i];

    //run calculation for date index
    //sum the last 12 date indexes for p&l then divide by something else 


}










//then run that calc and chart
//simple
//potentially changing over the calcs there for all this





    echo "['Month',     'Debtor Days', { role: 'annotation' },'Target'], ";





                    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){



                      if(!isset($extracted['period_for_chart_display'][$extraction_counter])){$extracted['period_for_chart_display'][$extraction_counter] = '';}
                      echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',       
                                ".$debtor_days[$extraction_counter].",      '".$debtor_days[$extraction_counter]."',  45  ],     ";

                    //  $sub_title = $row['accurate_as_at_string'];

                      //RAW_Contract Manufacturing not included as not a sales item

                    }   