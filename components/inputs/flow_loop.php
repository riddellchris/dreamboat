<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/inputs/color_creation.php";


//exit();


$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$prompt = $row['prompt'];
$response = mysqli_real_escape_string($conn, $_POST['textarea_input']);
if(isset($_POST['privacy_slider'])){$privacy = 'public';}else{$privacy = 'private';}




if($_SESSION['next_prompt_id'] == 30){$category = 'statuses';}
if($_SESSION['next_prompt_id'] == 31){$category = 'achievements';}
if($_SESSION['next_prompt_id'] == 32){$category = 'lessons';}
if($_SESSION['next_prompt_id'] == 53){$category = 'challenges';}
if($_SESSION['next_prompt_id'] == 54){$category = 'resolutions';}
if($_SESSION['next_prompt_id'] == 33){$category = 'plans';}

echo $sql = "INSERT INTO user_flow_responses (user_id, prompt,  category, response,    privacy, privacy_friends,   privacy_family,  privacy_colleagues,  privacy_work_contacts,    background_color,    contrast_color,    text_color,    degrees)
			         VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '$prompt', '$category', '$response', '".mysqli_real_escape_string($conn, $_SESSION['flow_privacy'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_friends'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_family'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_colleagues'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_work_contacts'])."', '$background_color', '$contrast_color', '$text_color', '$degrees')";
$result = mysqli_query($conn, $sql);
echo "<BR>";


echo $sql = "INSERT INTO posts (user_id, prompt,  category,  response,    privacy,  privacy_friends,   privacy_family,  privacy_colleagues,  privacy_work_contacts,     background_color,    contrast_color,    text_color,    degrees)
			     VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '$prompt', '$category','$response', '".mysqli_real_escape_string($conn, $_SESSION['flow_privacy'])."',  '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_friends'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_family'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_colleagues'])."', '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_work_contacts'])."','$background_color', '$contrast_color', '$text_color', '$degrees')";
$result = mysqli_query($conn, $sql);

//exit();
$changed = 'no';
if($_SESSION['next_prompt_id'] == 30 && $changed == 'no'){$_SESSION['next_prompt_id'] = 31;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 31 && $changed == 'no'){$_SESSION['next_prompt_id'] = 32;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 32 && $changed == 'no'){$_SESSION['next_prompt_id'] = 53;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 53 && $changed == 'no'){$_SESSION['next_prompt_id'] = 33;$changed = 'yes';}
//if($_SESSION['next_prompt_id'] == 54 && $changed == 'no'){$_SESSION['next_prompt_id'] = 33;$changed = 'yes';}
if($_SESSION['next_prompt_id'] == 33 && $changed == 'no'){$_SESSION['next_prompt_id'] = 30;$changed = 'yes';header("Location: /flow/");exit();}

echo "<BR>";
echo $_SESSION['next_prompt_id'];
echo "<BR>";
echo $_SESSION['network_loop_back_to'];





header("Location: ".$_SESSION['network_loop_back_to']);
exit();
?>