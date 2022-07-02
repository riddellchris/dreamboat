   <?php

//If any vars before this point are needed declare here

//Cleaned json 
   $response = $response['Reports'][0]['Rows'];
    echo json_encode($response);
   
   //Test 1
//    //getting headers out of json 
//    for($j = 0; $j < count($json_body); $j++){
//     if($json_body['RowType'] == 'Header'){
//         $api_request_headers = array();
//         for ($t = 0; $t < count($json_body[$j]['Cells']); $t++ ){
//             $api_request_headers = array.push($api_request_headers)
//         }

//     }


   //Revenues
   for($j = 0; $j < count($response); $j ++ ){
  
        if($response[$j]['RowType'] == 'Section'){

            echo "Entry type = ".$response[$j]['RowType']."<br>";
            for($t = 0; $t < count($response[$j]['Rows']); $t ++){              

                $bank_account   = $response[$j]['Rows'][$t]['Cells'][0]['Value'];
                $account_id     = $response[$j]['Rows'][$t]['Cells'][0]['Attributes'][0]['Value'];

                $opening_balance       = $response[$j]['Rows'][$t]['Cells'][1]['Value'];
                $cash_received         = $response[$j]['Rows'][$t]['Cells'][2]['Value'];
                $cash_spent            = $response[$j]['Rows'][$t]['Cells'][3]['Value'];
                $closing_balance       = $response[$j]['Rows'][$t]['Cells'][4]['Value'];

       
                
                $sql_string = "
                INSERT INTO api_xero_bank_summary
                (
                    user_id,
                    tenant_id,
                    account_id,
                    bank_account,
                    opening_balance,
                    cash_received,
                    cash_spent,
                    closing_balance,
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
                    '".mysqli_real_escape_string($conn, $bank_account)."',
                    '".mysqli_real_escape_string($conn, $opening_balance)."',
                    '".mysqli_real_escape_string($conn, $cash_received)."',
                    '".mysqli_real_escape_string($conn, $cash_spent)."',
                    '".mysqli_real_escape_string($conn, $closing_balance)."',
                    '".mysqli_real_escape_string($conn, $to_date_string)."',
                    '".mysqli_real_escape_string($conn, $updated_last_string)."',       
                    '".mysqli_real_escape_string($conn, $accurate_as_at_string)."',
                    '".mysqli_real_escape_string($conn, $date_index)."',
                    '".mysqli_real_escape_string($conn, $date_index_start)."',
                    '".mysqli_real_escape_string($conn, $date_index_end)."',
                    '".mysqli_real_escape_string($conn, $period_for_chart_display)."'                         
                    )
                ";
                echo $sql_string;
                //mysqli_query($conn, $sql_string);
                exit();}
                }
            }

        
