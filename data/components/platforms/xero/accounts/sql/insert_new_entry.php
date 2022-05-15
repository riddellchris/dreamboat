<?php
if(!isset($_SESSION)){session_start();}

$sql = "INSERT INTO api_xero_data_accounts 
        (
        user_id,    
        TenantID,
        Id,
        Status,
        ProviderName,
        DateTimeUTC,
        AccountID, ";
    if(isset($response['Accounts'][$i]['Code'])){
        $sql .= " Code, ";
    }
    
    $sql .= "
        Name,
        AccountStatus,
        Type,
        TaxType,";

    if(isset($response['Accounts'][$i]['Description'])){        
        $sql .= "  Description,    ";   
    }   
    $sql .= "
        Class,
        EnablePaymentsToAccount,
        ShowInExpenseClaims,";
    
    if(isset($response['Accounts'][$i]['BankAccountNumber'])){    
     $sql .= "   BankAccountNumber,";
    }

    $sql .="
        BankAccountType,";

    if(isset($response['Accounts'][$i]['CurrencyCode'])){    
        $sql .= "   CurrencyCode,";
    }
        
    $sql .= "
        ReportingCode,
        ReportingCodeName,
        HasAttachments,
        UpdatedDateUTC,
        AddToWatchlist              
        )

        VALUES
        (   
            '".mysqli_real_escape_string($conn, $user_id_for_request)."',
            '".mysqli_real_escape_string($conn, $tenant_id)."',
            '".mysqli_real_escape_string($conn, $response['Id'])."',
            '".mysqli_real_escape_string($conn, $response['Status'])."',
            '".mysqli_real_escape_string($conn, $response['ProviderName'])."',
            '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."',
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['AccountID'])."', ";

        if(isset($response['Accounts'][$i]['Code'])){
            $sql .= "'".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Code'])."',";  
        }

        $sql .="
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Name'])."',                     
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Status'])."',                         
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Type'])."',  
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['TaxType'])."', ";

        if(isset($response['Accounts'][$i]['Description'])){
            $sql .= "'".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Description'])."',";
        }
            
        $sql .="
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['Class'])."',                     
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['EnablePaymentsToAccount'])."',                         
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ShowInExpenseClaims'])."', ";

        if(isset($response['Accounts'][$i]['BankAccountNumber'])){
           $sql.= " '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['BankAccountNumber'])."',   ";
        }
            
        $sql .= "
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['BankAccountType'])."', ";

        if(isset($response['Accounts'][$i]['BankAccountNumber'])){           
            $sql .= "'".mysqli_real_escape_string($conn, $response['Accounts'][$i]['BankAccountNumber'])."',";
        }

        $sql .= "
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ReportingCode'])."',
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['ReportingCodeName'])."',
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['HasAttachments'])."',
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['UpdatedDateUTC'])."',
            '".mysqli_real_escape_string($conn, $response['Accounts'][$i]['AddToWatchlist'])."'
            )
";


 echo $sql."<br><br><br>"; //exit();

mysqli_query($conn, $sql);