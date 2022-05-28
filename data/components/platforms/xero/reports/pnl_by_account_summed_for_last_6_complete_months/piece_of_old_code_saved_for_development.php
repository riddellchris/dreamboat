
<?php




//for each period then
    for($i = 0; $i < $number_of_periods; $i ++){

            unset($_SESSION['report']);




        //we have the year
        $period['number'] = $i;
        if($i != 0){
            if($period['month'] == '12'){$period['month'] = 1; $period['year'] = $period['year'] + 1;}
            else{                        $period['month'] = $period['month'] + 1;}
        }

        //the only thing do is find the last day of the month using - cal_days_in_month(CAL_GREGORIAN, 11, 2009); 
            $period['last_day'] = cal_days_in_month(CAL_GREGORIAN, $period['month'], $period['year']); 
        //this will then provide you with more than enough information to set the appropriate paramaters 
//        echo substr($period['month'], 0 , 1);
//        echo "<br>"; 
        if( $period['month'] < 10 AND 
            substr($period['month'], 0 , 1) != '0'){$display_month = '0'.$period['month'];}
        else{$display_month = $period['month'];}

        //then we get the parameters we need
        $url =  "https://api.xero.com/api.xro/2.0/Reports/ProfitAndLoss?fromDate=".$period['year']."-".$display_month."-01&toDate=".$period['year']."-".$display_month."-".$period['last_day'];
        //echo "<br>";



        //before we get into this first we actually want to check if there are any periods that have already been applied to
        //ACCURACY IMPROVEMENT: adjust and tweak for any changes
        //REASON: Tenant API rate limits:
            //https://developer.xero.com/documentation/guides/oauth2/limits#uncertified-app-limits
            //Concurrent Limit: 5 calls in progress at one time
            //Minute Limit: 60 calls per minute
            //Daily Limit: 5000 calls per day     
        $no_current_entry_for_period = 'no';

        $sql = "SELECT * FROM api_xero_reports_pnl_summary_by_complete_month
                WHERE   tenant_id   = '".mysqli_real_escape_string($conn, $tenant_id)."'
                AND     year        = '".mysqli_real_escape_string($conn, $period['year'])."'
                AND     month       = '".mysqli_real_escape_string($conn, $display_month)."'";

        echo "<br><br>CHECK SQL: ".$sql."<br>";

           //     echo $sql;exit();
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0){$no_current_entry_for_period = 'yes';}
        else{$no_current_entry_for_period = 'no';}






        if($no_current_entry_for_period == 'yes'){    
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/reports/pnl_by_account_by_complete_calendar_month/get_all.php";
       

            //FAILS WHEN api LIMIT REACHED for tenant
            //this is not ideal but
            if(is_array($response)){

                $keys = array_keys($response);
                // echo '<pre>' , var_dump($keys) , '</pre>';
                //  var_dump($keys);
                //exit();

                //probably important for checking rate limits
               

                $debug = 'on';
                if($debug == 'on'){
                    echo "RESPONSE<br>";
                    echo '<pre>' , var_dump($response) , '</pre>';
                    echo "RETURN HEADERS<br>";
                    echo '<pre>' , var_dump($return_headers) , '</pre>';

                }




            // exit();
                //as on pages such as get all reports this is the first curl request
                //just trigger a solution to that for sure.
                if(isset($response['detail'])){
                    if($response['detail'] == 'AuthenticationUnsuccessful'){
                        $no_access = 'yes';
                    }
                }

                //now for all invoices we want to see if they are already stored or not and then store.
                //if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 
                //this just entails the first four entries in the array which are all the same honestly
                $Id             = $response['Id'];
                $Status         = $response['Status'];   
                $ProviderName   = $response['ProviderName'];
                $DateTimeUTC    = $response['DateTimeUTC'];

                //echo "<BR><BR>REPORTS<BR>";
                //echo '<pre>' , var_dump($response['Reports']), '</pre>';
                //  echo "<BR><BR>ROWS<BR>";
                //  echo '<pre>' , var_dump($response['Reports'][0]['Rows']), '</pre>';
                //   $count_of_these_types_of_rows = count($response['Reports'][0]['Rows']);
                //and store that if we don't already have that data
                //this looks a little more complicated somehow just because 

                //now unfortunately we need some nested for loops to pull out this data
        
                array_walk_recursive($response, 'p_and_l_scan');

                $middle_key = 'total_income';               if(!isset($_SESSION['report'][$middle_key]['value'])){$_SESSION['report'][$middle_key]['value'] = 0.00;}
                $middle_key = 'gross_profit';               if(!isset($_SESSION['report'][$middle_key]['value'])){$_SESSION['report'][$middle_key]['value'] = 0.00;}
                $middle_key = 'total_operating_expenses';   if(!isset($_SESSION['report'][$middle_key]['value'])){$_SESSION['report'][$middle_key]['value'] = 0.00;}
                $middle_key = 'net_profit';                 if(!isset($_SESSION['report'][$middle_key]['value'])){$_SESSION['report'][$middle_key]['value'] = 0.00;}

                /*
                echo "<BR><BR><BR><BR><BR>HOPEFULLY THE THINGS WE NEED:<BR>";
                echo "YEAR:".$period['year']."MONTH:".$period['month']."<BR>";
                echo $middle_key = 'total_income';
                echo $_SESSION['report'][$middle_key]['value'];
                echo "<br>";
                echo $middle_key = 'gross_profit';
                echo $_SESSION['report'][$middle_key]['value'];
                echo "<br>";
                echo $middle_key = 'total_operating_expenses';
                echo $_SESSION['report'][$middle_key]['value'];
                echo "<br>";
                echo $middle_key = 'net_profit';
                echo $_SESSION['report'][$middle_key]['value'];
                echo "<BR><BR><BR><BR><BR><BR>";
                */

                //this should really just be done with this
                //        https://pretagteam.com/question/php-and-nested-json-how-can-i-access-this-element

                //for each of the periods now we need to enter the data
                //including the period that it involves
                $sql = "INSERT INTO api_xero_reports_pnl_summary_by_complete_month (
                                                                                    user_id,
                                                                                    tenant_id,
                                                                                    year,
                                                                                    month,
                                                                                    total_income,
                                                                                    gross_profit,
                                                                                    total_operating_expenses,
                                                                                    net_profit
                                                                                    )
                VALUES          ('".mysqli_real_escape_string($conn, $user_id_for_request)."',
                                '".mysqli_real_escape_string($conn, $tenant_id )."',
                                '".mysqli_real_escape_string($conn, $period['year'] )."',
                                '".mysqli_real_escape_string($conn, $display_month)."',
                                '".mysqli_real_escape_string($conn, $_SESSION['report']['total_income']['value'])."',
                                '".mysqli_real_escape_string($conn, $_SESSION['report']['gross_profit']['value'])."',
                                '".mysqli_real_escape_string($conn, $_SESSION['report']['total_operating_expenses']['value'])."',
                                '".mysqli_real_escape_string($conn, $_SESSION['report']['net_profit']['value'])."'
                                )";

                echo "INPUT SQL: ".$sql."<BR>";
                //    echo $sql;
                //    exit();
                $result = mysqli_query($conn, $sql);
            }

        }
    }