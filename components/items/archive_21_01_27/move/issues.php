<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'critical'	){$new_category = $_GET['to'];	$_SESSION['issues_page'] = $new_category;}
if($_GET['to'] == 'important'	){$new_category = $_GET['to'];	$_SESSION['issues_page'] = $new_category;}
if($_GET['to'] == 'other'	){$new_category = $_GET['to'];	$_SESSION['issues_page'] = $new_category;}

$primary 	= $_GET['primary_folder'];
$secondary 	= $new_category;

//this will all be the same no matter where
//change all notifications and links within the notifications page of this
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/notifications_and_alerts.php";
mysqli_query($conn, $sql);

//change all discussion as well for this link
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/discussion.php";
mysqli_query($conn, $sql);

//adjust all reminders
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/reminders.php";
mysqli_query($conn, $sql);

$sql = "UPDATE issues 
	SET category = '".$new_category."'
	WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND 	item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);



//we do change items_all first such that we can get the item_id out and simply search for the database/item_id combo to change it for both of those issues
//change items_all



//change item_relationships 
$sql = "SELECT * FROM item_relationships 
	WHERE 	item_a_primary_folder 	= 'issues'
	AND 	item_a_secondary_folder = '".$new_category."'
	AND	item_a_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'	";
	
//get
	
	





header("Location: /issues/".$new_category."/item/display.php?item_id=".$_GET['item_id']);
exit();


