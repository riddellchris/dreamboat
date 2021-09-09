<?php
if(!isset($_SESSION)){session_start();}

if($_GET['change_client_status_to'] == 'no' ){$change_to = 'no';	$page_to_go_to = '/users/research/';}
if($_GET['change_client_status_to'] == 'yes'){$change_to = 'yes';	$page_to_go_to = '/users/regular_users/';}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$users_id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE user_account_details SET client_gained = '".$change_to."' WHERE user_id = '".$users_id."'";

mysqli_query($conn, $sql);

header("Location: ".$page_to_go_to);
exit();




?>