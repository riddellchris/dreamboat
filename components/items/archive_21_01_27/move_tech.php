<?php
if(!isset($_SESSION)){session_start();}
if($_GET['to'] == 'support_requests'		){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}
if($_GET['to'] == 'bugs_to_fix'			){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}
if($_GET['to'] == 'general_maintenance'		){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}
if($_GET['to'] == 'iterative_improvements'	){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}
if($_GET['to'] == 'other_development'		){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}
if($_GET['to'] == 'new_features'		){$new_mode = $_GET['to'];	$_SESSION['admin_technology_page'] = $new_mode;}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	


//NOTE THE DIFFERENCE HERE FOR /ADMIN/TECHNOLOGY AS DEEP IN THE CHANGE MODE 
//
//
//
//
//

//ALSO NOTIFICATIONS HAVE NOT PROPERLY BEEN MOVED YET EITHER
//same for reminders


$primary 	= $_GET['primary_folder'];
$secondary 	= $_GET['secondary_folder'];
$tertiary 	= $new_mode;

//this will all be the same no matter where
//change all notifications and links within the notifications page of this
//require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/notifications_and_alerts.php";
//mysqli_query($conn, $sql);

//change all discussion as well for this link
require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/discussion.php";
mysqli_query($conn, $sql);

//adjust all item relationships too
//not required for sales 
// only required for:
//wheelhouse/improvements
//staff/people/events

//adjust all reminders
//require $_SERVER['DOCUMENT_ROOT']."/components/items/move_database_changes/reminders.php";
//mysqli_query($conn, $sql);


//NOTE in /admin/technology/ changes there is no USER ID associated
$sql = "UPDATE wheelhouse 
	SET mode = '".$new_mode."' 
	WHERE item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
mysqli_query($conn, $sql);


//redirect to where we actually need to go
header("Location: /admin/technology/".$new_mode."/item/display.php?item_id=".$_GET['item_id']);

exit();


