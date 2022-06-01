<?php
if(!isset($_SESSION)){session_start();}

if(isset($_GET['textarea_input'])){

    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


    $sql = "INSERT INTO notes ( user_id, viewing_client_id, text )
            VALUES (
                    '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
                    '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
                    '".mysqli_real_escape_string($conn, $_GET['textarea_input'])."'
                )
            ";
    mysqli_query($conn, $sql);


}
header("Location: /reporting/");
exit();
