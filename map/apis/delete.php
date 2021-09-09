<?php
if(!isset($_SESSION)){session_start();}

$sql = "UPDATE saas_application_connections 
        SET deleted = 'yes' 
        WHERE entry_id = '".$_GET['saas_connection']."' 
        AND user_id = '".$_SESSION['viewing_client_id']."'";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

mysqli_query($conn, $sql);

header("Location: /map/apis/");
exit();