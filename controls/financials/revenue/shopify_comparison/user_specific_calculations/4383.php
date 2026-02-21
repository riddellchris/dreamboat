<?php
if(!isset($_SESSION)){session_start();}


                    $sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
                            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
                            AND           latest_version_for_this_user = 'yes'
                            AND          ( account_name = 'Total Income' OR  account_name = 'LAM _Shopify' ) 
                            AND           date_index > -7
                            ORDER BY date_index ASC          
                            ";
                    //echo $sql; exit();
                    $result = mysqli_query($conn, $sql);

                    unset($extracted);






                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      $date_index = $row['date_index'];
                      if($row['account_name'] == 'Total Income'){ $extracted['Total Income'][$date_index] = $row['value'];}
                      if($row['account_name'] == 'LAM _Shopify'){ $extracted['LAM _Shopify'][$date_index] = $row['value'];} 
                                                                  $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];                                    
                    }

                    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){
                      echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',       
                                ".$extracted['Total Income'][$extraction_counter].",      '".$extracted['Total Income'][$extraction_counter]."',       
                                ".$extracted['LAM _Shopify'][$extraction_counter].",      '".$extracted['LAM _Shopify'][$extraction_counter]."'],      ";

                      $sub_title = $row['accurate_as_at_string'];

                      //RAW_Contract Manufacturing not included as not a sales item

                    }   