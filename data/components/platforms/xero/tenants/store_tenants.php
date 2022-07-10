<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_GET['option'])){$tenant_response_key = 0;}
else{$tenant_response_key = $_GET['option'];}

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
            '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['id'])."',
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['authEventId'])."',                   
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['tenantId'])."',
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['tenantType'])."',    
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['tenantName'])."',
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['createdDateUtc'])."',                                                
            '".mysqli_real_escape_string($conn, $_SESSION['tenants_for_matching'][$tenant_response_key]['updatedDateUtc'])."'                                              
    )";
$sql_for_logging = $sql;
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/logging/sql_queries.php";
//echo $sql;exit();    
$result = mysqli_query($conn, $sql);


header("Location: /data/apis/");
exit();