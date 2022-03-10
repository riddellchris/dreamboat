<?php
if(!isset($_SESSION)){session_start();}

if(isset($creating_new_user)){
    if($creating_new_user != 'yes'){$user_id = $_SESSION['viewing_client_id'];}
}
//else user_id variable comes from database_initialisation_processes

$sql = "INSERT INTO user_main_nav_control
        (   user_id
        )
        VALUES(".$_SESSION['viewing_client_id'].")";              

//echo $sql; exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

mysqli_query($conn, $sql);

