<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

var_dump($_POST);

if($_POST['new_category'] != ''){	$category_to_store = mysqli_real_escape_string($conn, $_POST['new_category']);}
else{					$category_to_store = mysqli_real_escape_string($conn, $_POST['category']);}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$note = mysqli_real_escape_string($conn, $_POST['wisdom']);



 $sql = "INSERT INTO knowledgebase (
				primary_folder, 
				secondary_folder, 
				tertiary_folder, ";
	//just for histories right now			
	if($_SESSION['final_file_name']  == 'view_history'){$sql .= "item_id,";}
	$sql .= "		added_by, 
				category, 
				title, 
				note_details)
	VALUES(
		'".$_SESSION['primary_folder']."',
		'".$_SESSION['secondary_folder']."',	
		'".$_SESSION['tertiary_folder']."',";	

	//just for histories right now			
	if($_SESSION['final_file_name']  == 'view_history'){$sql .= "'".$_SESSION['item_id_from_url']."',";}

	$sql .= "'".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
		'".$category_to_store."',
		'".$title."',
		'".$note."'				
		)";
		
mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();


?>