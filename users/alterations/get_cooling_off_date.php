<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT cooling_off_date FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$_SESSION['viewing_client_cooling_off_date'] = $row['cooling_off_date'];
