<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/inputs/color_creation.php";

//store the two responses if they exist
var_dump($_POST);
	$response_why = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
echo	$sql = "UPDATE progress_plus_core 
		SET ".$_SESSION['progress_plus_how_why_category']."_why 	= '".$response_why."', ".$_SESSION['progress_plus_how_why_category']."_improvement = '".$response_how."' 
		WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);

echo	$sql = "INSERT INTO posts (user_id, 
					   prompt, 
					   response, 
					   privacy, 
					   privacy_friends, 
					   privacy_family, 
					   privacy_colleagues, 
					   privacy_work_contacts, 
					   background_color, 
					   contrast_color, 
					   text_color,
					   degrees) 
				   VALUES ('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
				   	   '".mysqli_real_escape_string($conn, $_SESSION['last_prompt'])."',
				   	   '".$response_how."',
				   	   '".mysqli_real_escape_string($conn, $_SESSION['flow_privacy'])."',
				   	   '".$_SESSION['flow_sub_privacy_friends']	."',
				   	   '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_family'])."',
				   	   '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_colleagues'])."',
				   	   '".mysqli_real_escape_string($conn, $_SESSION['flow_sub_privacy_work_contacts'])."',
				   	   '".$background_color."',
				   	   '".$contrast_color."',
				   	   '".$text_color."',
				   	   '".$degrees ."')";
				   	   
				   	   
	mysqli_query($conn, $sql);



$changed = 'no';
if(!isset($_SESSION['progress_plus_how_why_category'])){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'productivity';}

if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'productivity'	){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'focus';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'focus'		){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'stress';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'stress'		){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'confidence';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'confidence'	){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'control';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'control'		){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'health';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'health'		){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'happiness';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'happiness'	){$changed = 'yes';$_SESSION['progress_plus_how_why_category'] = 'energy';}
if($changed == 'no' && $_SESSION['progress_plus_how_why_category'] == 'energy'		){$_SESSION['next_prompt_id'] = 265;header("Location: /progress_plus/");exit();}


//get out the last response
$sql = "SELECT ".$_SESSION['progress_plus_how_why_category']." FROM progress_plus_core WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."' AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


//translate to words
//store as session variable

echo $_SESSION['progress_plus_how_why_category'];
echo "<br>";


if($row[$_SESSION['progress_plus_how_why_category']] == 5){	$_SESSION['progress_plus_how_why_rating'] = "Amazing";}
if($row[$_SESSION['progress_plus_how_why_category']] == 4){	$_SESSION['progress_plus_how_why_rating'] = "Wonderful";}
if($row[$_SESSION['progress_plus_how_why_category']] == 3){	$_SESSION['progress_plus_how_why_rating'] = "Great";}
if($row[$_SESSION['progress_plus_how_why_category']] == 2){	$_SESSION['progress_plus_how_why_rating'] = "Good";}
if($row[$_SESSION['progress_plus_how_why_category']] == 1){	$_SESSION['progress_plus_how_why_rating'] = "OK";}
if($row[$_SESSION['progress_plus_how_why_category']] == 0){	$_SESSION['progress_plus_how_why_rating'] = "Average";}
if($row[$_SESSION['progress_plus_how_why_category']] == -1){	$_SESSION['progress_plus_how_why_rating'] = "A little off";}
if($row[$_SESSION['progress_plus_how_why_category']] == -2){	$_SESSION['progress_plus_how_why_rating'] = "Bad";}
if($row[$_SESSION['progress_plus_how_why_category']] == -3){	$_SESSION['progress_plus_how_why_rating'] = "Very bad";}
if($row[$_SESSION['progress_plus_how_why_category']] == -4){	$_SESSION['progress_plus_how_why_rating'] = "Terrible";}
if($row[$_SESSION['progress_plus_how_why_category']] == -5){	$_SESSION['progress_plus_how_why_rating'] = "Diabolical";}

echo $_SESSION['progress_plus_how_why_category'];
echo "<br>";
echo $_SESSION['progress_plus_how_why_rating'];
echo "<br>";
echo $row[$_SESSION['progress_plus_how_why_category']];
echo "<br>";


//display / go to the index
header("Location: /progress_plus/questions/");
exit();




?>