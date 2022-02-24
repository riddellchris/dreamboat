<?php
if(!isset($_SESSION)){session_start();}


$InvoiceID = "1281a16c-1728-415e-8092-b40affb80c7c";


//this process is ordered to match the layout of https://api-explorer.xero.com/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Invoices/".$InvoiceID);
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

//$number_of_items = count($response['Items']);

$debug = 'on';
if($debug == 'on'){
    echo "<BR>";
  //  echo "NUMBER OF ITEMS<BR>".$number_of_items;
    echo "<br>";

    echo "ALL ITEMS AVAILABLE";
    echo '<pre>' , var_dump($response['Invoices'][0]['LineItems']) , '</pre>';
    echo '<pre>' , var_dump($response['Invoices'][0]['LineItems'][0]['Item']) , '</pre>';
    exit();
}