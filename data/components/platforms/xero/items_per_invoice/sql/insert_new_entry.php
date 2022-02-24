<?php
if(!isset($_SESSION)){session_start();}

$sql = "INSERT INTO api_xero_data_item 
        (
        user_id,    
        TenantID,
        Id,
        Status,
        ProviderName,
        DateTimeUTC,
        ItemID,
        Code,
        Description,
        UpdatedDateUTC,";
        //>>> Purchase details >> in array format -
        //>>> Sales details
        if(isset($response['Items'][$i]['SalesDetails']['UnitPrice'])){         $sql .= " UnitPrice,";       }
        if(isset($response['Items'][$i]['SalesDetails']['AccountCode'])){       $sql .= " AccountCode,";     }
        if(isset($response['Items'][$i]['SalesDetails']['TaxType'])){           $sql .= " TaxType,";         }
               
        
$sql .= "
        Name,
        IsTrackedAsInventory,
        IsSold,
        IsPurchased              
        )

        VALUES
        (   
            '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
            '".mysqli_real_escape_string($conn, $tenant_id)."',
            '".mysqli_real_escape_string($conn, $response['Id'])."',
            '".mysqli_real_escape_string($conn, $response['Status'])."',
            '".mysqli_real_escape_string($conn, $response['ProviderName'])."',
            '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."',
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['ItemID'])."', 
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['Code'])."',                     
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['Description'])."',                         
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['UpdatedDateUTC'])."',   ";  

            if(isset($response['Items'][$i]['SalesDetails']['UnitPrice'])){     $sql.= "'".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['UnitPrice'])."',";          }
            if(isset($response['Items'][$i]['SalesDetails']['AccountCode'])){   $sql.= "'".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['AccountCode'])."', ";       }
            if(isset($response['Items'][$i]['SalesDetails']['TaxType'])){       $sql.= "'".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['TaxType'])."', ";           }
            
            
        $sql .= "
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['Name'])."', 
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsTrackedAsInventory'])."',                     
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsSold'])."',                         
            '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsPurchased'])."'                                  
            )
";


//  echo $sql."<br><br><br>";
//  exit();

mysqli_query($conn, $sql);