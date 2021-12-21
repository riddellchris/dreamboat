<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM api_xero_tenant_details";
$result_for_tenants = mysqli_query($conn, $sql);

$i = 0;
$tenant_user_id_count = 0;
while($row_for_tenants = mysqli_fetch_array($result_for_tenants, MYSQLI_ASSOC)){
    //build array of tenants

    $tenant_user_id[$i] = $row_for_tenants['user_id'];
    $tenant_user_id_count ++;

}

//for each in that array
for($j = 0; $j < $tenant_user_id_count; $j++){


    //echo 'hi';
    
        $_SESSION['user_id'] = $tenant_user_id[$i];
    



        //then what we need to do is chop up report data for every month back to the start of the business

        //the only unknown is how far back it goes... so we need to work that out somehow, somehwere
        //I guess the easiest way to account for this its to simply log and store the first invoice for each tenant
        //this probably could mean and should mean that we store this as an additional table.

        //other than that it means that the first insights are then possible based on all of this data
        //we can then split up customer size data and keep working through from there.

        //this will need the reverse of this:
        //https://stackoverflow.com/questions/17315394/how-to-format-a-php-date-in-net-datacontractjsonserializer-format
        //to turn the invoice dates into something frankly useable but this isn't impossible at all
        //https://portalzine.de/dev/php/json-date-net-to-php-timestamp/ -------- is probably the answer honestly


//        https://api.xero.com/api.xro/2.0/Reports/ProfitAndLoss?fromDate=2020-02-28&toDate=2021-01-28



}