<?php
if(!isset($_SESSION)){session_start();}






// Call function with value to search as second argument
//use this ----- https://www.php.net/manual/en/function.array-walk-recursive.php
function p_and_l_scan($item, $key){

    $middle_key = 'total_income';               if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'gross_profit';               if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'total_operating_expenses';   if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'net_profit';                 if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}

    if($key == 'Value'){ 
        $middle_key = 'total_income';               if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'gross_profit';               if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'total_operating_expenses';   if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'net_profit';                 if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
    }

  //  echo $key." holds ".$item."<br>";
    if($item == 'Total Income'){             $_SESSION['report']['total_income']['collect_next']                = 'yes';}
    if($item == 'Gross Profit'){             $_SESSION['report']['gross_profit']['collect_next']                = 'yes';}
    if($item == 'Total Operating Expenses'){ $_SESSION['report']['total_operating_expenses']['collect_next']    = 'yes';}
    if($item == 'Net Profit'){               $_SESSION['report']['net_profit']['collect_next']                  = 'yes';}

}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

$debug = 'no';
if($debug == 'yes'){
    echo '<pre>' , var_dump($tenant_user_id) , '</pre>';
    exit();
}

//for each in that array
for($j = 0; $j < $tenant_user_id_count; $j++){

    //set the $_SESSION user_id with the corresponding user_id for this tenant
    $_SESSION['user_id']    = $tenant_user_id[$j];
    $tenant_id              = $tenant_xero_id[$j];

    
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/get.php";



    //so the only complexity here is that 
    //first we actually need to get out the first month that an invoice is registered for each company.
    $sql = "SELECT * FROM   api_xero_invoice_first_invoice_date_for_each_tenant
            WHERE           tenant_id = '".mysqli_real_escape_string($conn, $tenant_xero_id[$j])."'
            LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $first_full['month']    = $row['first_full_month'];
    $first_full['year']     = $row['first_full_month_in_year'];


    //now what we need to do is figure out the last full month that has passed.
    if(date('d') != 1){
        if(date('m') != 1){$last_full['month'] = date('m') - 1;}
        else{$last_full['month'] = 12;}
    }
    else{$last_full['month'] = date('m');}

    //i think first up we need to look at the number of periods that will exist for this tenant.
    //that's pretty much going to be:
        //if the last month is greater  than the first month (the last month - the first month + 1)
        if($last_full['month'] > $first_full['month']){$number_of_periods = $last_full['month'] - $first_full['month'] + 1;}
        //if the last month is less     than the first month (the first month - the last month + 1) -- but remove 12 from the total
        if($last_full['month'] < $first_full['month']){$number_of_periods = $first_full['month'] - $last_full['month'] + 1 - 12;}
        //if equal number of periods = 1
        if($last_full['month'] == $first_full['month']){$number_of_periods = 1;}



        $current_month = date('m');
        if($current_month != '01'){ $last_full['year'] = date('Y');}
        else{                       $last_full['year'] = date('Y') - 1;}
    //and then ( last year - first year ) * 12 for all those periods
        $number_of_periods = $number_of_periods + ($last_full['year'] - $first_full['year']) * 12;
    //this will give us the total number of periods.

  //  echo $number_of_periods;
 //   echo "<br>";exit();
    $period['month']    = $first_full['month'];    
    $period['year']     = $first_full['year'];
//echo "<br>";






//echo $number_of_periods = 3;
//exit();


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
            //this process is ordered to match the layout of https://api-explorer.xero.com/
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            //Parameters
            $headers = array(  'Authorization: Bearer '.$access_token,
                            'Accept: application/json',
                            'Xero-tenant-id: '.$tenant_id       
                            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            $content = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($content, true);

            $keys = array_keys($response);
            // echo '<pre>' , var_dump($keys) , '</pre>';
            //  var_dump($keys);
            //exit();

            $debug = 'off';
            if($debug == 'on'){
                echo "RESPONSE<br>";
                echo '<pre>' , var_dump($response) , '</pre>';
            }

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
            VALUES          ('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
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
