<?php
if(!isset($_SESSION)){session_start();}
	
if(isset($_POST['title'])){	
		$_SESSION['displaying_knowledgebase_title']		= $_POST['title'];

	//set view numbers +1 for this title
	$sql = "UPDATE knowledgebase 
		SET views = views +1
		WHERE category = '".$_SESSION['displaying_knowledgebase_category']."'
		AND	primary_folder 		=  '".$_SESSION['primary_folder_knowledgebase_set_for']."'
		AND	secondary_folder 	=  '".$_SESSION['secondary_folder_knowledgebase_set_for']."'
		AND	tertiary_folder 	=  '".$_SESSION['tertiary_folder_knowledgebase_set_for']."'
		AND 	title			=  '".$_SESSION['displaying_knowledgebase_title']."'
		";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
	mysqli_query($conn, $sql);		
}	
	
header("Location: ".$_SESSION['this_page']);
exit();