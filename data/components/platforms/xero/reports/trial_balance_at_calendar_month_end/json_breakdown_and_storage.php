   <?php

//If any vars before this point are needed declare here

//Cleaned json 
 //  $response = $response['Reports'][0]['Rows'];
   $proper_reponse = 'yes';
if(isset($response['Reports'][0]['Rows'])){
$response = $response['Reports'][0]['Rows'];
}
else{$proper_reponse = 'no';}
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

if($proper_reponse == 'yes'){
   //Revenues
   for($j = 0; $j < count($response); $j ++ ){
  
        if($response[$j]['RowType'] == 'Section'){

            if($response[$j]['Title'] != ''){
            $classification = $response[$j]['Title'];
         //   echo '<pre>' , var_dump($response[$j]) , '</pre>';exit();

            echo "Entry type = ".$response[$j]['RowType']."<br>";
            for($t = 0; $t < count($response[$j]['Rows']); $t ++){          
                
                try{

                $account_name   = $response[$j]['Rows'][$t]['Cells'][0]['Value'];
                $account_id     = $response[$j]['Rows'][$t]['Cells'][0]['Attributes'][0]['Value'];
                $debit          = $response[$j]['Rows'][$t]['Cells'][1]['Value'];
                $credit         = $response[$j]['Rows'][$t]['Cells'][2]['Value'];
                $ytd_debit      = $response[$j]['Rows'][$t]['Cells'][3]['Value'];
                $ytd_credit     = $response[$j]['Rows'][$t]['Cells'][4]['Value'];

                if($debit       == ''){$debit = '0.00';}
                if($credit      == ''){$credit = '0.00';}
                if($ytd_debit   == ''){$ytd_debit = '0.00';}
                if($ytd_credit  == ''){$ytd_credit = '0.00';}
                
                $sql_string = "
                INSERT INTO api_xero_reports_trial_balance_at_calendar_month_end
                (
                    user_id,
                    tenant_id,
                    account_id,
                    account_name,
                    classification,
                    debit,
                    credit,
                    YTD_debit,
                    YTD_credit,
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
                    '".mysqli_real_escape_string($conn, $classification)."',
                    '".mysqli_real_escape_string($conn, $debit)."',
                    '".mysqli_real_escape_string($conn, $credit)."',
                    '".mysqli_real_escape_string($conn, $ytd_debit)."',
                    '".mysqli_real_escape_string($conn, $ytd_debit)."',
                    '".mysqli_real_escape_string($conn, $to_date_string)."',
                    '".mysqli_real_escape_string($conn, $updated_last_string)."',       
                    '".mysqli_real_escape_string($conn, $accurate_as_at_string)."',
                    '".mysqli_real_escape_string($conn, $date_index)."',
                    '".mysqli_real_escape_string($conn, $date_index_start)."',
                    '".mysqli_real_escape_string($conn, $date_index_end)."',
                    '".mysqli_real_escape_string($conn, $period_for_chart_display)."'                         
                    )
                ";
                mysqli_query($conn, $sql_string);}
                catch (ErrorException $e){


                    if(!isset($response[$j]['Rows'][$t])){$response[$j]['Rows'][$t] = 'Unknown error';}


                    $sql_string = "
                    INSERT INTO api_xero_json_error
                    (file_name, exception, error_json)
                    VALUES (
                        '".mysqli_real_escape_string($conn, __FILE__)."',
                        '".mysqli_real_escape_string($conn, $e)."',
                        '".mysqli_real_escape_string($conn, $response[$j]['Rows'][$t])."',
                    )
                    ";
                    mysqli_query($conn, $sql_string);
                }
                }
            }

        }
    }
}