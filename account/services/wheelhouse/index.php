<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

$sql = "SELECT * FROM user_services_active_per_user WHERE user_id = '".$_SESSION['user_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


//always green as paid up and always active
echo "<a class='green-button wide-button' href=''>info</a>";
echo "<br>";

echo "<a class='green-button wide-button' href='/account/payments/wheelhouse/'>payments</a>";
echo "<br>";

echo "<a class='green-button wide-button' href='/wheelhouse/display_list.php?view=completed'>view completed</a>";
echo "<br>";

echo "<a class='green-button wide-button' href='/wheelhouse/display_list.php?view=deleted'>view deleted</a>";
echo "<br>";
/*
echo "<a class='red-button wide-button' href='/progress_plus/'>review</a>";
echo "<br>";
*/

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/services/'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>