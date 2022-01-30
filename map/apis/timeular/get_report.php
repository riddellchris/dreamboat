<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/apis/timeular/authentication/sign_in.php";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.timeular.com/api/v3/report/data/2016-01-01T00:00:00.000/2021-01-31T23:59:59.999',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$access_token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

require $_SERVER['DOCUMENT_ROOT']."/map/apis/timeular/authentication/log_out.php";