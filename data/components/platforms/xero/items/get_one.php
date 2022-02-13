<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/api_request.php";

//now for all Items we want to see if they are already stored or not and then store.
//if duplicated Item ID but the Item is changed then we want to adjust for that - unquestionably 
//this just entails the first four entries in the array which are all the same honestly
$Id             = $response['Id'];
$Status         = $response['Status'];   
$ProviderName   = $response['ProviderName'];
$DateTimeUTC    = $response['DateTimeUTC'];

//for all Items 
for($i = 0; $i < $number_of_items; $i ++){

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/sql/check_if_matching_entry_exists.php";
    if($number_of_results === 0){
        require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/get_one.php";
    }
}