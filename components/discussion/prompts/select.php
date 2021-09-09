<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "UPDATE all_prompts SET times_selected = times_selected +1 WHERE prompt_id = ".$_GET['prompt_id'];
mysqli_query($conn, $sql);

$sql = "UPDATE all_prompts SET selection_from_views_ratio = (times_selected / views) WHERE prompt_id = ".$_GET['prompt_id'];
mysqli_query($conn, $sql);




$sql = "SELECT * FROM all_prompts WHERE prompt_id = ".$_GET['prompt_id'];

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) != 0){

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$_SESSION['selected_prompt_text'] 	= $row['prompt'];
	$_SESSION['selected_prompt_id']		= $row['prompt_id'];
	
	
	//this is unset if the folders don't align at the top of //layouts/standard_page/start.php
	$_SESSION['selected_prompt_primary_folder'] 	= $_GET['primary_folder'];
	$_SESSION['selected_prompt_secondary_folder'] 	= $_GET['secondary_folder'];
	$_SESSION['selected_prompt_tertiary_folder'] 	= $_GET['tertiary_folder'];

}

header("Location: ".$_SESSION['this_page']);
exit();