<?php
if(!isset($_SESSION)){session_start();}

//important to put this on here so that we can tell if this setting has been changed or not
//ideally this would be done with some sort of "webhook" a form of tech I'm not entirely sure about
//probably some sort of Push to browser alert thing.
//anyway.

$sql = "    SELECT demos_on FROM user_account_details 
            WHERE user_id = ".$_SESSION['viewing_client_id'];
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row['demos_on'] == 'yes'){$_SESSION['display_demo_charts'] = 'yes';}
if($row['demos_on'] == 'no'){$_SESSION['display_demo_charts']  = 'no';}


