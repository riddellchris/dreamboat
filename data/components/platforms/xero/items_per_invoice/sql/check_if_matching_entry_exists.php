<?php
if(!isset($_SESSION)){session_start();}

//see if there are any duplicates already stored in the database
$sql = " 
    SELECT  *
    FROM    api_xero_data_invoice_line_items
    WHERE   user_id         = '".mysqli_real_escape_string($conn, $user_id_for_request)."'";


if(isset($response['Items'][$i]['SalesDetails'])){
    if(isset($response['Items'][$i]['SalesDetails']['UnitPrice'])){     $sql .= "   AND     UnitPrice       = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['UnitPrice'])."'";     }
    if(isset($response['Items'][$i]['SalesDetails']['AccountCode'])){   $sql .= "   AND     AccountCode     = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['AccountCode'])."'";   }
    if(isset($response['Items'][$i]['SalesDetails']['TaxType'])){       $sql .= "   AND     TaxType         = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['TaxType'])."'";       }
}
        
//      echo $sql; exit();
//echo "<br>";
//mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);
//echo "<br>";