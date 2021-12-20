<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$platform = strtolower($_POST['platform_name']);



$sql = "INSERT INTO api_connections(   user_id,
                                                    platform_name,
                                                    platform_web_address
                                                    )
                                        VALUES  (
                                                    '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
                                                    '".mysqli_real_escape_string($conn, $platform)."',
                                                    '".$_POST['platform_web_address']."'
                                                    )";
//echo $sql; exit();


mysqli_query($conn, $sql);

header("Location: /map/apis/");
exit();