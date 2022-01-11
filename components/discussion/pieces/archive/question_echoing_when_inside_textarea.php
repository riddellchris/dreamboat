<?php
if(!isset($_SESSION)){session_start();}

/*
$sql = "SELECT * FROM auto_coach_string_response_and_folder_suggestions 
	WHERE 	found_in_primary_folder 	= '".$_GET['primary_folder']."'
	AND	found_in_secondary_folder 	= '".$_GET['secondary_folder']."'
	AND	found_in_tertiary_folder 	= '".$_GET['tertiary_folder']."'
	ORDER BY string_length DESC";*/
	
$sql = "SELECT * FROM auto_coach_string_response_and_folder_suggestions 
	ORDER BY string_length DESC";	
	
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


$number_of_db_matches_with_this_input = 0;
unset($array_of_prompt_ids_that_match);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//if($row['string'] == "I'm tired"){echo $_SESSION['users_latest_discussion_input'];echo $row['string']; }

	//now we need to run two tests
	//one is the string within the response from the user
	
	//this second one isn't built just yet though
	//the other is have we already got that string and if so we must skip ahead
	if (stripos(stripslashes($_SESSION['users_latest_discussion_input']), stripslashes($row['string'])) !== false) {
	    $array_of_prompt_ids_that_match[$number_of_db_matches_with_this_input] = $row['prompt_id'];	
	    $number_of_db_matches_with_this_input = $number_of_db_matches_with_this_input + 1;





	}
}

unset($_SESSION['users_latest_discussion_input']);
///*
//echo 'number'.$number_of_db_matches_with_this_input;
//exit();
//*/


//$number_of_results = mysqli_num_rows($result);

//really shit code to be honest here but it is what it is now....
if($number_of_db_matches_with_this_input == 1){
//echo '11';
$_SESSION['prompt_6'] = $_SESSION['prompt_5'];
$_SESSION['prompt_5'] = $_SESSION['prompt_4'];
$_SESSION['prompt_4'] = $_SESSION['prompt_3'];
$_SESSION['prompt_3'] = $_SESSION['prompt_2'];
$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}
if($number_of_db_matches_with_this_input == 2){
$_SESSION['prompt_6'] = $_SESSION['prompt_4'];
$_SESSION['prompt_5'] = $_SESSION['prompt_3'];
$_SESSION['prompt_4'] = $_SESSION['prompt_2'];
$_SESSION['prompt_3'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}
if($number_of_db_matches_with_this_input == 3){
$_SESSION['prompt_6'] = $_SESSION['prompt_3'];
$_SESSION['prompt_5'] = $_SESSION['prompt_2'];
$_SESSION['prompt_4'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_3'] = $_SESSION['prompt_2'];
//$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}
if($number_of_db_matches_with_this_input == 4){
$_SESSION['prompt_6'] = $_SESSION['prompt_2'];
$_SESSION['prompt_5'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_4'] = $_SESSION['prompt_3'];
//$_SESSION['prompt_3'] = $_SESSION['prompt_2'];
//$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}
if($number_of_db_matches_with_this_input == 5){
$_SESSION['prompt_6'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_5'] = $_SESSION['prompt_4'];
//$_SESSION['prompt_4'] = $_SESSION['prompt_3'];
//$_SESSION['prompt_3'] = $_SESSION['prompt_2'];
//$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}
if($number_of_db_matches_with_this_input == 6){
//$_SESSION['prompt_6'] = $_SESSION['prompt_5'];
//$_SESSION['prompt_5'] = $_SESSION['prompt_4'];
//$_SESSION['prompt_4'] = $_SESSION['prompt_3'];
//$_SESSION['prompt_3'] = $_SESSION['prompt_2'];
//$_SESSION['prompt_2'] = $_SESSION['prompt_1'];
//$_SESSION['prompt_1'] = $_SESSION['prompt_5'];
}

$result = mysqli_query($conn, $sql);
$prompt_number = 1;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//if prompt_id is found in the array of matching prompts.... then...
	if(in_array($row['prompt_id'], $array_of_prompt_ids_that_match)){
		$_SESSION['prompt_'.$prompt_number] = $row['next_best_prompt'];
		$prompt_number = $prompt_number + 1;
	}
}


	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/safely_replacing_apostrophies_function.php";	
	//echo "'>";
		
	//echo $_SESSION['prompt_1'];
	
	$_SESSION['prompt_1'] = safely_remove_apostrophies($_SESSION['prompt_1']);
	//echo $_SESSION['prompt_1'];
	//exit();
	$_SESSION['prompt_2'] = safely_remove_apostrophies($_SESSION['prompt_2']);
	$_SESSION['prompt_3'] = safely_remove_apostrophies($_SESSION['prompt_3']);
	$_SESSION['prompt_4'] = safely_remove_apostrophies($_SESSION['prompt_4']);
	$_SESSION['prompt_5'] = safely_remove_apostrophies($_SESSION['prompt_5']);
	$_SESSION['prompt_6'] = safely_remove_apostrophies($_SESSION['prompt_6']);



echo $_SESSION['prompt_1'];
echo "&#10;";
echo $_SESSION['prompt_2'];
echo "&#10;";
echo $_SESSION['prompt_3'];
echo "&#10;";
echo $_SESSION['prompt_4'];
echo "&#10;";
echo $_SESSION['prompt_5'];
echo "&#10;";
//echo "&#10;";
//echo "&#10;";
echo $_SESSION['prompt_6'];
echo "&#10;";
//echo $_SESSION['instructional_prompt'];



?>