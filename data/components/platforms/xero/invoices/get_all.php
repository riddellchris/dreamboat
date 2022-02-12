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
    curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Invoices");
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

    $number_of_invoices = count($response['Invoices']);

    $debug = 'off';
    if($debug == 'on'){
        echo "NUMBER OF INVOICES<BR>".$number_of_invoices;
        echo "<br>";

        echo "ALL INVOICES AVAILABLE";
        echo '<pre>' , var_dump($response) , '</pre>';
    }




        //now for all invoices we want to see if they are already stored or not and then store.
    //if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 
    //this just entails the first four entries in the array which are all the same honestly
    $Id             = $response['Id'];
    $Status         = $response['Status'];   
    $ProviderName   = $response['ProviderName'];
    $DateTimeUTC    = $response['DateTimeUTC'];

    //for all invoices 
    for($i = 0; $i < $number_of_invoices; $i ++){

        //see if there are any duplicates already stored in the database
        $sql = " 
            SELECT  *
            FROM    api_xero_data_invoice
            WHERE   user_id         = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

            //AND   Id              = '".mysqli_real_escape_string($conn, $response['Id'])."'
        $sql.= "    
            AND     Status          = '".mysqli_real_escape_string($conn, $response['Status'])."'
            AND     ProviderName    = '".mysqli_real_escape_string($conn, $response['ProviderName'])."'";
            //AND   DateTimeUTC     = '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."'
        $sql .=    "
            AND     Type            = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Type'])."'
            AND     InvoiceID       = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['InvoiceID'])."'";

        if(isset($response['Invoices'][$i]['InvoiceNumber'])){
        $sql .= "
            AND     InvoiceNumber   = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['InvoiceNumber'])."'";
        }
        
        if($response['Invoices'][$i]['Type'] == 'ACCREC'&&
        isset($response['Invoices'][$i]['Reference'])){
        $sql .= "
            AND     Reference       = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Reference'])."' ";             
        }    

        //Payments      >> in array format
        //CreditNotes   >> in array format
        //Prepayments   >> in array format
        //Overpayments  >> in array format
        $sql .= "            
            AND     AmountDue       = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountDue'])."'
            AND     AmountPaid      = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountPaid'])."'
            AND     AmountCredited  = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountCredited'])."'";
        if($response['Invoices'][$i]['Type'] == 'ACCREC'){
        $sql .= " 
            AND     CurrencyRate    = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyRate'])."'";
        }
        $sql .= "        
            AND    IsDiscounted     = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['IsDiscounted'])."'
            AND    HasAttachments   = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['HasAttachments'])."'
            AND    HasErrors        = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['HasErrors'])."'";
        //Contact      >> in array format
        $sql .= "
            AND    InvoiceStatus        = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Status'])."'"; //this is just because Status is used far earlier on (see row 2)
        $sql .= "
            AND    LineAmountTypes      = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['LineAmountTypes'])."'";
        //LineItems       >> in array format
          $sql .= "        AND    SubTotal             = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['SubTotal'])."' ";
          $sql .= "        AND    TotalTax             = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['TotalTax'])."' ";
          $sql .= "       AND    Total                = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Total'])."'";
        //  AND    UpdatedDateUTC       = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['UpdatedDateUTC'])."'

        $sql .= "
            AND    CurrencyCode         = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyCode'])."'
        ";        
        //echo $sql;// exit();
        //echo "<br>";
        //mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    $number_of_results = mysqli_num_rows($result);
    //echo "<br>";
    if($number_of_results === 0){
   

        $sql = "INSERT INTO api_xero_data_invoice 
                (
                user_id,    
                TenantID,
                Id,
                Status,
                ProviderName,
                DateTimeUTC,
                Type,
                InvoiceID,";
                
                if(isset($response['Invoices'][$i]['InvoiceNumber'])){
                    $sql .= "InvoiceNumber, ";
                }
                
                if($response['Invoices'][$i]['Type'] == 'ACCREC'&&
                isset($response['Invoices'][$i]['Reference'])){
                    $sql .= "                Reference,            ";             
                }    

                //Payments      >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
                //CreditNotes   >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
                //Prepayments   >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
                //Overpayments  >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
        $sql .= "
                AmountDue,
                AmountPaid,
                AmountCredited,";
                if($response['Invoices'][$i]['Type'] == 'ACCREC'){
                    $sql .= " CurrencyRate, ";
                }

        $sql .= "        
                IsDiscounted,
                HasAttachments,
                HasErrors,";                    
        if(isset($response['Invoices'][$i]['Contact']['ContactId'])){    
            $sql .= "ContactId,"   ;     //Contact      >> in array format
        }
                $sql .= "
                InvoiceStatus,"; //this is just because Status is used far earlier on (see row 2)
                $sql .= "
                LineAmountTypes,";
                //LineItems       >> in array format
                $sql .= "
                SubTotal,
                TotalTax,
                Total,
                UpdatedDateUTC,
                CurrencyCode               
                )

                VALUES
                (   
                    '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                    '".mysqli_real_escape_string($conn, $tenant_id)."',
                    '".mysqli_real_escape_string($conn, $response['Id'])."',
                    '".mysqli_real_escape_string($conn, $response['Status'])."',
                    '".mysqli_real_escape_string($conn, $response['ProviderName'])."',
                    '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."',
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Type'])."',
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['InvoiceID'])."', ";
                    if(isset($response['Invoices'][$i]['InvoiceNumber'])){
                        $sql .= "'".mysqli_real_escape_string($conn, $response['Invoices'][$i]['InvoiceNumber'])."',   ";
                    }



                    if( $response['Invoices'][$i]['Type'] == 'ACCREC' &&
                        isset($response['Invoices'][$i]['Reference'])
                    
                    
                    ){$sql .= "    
                        '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Reference'])."',       
                        ";
                    }              
                    

            $sql .="
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountDue'])."',                       
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountPaid'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['AmountCredited'])."',  ";
                    if($response['Invoices'][$i]['Type'] == 'ACCREC'){
                        $sql .= "
                            '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyRate'])."',  ";
                    } 
                    $sql .= "
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['IsDiscounted'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['HasAttachments'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['HasErrors'])."',";  
                    if(isset($response['Invoices'][$i]['Contact']['ContactId'])){                   
                     $sql .= "'".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Contact']['ContactId'])."',  ";
                    }
                    $sql .= "
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Status'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['LineAmountTypes'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['SubTotal'])."',                       
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['TotalTax'])."',                       
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Total'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['UpdatedDateUTC'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyCode'])."'                                    
                    )
        ";

 
      // echo $sql."<br><br><br>";

       mysqli_query($conn, $sql);
        }
    }
}


