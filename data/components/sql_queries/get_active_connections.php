<?php
if(!isset($_SESSION)){session_start();}


    //i'm pretty sure that from within this there is some process that could be applied to make sure there are no duplicates from the 

    $sql = "SELECT * FROM   api_connections 
            WHERE           user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
            AND             deleted <> 'yes'
            ORDER BY        entry_id DESC";
           // echo $sql; exit();