<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$item_id = mysqli_real_escape_string($conn, $_GET['item_id']);
$sql = "UPDATE progress SET item_deleted = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."' AND item_id = '".$item_id."'";
mysqli_query($conn, $sql);

header("Location: /profile/");
exit();
?>