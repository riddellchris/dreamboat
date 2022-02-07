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

$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM api_connections
        WHERE         entry_id = '".$_GET['saas_connection']."'
        AND           user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
//echo $sql;exit();

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

     //   echo strcasecmp(trim($row['platform_name']), 'Xero');
     //   exit();

        if(strcasecmp(trim($row['platform_name']), 'xero') == 0){
                require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/remove_connection.php";

        }
        if(strcasecmp(trim($row['platform_name']), 'timeular') == 0){
                //in this case we don't actually do anything because we don't really want to make a mess of it
                //we don't have to and frankly shouldn't disconnect or us the "log out" feature because it will only cause mess
                        //worst of all doing this means that the API secret and key are no longer useful so any other apps logged in will also be cut off

        }


}




header("Location: /data/apis/");
exit();