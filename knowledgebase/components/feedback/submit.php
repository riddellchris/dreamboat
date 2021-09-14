<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$name		= mysqli_real_escape_string($conn, $_POST['name']);
	$number		= mysqli_real_escape_string($conn, $_POST['number']);
	$email		= mysqli_real_escape_string($conn, $_POST['mail']);
	$feedback	= mysqli_real_escape_string($conn, $_POST['feedback']);
	
	$_SESSION['feedback_name'] 	= $name;
	$_SESSION['feedback_number'] 	= $number;	
	$_SESSION['feedback_email'] 	= $email;	
	
	

$sql = "INSERT INTO feedback
		(name, number, email, comments, primary_folder, secondary_folder, tertiary_folder)
	VALUES ('".$name."', '".$number."', '".$email."', '".$feedback."','".mysqli_real_escape_string($conn, $_GET['primary_folder'])."','".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."','".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."')";
mysqli_query($conn, $sql);	

$feedback = nl2br( $_POST['feedback'] );

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/feedback.php";

$location = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";
if(	$_GET['tertiary_folder'] != '' &&
	$_GET['tertiary_folder'] != 'unknown'){
	$location .= $_GET['tertiary_folder']."/";	
}


header("Location: ".$location);