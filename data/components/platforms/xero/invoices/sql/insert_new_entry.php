<?php
if(!isset($_SESSION)){session_start();}


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
    if(isset($response['Invoices'][$i]['Contact']['ContactID'])){    
        $sql .= "ContactID,"   ;     //Contact      >> in array format
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
                '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
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
                if(isset($response['Invoices'][$i]['Contact']['ContactID'])){                   
                 $sql .= "'".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Contact']['ContactID'])."',  ";
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


   //echo $sql."<br><br><br>";
   //             exit();
   mysqli_query($conn, $sql);