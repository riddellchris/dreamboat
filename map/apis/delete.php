<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "UPDATE saas_application_connections 
        SET deleted = 'yes' 
        WHERE entry_id = '".$_GET['saas_connection']."' 
        AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";


//echo $sql;exit();


mysqli_query($conn, $sql);

header("Location: /map/apis/");
exit();