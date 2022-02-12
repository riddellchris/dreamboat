<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

for($j = 0; $j < $tenant_user_id_count; $j++){

    $sql = "SELECT * FROM api_xero_data_invoice 
            WHERE user_id = '".mysqli_real_escape_string($conn, $tenant_user_id[$j])."'
            ORDER BY UpdatedDateUTC ASC
            LIMIT 1";
    //echo $sql;exit();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $epoch_date = substr($row['UpdatedDateUTC'], 6, -10);

    $first_invoice_date = date('d/m/y H:i:s', $epoch_date);
//    echo $first_invoice_date;



    //therefore first full month
    $first_invoice['year_of']   =   date('y', $epoch_date);    
    $first_invoice['month_of']  =   date('m', $epoch_date);
    $first_invoice['day_of']    =   date('d', $epoch_date);

    if($first_invoice['day_of'] != 1){  
        if($first_invoice['month_of'] != 12){ 
            $first_full_month_starts['month'] = $first_invoice['month_of'] + 1;
            $first_full_month_starts['year'] = $first_invoice['year_of'];
        }
        else{
            $first_full_month_starts['month'] = 1;
            $first_full_month_starts['year'] = $first_invoice['year_of'] + 1;
        }
    }
    else{   
            $first_full_month_starts['month'] = $first_invoice['month_of'];
            $first_full_month_starts['year'] = $first_invoice['year_of'];
    }                     

    if($first_full_month_starts['month'] < 10){$first_full_month_starts['month'] = '0'.$first_full_month_starts['month'];}
    $first_full_month_starts['year'] = '20'.$first_full_month_starts['year'];

    //first check if that tenantID is already there
    $sql = "SELECT * FROM api_xero_invoice_first_invoice_date_for_each_tenant
            WHERE tenant_id = '".$row['TenantId']."'";
     //      echo $sql;exit();
    $result = mysqli_query($conn, $sql);
    $number_of_rows = mysqli_num_rows($result);

    if($number_of_rows == 0){

        $sql = "INSERT INTO api_xero_invoice_first_invoice_date_for_each_tenant
                (tenant_id, user_id, related_invoice_id, UpdatedDateUTC, converted_date_time, first_full_month, first_full_month_in_year)
                VALUES ('".$row['TenantId']."',
                        '".$tenant_user_id[$j]."',
                        '".$row['InvoiceID']."',
                        '".$row['UpdatedDateUTC']."',
                        '".$first_invoice_date."',
                        '".$first_full_month_starts['month']."',
                        '".$first_full_month_starts['year']."'                                        
                        )";
         //           echo "<br>".$sql;
        mysqli_query($conn, $sql);
    }

}