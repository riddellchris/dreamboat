<?php
if(!isset($_SESSION)){session_start();}



require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "INSERT INTO api_xero_tenant_details (  user_id,
                                                id,
                                                authEventId,
                                                tenantId,
                                                tenantType,
                                                tenantName,
                                                createdDateUtc,
                                                updatedDateUtc

                                            )
VALUES (
            '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
            '".mysqli_real_escape_string($conn, $response[0]['id'])."',
            '".mysqli_real_escape_string($conn, $response[0]['authEventId'])."',                   
            '".mysqli_real_escape_string($conn, $response[0]['tenantId'])."',
            '".mysqli_real_escape_string($conn, $response[0]['tenantType'])."',    
            '".mysqli_real_escape_string($conn, $response[0]['tenantName'])."',
            '".mysqli_real_escape_string($conn, $response[0]['createdDateUtc'])."',                                                
            '".mysqli_real_escape_string($conn, $response[0]['updatedDateUtc'])."'                                              
    )";

//echo $sql;
//exit();    
$result = mysqli_query($conn, $sql);