<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'dreams'		){$new_category = $_GET['to'];	$_SESSION['wheelhouse_page'] = $new_category;}
if($_GET['to'] == 'goals'		){$new_category = $_GET['to'];	$_SESSION['wheelhouse_page'] = $new_category;}
if($_GET['to'] == 'milestones'		){$new_category = $_GET['to'];	$_SESSION['wheelhouse_page'] = $new_category;}
if($_GET['to'] == 'tasks'		){$new_category = $_GET['to'];	$_SESSION['wheelhouse_page'] = $new_category;}

$primary 	= $_GET['primary_folder'];
$secondary 	= $new_category;

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

$sql = "UPDATE wheelhouse 
	SET category = '".$new_category."'
	WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND 	item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);

header("Location: /wheelhouse/".$new_category."/item/display.php?item_id=".$_GET['item_id']);

exit();


