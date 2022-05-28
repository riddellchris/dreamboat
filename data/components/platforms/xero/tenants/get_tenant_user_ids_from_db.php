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


//this should really have a specific setting on it where i can make it stick
//so we might do a "get all update" behind the scenes but then not if just for one person
//if just for one person we just update for them directly
/*
for example
if $live site

*/
$sql = "SELECT * FROM api_xero_tenant_details 
        WHERE actively_disconnected = 'no'
        GROUP BY user_id";
$result_for_tenants = mysqli_query($conn, $sql);
//echo $sql;exit();


$i = 0;
$tenant_user_id_count = 0;
while($row_for_tenants = mysqli_fetch_array($result_for_tenants, MYSQLI_ASSOC)){
    //build array of tenants

    $tenant_user_id[$i] = $row_for_tenants['user_id'];
    $tenant_xero_id[$i] = $row_for_tenants['tenantId'];    //this does make the assumption that there is only one tenant - as per "check_tenants.php" this is a TODO item and needs adjustment in time for sure
    $i ++;
    $tenant_user_id_count ++;


    $debug = 'off';
    if($debug == 'on'){
    echo "user_id = ".$tenant_user_id[$i];
    echo "<br>";
    echo "tenant_id = ".$tenant_xero_id[$i];

    }

}

$debug = 'on';
if($debug == 'on'){
    echo '<pre>' , var_dump($tenant_user_id) , '</pre>';
}
