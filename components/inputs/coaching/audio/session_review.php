<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$prompt = $row['prompt'];



if($_SESSION['next_prompt_id'] == 125){
	$sql = "INSERT INTO coaching_audio_session_feedback (user_id, overall_5_star_rating)
				     VALUES('".$_SESSION['user_id']."', '$prompt')";
	$result = mysqli_query($conn, $sql);
	$_SESSION['session_review_id'] = mysqli_insert_id($conn);
}
else{
	$sql = "UPDATE coaching_audio_session_feedback
		SET 
		WHERE session_id = '".$_SESSION['session_review_id']."'";
	$result = mysqli_query($conn, $sql);
}






$changed = 'no';
if($_SESSION['next_prompt_id'] == 125 && $changed == 'no'){$_SESSION['next_prompt_id'] = 126;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 126 && $changed == 'no'){$_SESSION['next_prompt_id'] = 127;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 127 && $changed == 'no'){$_SESSION['next_prompt_id'] = 128;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 128 && $changed == 'no'){$_SESSION['next_prompt_id'] = 129;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 129 && $changed == 'no'){$_SESSION['next_prompt_id'] = 130;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 130 && $changed == 'no'){$_SESSION['next_prompt_id'] = 131;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 131 && $changed == 'no'){$_SESSION['next_prompt_id'] = 133;$changed = 'yes';}

header("Location: ".$_SESSION['network_loop_back_to']);

?>