<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);
//exit();

$sql = "UPDATE reminders
	SET latest_version = 'no'
	WHERE
		for_user_id		=	'".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."'		AND
		primary_folder		=	'".$_POST['primary_folder']."'		AND
		secondary_folder	=	'".$_POST['secondary_folder']."'		AND
		tertiary_folder		=	'".$_POST['tertiary_folder']."'		AND
		item_id			= 	'".$_POST['item_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


				



 $sql = "INSERT INTO reminders (
		for_user_id,
		primary_folder,
		secondary_folder,
		tertiary_folder,
		item_id,		
		reminder_text,
		due


				)
	VALUES(
		'".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',
		'".$_POST['primary_folder']."',
		'".$_POST['secondary_folder']."',		
		'".$_POST['tertiary_folder']."',
		'".$_POST['item_id']."',			
		'".$_POST['reminder']."',
		'".$_POST['date']."'
	
	
	
	)";


//echo $sql;
//exit();	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();