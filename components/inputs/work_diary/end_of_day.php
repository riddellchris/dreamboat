<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

if($_SESSION['next_prompt_id'] == 133){

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo "Users current time";	
	$users_current_time = $_SERVER['REQUEST_TIME'] + $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
	echo "<br>";	
	echo $users_current_datetime = date("Y-m-d H:i:s", $users_current_time);
//exit();

	$value = mysqli_real_escape_string($conn, $_GET['value']);
	$sql = "INSERT INTO work_diary (user_id, rate_out_of_10, local_timestamp_on_entry, period_type )
	        	VALUES('".$_SESSION['user_id']."', '".$value."','".$users_current_datetime."', 'day')";
	$result = mysqli_query($conn, $sql);
echo	$_SESSION['progress_plus_insert_id'] = mysqli_insert_id($conn);
//exit();
}
else{
	$sql = "SELECT * FROM all_color_combos WHERE success = 'no' ORDER BY RAND() LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$background_color	= $row['background_hex'];
	$contrast_color		= $row['contrast_hex'];
	$text_color		= $row['text_hex'];
	$degrees		= rand(0, 360);

	$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$prompt = $row['prompt'];
	$response = mysqli_real_escape_string($conn, $_POST['textarea_input']);
	if(isset($_POST['privacy_slider'])){$privacy = 'public';}else{$privacy = 'private';}


	$sql = "INSERT INTO posts (user_id, prompt, response, privacy, background_color, contrast_color, text_color, degrees)
			             VALUES('".$_SESSION['user_id']."', '$prompt', '$response', '$privacy', '$background_color', '$contrast_color', '$text_color', '$degrees')";
						$result = mysqli_query($conn, $sql);

	if($_SESSION['next_prompt_id'] == 134){$column_to_update = 'most_significant';}
	if($_SESSION['next_prompt_id'] == 135){$column_to_update = 'enjoy_most';}
	if($_SESSION['next_prompt_id'] == 136){$column_to_update = 'wasnt_ideal';}
	if($_SESSION['next_prompt_id'] == 137){$column_to_update = 'what_to_do_more_of';}
	if($_SESSION['next_prompt_id'] == 138){$column_to_update = 'how_to_do_that';}
	if($_SESSION['next_prompt_id'] == 139){$column_to_update = 'prefer_less_of';}
	if($_SESSION['next_prompt_id'] == 140){$column_to_update = 'time_best_spent';}
	if($_SESSION['next_prompt_id'] == 141){$column_to_update = 'focus_going_forward_now';}
	if($_SESSION['next_prompt_id'] == 142){$column_to_update = 'achieve_tomorrow';}
	if($_SESSION['next_prompt_id'] == 143){$column_to_update = 'send_reminder';$response=$_SESSION['binary'];}
	if($_SESSION['next_prompt_id'] == 144){$column_to_update = 'complete_full_review';$response=$_SESSION['binary'];}
	



echo	$sql = "UPDATE work_diary SET ".$column_to_update." = '".$response."' WHERE input_id = '".$_SESSION['progress_plus_insert_id']."'";
		$result = mysqli_query($conn, $sql);
		
	//	exit();
	
	
}

//change the prompt id now
$changed = 'no';
if($_SESSION['next_prompt_id'] == 133 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 135;}
//if($_SESSION['next_prompt_id'] == 134 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 135;}
if($_SESSION['next_prompt_id'] == 135 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 137;}
//if($_SESSION['next_prompt_id'] == 136 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 137;}
if($_SESSION['next_prompt_id'] == 137 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 139;}
//if($_SESSION['next_prompt_id'] == 138 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 139;}
if($_SESSION['next_prompt_id'] == 139 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 141;}
//if($_SESSION['next_prompt_id'] == 140 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 141;}
if($_SESSION['next_prompt_id'] == 141 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 142;}
if($_SESSION['next_prompt_id'] == 142 && $changed == 'no'){header("Location: /tracking/daily_improvement_program/");exit();}
//if($_SESSION['next_prompt_id'] == 143 && $changed == 'no'){header("Location: /work_diary/");}

//if($_SESSION['next_prompt_id'] == 142 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 144;}
//if($_SESSION['next_prompt_id'] == 144 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 34;}


header("Location: /tracking/daily_improvement_program/questions/");
?>