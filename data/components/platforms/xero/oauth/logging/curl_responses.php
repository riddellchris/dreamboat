<?php
if(!isset($_SESSION)){session_start();}



$sql_for_logging = "    INSERT INTO api_xero_oauth_logs_curl (
                                                            user_id, 
                                                            viewing_client_id, 
                                                            file_name, 
                                                            request_uri, 
                                                            response_code,
                                                            response_info,
                                                            response_json
                                                            )
                        VALUES( 
                            '".$_SESSION['user_id']."',
                            '".$_SESSION['viewing_client_id']."',
                            '".__FILE__."',
                            '".$_SERVER['REQUEST_URI']."',
                            '".mysqli_real_escape_string($conn,$response_code)."',
                            '".mysqli_real_escape_string($conn,json_encode($info))."',
                            '".mysqli_real_escape_string($conn,json_encode($server_output))."'
                            )";

                       //  echo $sql_for_logging; exit();
                        if(mysqli_query($conn, $sql_for_logging)){}
                        else{require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/logging/sql_errors.php";}
                        unset($sql_for_logging);






