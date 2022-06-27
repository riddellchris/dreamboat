<?php
if(!isset($_SESSION)){session_start();}

//so what we need here is to really know what the connection id is
//which comes from the table api_xero_tenant_details id
    //therefore I need to get out the correct Id for this tentant
    //on the table we don't store tenants and let's be honest aren't 








require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM api_xero_return_keys
        WHERE  user_id = '".$_SESSION['viewing_client_id']."'
        ORDER BY id DESC LIMIT 1";

    //    echo $sql."<br>";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$access_token = $row['access_token'];

//echo $access_token;
//echo "<br>";
//exit();

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/get.php";


$sql = "SELECT * FROM api_xero_tenant_details 
        WHERE user_id = '".$_SESSION['viewing_client_id']."'
        AND id IS NOT NULL
        AND id <> 0
        ORDER BY entry_id DESC LIMIT 1"; 

       // echo "<br>".$sql."<br>";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

//2e24de4b-3305-4fe4-b304-e892bad8f54c

  
    //this section is the entire POST and Return process
    //taking headers and the redirect code from aboce
    //the original example that this was taken from is:
        //https://stackoverflow.com/questions/18913345/curl-posting-with-header-application-x-www-form-urlencoded
    $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,"https://api.xero.com/connections/{".$row['id']."}");
    //     echo '<pre>' , var_dump($response) , '</pre>';} 
  //  curl_setopt($ch, CURLOPT_URL,"https://identity.xero.com/connections/6a41a959-f92d-44b3-9067-8fcd4b6fe2c32");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
  //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = array(   'Authorization: Bearer '.$access_token);         
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); //take note of this one
  //  curl_setopt($ch, CURLOPT_POST, 1);
 //   curl_setopt($ch, CURLOPT_POSTFIELDS, "token=");//this needs to NOT have whitespace in it
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // receive server response ...
  //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $server_output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close ($ch);
    $response = json_decode($server_output, true);
   // echo $server_output;
   // echo '<pre>' , var_dump($server_output) , '</pre>';
}
//exit();