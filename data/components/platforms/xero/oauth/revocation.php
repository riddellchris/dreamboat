<?php
if(!isset($_SESSION)){session_start();}







require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/client_id.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/secret.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/redirect_uri.php";

$headers = array(   'Content-Type: application/x-www-form-urlencoded',
                    'Authorization: Basic '.base64_encode($client_id.":".$client_secret)        );

//this section is the entire POST and Return process
//taking headers and the redirect code from aboce
//the original example that this was taken from is:
    //https://stackoverflow.com/questions/18913345/curl-posting-with-header-application-x-www-form-urlencoded
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://identity.xero.com/connect/revocation");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=6e8dfc75dcba60be171f577fd5e851cfd1d4a59f63b916a415754011c754eaa6");//this needs to NOT have whitespace in it
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
$info = curl_getinfo($ch);
$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);