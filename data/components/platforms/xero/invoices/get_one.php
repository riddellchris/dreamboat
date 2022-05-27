<?php
if(!isset($_SESSION)){session_start();}

if(!isset($getting_all)){
    //this works because at no other time that when the user is logged in will be be needing this.
    //so all we need then is to make that work.
    if(isset($_SESSION['viewing_client_id'])){$user_id_for_request = $_SESSION['viewing_client_id'];}

    //then we need to get out the tenant it for this user id because this is what happens naturally within the get_all processes
    //for this i think I can use
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";
}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/api_request.php";

//now for all invoices we want to see if they are already stored or not and then store.
//if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 
//this just entails the first four entries in the array which are all the same honestly
$Id             = $response['Id'];
$Status         = $response['Status'];   
$ProviderName   = $response['ProviderName'];
$DateTimeUTC    = $response['DateTimeUTC'];

//for all invoices 
for($i = 0; $i < $number_of_invoices; $i ++){
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/sql/check_if_matching_entry_exists.php";

    //echo "<br>";  
    if($number_of_results === 0){
        require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/sql/insert_new_entry.php";


    }
}