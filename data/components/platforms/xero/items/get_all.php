<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

//for each in that array
for($j = 0; $j < count($tenant_user_id); $j++){

    //set the $_SESSION user_id with the corresponding user_id for this tenant
    $_SESSION['user_id']    = $tenant_user_id[$j];
    $tenant_id              = $tenant_xero_id[$j];

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";

    //this process is ordered to match the layout of https://api-explorer.xero.com/
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Items");
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

    $number_of_items = count($response['Items']);

    $debug = 'off';
    if($debug == 'on'){
        echo "<BR>";
        echo "NUMBER OF ITEMS<BR>".$number_of_items;
        echo "<br>";

        echo "ALL ITEMS AVAILABLE";
        echo '<pre>' , var_dump($response) , '</pre>';
    //exit();
    }




        //now for all Items we want to see if they are already stored or not and then store.
    //if duplicated Item ID but the Item is changed then we want to adjust for that - unquestionably 
    //this just entails the first four entries in the array which are all the same honestly
    $Id             = $response['Id'];
    $Status         = $response['Status'];   
    $ProviderName   = $response['ProviderName'];
    $DateTimeUTC    = $response['DateTimeUTC'];

    //for all Items 
    for($i = 0; $i < $number_of_items; $i ++){

        //see if there are any duplicates already stored in the database
        $sql = " 
            SELECT  *
            FROM    api_xero_item_data
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
    if($number_of_results === 0){
   

        $sql = "INSERT INTO api_xero_item_data 
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
                $sql .= "
                        UnitPrice,
                        AccountCode,
                        TaxType,
                        ";
                
        $sql .= "
                Name,
                IsTrackedAsInventory,
                IsSold,
                IsPurchased              
                )

                VALUES
                (   
                    '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                    '".mysqli_real_escape_string($conn, $tenant_id)."',
                    '".mysqli_real_escape_string($conn, $response['Id'])."',
                    '".mysqli_real_escape_string($conn, $response['Status'])."',
                    '".mysqli_real_escape_string($conn, $response['ProviderName'])."',
                    '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."',
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['ItemID'])."', 
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['Code'])."',                     
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['Description'])."',                         
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['UpdatedDateUTC'])."',                    
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['UnitPrice'])."', 
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['AccountCode'])."', 
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['SalesDetails']['TaxType'])."',   
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['Name'])."', 
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsTrackedAsInventory'])."',                     
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsSold'])."',                         
                    '".mysqli_real_escape_string($conn, $response['Items'][$i]['IsPurchased'])."'                                  
                    )
        ";

 
     //  echo $sql."<br><br><br>";
     //  exit();

       mysqli_query($conn, $sql);
        }
    }
}


