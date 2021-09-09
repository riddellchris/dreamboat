<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

if($_GET['type'] == 'issue_tracking_reminder'	){$email_setting_to_change = 'issue_tracking_reminder';		$clean_get = 'yes';}
if($_GET['type'] == 'time_tracking_reminder'	){$email_setting_to_change = 'time_tracking_reminder';		$clean_get = 'yes';}
if($_GET['type'] == 'dollar_tracking_reminder'	){$email_setting_to_change = 'dollar_tracking_reminder';	$clean_get = 'yes';}
if($_GET['type'] == 'daily_improvement_reminder'){$email_setting_to_change = 'daily_improvement_reminder';	$clean_get = 'yes';}

if($_GET['type'] == 'all_discussion'		){$email_setting_to_change = 'all_discussion';		$clean_get = 'yes';}
if($_GET['type'] == 'items_added'		){$email_setting_to_change = 'items_added';		$clean_get = 'yes';}
if($_GET['type'] == 'items_completed'		){$email_setting_to_change = 'items_completed';		$clean_get = 'yes';}
if($_GET['type'] == 'tracking_data_altered'	){$email_setting_to_change = 'tracking_data_altered';	$clean_get = 'yes';}
if($_GET['type'] == 'planning_column_updates'	){$email_setting_to_change = 'planning_column_updates';	$clean_get = 'yes';}
if($_GET['type'] == 'reviews'			){$email_setting_to_change = 'reviews';			$clean_get = 'yes';}
if($_GET['type'] == 'reminders'			){$email_setting_to_change = 'reminders';		$clean_get = 'yes';}
if($_GET['type'] == 'achievements'		){$email_setting_to_change = 'achievements';		$clean_get = 'yes';}
if($_GET['type'] == 'system_alerts'		){$email_setting_to_change = 'system_alerts';		$clean_get = 'yes';}
if($_GET['type'] == 'system_updates'		){$email_setting_to_change = 'system_updates';		$clean_get = 'yes';}




if($clean_get == 'yes'){
	$sql 	= "SELECT ".$email_setting_to_change." FROM user_email_settings WHERE user_id ='".$_SESSION['viewing_client_id']."'";
	$result = mysqli_query($conn, $sql);
	$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);

	$current_setting = $row[$email_setting_to_change];
	
	if($current_setting == 'on'){$new_setting = 'off';}
	if($current_setting == 'off'){$new_setting = 'on';}
	
	$sql = "UPDATE user_email_settings SET ".$email_setting_to_change."= '".$new_setting."' WHERE user_id = '".$_SESSION['viewing_client_id']."'";


	mysqli_query($conn, $sql);
}

header("Location: ".$_SESSION['this_page']);
exit();



?>