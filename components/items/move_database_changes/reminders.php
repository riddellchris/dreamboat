<?php
if(!isset($_SESSION)){session_start();}

$sql = "UPDATE reminders 
	SET 	primary_folder	 = '".$primary."' AND
		secondary_folder = '".$secondary."' 
	WHERE for_user_id 	= '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND primary_folder 	= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
	AND secondary_folder 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'
	AND item_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";