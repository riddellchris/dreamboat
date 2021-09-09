<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);
//exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

  $sql = "UPDATE user_account_details
	SET	
	
		business_name 			= '".mysqli_real_escape_string($conn, $_POST['business_name'])."',		
		business_website 		= '".mysqli_real_escape_string($conn, $_POST['business_website'])."',			
		business_age 			= '".mysqli_real_escape_string($conn, $_POST['business_age'])."',
		industry 			= '".mysqli_real_escape_string($conn, $_POST['industry'])."',
		primary_industry 		= '".mysqli_real_escape_string($conn, $_POST['primary_industry'])."',
		business_definition 		= '".mysqli_real_escape_string($conn, $_POST['business_definition'])."',		
		number_of_staff 		= '".mysqli_real_escape_string($conn, $_POST['number_of_staff'])."',		
		business_size_group 		= '".mysqli_real_escape_string($conn, $_POST['business_size_group'])."',		
		what_clients_are_called		= '".mysqli_real_escape_string($conn, $_POST['what_clients_are_called'])."'

          WHERE user_id = '".$_SESSION['viewing_client_id']."'";



$_SESSION['viewing_client_business_name'] 		= $_POST['business_name'];
$_SESSION['viewing_client_what_clients_are_called'] 	= $_POST['what_clients_are_called'];
$_SESSION['viewing_client_primary_industry']		= $_POST['primary_industry'];
$_SESSION['viewing_client_business_definition']		= $_POST['business_definition'];		
$_SESSION['viewing_client_number_of_staff']		= $_POST['number_of_staff'];		
$_SESSION['viewing_client_business_size_group']		= $_POST['business_size_group'];



//echo $sql;
//exit();


$result = mysqli_query($conn, $sql);
header("Location: /business/details/");
exit();
?>