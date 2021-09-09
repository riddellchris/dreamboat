<?php
if(!isset($_SESSION)){session_start();}

if(isset($_POST['new_prompt']) && !empty($_POST['new_prompt'])){
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	$sql = "INSERT INTO all_prompts(
					primary_folder, 		     
					secondary_folder, 
					tertiary_folder,";
		//			quarternary_folder,					
	$sql .= "			prompt,
					original_primary_folder, 
					original_secondary_folder, 					
					original_tertiary_folder, 
					original_quarternary_folder, 										
					original_item_id, 					
					original_user_id,
					original_pilot_id					
					
					)
				VALUES(
					'".$_POST['primary_folder']."',
					'".$_POST['secondary_folder']."',				
					'".$_POST['tertiary_folder']."',";	
	//				'".$_POST['quarternary_folder']."', 					
$sql .= "					'".mysqli_real_escape_string($conn, safely_replace_apostrophies($_POST['new_prompt']))."',
					'".$_POST['primary_folder']."', 
					'".$_POST['secondary_folder']."', 					
					'".$_POST['tertiary_folder']."', 	
					'".$_POST['quarternary_folder']."', 										
					'".$_POST['item_id']."', 					
					'".$_SESSION['viewing_client_id']."', 
					'".$_SESSION['user_id']."' 		
				)";
//echo $sql;
//exit();

	mysqli_query($conn, $sql);
	
	$_SESSION['selected_prompt_text'] = mysqli_real_escape_string($conn, $_POST['new_prompt']);
	$_SESSION['selected_prompt_id'] = mysqli_insert_id($conn);
}