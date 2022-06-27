<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM api_xero_tenant_details";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

//echo 'hi';

    $_SESSION['user_id'] = $row['user_id'];

    /*
    GET https://api.xero.com/api.xro/2.0/Invoices
    Authorization: "Bearer " + access_token
    Accept: application/json
    Xero-tenant-id: 45e4708e-d862-4111-ab3a-dd8cd03913e1
    
    $access_token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjFDQUY4RTY2NzcyRDZEQzAyOEQ2NzI2RkQwMjYxNTgxNTcwRUZDMTkiLCJ0eXAiOiJKV1QiLCJ4NXQiOiJISy1PWm5jdGJjQW8xbkp2MENZVmdWY09fQmsifQ.eyJuYmYiOjE2Mzk4OTk4ODEsImV4cCI6MTYzOTkwMTY4MSwiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS54ZXJvLmNvbSIsImF1ZCI6Imh0dHBzOi8vaWRlbnRpdHkueGVyby5jb20vcmVzb3VyY2VzIiwiY2xpZW50X2lkIjoiMDFGM0Y0RTMzQjQ5NDI5RUJFQUM1QkU1MkNFNEM4QTYiLCJzdWIiOiIzYmJiMTJiYjNlNDM1ZDMwYjNmMTc1N2I0ZmJlNWMyOCIsImF1dGhfdGltZSI6MTYzOTg5ODg4OCwieGVyb191c2VyaWQiOiJjNzc5ZjNmNS1iM2QzLTRiNzEtOWZkMy1hMTg3MTc2MGMxY2YiLCJnbG9iYWxfc2Vzc2lvbl9pZCI6Ijg2NDFhNmIzMTZhMzQ0ZmQ4NGMzZjczNGEzMTI2NjRjIiwianRpIjoiZjM5MDk3YWY5NjE1ODM5ZWJmYzJkZTUxOTE1ZWU5MDAiLCJhdXRoZW50aWNhdGlvbl9ldmVudF9pZCI6IjVlZjg0OTFiLTY5M2EtNGMxNy1iMTlhLWRkMTM2ZGNmMmIwZiIsInNjb3BlIjpbImVtYWlsIiwicHJvZmlsZSIsIm9wZW5pZCIsImFjY291bnRpbmcucmVwb3J0cy5yZWFkIiwiYWNjb3VudGluZy5zZXR0aW5ncy5yZWFkIiwiYWNjb3VudGluZy50cmFuc2FjdGlvbnMucmVhZCIsImFzc2V0cy5yZWFkIiwiYWNjb3VudGluZy5jb250YWN0cy5yZWFkIiwib2ZmbGluZV9hY2Nlc3MiXX0.oJYEiV3qncHIryWXWp6mcJMM1ZiI9Skcjakz_WUYSmA34v1YzynB_6eBvcj189km7yCJkhRfpw4OlO8KIAfKiQln1iF1i4GFs7Pycqiukvozxe3MuRR563zdIu1iKf7MUc2nXnsx4vtn2v-OOYmOjjKqFiwCUwqvpDn6p1cmAZx3G23PxS6GhPWX2ly2Ca7r01AnCe1YU2HiSa3EniBb86cCHxJhQ01KhdhJXnsb6o9NsMQCrt2wQ1wNGX_auL_yvL_oF3CuKE_Pi7fyUzbudawS0B8OgYcIbklnWpEQwRTtWPlxpqlVq1LZXFzQAagTkYoeYWfK_Z0-6tCX6enY3g';
    */


    //here we need to get out the Tenant ID for the viewing client ID too don't we
    $sql = "SELECT * FROM api_xero_tenant_details 
            WHERE user_id = '".$_SESSION['user_id']."'
            ORDER BY entry_id DESC LIMIT 1"; //this does make the assumption that there is only one tenant - as per "check_tenants.php" this is a TODO item and needs adjustment in time for sure

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $tenant_id = $row['tenantId'];


    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/access_token/get.php


    $headers = array(  'Authorization: Bearer '.$access_token,
                        'Accept: application/json',
                        'Xero-tenant-id: '.$tenant_id       );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Invoices");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    //With a POST you pass the data via the CURLOPT_POSTFIELDS option instead of passing it in the CURLOPT__URL.
    //curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=".$redirect_uri);//this needs to NOT have whitespace in it
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // receive server response ...
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $content = curl_exec($ch);
    curl_close($ch);
    /*
    print $content;
    */

    $response = json_decode($content, true);




    $debug = 'off';
    if($debug == 'on'){
        echo "NUMBER OF INVOICES<BR>";
        echo $number_of_invoices = count($response['Invoices']);
        echo "<br>";

        echo "ALL INVOICES AVAILABLE";
        echo '<pre>' , var_dump($response) , '</pre>';
    }
    $number_of_invoices = count($response['Invoices']);

    //now for all invoices we want to see if they are already stored or not and then store.
    //if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 

    //this just entails the first four entries in the array which are all the same honestly
    $Id             = $response['Id'];
    $Status         = $response['Status'];   
    $ProviderName   = $response['ProviderName'];
    $DateTimeUTC    = $response['DateTimeUTC'];

    for($i = 0; $i < $number_of_invoices; $i ++){

        //first things first just get out what we can that isn't an array
        //then build up and out from there honestly








        $sql = "INSERT INTO api_xero_data_invoice 
                (
                user_id,    
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

                //Payments      >> in array format
                //CreditNotes   >> in array format
                //Prepayments   >> in array format
                //Overpayments  >> in array format
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
                //Contact      >> in array format
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
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['HasErrors'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Status'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['LineAmountTypes'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['SubTotal'])."',                       
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['TotalTax'])."',                       
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Total'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['UpdatedDateUTC'])."',   
                    '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyCode'])."'                                    
                    )
        ";

       // echo $sql."<br>";

       mysqli_query($conn, $sql);





        //then break out any arrays that may exist and work from there 



        //then from there we should be able to start working some things out
        //even just in terms of invoice sizing

        //perhaps we also need to pull out more information about / from other user data
        //i don't exactly know
        



    }
}

