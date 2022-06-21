<?php
if(!isset($_SESSION)){session_start();}

//A TENANT IS PRETTY MUCH AN ORGANISATION
//A USER MAY THEREFORE HAVE MANY ORGANISATIONS

//TO DO:
//if a user has multiple tenants then we do need to do something about this 

/*
GET https://api.xero.com/connections
Authorization: "Bearer " + access_token
Content-Type: application/json
https://stackoverflow.com/questions/1225409/how-to-switch-from-post-to-get-in-php-curl
*/


$headers = array(  'Authorization: Bearer '.$return_token['access_token'],
                    'Content-Type: application/json'       );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/connections");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


$content = trim(curl_exec($ch));
curl_close($ch);
$response = json_decode($content, true);


$debug = 'on';
if($debug == 'on'){
    echo "TENANTS AVAILABLE FOR ACCESS";
    echo '<pre>' , var_dump($response) , '</pre>';
}


//typically followed by
//../check_tenants.php