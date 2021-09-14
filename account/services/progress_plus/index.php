<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

$_SESSION['access_time_settings_from'] = 'progress_plus';

$sql = "SELECT * FROM user_services_active_per_user WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


//always green as paid up and always active
echo "<a class='green-button wide-button' href='/about_us/our_products/index.php?primary_tab_to_open=progress_plus'>info</a>";
echo "<br>";

/*
echo "<a class='green-button wide-button' href='/account/payments/progress_plus/'>payments</a>";
echo "<br>";
*/

echo "<a class='green-button wide-button' href='/account/settings/time/'>time settings</a>";
echo "<br>";

/*
echo "<a class='red-button wide-button' href='/progress_plus/'>review</a>";
echo "<br>";
*/

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/services/'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>