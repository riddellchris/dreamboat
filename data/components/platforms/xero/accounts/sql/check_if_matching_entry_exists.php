<?php
if(!isset($_SESSION)){session_start();}

//see if there are any duplicates already stored in the database
$sql = " 
    SELECT  *
    FROM    api_xero_data_accounts
    WHERE   user_id                 = '".mysqli_real_escape_string($conn, $user_id_for_request)."' 
    AND     Status                  = '".mysqli_real_escape_string($conn, $response['Status'])."'
    AND     ProviderName            = '".mysqli_real_escape_string($conn, $response['ProviderName'])."'
    AND     AccountID               = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['AccountID'])."'";


    /*
    if(isset($response['Accounts'][$i]['Code'])){
        $sql .= " AND     Code                    = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Code'])."'";
    }
    $sql .= "
    AND     Name                    = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Name'])."'
    AND     AccountStatus           = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Status'])."'
    AND     Type                    = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Type'])."'
    AND     TaxType                 = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['TaxType'])."'";

    if(isset($response['Accounts'][$i]['Description'])){
        $sql .= "
        AND     Description             = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Description'])."'
        ";
    }

    $sql .= " 
    AND     Class                           = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Class'])."'
    AND     EnablePaymentsToAccount         = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['EnablePaymentsToAccount'])."'
    AND     ShowInExpenseClaims             = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ShowInExpenseClaims'])."'";

    if(isset($response['Accounts'][$i]['BankAccountNumber'])){
        $sql .= "AND     BankAccountNumber               = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['BankAccountNumber'])."'";
    }

    $sql .= "
    AND     BankAccountType                 = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['BankAccountType'])."'";

    if(isset($response['Accounts'][$i]['BankAccountNumber'])){   
        $sql .= "AND     CurrencyCode                    = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['CurrencyCode'])."'";
    }


    if(isset($response['Accounts'][$i]['BankAccountNumber'])){  
    $sql .= "
    AND     ReportingCode                   = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ReportingCode'])."'";
    }


    $sql .= "
    AND     ReportingCodeName               = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ReportingCodeName'])."'
    AND     HasAttachments                  = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['HasAttachments'])."'
    AND     UpdatedDateUTC                  = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['UpdatedDateUTC'])."'
    AND     AddToWatchlist                  = '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['AddToWatchlist'])."'";
*/


        
//      echo $sql; exit();
//echo "<br>";
//mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);
//echo "<br>";