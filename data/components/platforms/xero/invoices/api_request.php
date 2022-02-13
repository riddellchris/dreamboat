<?php
if(!isset($_SESSION)){session_start();}

//this process is ordered to match the layout of https://api-explorer.xero.com/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Invoices");
//Parameters
$headers = array(  'Authorization: Bearer '.$access_token,
                   'Accept: application/json',
                   'Xero-tenant-id: '.$tenant_id       
                );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$content = curl_exec($ch);
curl_close($ch);
$response = json_decode($content, true);

$number_of_invoices = count($response['Invoices']);

$debug = 'off';
if($debug == 'on'){
    echo "NUMBER OF INVOICES<BR>".$number_of_invoices."<br>";
    echo "ALL INVOICES AVAILABLE";
    echo '<pre>' , var_dump($response) , '</pre>';
}