<?php
if(!isset($_SESSION)){session_start();}


$debug = 'off';





//explode the state and then check it's one we have sent previously
//#SECURITY #RISK 
//There is some risk here that we could get hacked from within the database here as well but that's now something i'm entirely cut out to entirely solve or worry about.

$state_schrapnel = explode("_", $_GET['state']);
//echo '<pre>' , var_dump($state_schrapnel) , '</pre>';

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM saas_application_xero_keys 
        WHERE   user_id                 = '".mysqli_real_escape_string($conn, $state_schrapnel['1'])."'
        AND     application_entry_id    = '".mysqli_real_escape_string($conn, $state_schrapnel['2'])."'
        AND     string                  = '".mysqli_real_escape_string($conn, $state_schrapnel['3'])."'";
$result = mysqli_query($conn, $sql);

//$_GET['state'] //check this against the database
if(mysqli_num_rows($result) === 1){
    $sql = "UPDATE saas_application_xero_keys 
            SET used = 'yes'
            WHERE   user_id                 = '".mysqli_real_escape_string($conn, $state_schrapnel['1'])."'
            AND     application_entry_id    = '".mysqli_real_escape_string($conn, $state_schrapnel['2'])."'
            AND     string                  = '".mysqli_real_escape_string($conn, $state_schrapnel['3'])."'";
    mysqli_query($conn, $sql);

    //This pulls in the Xero specific:
        //client_id (which is the "Id" of the Dreamboat Application)
        //and the matching client secret which is also within the Xero application
        //see developer.xero.com and login to access (only Chris can do this right now)

    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/client_id.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/secret.php";
    require $_SERVER['DOCUMENT_ROOT']."/map/apis/xero/redirect_uri.php";

    $headers = array(   'Content-Type: application/x-www-form-urlencoded',
                        'Authorization: Basic '.base64_encode($client_id.":".$client_secret)        );

    //this section is the entire POST and Return process
    //taking headers and the redirect code from aboce
    //the original example that this was taken from is:
        //https://stackoverflow.com/questions/18913345/curl-posting-with-header-application-x-www-form-urlencoded
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://identity.xero.com/connect/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=".$redirect_uri);//this needs to NOT have whitespace in it
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close ($ch);


    $return_token = json_decode($server_output, true);

    echo "RETURN TOKEN";

    if($debug == 'on'){
        echo '<pre>' , var_dump($return_token) , '</pre>';
    }
    //first let's escape anything critical here

    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
    $sql = "INSERT INTO api_xero_return_keys (  user_id,
                                                id_token,
                                                access_token,
                                                expires_in,
                                                token_type,
                                                refresh_token,
                                                scope
                                                )
                                            VALUES (
                                                '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                                                '".mysqli_real_escape_string($conn, $return_token['id_token'])."',
                                                '".mysqli_real_escape_string($conn, $return_token['access_token'])."', 
                                                '".mysqli_real_escape_string($conn, $return_token['expires_in'])."',                                                                   
                                                '".mysqli_real_escape_string($conn, $return_token['token_type'])."',
                                                '".mysqli_real_escape_string($conn, $return_token['refresh_token'])."',    
                                                '".mysqli_real_escape_string($conn, $return_token['scope'])."'                                                   
                                                    )";
    

                                                    mysqli_query($conn, $sql);

    //THIS REALLY SHOULD BE STORED SOMEWHERE!!! //// SO THAT WE CAN KEEP THE REFRESH TOKEN // WITHOUT THIS WE HAVE TO KEEP ASKING FOR MORE HELP
    //THIS IS FAR FAR FAR FROM IDEAL!


    if($debug == 'on'){    
        echo "<br><br><br>";
        echo $return_token['id_token'];
    }
   // $access_pieces = explode(".", $return_token['access_token']);
   // $header     = $access_pieces[0];
   // $payload    = $access_pieces[1];
   // $signature  = $access_pieces[2];
    list($header, $payload, $signature) = explode (".", $return_token['access_token']);

    if($debug == 'on'){    
        echo "<br><br><br>";
        echo $header."<br><br>";
        echo $payload."<br><br>";       
        echo $signature."<br><br>";
        echo "<br><br><br><br>";
    // print_r(json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $return_token['access_token']))))));
    }
    //header decoded from every xero request 
    /*
    {
        "alg": "RS256",
        "kid": "1CAF8E66772D6DC028D6726FD0261581570EFC19",
        "typ": "JWT",
        "x5t": "HK-OZnctbcAo1nJv0CYVgVcO_Bk"
      }
    */
    $access_token = json_decode(base64_decode($payload), true);

    if($debug == 'on'){    
        echo "ACCESS TOKEN";
        echo '<pre>' , var_dump($access_token) , '</pre>';
    }
    $sql = "INSERT INTO api_xero_access_token (  user_id,
                                                nbf,
                                                exp,
                                                iss,
                                                aud,
                                                client_id,
                                                sub,
                                                auth_time,
                                                xero_userid,
                                                global_session_id,
                                                jti,
                                                authentication_event_id
                                                )
                                            VALUES (
                                                '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['nbf'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['exp'])."',                   
                                                '".mysqli_real_escape_string($conn, $access_token['iss'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['aud'])."',    
                                                '".mysqli_real_escape_string($conn, $access_token['client_id'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['sub'])."',                                                
                                                '".mysqli_real_escape_string($conn, $access_token['auth_time'])."',                                               
                                                '".mysqli_real_escape_string($conn, $access_token['xero_userid'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['global_session_id'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['jti'])."',
                                                '".mysqli_real_escape_string($conn, $access_token['authentication_event_id'])."'
                                                    )";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $sql = "    UPDATE saas_application_connections 
                    SET connected_successfully = 'yes'
                    WHERE user_id = '".$_SESSION['viewing_client_id']."'
                    AND platform_name = 'xero'                    
                    ";
        mysqli_query($conn, $sql);
        if($debug == 'on'){
            echo $sql;
                exit();
        }

    }


 //   echo $sql; exit();






    /*
    // further processing ....
    if ($server_output == "OK"){
        echo "tokens incoming";
    
    } 
    else {
        echo "fail";
        echo '<pre>' , var_dump($info) , '</pre>';
        var_dump(curl_getinfo($ch));
    }
    */











    header("Location: /map/apis/");

}
else{
    header("Location: /map/apis/");
}
exit();


