<?php
if(!isset($_SESSION)){session_start();}


if(isset($_SESSION['user_id'])){            $user_id            = $_SESSION['user_id'];             }else{  $user_id = 0;}
if(isset($_SESSION['viewing_client_id'])){  $viewing_client_id  = $_SESSION['viewing_client_id'];   }else{  $viewing_client_id = 0;}
if(isset($_SERVER['REQUEST_URI'])){         $request_uri        = $_SERVER['REQUEST_URI'];          }else{  $request_uri = '';}

$sql_for_logging = "    INSERT INTO api_xero_oauth_logs_sql (
                                                            user_id, 
                                                            viewing_client_id, 
                                                            file_name, 
                                                            request_uri, 
                                                            sql_query
                                                            )
                        VALUES( 
                            '".$user_id."',
                            '".$viewing_client_id."',
                            '".__FILE__."',
                            '".$request_uri."',
                            '".mysqli_real_escape_string($conn,$sql)."'
                            )";

                        // echo $sql_for_logging; exit();
                        if(mysqli_query($conn, $sql_for_logging)){}
                        else{require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/logging/sql_errors.php";}
                        unset($sql_for_logging);






