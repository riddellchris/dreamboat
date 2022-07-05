   <?php

//If any vars before this point are needed declare here

   //Test 1
//    //getting headers out of json 
//    for($j = 0; $j < count($json_body); $j++){
//     if($json_body['RowType'] == 'Header'){
//         $api_request_headers = array();
//         for ($t = 0; $t < count($json_body[$j]['Cells']); $t++ ){
//             $api_request_headers = array.push($api_request_headers)
//         }

//     }

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/components/set_error_handler.php";

        $response = $response['Payments'];
       
 
   //Revenues
   for($j = 0; $j < count($response); $j ++ ){      
                try{
                $date = date("Y-m-d H:i:s", substr(explode("+",explode("(",$response[$j]['Date'])[1])[0], 0, 10));
                $update_date = date("Y-m-d H:i:s", substr(explode("+",explode("(",$response[$j]['Date'])[1])[0], 0, 10));
                $acc_type               =  $response[$j]['Invoice']['Type'];
                $is_reconciled          =  $response[$j]['IsReconciled'];
                $amount                 =  $response[$j]['Amount'];
                $bank_amount            =  $response[$j]['BankAmount'];
                
                // $date                   =  DateTime('r', explode("+",explode("(",$response[$j]['Date'])[1])[0]);    
                // $update_date            =  DateTime('r', explode("+",explode("(",$response[$j]['UpdatedDateUTC'])[1])[0]); 

                $sql_string = "
                INSERT INTO api_xero_payments
                (
                    user_id,
                    tenant_id,
                    date,
                    update_date,
                    acc_type,
                    is_reconciled,
                    amount,
                    bank_amount,
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
                    '".mysqli_real_escape_string($conn, $date)."',
                    '".mysqli_real_escape_string($conn, $update_date)."',
                    '".mysqli_real_escape_string($conn, $acc_type)."',
                    '".mysqli_real_escape_string($conn, $is_reconciled)."',
                    '".mysqli_real_escape_string($conn, $amount)."',
                    '".mysqli_real_escape_string($conn, $bank_amount)."',
                    '".mysqli_real_escape_string($conn, $to_date_string)."',
                    '".mysqli_real_escape_string($conn, $updated_last_string)."',       
                    '".mysqli_real_escape_string($conn, $accurate_as_at_string)."',
                    '".mysqli_real_escape_string($conn, $date_index)."',
                    '".mysqli_real_escape_string($conn, $date_index_start)."',
                    '".mysqli_real_escape_string($conn, $date_index_end)."',
                    '".mysqli_real_escape_string($conn, $period_for_chart_display)."'                         
                    )
                ";
                //echo $sql_string;
                mysqli_query($conn, $sql_string);
                //exit();
                }
                catch (ErrorException $e){
                  

                    if(!isset($response[$j])){$response[$j] = 'Unknown error';}

                    $sql_string = "
                    INSERT INTO api_xero_json_errors
                    (file_name, exception, error_json)
                    VALUES (
                        '".mysqli_real_escape_string($conn, __FILE__)."',
                        '".mysqli_real_escape_string($conn, $e)."',
                        '".mysqli_real_escape_string($conn, json_encode($response[$j]))."'
                    )";
                    //echo $sql_string;
                    mysqli_query($conn, $sql_string);
                }
            }

    $sql_string = "drop table payment_sum_by_month;";
    mysqli_query($conn,$sql_string);
    

    $sql_string = "
    create table payment_sum_by_month 
    select YEAR(DATE) year, MONTHNAME(DATE) 'month', sum(AMOUNT) 'total' from api_xero_payments where acc_type = 'ACCREC' group by year(date), MONTHNAME(DATE) order by year(date), MONTHNAME(DATE);
    ";

    //echo $sql_string;
    mysqli_query($conn,$sql_string);
        
            // $response[$j]['Rows'][$t])

