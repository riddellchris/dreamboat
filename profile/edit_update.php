<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/database/connection.php";

$backstory 	= mysqli_real_escape_string($conn, $_POST['backstory']);
$skills 	= mysqli_real_escape_string($conn, $_POST['skills']);
$obsessions 	= mysqli_real_escape_string($conn, $_POST['obsessions']);
$training 	= mysqli_real_escape_string($conn, $_POST['training']);
$friends 	= mysqli_real_escape_string($conn, $_POST['friends']);
$family		= mysqli_real_escape_string($conn, $_POST['family']);
$hobbies	= mysqli_real_escape_string($conn, $_POST['hobbies']);
$other_notes	= mysqli_real_escape_string($conn, $_POST['other_notes']);


$current_date = date('Y-m-d H:i:s');
/*echo $sql = "UPDATE business_details 
	     SET business_name 		= '$business_name',
	     	 business_age 		= '$business_age',
	     	 industry 		= '$industry',
	     	 website_address 	= '$website_address',
	     	 vision 		= '$vision',
	     	 direction 		= '$direction',
	     	 target_market 		= '$target_market',
	     	 other_notes 		= '$other_notes'
	     WHERE user_id = '".$_SESSION['user_id_to_edit']."'";*/
	   
 $sql = "INSERT INTO  profile_details (backstory, skills, obsessions, training, friends, family,  hobbies, other_notes, client_id, made_by_id)
	VALUES('$backstory', '$skills','$obsessions','$training','$friends','$family','$hobbies','$other_notes','".$_SESSION['viewing_client_id']."','".$_SESSION['user_id_to_edit']."')";



	      
	     
     	 
   
mysqli_query($conn, $sql);

header("Location: /profile/");

?>