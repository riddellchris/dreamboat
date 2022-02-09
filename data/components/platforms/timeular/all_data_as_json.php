<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/timeular/authentication/sign_in.php";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.timeular.com/api/v3/report/data/2016-01-01T00:00:00.000/2022-12-31T23:59:59.999',
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

$content = curl_exec($curl);

curl_close($curl);

$response = json_decode($content, true);


//echo $response;
//$response = json_encode($response, JSON_PRETTY_PRINT);


//echo '<pre>' , var_dump($response) , '</pre>';

//so now all we need to is split this out to find all the different tags/labels and go from there
//this 


//to see what matters here we just need to go through each entry,
//see what it has as a label and then store the time that it has been used for.
//this should make that super easy.
//sweet.

//echo count($response['timeEntries']);