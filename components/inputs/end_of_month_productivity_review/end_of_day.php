<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

if($_SESSION['next_prompt_id'] == 214){


//var_dump($_POST);
//exit();

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo "Users current time";	
	$users_current_time = $_SERVER['REQUEST_TIME'] + $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
	echo "<br>";	
	echo $users_current_datetime 	= date("Y-m-d H:i:s", $users_current_time);
	echo $users_current_date_whole 	= date("Y-m-d", $users_current_time);	
	echo $users_current_date_year 	= date("Y", $users_current_time);	
	echo $users_current_date_month 	= date("m", $users_current_time);	
	echo $users_current_date_day 	= date("d", $users_current_time);		
	echo $users_current_date_month_in_words 	= date("F", $users_current_time);	
	echo $users_current_date_day_in_words 		= date("l", $users_current_time);
	echo $users_current_date_week_in_the_year	= date("W", $users_current_time);
//exit();

	$value = mysqli_real_escape_string($conn, $_POST['standard_input']);
echo	$sql = "INSERT INTO productivity_tracker_inputs (user_id, timestamp_in_unix, income, time_in_users_zone, time_in_users_zone_unix, date_whole, date_year, date_month, date_day, date_day_in_words, date_month_in_words, date_week_of_year)
	        	VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '".$_SERVER['REQUEST_TIME']."' ,'".$value."','".$users_current_datetime."','".$users_current_time."','".$users_current_date_whole."','".$users_current_date_year."','".$users_current_date_month."','".$users_current_date_day."','".$users_current_date_day_in_words."','".$users_current_date_month_in_words."','".$users_current_date_week_in_the_year."')";
	$result = mysqli_query($conn, $sql);
echo "<br>";	
echo	$_SESSION['productivity_tracker_insert_id'] = mysqli_insert_id($conn);
}
else{

	if($_SESSION['next_prompt_id'] == 215){$column_to_update = 'minutes_worked';}
	if($_SESSION['next_prompt_id'] == 237){$column_to_update = 'minutes_of_high_competency';}
	if($_SESSION['next_prompt_id'] == 238){$column_to_update = 'minutes_of_average_competency';}
	if($_SESSION['next_prompt_id'] == 239){$column_to_update = 'minutes_of_low_competency';}
	if($_SESSION['next_prompt_id'] == 240){$column_to_update = 'minutes_of_high_value';}
	if($_SESSION['next_prompt_id'] == 241){$column_to_update = 'minutes_of_average_value';}
	if($_SESSION['next_prompt_id'] == 242){$column_to_update = 'minutes_of_low_value';}
	if($_SESSION['next_prompt_id'] == 251){$column_to_update = 'minutes_of_high_efficiency';}
	if($_SESSION['next_prompt_id'] == 252){$column_to_update = 'minutes_of_average_efficiency';}
	if($_SESSION['next_prompt_id'] == 253){$column_to_update = 'minutes_of_low_efficiency';}

	$value = mysqli_real_escape_string($conn, $_POST['standard_input']);	

echo	$sql = "UPDATE productivity_tracker_inputs SET ".$column_to_update." = '".$value."' WHERE input_id = '".$_SESSION['productivity_tracker_insert_id']."'";
	$result = mysqli_query($conn, $sql);		
}

//change the prompt id now
$changed = 'no';
if($_SESSION['next_prompt_id'] == 214 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 215;}
if($_SESSION['next_prompt_id'] == 215 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 237;}
if($_SESSION['next_prompt_id'] == 237 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 238;}
if($_SESSION['next_prompt_id'] == 238 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 239;}
if($_SESSION['next_prompt_id'] == 239 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 240;}
if($_SESSION['next_prompt_id'] == 240 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 241;}
if($_SESSION['next_prompt_id'] == 241 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 242;}
if($_SESSION['next_prompt_id'] == 242 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 251;}
if($_SESSION['next_prompt_id'] == 251 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 252;}
if($_SESSION['next_prompt_id'] == 252 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 253;}
if($_SESSION['next_prompt_id'] == 253 && $changed == 'no'){$changed = 'yes';header("Location: /progress_plus/incoming.php");exit();}

header("Location: /tracker/questions/");
exit();
?>