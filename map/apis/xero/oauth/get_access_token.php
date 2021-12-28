<?php
if(!isset($_SESSION)){session_start();}

//TO DO: 
//Build this optimisation such that we aren't calling for a new token every time.
//if the current access token is more than 30 minutes old then you should get a new access token.

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM api_xero_refresh_tokens
        WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'

        ORDER BY entry_id
        DESC LIMIT 1";

//echo $sql;exit();

$result = mysqli_query($conn, $sql);     

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$refresh_token = $row['refresh_token'];


$debug = 'off';
if($debug == 'on'){
    echo $row['entry_id']."_".$refresh_token;
    exit();
}

    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/client_id.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/secret.php";

    //in our case as of the end of 2021 though we are going to get a new token every time we need it just because frankly
    //I can add in the rest later
    $headers = array(   'Authorization: Basic '.base64_encode($client_id.":".$client_secret),       
                        'Content-Type: application/x-www-form-urlencoded' );

    //this section is the entire POST and Return process
    //taking headers and the redirect code from aboce
    //the original example that this was taken from is:
    //https://stackoverflow.com/questions/18913345/curl-posting-with-header-application-x-www-form-urlencoded
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://identity.xero.com/connect/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=refresh_token&refresh_token=".$refresh_token);//this needs to NOT have whitespace in it
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close ($ch);


    $return_token = json_decode($server_output, true);


    $debug = 'on';
    if($debug == 'on'){
    echo "RETURN KEY";
    echo '<pre>' , var_dump($return_token) , '</pre>';
    }

    //this one needs to store again into return keys

    require $_SERVER['DOCUMENT_ROOT']."/map/apis/xero/oauth/input_return_token.php";

    $access_token = $return_token['access_token'];

