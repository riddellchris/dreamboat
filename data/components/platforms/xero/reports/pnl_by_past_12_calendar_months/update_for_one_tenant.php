<?php


//simply for construction
//ONLY COMMENT OUT SO THAT WE CAN SAVE FOR MORE CONSTRCUTION
//$user_id_for_request = 4383;
//require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";

/*
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
*/

//so that makes querying any report really simple then as all we need to do is focus on building these little bits and pieces out
//as the from date becomes:

//STRING CREATION
$from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of -36 months"));
$from_date_string   = date('M j',   strtotime(date('Y-m')."first day of -36 months"));

//and the to_date becomes:
$to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of -1 months"));
$to_date_string     = date('M j',   strtotime(date('Y-m')."last day of -1 months"));

$updated_last_string = date('Y-m-d', strtotime(date('Y-m')));

//redundant string
$accurate_as_at_string = " complete to ".$to_date_string;



unset($sql_for_insert_of_12_month_data);






        //echo "hi";
        for($date_index = -1; $date_index > -36; $date_index --){
        //echo "hi";
            //ACTUAL REQUEST DATE CREATION
            $from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of ".$date_index." months"));
            $date_index_start   = $from_date;

            //and the to_date becomes:
            $to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of ".$date_index." months"));
            $date_index_end     = $to_date;

            $period_for_chart_display   = date('M y', strtotime(date('Y-m')."last day of ".$date_index." months"));




                    $url_for_api_request =  "https://api.xero.com/api.xro/2.0/Reports/ProfitAndLoss?fromDate=".$from_date."&toDate=".$to_date;
                    echo $url_for_api_request;

                    //$user_id_for_request = 1;
                    //require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";
                    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/get.php";


                    echo "<br><br>";
                    echo "USER ID <br>";
                    echo $user_id_for_request."<br>";
                    echo "TENANT ID <br>";
                    echo $tenant_id ."<br>";
                    echo "<br>";
                    echo "ACCESS TOKEN <br>";
                    echo $access_token."<br>";



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


                    unset($pulled_from_json);



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
                                $sql = "    UPDATE api_xero_reports_pnl_by_past_12_calendar_months
                                            SET latest_version_for_this_user = 'no'
                                            WHERE   user_id         = '".mysqli_real_escape_string($conn, $user_id_for_request)."'
                                            AND     tenant_id       = '".mysqli_real_escape_string($conn, $tenant_id)."'
                                            AND     account_name    = '".mysqli_real_escape_string($conn, $account_name)."'";
                                mysqli_query($conn, $sql);            
                            }

                            if(!isset($sql_for_insert_of_12_month_data)){$sql_for_insert_of_12_month_data = array();}

                            $sql_for_insert_of_12_month_data[count($sql_for_insert_of_12_month_data)] = "
                                INSERT INTO api_xero_reports_pnl_by_past_12_calendar_months (
                                    user_id,
                                    tenant_id,
                                    account_id,
                                    account_name,
                                    value,
                                    from_date_string,
                                    to_date_string,
                                    updated_last_string,
                                    accurate_as_at_string,
                                    date_index,
                                    date_index_start,
                                    date_index_end,
                                    period_for_chart_display
                                    )
                                VALUES(
                                    '".mysqli_real_escape_string($conn, $user_id_for_request)."',
                                    '".mysqli_real_escape_string($conn, $tenant_id)."',
                                    '".mysqli_real_escape_string($conn, $account_id)."',
                                    '".mysqli_real_escape_string($conn, $account_name)."',
                                    '".mysqli_real_escape_string($conn, $value)."',
                                    '".mysqli_real_escape_string($conn, $from_date_string)."',
                                    '".mysqli_real_escape_string($conn, $to_date_string)."',
                                    '".mysqli_real_escape_string($conn, $updated_last_string)."',       
                                    '".mysqli_real_escape_string($conn, $accurate_as_at_string)."',
                                    '".mysqli_real_escape_string($conn, $date_index)."',
                                    '".mysqli_real_escape_string($conn, $date_index_start)."',
                                    '".mysqli_real_escape_string($conn, $date_index_end)."',
                                    '".mysqli_real_escape_string($conn, $period_for_chart_display)."'                         
                                    )
                            ";
                        // echo $sql."<br><br><br>";

                        // mysqli_query($conn, $sql);
                        }
                    }





        }

        for($count = 0; $count < count($sql_for_insert_of_12_month_data); $count ++){

            echo $sql_for_insert_of_12_month_data[$count];
            echo "<br><br>";
        mysqli_query($conn, $sql_for_insert_of_12_month_data[$count]);

        }




    






