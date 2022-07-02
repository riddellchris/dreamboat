   <?php

//If any vars before this point are needed declare here

   $response = $response['BankTransactions'];


   //Revenues
   for($j = 0; $j < count($response); $j ++ ){


                $bank_account       = $response[$j]['BankAccount']['Name'];
                $type               = $response[$j]['Type'];
                $reconciled         = $response[$j]['IsReconciled'];
                $transaction_date   = $response[$j]['DateString'];
                $sub_total          = $response[$j]['SubTotal'];
                $total_tax          = $response[$j]['TotalTax']; 
                $total              = $response[$j]['Total']; 
                
                $sql_string = "
                INSERT INTO api_xero_bank_transactions
                (
                    user_id,
                    tenant_id,
                    bank_account,
                    type,
                    reconciled,
                    transaction_date,
                    sub_total,
                    total_tax,
                    total,
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
                    '".mysqli_real_escape_string($conn, $bank_account)."',
                    '".mysqli_real_escape_string($conn, $type)."',
                    '".mysqli_real_escape_string($conn, $reconciled)."',
                    '".mysqli_real_escape_string($conn, $transaction_date)."',
                    '".mysqli_real_escape_string($conn, $sub_total)."',
                    '".mysqli_real_escape_string($conn, $total_tax)."',
                    '".mysqli_real_escape_string($conn, $total)."',
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
     
    

        
