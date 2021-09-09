<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['viewing_client_id'] = $_GET['user_id'];

$sql = "SELECT first_name FROM user_account_details WHERE user_id = '".$_SESSION['viewing_client_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$_SESSION['viewing_client_first_name'] = $row['first_name'];

header("Location: /progress_plus/");
exit();

?>