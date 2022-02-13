<?php
if(!isset($_SESSION)){session_start();}



require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/contacts/api_request.php";

//now for all contacts we want to see if they are already stored or not and then store.
//if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 
//this just entails the first four entries in the array which are all the same honestly
$Id             = $response['Id'];
$Status         = $response['Status'];   
$ProviderName   = $response['ProviderName'];
$DateTimeUTC    = $response['DateTimeUTC'];

for($i = 0; $i < $number_of_contacts; $i ++){



    //first things first just get out what we can that isn't an array
    //then build up and out from there honestly


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
//echo "<br>";
if($number_of_results === 0){







    $sql = "INSERT INTO api_xero_data_contacts 
            (
            user_id,    
            Id,
            Status,
            ProviderName,
            DateTimeUTC,
            ContactID,
            ContactStatus,
            Name, ";
    if(isset($response['Contacts'][$i]['FirstName'])){ 
        $sql .= " FirstName, ";
    }
    if(isset($response['Contacts'][$i]['LastName'])){         
        $sql .= " LastName, ";
    }
    $sql .= "
            EmailAddress,
            BankAccountDetails,";

    if(isset($response['Contacts'][$i]['AccountsPayableTaxType'])){                   
        $sql .= " AccountsPayableTaxType,";
    }
            //Addresses     >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
            //Phones        >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
            //Prepayments   >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
            //Overpayments  >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
    $sql .= "
            UpdatedDateUTC,";
            //ContactGroups >> in array format - ALSO NOT CRITICAL TODAY 21.12.21
    $sql .= "
            IsSupplier,
            IsCustomer,";
    if(isset($response['Contacts'][$i]['DefaultCurrency'])){ 
        $sql .= "    DefaultCurrency,";
    }
            //ContactPersons>> in array format - ALSO NOT CRITICAL TODAY 21.12.21
    $sql .= "
            HasAttachments,
            HasValidationErrors            
            )

            VALUES
            (   
                '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                '".mysqli_real_escape_string($conn, $response['Id'])."',
                '".mysqli_real_escape_string($conn, $response['Status'])."',
                '".mysqli_real_escape_string($conn, $response['ProviderName'])."',
                '".mysqli_real_escape_string($conn, $response['DateTimeUTC'])."',
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['ContactID'])."',
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['ContactStatus'])."', 
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['Name'])."',";  
        if(isset($response['Contacts'][$i]['FirstName'])){ 
            $sql .= "   '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['FirstName'])."',  ";
        }
        if(isset($response['Contacts'][$i]['LastName'])){                        
            $sql .= "   '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['LastName'])."',";
        }
    
    $sql .= "
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['EmailAddress'])."',   
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['BankAccountDetails'])."',   ";
        if(isset($response['Contacts'][$i]['AccountsPayableTaxType'])){    
            $sql .= "       '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['AccountsPayableTaxType'])."',  ";
        }                     
        $sql .= "                    
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['UpdatedDateUTC'])."',                       
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['IsSupplier'])."',   
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['IsCustomer'])."',   
                ";

        if(isset($response['Contacts'][$i]['DefaultCurrency'])){  
            $sql .= "       '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['DefaultCurrency'])."', ";
        }
        
        $sql .= "
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['HasAttachments'])."',                     
                '".mysqli_real_escape_string($conn, $response['Contacts'][$i]['HasValidationErrors'])."'                    
                )
    ";


   //echo $sql."<br><br><br>";

   mysqli_query($conn, $sql);
    }
}