<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$new_value = mysqli_real_escape_string($conn, ucfirst(strtolower($_POST['standard_input'])));

$sql = "UPDATE user_account_details SET current_subscription_value = '".$new_value."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);

//go to the item
header("Location: /".$_GET['primary_folder']."/");
exit();

?>