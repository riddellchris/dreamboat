<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";

$title = mysqli_real_escape_string($conn, $_POST['standard_input']);

//push all existing down a rank
$sql = "UPDATE issues SET rank = rank + 1 WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO issues (user_id, 		title, rank, background_color, contrast_color, 	text_color, degrees)
	 	   VALUES('".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."', '$title', '1', '".$background_color."', '$contrast_color', '$text_color', '$degrees')";
$result = mysqli_query($conn, $sql);

header("Location: /profile/");
exit();

?>