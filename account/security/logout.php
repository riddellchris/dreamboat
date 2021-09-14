<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT * FROM data_user_login_logouts WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY session_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$sql = "UPDATE data_user_login_logouts SET logout_timestamp = CURRENT_TIME() WHERE session_id = '".$row['session_id']."'";
$result = mysqli_query($conn, $sql);

session_destroy();
header("Location: /");
exit();

?>