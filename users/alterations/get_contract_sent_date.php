<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT contract_sent FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$_SESSION['viewing_client_contract_sent_date'] = $row['contract_sent'];
