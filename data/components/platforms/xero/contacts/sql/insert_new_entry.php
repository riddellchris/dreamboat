<?php
if(!isset($_SESSION)){session_start();}


    $sql = "INSERT INTO api_xero_data_contacts 
            (
            user_id,    
            TenantId,
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
                '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
                '".mysqli_real_escape_string($conn, $tenant_id)."',                
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


   //echo $sql."<br><br><br>";exit();

   mysqli_query($conn, $sql);