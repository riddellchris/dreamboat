<?php
if(!isset($_SESSION)){session_start();}

   $sql = " 
    SELECT *
        FROM api_xero_data_contacts
        WHERE   user_id         = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

        //AND     Id              = '".mysqli_real_escape_string($conn, $response['Id'])."'
        $sql.= "
        
        AND     Status          = '".mysqli_real_escape_string($conn, $response['Status'])."'
        AND     ProviderName    = '".mysqli_real_escape_string($conn, $response['ProviderName'])."'";
      //  AND     DateTimeUTC     = '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."'

    $sql .=    "
        AND     ContactID       = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['ContactID'])."'
        AND     ContactStatus   = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['ContactStatus'])."'
        AND     Name            = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['Name'])."'";
        if(isset($response['Contacts'][$i]['FirstName'])){ 
            $sql .=    "
            AND     FirstName   = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['FirstName'])."'                
            ";
        }
        if(isset($response['Contacts'][$i]['LastName'])){ 
            $sql .=    "
            AND     LastName   = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['LastName'])."'                
            ";
        }
        $sql .=    "
        AND     EmailAddress            = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['EmailAddress'])."'
        AND     BankAccountDetails       = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['BankAccountDetails'])."'";
        if(isset($response['Contacts'][$i]['AccountsPayableTaxType'])){ 
            $sql .=    "
            AND     AccountsPayableTaxType   = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['AccountsPayableTaxType'])."'                
            ";
        }
        $sql .=    "
        AND     UpdatedDateUTC      = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['UpdatedDateUTC'])."'
        AND     IsSupplier          = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['IsSupplier'])."'
        AND     IsCustomer          = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['IsCustomer'])."'            
        ";
        if(isset($response['Contacts'][$i]['DefaultCurrency'])){ 
            $sql .=    "
            AND     DefaultCurrency   = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['DefaultCurrency'])."'                
            ";
        }
        $sql .=    "
        AND     HasAttachments      = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['HasAttachments'])."'
        AND     HasValidationErrors = '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['HasValidationErrors'])."'           
        ";           
        
  //  echo $sql;// exit();
  //  echo "<br>";
// mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
  $number_of_results = mysqli_num_rows($result);