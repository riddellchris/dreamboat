<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM   api_connections 
        WHERE           user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
        AND             deleted <> 'yes'
        ORDER BY        entry_id DESC";
//echo $sql;exit();
$result_connections  = mysqli_query($conn, $sql);//  or die( mysqli_error($conn));;
$number_of_active_connections = mysqli_num_rows($result_connections);