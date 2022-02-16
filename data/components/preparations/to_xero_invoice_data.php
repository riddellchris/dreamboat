<?php

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


//$sql = "ALTER TABLE api_xero_data_invoice ADD COLUMN IF NOT EXISTS UpdatedDateUTC_cleaned INT(20)";

/*

$sql = "IF NOT EXISTS( SELECT NULL
                        FROM INFORMATION_SCHEMA.COLUMNS
                        WHERE table_name = 'api_xero_data_invoice'
                        AND table_schema = 'test'
                        AND column_name = 'UpdatedDateUTC_cleaned')  THEN

                        ALTER TABLE `api_xero_data_invoice` ADD `UpdatedDateUTC_cleaned` int(1) NOT NULL default '0';

                        END IF;";


echo $sql;
exit();
mysqli_query($conn, $sql);
exit();*/


$sql = "SELECT * FROM api_xero_data_invoice";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


   // echo "<BR>Original: ".$row['UpdatedDateUTC']."--";
   // echo "New: ".substr($row['UpdatedDateUTC'], 6, -7);

    $sql = "UPDATE api_xero_data_invoice 
            SET UpdatedDateUTC_cleaned = '".substr($row['UpdatedDateUTC'], 6, -7)."'
            WHERE invoice_id = '".$row['invoice_id']."'";
   // echo $sql;exit();
    mysqli_query($conn, $sql);
}
