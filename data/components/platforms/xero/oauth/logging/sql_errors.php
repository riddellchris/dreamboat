<?php
if(!isset($_SESSION)){session_start();}

    $sql_for_logging = " INSERT INTO api_xero_oauth_logs_sql (
                                                                user_id, 
                                                                viewing_client_id, 
                                                                file_name, 
                                                                request_uri, 
                                                                error
                                                                )
                        VALUES( '".$_SESSION['user_id']."',
                                '".$_SESSION['viewing_client_id']."',
                                '".__FILE__."',
                                '".$_SERVER['REQUEST_URI']."',
                                '".mysqli_real_escape_string($conn,mysqli_error($conn))."')";      
                            //   echo $sql_for_logging; exit();
                                mysqli_query($conn, $sql_for_logging); 