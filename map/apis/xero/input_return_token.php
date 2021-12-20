<?php
if(!isset($_SESSION)){session_start();}

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

if(     $return_token['refresh_token'] <> ''    AND
        isset($_SESSION['user_id'])){

        $sql = "INSERT INTO api_xero_refresh_tokens (  user_id, refresh_token )
                VALUES ( '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', 
                            '".mysqli_real_escape_string($conn, $return_token['refresh_token'])."')";
            //                echo $sql; exit();
        mysqli_query($conn, $sql);

    }