<?php
if(!isset($_SESSION)){session_start();}

$sql = "UPDATE discussion 
	SET reviewed_for_single_string_addition_to_autocoach = 'yes'
	WHERE comment_id = '".$_SESSION['auto_coach_review_comment_id']."'";


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

//then if post variables exist add them
if(	isset($_POST['string']) 	&& 
	!empty($_POST['string']) 	&&
	isset($_POST['new_prompt'])	&& 
	!empty($_POST['new_prompt'])
	){

	$string_to_submit = mysqli_real_escape_string($conn, $_POST['string']);
	$prompt_to_submit = mysqli_real_escape_string($conn, $_POST['new_prompt']);
	$length_of_string = strlen($_POST['string']);

	$sql = "INSERT INTO auto_coach_string_response_and_folder_suggestions(	
			string,
			string_length,
			first_found_in_comment_id,
			found_in_primary_folder,
			found_in_secondary_folder,
			found_in_tertiary_folder,
			suggested_primary_folder,
			suggested_secondary_folder,
			suggested_tertiary_folder,
			next_best_prompt)
			
			VALUES(
					'".$string_to_submit."',
					'".$length_of_string."',
					'".$_SESSION['auto_coach_review_comment_id']."',
					'".$_SESSION['auto_coach_review_primary_folder']."',
					'".$_SESSION['auto_coach_review_secondary_folder']."',
					'".$_SESSION['auto_coach_review_tertiary_folder']."',";
//just for simplicity now we aren't worrying about what folder is next recommended
//we take found in to be the one to show the next prompt in....
//therefore for now		
	$sql .= "			'".$_SESSION['auto_coach_review_primary_folder']."',
					'".$_SESSION['auto_coach_review_secondary_folder']."',
					'".$_SESSION['auto_coach_review_tertiary_folder']."',
					'".$prompt_to_submit."')";
	
//echo $sql;
//exit();
	mysqli_query($conn, $sql);
}


//should be iff successful but not something i'm going to worry about right now....
unset($_SESSION['auto_coach_review_comment_id']);
unset($_SESSION['auto_coach_review_primary_folder']);
unset($_SESSION['auto_coach_review_secondary_folder']);
unset($_SESSION['auto_coach_review_tertiary_folder']);

header("Location: ".$_SESSION['this_page']);
exit();
