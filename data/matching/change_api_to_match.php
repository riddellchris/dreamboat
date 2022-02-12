<?php
if(!isset($_SESSION)){session_start();}




//echo '<pre>' , var_dump($_POST) , '</pre>';

//ideally this should scan against a set number of potentials
//this could probalbly even come just from a test to check agains the api_applications database
$sql = "SELECT DISTINCT platform_name FROM api_connections ";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$approved_platform_name = 'no';
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    if($_POST['api_for_matching'] == $row['platform_name']){$approved_platform_name = 'yes';}
}


if($approved_platform_name == 'yes'){
    header("Location: /data/matching/index.php?api_for_matching=".$_POST['api_for_matching']);
    exit();

    
}
else{
    header("Location: /");
    exit();
}



