<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$work_title 		= mysqli_real_escape_string($conn, $_POST['work_title']);
$friends 		= mysqli_real_escape_string($conn, $_POST['friends']);
$family 		= mysqli_real_escape_string($conn, $_POST['family']);
$backstory 		= mysqli_real_escape_string($conn, $_POST['backstory']);
$hobbies 		= mysqli_real_escape_string($conn, $_POST['hobbies']);
$other_notes		= mysqli_real_escape_string($conn, $_POST['other_notes']);

$current_date = date('Y-m-d H:i:s');
echo $sql = "INSERT INTO personal_details 
		(work_title, friends, family, backstory, hobbies, other_notes, client_id, made_by_id)
		VALUES('$work_title','$friends','$family','$backstory','$hobbies','$other_notes','".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."','".mysqli_real_escape_string($conn, $_SESSION['user_id'])."')";
		
		

//exit();	     	 
   
mysqli_query($conn, $sql);

//go to the item
header("Location: /".$_GET['primary_folder']."/");
exit();

?>