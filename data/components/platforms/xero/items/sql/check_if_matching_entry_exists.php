<?php
if(!isset($_SESSION)){session_start();}

//see if there are any duplicates already stored in the database
$sql = " 
    SELECT  *
    FROM    api_xero_data_item
    WHERE   user_id         = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

    //AND   Id              = '".mysqli_real_escape_string($conn, $response['Id'])."'
$sql.= "    
    AND     Status          = '".mysqli_real_escape_string($conn, $response['Status'])."'
    AND     ProviderName    = '".mysqli_real_escape_string($conn, $response['ProviderName'])."'";
    //AND   DateTimeUTC     = '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."'
$sql .=    "
    AND     ItemID          = '".mysqli_real_escape_string($conn, $response['Items'][$i]['ItemID'])."'
    AND     Code            = '".mysqli_real_escape_string($conn, $response['Items'][$i]['Code'])."'
    AND     Description     = '".mysqli_real_escape_string($conn, $response['Items'][$i]['Description'])."'
    AND     UpdatedDateUTC  = '".mysqli_real_escape_string($conn, $response['Items'][$i]['UpdatedDateUTC'])."'";


//Payments      >> in array format
    //if there is something within here - at this point there isn't anything 
    //there will be in time though so you can pull it out for sure
/*           if(isset($response['Items'][$i]['PurchaseDetails'])){            
        AND     PurchaseDetails = '".mysqli_real_escape_string($conn, $response['Items'][$i]['PurchaseDetails'])."'            
    ";*/


if(isset($response['Items'][$i]['SalesDetails'])){
$sql .= "
    AND     UnitPrice       = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['UnitPrice'])."'
    AND     AccountCode     = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['AccountCode'])."'
    AND     TaxType         = '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['TaxType'])."'";
}

$sql .= "
    AND     Name                    = '".mysqli_real_escape_string($conn, $response['Items'][$i]['Name'])."' 
    AND     IsTrackedAsInventory    = '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsTrackedAsInventory'])."' 
    AND     IsSold                  = '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsSold'])."' 
    AND     IsPurchased             = '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsPurchased'])."' 
    
    
    
    ";    
        
//      echo $sql; exit();
//echo "<br>";
//mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);
//echo "<br>";