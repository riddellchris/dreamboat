<?php
if(!isset($_SESSION)){session_start();}


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
      $sql .= " AND    SubTotal             = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['SubTotal'])."' ";
      $sql .= " AND    TotalTax             = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['TotalTax'])."' ";
      $sql .= " AND    Total                = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['Total'])."'";
    //  AND    UpdatedDateUTC       = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['UpdatedDateUTC'])."'

    $sql .= "
        AND    CurrencyCode         = '".mysqli_real_escape_string($conn, $response['Invoices'][$i]['CurrencyCode'])."'
    ";        
    //echo $sql;// exit();
    //echo "<br>";
    //mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);