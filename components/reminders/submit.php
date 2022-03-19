<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);
//exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "UPDATE reminders
	SET latest_version = 'no'
	WHERE
		for_user_id			=	'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'	AND
		primary_folder		=	'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."'		AND
		secondary_folder	=	'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."'";
		
	if(isset($_POST['tertiary_folder'])){
		$sql .= "
		AND
		tertiary_folder		=	'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."'";}

	if(isset($_POST['item_id'])){
		$sql .= "
		AND
		item_id				= 	'".mysqli_real_escape_string($conn, $_POST['item_id'])."'";}


//echo $sql;exit();
mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


				



$sql = "INSERT INTO reminders (	for_user_id,
								primary_folder,
								secondary_folder,";
	if(isset($_POST['tertiary_folder'])){	$sql .= "	tertiary_folder,	";}
	if(isset($_POST['item_id'])){			$sql .= "	item_id,			";}	

	$sql .= "
								reminder_text,
								due	)
	VALUES(
		'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
		'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."',
		'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."',		";

		if(isset($_POST['tertiary_folder'])){	$sql .= "'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."',";}
		if(isset($_POST['item_id'])){			$sql .= "'".mysqli_real_escape_string($conn, $_POST['item_id'])."',";}			
	
	$sql .= "
		'".mysqli_real_escape_string($conn, $_POST['reminder'])."',
		'".mysqli_real_escape_string($conn, $_POST['date'])."')";

//echo $sql;exit();	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();