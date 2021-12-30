<?php
if(!isset($_SESSION)){session_start();}

//xero refresh tokens last 60 days so every 10 we will adjust this to make that work / totall foolproof

// the cron job will be set to run every 10 days - that's almost easy.

// the bulk of the work must be done by get_access_token.php 

//the only thing that really needs to be done is that we must go through all user id's in some way shape or form.
//I suspect the easiest way to achieve that is through 

$sql  = "SELECT DISTINCT user_id FROM api_xero_refresh_tokens";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

//echo $sql;
//exit();

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

    $_SESSION['user_id'] = $row['user_id'];
    require $_SERVER['DOCUMENT_ROOT']."/map/apis/xero/oauth/get_access_token.php";

}

//for now it should run once per day and we canjust go from there - easy as