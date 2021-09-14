<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$_SESSION['comment'] = mysqli_real_escape_string($conn, $_POST['textarea_input']);

$sql = "INSERT INTO discussion (primary_folder, secondary_folder, about_user_id, user_id, comment, prompt_1, prompt_2, prompt_3, prompt_4, prompt_5) 
	VALUES('".$_SESSION['primary_folder']."','".mysqli_real_escape_string($conn, $_SESSION['user_id'])."','".mysqli_real_escape_string($conn, $_SESSION['user_id'])."','".mysqli_real_escape_string($conn, $_SESSION['pilot_prompt'])."','".mysqli_real_escape_string($conn, $_SESSION['latest_discussion'])."')";
$result = mysqli_query($conn, $sql);

header("Location: /wellbeing/");
exit();

?>