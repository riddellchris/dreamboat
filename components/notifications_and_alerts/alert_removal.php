<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


if($_SESSION['dreamboat_crew'] == 'yes'){$from_user_id = $_SESSION['viewing_client_id'];}
else{$from_user_id = $_SESSION['pilots_id'];}

if(isset($_SESSION['user_id'])){		$session_user_id 		= mysqli_real_escape_string($conn, $_SESSION['user_id']);		} else{$session_user_id			= '';}
if(isset($_GET['primary_folder'])){		$get_primary_folder 	= mysqli_real_escape_string($conn, $_GET['primary_folder']);	} else{$get_primary_folder 		= '';}
if(isset($_GET['secondary_folder'])){	$get_secondary_folder 	= mysqli_real_escape_string($conn, $_GET['secondary_folder']);	} else{$get_secondary_folder 	= '';}
if(isset($_GET['tertiary_folder'])){	$get_tertiary_folder 	= mysqli_real_escape_string($conn, $_GET['tertiary_folder']);	} else{$get_tertiary_folder 	= '';}
if(isset($_GET['item_id'])){			$get_item_id 			= mysqli_real_escape_string($conn, $_GET['item_id']);			} else{$get_item_id 			= 0;}

$sql = "UPDATE notifications_and_alerts 
	SET 	alert_on 			= 'off' 
	WHERE  	from_user_id 		= '".$from_user_id."' 
	AND  	for_user_id 		= '".$session_user_id."' 
	AND 	primary_folder 		= '".$get_primary_folder."' 
	AND 	secondary_folder 	= '".$get_secondary_folder."'
	AND 	tertiary_folder 	= '".$get_tertiary_folder."' 
	AND 	related_id 			= '".$get_item_id."'	
	
	";
mysqli_query($conn, $sql);
//exit();
?>