<?php
$business = 'yes';
require $_SERVER['DOCUMENT_ROOT']."/management/edit_update.php";
/*CODE OUT
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$vision 		= mysqli_real_escape_string($conn, $_POST['vision']);
$mission 		= mysqli_real_escape_string($conn, $_POST['mission']);
$core_competencies 	= mysqli_real_escape_string($conn, $_POST['core_competencies']);
$worlds_best_goal 	= mysqli_real_escape_string($conn, $_POST['worlds_best_goal']);
$industry 		= mysqli_real_escape_string($conn, $_POST['industry']);
$business_age		= mysqli_real_escape_string($conn, $_POST['business_age']);
$other_notes		= mysqli_real_escape_string($conn, $_POST['other_notes']);


$current_date = date('Y-m-d H:i:s');
 $sql = "UPDATE management_details 
	     SET 
	     	 vision 		= '$vision',
	     	 mission 		= '$mission',
	     	 core_competencies 	= '$core_competencies',
	     	 worlds_best_goal	= '$worlds_best_goal',	     	 
	     	 industry 		= '$industry',	 
		 business_age 		= '$business_age',
	     	 other_notes 		= '$other_notes'
	     	 
	     WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
	   
// $sql = "INSERT INTO  profile_details (backstory, skills, obsessions, training, friends, family,  hobbies, other_notes, client_id, made_by_id)
//	VALUES('$backstory', '$skills','$obsessions','$training','$friends','$family','$hobbies','$other_notes','".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."','".$_SESSION['viewing_client_id']."')";
    
	     
     	 
   
mysqli_query($conn, $sql);

header("Location: /business/");
*/
?>