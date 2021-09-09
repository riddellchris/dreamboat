<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'doing'		){$new_mode = $_GET['to'];	$_SESSION['time_utilisation_page'] = $new_mode;}
if($_GET['to'] == 'planning'		){$new_mode = $_GET['to'];	$_SESSION['time_utilisation_page'] = $new_mode;}
if($_GET['to'] == 'managing'		){$new_mode = $_GET['to'];	$_SESSION['time_utilisation_page'] = $new_mode;}


$primary 	= $_GET['primary_folder'];
$secondary 	= $new_mode;

//this will all be the same no matter where
//change all notifications and links within the notifications page of this
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/notifications_and_alerts.php";
mysqli_query($conn, $sql);

//change all discussion as well for this link
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/discussion.php";
mysqli_query($conn, $sql);

//adjust all item relationships too
//not required for sales 
// only required for:
//wheelhouse/improvements
//staff/people/events

//adjust all reminders
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/reminders.php";
mysqli_query($conn, $sql);



$sql = "UPDATE time_utilisation 
	SET category = '".$new_mode."'
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND 	item_id = '".$_GET['item_id']."'";
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);

header("Location: /time/utilisation/".$new_mode."/item/display.php?item_id=".$_GET['item_id']);

exit();


