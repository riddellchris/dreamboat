<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/inputs/color_creation.php";

$title = mysqli_real_escape_string($conn, $_POST['standard_input']);

if($_SESSION['productivity_pilot'] == 'yes'){$user_id = $_SESSION['viewing_client_id'];}
else{$user_id = $_SESSION['user_id'];}


//push all existing down a rank
$sql = "UPDATE focus SET rank = rank + 1 WHERE user_id = '".$user_id."'";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO focus (user_id, 		title, rank, background_color, contrast_color, 	text_color, degrees)
	 	   VALUES('".$user_id."', '$title', '1', '".$background_color."', '$contrast_color', '$text_color', '$degrees')";
$result = mysqli_query($conn, $sql);

header("Location: /focus/");
exit();

?>