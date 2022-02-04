<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/map/apis/timeular/secret_and_key.php";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.timeular.com/api/v3/developer/sign-in',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "apiKey"    : "'.$client_key.'",
  "apiSecret" : "'.$client_secret.'"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

$access_token =  substr($response, 10, -2);

echo $access_token;