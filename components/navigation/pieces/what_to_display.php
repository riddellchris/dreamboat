<?php
if(!isset($_SESSION)){session_start();}


//this actually needs to happen twice if user

$sql = "SELECT * FROM user_main_nav_control 
        WHERE   user_id = '".$_SESSION['viewing_client_id']."'
        AND     latest_version_for_this_user = 'yes'
        ORDER BY id DESC LIMIT 1
        ";

      //  echo $sql; exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 0){
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/main_nav_initialisation.php";
}
else{

    $options_to_extract = [
        'data',
        'map',
        'insights',
        'profile',
        'business',
        'network',
        'biz_dev',
        'management',
        'sales',
        'marketing',
        'wheelhouse',
        'activities',
        'issues',
        'upgrades',
        'results',
        'messages',
        'notifications'];

//        echo '<pre>' , var_dump($options_to_extract) , '</pre>';exit();


    for($i = 0; $i < count($options_to_extract); $i++){
        $nav_name = $options_to_extract[$i];
        $_SESSION['main_nav_control'][$nav_name] = $row[$nav_name];
    }
}
