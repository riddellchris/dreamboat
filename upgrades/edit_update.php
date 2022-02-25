<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$next_few_months 		= mysqli_real_escape_string($conn, $_POST['next_few_months']);
$three_months_away 		= mysqli_real_escape_string($conn, $_POST['three_months_away']);
$six_months_away 		= mysqli_real_escape_string($conn, $_POST['six_months_away']);
$twelve_months_away 	= mysqli_real_escape_string($conn, $_POST['twelve_months_away']);
$three_years_away 		= mysqli_real_escape_string($conn, $_POST['three_years_away']);
$five_years_away		= mysqli_real_escape_string($conn, $_POST['five_years_away']);
$other_notes			= mysqli_real_escape_string($conn, $_POST['other_notes']);

$current_date = date('Y-m-d H:i:s');
   
	   
 $sql = "INSERT INTO  improvements_details (next_few_months, three_months_away, six_months_away, twelve_months_away, three_years_away, five_years_away,  other_notes, client_id, made_by_id)
	VALUES('$next_few_months', '$three_months_away','$six_months_away','$twelve_months_away','$three_years_away','$five_years_away','$other_notes','".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."','".$_SESSION['user_id']."')";



	      
	     
     	 
   
mysqli_query($conn, $sql);

header("Location: /improvements/");

?>