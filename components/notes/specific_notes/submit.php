<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "INSERT INTO notes (	about_user_id,
				last_edited_by,
				primary_folder,
				secondary_folder,
				tertiary_folder,
				item_id,
				note_details)
	VALUES(	'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
		'".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
		'".$_GET['primary_folder']."',
		'".$_GET['secondary_folder']."',
		'".$_GET['tertiary_folder']."',
		'".$_GET['item_id']."',
		'".mysqli_real_escape_string($conn, $_POST['notes'])."'	
		)";
mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();