<?php
if(!isset($_SESSION)){session_start();}

/*
The outputs are an array of:
$tenant_user_id  AND
$tenant_user_id_count
*/


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

// this is to control some etting
$sql = "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM api_xero_tenant_details GROUP BY user_id";
$result_for_tenants = mysqli_query($conn, $sql);

$i = 0;
$tenant_user_id_count = 0;
while($row_for_tenants = mysqli_fetch_array($result_for_tenants, MYSQLI_ASSOC)){
    //build array of tenants

    $tenant_user_id[$i] = $row_for_tenants['user_id'];
    $tenant_xero_id[$i] = $row_for_tenants['tenantId'];    //this does make the assumption that there is only one tenant - as per "check_tenants.php" this is a TODO item and needs adjustment in time for sure
    $tenant_user_id_count ++;

}
