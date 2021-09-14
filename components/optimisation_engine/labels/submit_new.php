<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//var_dump($_POST);

$sql = "INSERT INTO labels (
		primary_folder,
		secondary_folder, 
		tertiary_folder,
		quarternary_folder,	
		item_id,
		label_name,
		created_by_pilot_id
	)
	VALUES(
		'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."',
		'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."',	
		'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."',
		'".mysqli_real_escape_string($conn, $_POST['quarternary_folder'])."',	
		'".mysqli_real_escape_string($conn, $_POST['item_id'])."',	
		'".mysqli_real_escape_string($conn, $_POST['standard_input'])."',	
		'".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'	
	)
";

//echo $sql;
//exit();

mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();