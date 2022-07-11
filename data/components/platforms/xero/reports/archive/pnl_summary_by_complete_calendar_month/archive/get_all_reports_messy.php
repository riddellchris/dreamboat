<?php
if(!isset($_SESSION)){session_start();}


//echo "hi'";
//exit();
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






echo $number_of_periods = 3;
//exit();


//for each period then
    for($i = 0; $i < $number_of_periods; $i ++){
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
        echo '<pre>' , var_dump($keys) , '</pre>';
        var_dump($keys);

        exit();

        $debug = 'on';
        if($debug == 'on'){
           // echo "RESPONSE<br>";
           // echo '<pre>' , var_dump($response) , '</pre>';
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
          echo "<BR><BR>ROWS<BR>";
          echo '<pre>' , var_dump($response['Reports'][0]['Rows']), '</pre>';


          $count_of_these_types_of_rows = count($response['Reports'][0]['Rows']);
            //and store that if we don't already have that data
            //this looks a little more complicated somehow just because 

            //now unfortunately we need some nested for loops to pull out this data

        for($i1 = 0; $i1 < $count_of_these_types_of_rows; $i1 ++){
            //total income
            if(isset($response['Reports'][0]['Rows'][$i1]['Title'])){
                if($response['Reports'][0]['Rows'][$i1]['Title'] == 'Income'){
                    //then find the summary row Total Income and go from there
                    $count['layer_3'] = count($response['Reports'][0]['Rows'][$i1]['Rows']);
                    for($i2 = 0; $i2 < $count['layer_3']; $i2 ++){
                        if($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['RowType'] == 'SummaryRow'){
                            echo "<BR><BR>so close to the row<BR>";
                            echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]), '</pre>';       
                                for($i3 = 0; $i3 < count($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells']); $i3 ++){
                                    //all we need to do is get just a little bit deeper into this and then we are killing it
                                    if(is_numeric($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'])){
                                      echo $total_income = $response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'];

                                    }
                                }                
                        }
                    }
                }
            }

            //Gross Profit
            if(isset($response['Reports'][0]['Rows'][$i1]['RowType'])){
                if($response['Reports'][0]['Rows'][$i1]['RowType'] == 'Section'){
                    //then find the summary row Total Income and go from there
                    $count['layer_3'] = count($response['Reports'][0]['Rows'][$i1]['Rows']);
                    for($i2 = 0; $i2 < $count['layer_3']; $i2 ++){
                        if($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['RowType'] == 'SummaryRow'){
                            echo "<BR><BR>so close to the row<BR>";
                            echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]), '</pre>';       
                                for($i3 = 0; $i3 < count($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells']); $i3 ++){
                                    //all we need to do is get just a little bit deeper into this and then we are killing it
                                    if(is_numeric($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'])){
                                      echo $total_income = $response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'];

                                    }
                                }                
                        }
                    }
                }
            }       


            //Operating expenses
            if(isset($response['Reports'][0]['Rows'][$i1]['RowType'])){
                if($response['Reports'][0]['Rows'][$i1]['RowType'] == 'Section'){
                    //then find the summary row Total Income and go from there
                    $count['layer_3'] = count($response['Reports'][0]['Rows'][$i1]['Rows']);
                    for($i2 = 0; $i2 < $count['layer_3']; $i2 ++){
                        if($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['RowType'] == 'SummaryRow'){
                            echo "<BR><BR>so close to the row<BR>";
                            echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]), '</pre>';       
                                for($i3 = 0; $i3 < count($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells']); $i3 ++){
                                    //all we need to do is get just a little bit deeper into this and then we are killing it
                                    if(is_numeric($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'])){
                                      echo $total_income = $response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'];

                                    }
                                }                
                        }
                    }
                }
            }          

            //Net profit
            if(isset($response['Reports'][0]['Rows'][$i1]['RowType'])){
                if($response['Reports'][0]['Rows'][$i1]['RowType'] == 'Section'){
                    //then find the summary row Total Income and go from there
                    $count['layer_3'] = count($response['Reports'][0]['Rows'][$i1]['Rows']);
                    for($i2 = 0; $i2 < $count['layer_3']; $i2 ++){
                        if($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['RowType'] == 'SummaryRow'){
                            echo "<BR><BR>so close to the row<BR>";
                            echo '<pre>' , var_dump($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]), '</pre>';       
                                for($i3 = 0; $i3 < count($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells']); $i3 ++){
                                    //all we need to do is get just a little bit deeper into this and then we are killing it
                                    if(is_numeric($response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'])){
                                      echo $total_income = $response['Reports'][0]['Rows'][$i1]['Rows'][$i2]['Cells'][$i3]['Value'];

                                    }
                                }                
                        }
                    }
                }
            }            

        
        
        }

//this should really just be done with this
//        https://pretagteam.com/question/php-and-nested-json-how-can-i-access-this-element

        //for each of the periods now we need to enter the data
        //including the period that it involves
        $sql = "INSERT INTO api_reports_profit_and_loss_by_complete_month (
            total_income
            )
        VALUES          ('".mysqli_fetch_array($conn, $total_income)."')";
        $result = mysqli_query($conn, $sql);





    }
}
