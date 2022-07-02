<?php
//setting url string

//this process is ordered to match the layout of https://api-explorer.xero.com/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url_for_api_request);
//Parameters
$headers = array(  'Authorization: Bearer '.$access_token,
                    'Accept: application/json',
                    'Xero-tenant-id: '.$tenant_id       
                );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$content = curl_exec($ch);
$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($response_code != 200){
    $sql_string =  "
        INSERT api_xero_request_error (
            api_call,
            error_message)
            VALUES(
                '".mysqli_real_escape_string($conn, $url_for_api_request)."',
                '".mysqli_real_escape_string($conn, $content)."'
                )
            ";

    echo $sql_string;
    mysqli_query($conn,$sql_string);
    $response = json_encode (new stdClass);
}
else{
    $response = json_decode($content, true);
}
