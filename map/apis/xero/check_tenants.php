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
//With a POST you pass the data via the CURLOPT_POSTFIELDS option instead of passing it in the CURLOPT__URL.
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=".$redirect_uri);//this needs to NOT have whitespace in it
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// receive server response ...
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$content = trim(curl_exec($ch));
curl_close($ch);
/*
print $content;

for now 

*/

$response = json_decode($content, true);



$debug = 'off';
if($debug == 'on'){
    echo "TENANTS AVAILABLE FOR ACCESS";
    echo '<pre>' , var_dump($response) , '</pre>';
}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "INSERT INTO api_xero_tenant_details (  user_id,
                                                id,
                                                authEventId,
                                                tenantId,
                                                tenantType,
                                                tenantName,
                                                createdDateUtc,
                                                updatedDateUtc

                                            )
VALUES (
            '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
            '".mysqli_real_escape_string($conn, $response[0]['id'])."',
            '".mysqli_real_escape_string($conn, $response[0]['authEventId'])."',                   
            '".mysqli_real_escape_string($conn, $response[0]['tenantId'])."',
            '".mysqli_real_escape_string($conn, $response[0]['tenantType'])."',    
            '".mysqli_real_escape_string($conn, $response[0]['tenantName'])."',
            '".mysqli_real_escape_string($conn, $response[0]['createdDateUtc'])."',                                                
            '".mysqli_real_escape_string($conn, $response[0]['updatedDateUtc'])."'                                              
    )";

//echo $sql;
//exit();    
$result = mysqli_query($conn, $sql);