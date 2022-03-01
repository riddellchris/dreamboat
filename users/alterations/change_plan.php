<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'demos_on'		){$to = 'demos_on'; 		/*$off_1 = 'text'; 	$off_2 = 'audio';*/	$proceed = 'yes';}
if($_GET['to'] == 'digital'			){$to = 'digital'; 			$off_1 = 'text'; 	$off_2 = 'audio';	$proceed = 'yes';}
if($_GET['to'] == 'digital'			){$to = 'digital'; 			$off_1 = 'text'; 	$off_2 = 'audio';	$proceed = 'yes';}
if($_GET['to'] == 'text'			){$to = 'text'; 			$off_1 = 'digital'; $off_2 = 'audio';	$proceed = 'yes';}
if($_GET['to'] == 'audio_monthly'	){$to = 'audio'; 			$off_1 = 'text'; 	$off_2 = 'digital';	$proceed = 'yes';}
if($_GET['to'] == 'audio'			){$to = 'audio'; 			$off_1 = 'text'; 	$off_2 = 'digital';	$proceed = 'yes';}
if($_GET['to'] == 'audio'			){$to = 'audio'; 			$off_1 = 'text'; 	$off_2 = 'digital';	$proceed = 'yes';}
if($_GET['to'] == 'audio_full_hour'	){$to = 'audio_full_hour'; 	$off_1 = 'text'; 	$off_2 = 'digital';	$proceed = 'yes';}

if($_GET['set'] == 'yes'	){$set='yes';}
if($_GET['set'] == 'no'		){$set='no';}

	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	$sql = "UPDATE user_account_details 
		SET ".$_GET['to']." 	= '".$set."'";
	$sql .= "		WHERE user_id = '".$_GET['clients_user_id']."'
		";
		
	mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();
?>