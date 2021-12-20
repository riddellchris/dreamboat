<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//first really what we need to do here is actually properly disconnect the application
//i'm not entirely sure I can be fucked with that right now as it's barely a problem 
//CR 19.12.21

//what really should happen is that the duplicated accounts if any - for example multiple xero connections should be adjusted as required.
//I think there will be problems if we adjust from there but that's not quite the point.
//so perhaps we can actually leave this for today



$sql = "UPDATE  api_connections 
        SET     deleted = 'yes' 
        WHERE   entry_id = '".$_GET['saas_connection']."' 
        AND     user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";


//echo $sql;exit();


mysqli_query($conn, $sql);

header("Location: /map/apis/");
exit();