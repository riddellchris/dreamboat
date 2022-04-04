<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "UPDATE user_account_details SET dead = 'yes' WHERE user_id = '".$_GET['id']."' AND pilots_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

//echo $sql; exit();


mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();



?>