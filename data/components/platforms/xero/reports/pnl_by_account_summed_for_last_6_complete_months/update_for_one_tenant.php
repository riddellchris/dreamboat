<?php
if(!isset($_SESSION)){session_start();}

//first we need to get todays date.
echo date('m');
echo "<br><br>";

//Therefore one month ago was:
echo date('Y-m-d', strtotime(date('Y-m')." -1 month"));
echo "<br><br>";

//so now we can find the last complete date required for this chart which will be:
echo date('Y-m-d', strtotime(date('Y-m')." -6 months"));
echo "<br><br>";

//and further yet we can do this
echo date('Y-m-d', strtotime(date('Y-m')."last day of -6 months"));

//so that makes querying any report really simple then as all we need to do is focus on building these little bits and pieces out
//as the from date becomes:
$from_date = date('Y-m-d', strtotime(date('Y-m')."first day of -6 months"));
echo $from_date;
echo "<br><br>";

//and the to_date becomes:
$to_date = date('Y-m-d', strtotime(date('Y-m')."last day of -1 months"));
echo $to_date;
echo "<br><br>";

$url_for_api_request =  "https://api.xero.com/api.xro/2.0/Reports/ProfitAndLoss?fromDate=".$from_date."&toDate=".$to_date;
echo $url_for_api_request;

//$user_id_for_request = 1;
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";

//this process is ordered to match the layout of https://api-explorer.xero.com/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url_for_api_request);
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

$debug = 'off';
if($debug == 'on'){
    echo '<pre>' , var_dump($response) , '</pre>';
    exit();
}

//so then all i needd to do is 

$debug = 'on';
if($debug == 'on'){
    $trimmed_response = $response['Reports'][0]['Rows'];
    echo '<pre>' , var_dump($response) , '</pre>';
    //exit();
}


//iterate through and pull out appropriate data:
    $count_of_rows['Reports'] = count($response['Reports'][0]['Rows']);

    for($i = 0; $i < $count_of_rows['Reports']; $i ++){
        //Do nothing for now
        //if($response['Reports'][0]['Rows'][$i]['RowType'] == 'Header'){}
        if($response['Reports'][0]['Rows'][$i]['RowType'] == 'Section'){
            //echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i]['RowType']), '</pre>';

                //count_rows in here then
                $count_of_rows['Section'] = count($response['Reports'][0]['Rows'][$i]['Rows']);

                    //for each of those rows pull out the cells values
                    for($j = 0; $j < $count_of_rows['Section']; $j ++ ){

                        //echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells']), '</pre>';

                        //echo "count of cells <br>".
                        $count_of_rows['Cells'] = count($response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells']);

 
                        

                        if(!isset($pulled_from_json)){  $pulled_from_json = array();
                            $pulled_from_json['account_name'] = array();
                            $pulled_from_json['account_id'] = array();
                            $pulled_from_json['value'] = array();

                        }
                        $count_of_rows['pulled_from_json'] = count($pulled_from_json['account_name']);





                            for($k = 0; $k < $count_of_rows['Cells']; $k++){



                                if($k == 0){$pulled_from_json['account_name'][$count_of_rows['pulled_from_json']]           = $response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells'][$k]['Value'];
                                    if(isset($response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells'][$k]['Attributes'])){
                                            $pulled_from_json['account_id'][$count_of_rows['pulled_from_json']]     = $response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells'][$k]['Attributes'][0]['Value'];
                                    }
                                }
                                if($k == 1){$pulled_from_json['value'][$count_of_rows['pulled_from_json']]                  = $response['Reports'][0]['Rows'][$i]['Rows'][$j]['Cells'][$k]['Value'];}                               

                            }
                        

                    }
            }
    
    }


    $debug = 'off';
    if($debug == 'on'){
       // $trimmed_response = $response['Reports'][0]['Rows'];
        echo '<pre>' , var_dump($pulled_from_json) , '</pre>';
        exit();
    }

    $debug = 'on';
    if($debug == 'on'){

        echo "<table>";
            for($i = 0; $i < count($pulled_from_json['account_name'])+1; $i ++){

                if(isset($pulled_from_json['account_id'][$i])){     $account_id     = $pulled_from_json['account_id'][$i];}   else{$account_id ='';}           
                if(isset($pulled_from_json['account_name'][$i])){   $account_name   = $pulled_from_json['account_name'][$i];} else{$account_name ='';}              
                if(isset($pulled_from_json['value'][$i])){          $value          = $pulled_from_json['value'][$i];}        else{$value ='';}          

                echo "<tr>";
                    echo "<td>".$account_id."</td>";
                    echo "<td>".$account_name."</td>";
                    echo "<td>".$value."</td>";
                echo "<tr>";
            }
        echo "</table>";
      //  exit();
    }



//so then all i need to do is rip out every account value
//don't be smart about it just smash it through here for now to get to the goal for this client then move on.




require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
for($i = 0; $i < count($pulled_from_json['account_name'])+1; $i ++){
//pretty much you just want to pull out the cells 
    //value one
    //value two and we are done
    //store them as an input

    for($i = 0; $i < count($pulled_from_json['account_name']); $i ++){   

        if(isset($pulled_from_json['account_id'][$i])){     $account_id     = $pulled_from_json['account_id'][$i];}   else{$account_id ='';}           
        if(isset($pulled_from_json['account_name'][$i])){   $account_name   = $pulled_from_json['account_name'][$i];} else{$account_name ='';}              
        if(isset($pulled_from_json['value'][$i])){          $value          = $pulled_from_json['value'][$i];}        else{$value ='';}     


        if($account_name != '' && $value != ''){
            $sql = "    UPDATE api_xero_reports_pnl_account_past_6_complete_months
                        SET latest_version_for_this_user = 'no'
                        WHERE   user_id         = '".mysqli_real_escape_string($conn, $user_id_for_request)."'
                        AND     tenant_id       = '".mysqli_real_escape_string($conn, $tenant_id)."'
                        AND     account_name    = '".mysqli_real_escape_string($conn, $account_name)."'";
            mysqli_query($conn, $sql);            

        }

        $sql = "
            INSERT INTO api_xero_reports_pnl_account_past_6_complete_months (
                user_id,
                tenant_id,
                account_id,
                account_name,
                value
                )
            VALUES(
                '".mysqli_real_escape_string($conn, $user_id_for_request)."',
                '".mysqli_real_escape_string($conn, $tenant_id)."',
                '".mysqli_real_escape_string($conn, $account_id)."',
                '".mysqli_real_escape_string($conn, $account_name)."',
                '".mysqli_real_escape_string($conn, $value)."'
                )
        ";
        echo $sql."<br><br><br>";

        mysqli_query($conn, $sql);
    }
}


                            //if it exists then store the account file too
                            //if not don't
    //then that chart can be built in no time flat

    //then essentially I can put that data through and be done with that in an hour tomorrow
    //just do it as part of a script

    //then just store it in this same file for now too.

    //stop the checking if a duplicate already exists
    //so long as one account is able to be stored
    //mark all others as not the latest 
    //then dump in the new stuff
    //and whamo

    //simply using the $_SESSION user_id as required/easy
    //at the top of the script just smash in the labels and pull it out from there
    //done
    //i quite literally can do this chart tomorrow morning
                            //even 



exit();














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