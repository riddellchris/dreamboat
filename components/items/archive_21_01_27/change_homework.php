<?php
if(!isset($_SESSION)){session_start();}
if($_GET['change_to'] == 'yes'		){$new_mode = $_GET['change_to'];}
if($_GET['change_to'] == 'no'		){$new_mode = $_GET['change_to'];}


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	



//make the actual change in the SALES database
$sql = "UPDATE improvements 
	SET 	homework = '".$new_mode."'
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND 	item_id = '".$_GET['item_id']."'";
mysqli_query($conn, $sql);

$sql = "SELECT category FROM improvements WHERE item_id = '".$_GET['item_id']."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//redirect to where we actually need to go
header("Location: /improvements/".$row['category']."/item/display.php?item_id=".$_GET['item_id']);

exit();


