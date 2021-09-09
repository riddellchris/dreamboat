<?php
if(!isset($_SESSION)){session_start();}







$sql = "INSERT INTO saas_application_connections (user_id,
                                                    platform_name,
                                                    platform_web_address
                                                    )
                                                    VALUES(
                                                        '".$_SESSION['viewing_client_id']."',
                                                        '".$_POST['platform_name']."',
                                                        '".$_POST['platform_web_address']."'
                                                        )
    ";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

mysqli_query($conn, $sql);

header("Location: /map/apis/");
exit();