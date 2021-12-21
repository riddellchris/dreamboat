<?php
if(!isset($_SESSION)){session_start();}


/*
GET https://api.xero.com/api.xro/2.0/Invoices
Authorization: "Bearer " + access_token
Accept: application/json
Xero-tenant-id: 45e4708e-d862-4111-ab3a-dd8cd03913e1
*/

require $_SERVER['DOCUMENT_ROOT']."/map/apis/xero/get_access_token.php";

//$access_token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjFDQUY4RTY2NzcyRDZEQzAyOEQ2NzI2RkQwMjYxNTgxNTcwRUZDMTkiLCJ0eXAiOiJKV1QiLCJ4NXQiOiJISy1PWm5jdGJjQW8xbkp2MENZVmdWY09fQmsifQ.eyJuYmYiOjE2Mzk4OTk4ODEsImV4cCI6MTYzOTkwMTY4MSwiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS54ZXJvLmNvbSIsImF1ZCI6Imh0dHBzOi8vaWRlbnRpdHkueGVyby5jb20vcmVzb3VyY2VzIiwiY2xpZW50X2lkIjoiMDFGM0Y0RTMzQjQ5NDI5RUJFQUM1QkU1MkNFNEM4QTYiLCJzdWIiOiIzYmJiMTJiYjNlNDM1ZDMwYjNmMTc1N2I0ZmJlNWMyOCIsImF1dGhfdGltZSI6MTYzOTg5ODg4OCwieGVyb191c2VyaWQiOiJjNzc5ZjNmNS1iM2QzLTRiNzEtOWZkMy1hMTg3MTc2MGMxY2YiLCJnbG9iYWxfc2Vzc2lvbl9pZCI6Ijg2NDFhNmIzMTZhMzQ0ZmQ4NGMzZjczNGEzMTI2NjRjIiwianRpIjoiZjM5MDk3YWY5NjE1ODM5ZWJmYzJkZTUxOTE1ZWU5MDAiLCJhdXRoZW50aWNhdGlvbl9ldmVudF9pZCI6IjVlZjg0OTFiLTY5M2EtNGMxNy1iMTlhLWRkMTM2ZGNmMmIwZiIsInNjb3BlIjpbImVtYWlsIiwicHJvZmlsZSIsIm9wZW5pZCIsImFjY291bnRpbmcucmVwb3J0cy5yZWFkIiwiYWNjb3VudGluZy5zZXR0aW5ncy5yZWFkIiwiYWNjb3VudGluZy50cmFuc2FjdGlvbnMucmVhZCIsImFzc2V0cy5yZWFkIiwiYWNjb3VudGluZy5jb250YWN0cy5yZWFkIiwib2ZmbGluZV9hY2Nlc3MiXX0.oJYEiV3qncHIryWXWp6mcJMM1ZiI9Skcjakz_WUYSmA34v1YzynB_6eBvcj189km7yCJkhRfpw4OlO8KIAfKiQln1iF1i4GFs7Pycqiukvozxe3MuRR563zdIu1iKf7MUc2nXnsx4vtn2v-OOYmOjjKqFiwCUwqvpDn6p1cmAZx3G23PxS6GhPWX2ly2Ca7r01AnCe1YU2HiSa3EniBb86cCHxJhQ01KhdhJXnsb6o9NsMQCrt2wQ1wNGX_auL_yvL_oF3CuKE_Pi7fyUzbudawS0B8OgYcIbklnWpEQwRTtWPlxpqlVq1LZXFzQAagTkYoeYWfK_Z0-6tCX6enY3g';


//here we need to get out the Tenant ID for the viewing client ID too don't we
$sql = "SELECT * FROM api_xero_tenant_details 
        WHERE user_id = '".$_SESSION['user_id']."'
        ORDER BY entry_id DESC LIMIT 1"; //this does make the assumption that there is only one tenant - as per "check_tenants.php" this is a TODO item and needs adjustment in time for sure
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$tenant_id = $row['tenantId'];

$headers = array(  'Authorization: Bearer '.$access_token,
                    'Accept: application/json',
                    'Xero-tenant-id: '.$tenant_id       );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/api.xro/2.0/Invoices");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
//With a POST you pass the data via the CURLOPT_POSTFIELDS option instead of passing it in the CURLOPT__URL.
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=".$redirect_uri);//this needs to NOT have whitespace in it
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// receive server response ...
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$content = curl_exec($ch);
curl_close($ch);
/*
print $content;
*/

$response = json_decode($content, true);




$debug = 'on';
if($debug == 'on'){
    echo "NUMBER OF INVOICES<BR>S";
    echo $number_of_invoices = count($response['Invoices']);
    echo "<br>";

    echo "ALL INVOICES AVAILABLE";
    echo '<pre>' , var_dump($response) , '</pre>';
}
$number_of_invoices = count($response['Invoices']);

//now for all invoices we want to see if they are already stored or not and then store.
//if duplicated invoice ID but the invoice is changed then we want to adjust for that - unquestionably 

for($i = 0; $i < $number_of_invoices; $i ++){
    $sql = "INSERT INTO ";





}

