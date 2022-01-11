<?php
if(!isset($_SESSION)){session_start();}

unset($_SESSION['displaying_knowledgebase_title']);

if(isset($_POST['category'])){				
		$_SESSION['primary_folder_knowledgebase_set_for']	= $_GET['primary_folder'];
		$_SESSION['secondary_folder_knowledgebase_set_for']	= $_GET['secondary_folder'];			
		$_SESSION['tertiary_folder_knowledgebase_set_for']	= $_GET['tertiary_folder'];			
		$_SESSION['displaying_knowledgebase_category']		= $_POST['category'];

	//add to category requests
	$sql = "UPDATE knowledgebase 
		SET category_requests = category_requests +1
		WHERE category = '".$_SESSION['displaying_knowledgebase_category']."'
		AND	primary_folder 		=  '".$_SESSION['primary_folder_knowledgebase_set_for']."'
		AND	secondary_folder 	=  '".$_SESSION['secondary_folder_knowledgebase_set_for']."'
		AND	tertiary_folder 	=  '".$_SESSION['tertiary_folder_knowledgebase_set_for']."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
	mysqli_query($conn, $sql);	
		
	}
	
header("Location: ".$_SESSION['this_page']);
exit();