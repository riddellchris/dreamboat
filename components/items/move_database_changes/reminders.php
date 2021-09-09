<?php
if(!isset($_SESSION)){session_start();}

$sql = "UPDATE reminders 
	SET 	primary_folder	 = '".$primary."' AND
		secondary_folder = '".$secondary."' 
	WHERE for_user_id 	= '".$_SESSION['viewing_client_id']."'
	AND primary_folder 	= '".$_GET['primary_folder']."'
	AND secondary_folder 	= '".$_GET['secondary_folder']."'
	AND item_id 		= '".$_GET['item_id'] ."'";