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


$proper_reponse = 'yes';
if(isset($response['Quotes'])){
    $response = $response['Quotes'];
}
else{$proper_reponse = 'no';}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/components/set_error_handler.php";

if($proper_reponse == 'yes'){
  //  $response = $response['Quotes'];


    $sql_string = "UPDATE ".$table_name."
                    SET latest_version_for_this_user = 'no'
                    WHERE user_id = ".$user_id_for_request;
                   echo $sql_string;exit()
    mysqli_query($conn, $sql_string);


   //Revenues
   for($j = 0; $j < count($response); $j ++ ){      
            try{
                $quote_date     =  $response[$j]['DateString'];
                $status         =  $response[$j]['Status'];
                $sub_total      =  $response[$j]['SubTotal'];
                $total_tax      =  $response[$j]['TotalTax'];
                $total          =  $response[$j]['Total'];
                
    
                
                $sql_string = "
                INSERT INTO ".$table_name."
                (
                    user_id,
                    tenant_id,
                    status,
                    quote_date,
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
                    '".mysqli_real_escape_string($conn, $status)."',
                    '".mysqli_real_escape_string($conn, $quote_date)."',
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
                echo "<br>";
                mysqli_query($conn, $sql_string);
                //exit();}
                }
                catch (ErrorException $e){

                    if(!isset($response[$j])){$response[$j] = 'Unknown Error';}
                    else{$response[$j] = json_encode($response[$j]);}

                    $sql_string = "
                    INSERT INTO api_xero_json_error
                    (file_name, exception, error_json)
                    VALUES (
                        '".mysqli_real_escape_string($conn, __FILE__)."',
                        '".mysqli_real_escape_string($conn, $e)."',
                        '".mysqli_real_escape_string($conn, $response[$j])."',
                    )
                    ";
                    mysqli_query($conn, $sql_string);
                }

   }
}
