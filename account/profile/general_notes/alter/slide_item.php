<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
//basic security really
if($_GET['direction'] == 'up' OR
   $_GET['direction'] == 'down'){ 

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$item_id = mysqli_real_escape_string($conn, $_GET['item_id']);

$sql = "SELECT * FROM homework WHERE user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND item_id = '".$item_id."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($_GET['direction'] == 'up'){
$old_rank = $row['rank'];
$new_rank = $row['rank'] - 1;
 $sql = "SELECT * FROM homework WHERE  user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND rank = '".$new_rank."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$item_to_move = $row['item_id'];
$sql = "UPDATE homework SET rank = '".$old_rank."' WHERE item_id = '".$item_to_move."'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE homework SET rank = '".$new_rank."' WHERE item_id = '".$item_id."'";
$result = mysqli_query($conn, $sql);
}

if($_GET['direction'] == 'down'){
$old_rank = $row['rank'];
$new_rank = $row['rank'] + 1;
 $sql = "SELECT * FROM homework WHERE  user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND rank = '".$new_rank."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$item_to_move = $row['item_id'];
$sql = "UPDATE homework SET rank = '".$old_rank."' WHERE item_id = '".$item_to_move."'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE homework SET rank = '".$new_rank."' WHERE item_id = '".$item_id."'";
$result = mysqli_query($conn, $sql);
}
 
//exit();
header("Location: /profile/");
exit();
}
?>