<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$code	 = mysqli_real_escape_string($conn, $_GET['code']);
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

echo $sql = "SELECT * FROM admin_email_unsubscribe_keys 
		WHERE user_id = '".$user_id."' 
		  AND key_detail = '".$code."' 
		  AND used = 'no'";

	  
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	var_dump($row);
	if($row['email_type'] == 'Daily Productivity Improvement'		){$column_to_update = 'daily_improvement_reminder';}
	if($row['email_type'] == 'Work Diary End Of Week'		){$column_to_update = 'work_diary_end_of_week';}
	if($row['email_type'] == 'Work Diary End Of Month'		){$column_to_update = 'work_diary_end_of_month';}
	if($row['email_type'] == 'Work Diary two free weeks'		){$column_to_update = 'work_diary_two_free_weeks';}
	if($row['email_type'] == 'Progress Plus End Of Day'		){$column_to_update = 'progress_plus_end_of_day';}
	if($row['email_type'] == 'Progress Plus two free weeks'		){$column_to_update = 'progress_plus_two_free_weeks';}
	if($row['email_type'] == 'Productivity Tracker End Of Day'	){$column_to_update = 'progress_plus_end_of_day';}
	if($row['email_type'] == 'Productivity Tracker two free weeks'	){$column_to_update = 'progress_plus_two_free_weeks';}
	
	
echo '<br>';
echo	$sql = "UPDATE user_email_settings 
		SET ".$column_to_update." = 'off'
		WHERE user_id = '".$user_id."'";
	mysqli_query($conn, $sql);	

echo '<br>';
echo	$sql = "UPDATE admin_email_unsubscribe_keys
		SET used = 'yes'
		WHERE user_id = '".$user_id."' 
		  AND code = '".$code."'";
	mysqli_query($conn, $sql);

	header("Location: /account/settings/email/");
	exit();}
else{
	$_SESSION['tenzing_message'] = 'Sorry that link seems to be broken';
	header("Location: /error/");
	exit;
}




?>