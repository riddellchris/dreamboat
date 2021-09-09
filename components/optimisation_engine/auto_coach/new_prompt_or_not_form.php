<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT * FROM discussion 
	WHERE 	system_notification <> 'yes'
	AND reviewed_for_single_string_addition_to_autocoach <> 'yes'
	";
$result = mysqli_query($conn, $sql);
$responses_to_go = mysqli_num_rows($result);



$sql = "SELECT * FROM discussion 
	WHERE 		reviewed_for_single_string_addition_to_autocoach = 'no'
		AND 	system_notification <> 'yes'
	ORDER BY comment_id DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<div style='width:100%;text-align:center;'><br>";
echo $responses_to_go." responses to go";
echo "<br>";
echo "/".$row['primary_folder']."/".$row['secondary_folder']."/";
if($row['tertiary_folder'] != ''){echo $row['tertiary_folder']."/";}
echo "<br>";
echo stripslashes($row['comment']);
echo "</div>";
echo "
	<form action='/components/back_of_house/auto_coach/new_prompt_or_not_form_single_response.php' method='post'>
		<input class='secure_input' style='width:100%;'	name='string'		placeholder='string' autofocus></input>
		<input class='secure_input' style='width:100%;'	name='new_prompt'	placeholder='related prompt'></input>
		<input class='login-submit' style='width:100%;'	 			type='submit'></input>
	</form>
";

$_SESSION['auto_coach_review_comment_id'] 	= $row['comment_id'];
$_SESSION['auto_coach_review_primary_folder'] 	= $row['primary_folder'];
$_SESSION['auto_coach_review_secondary_folder'] = $row['secondary_folder'];
$_SESSION['auto_coach_review_tertiary_folder'] 	= $row['tertiary_folder'];






//FUCK ALL OF THE BELOW FOR NOW.... WE ARE JUST GOING TO GO THROUGH EVERY DISCUSSION ENTRY FOR THE MEAN TIME...
//I'M SURE AFTER THAT WE CAN ADD IN SOMETHING BASED ON SIMILIARITY OR OTHERWISE.... BUT NOT FOR NOW

//all this is going to take a lot of time.....
//// something to do on the side - would be / will be nice when and as it grows///
///far from critical to have perfect now though


//first it's about sorting strings

//work in reverse from longest single words down, to the shortest.
//then at some point move to two word strings
//then at some point three word strings

//but for now - let's just review the current inputs that have been made.
//either skip the input entirely OR 
//add new string
//suggest new prompt 
//and suggest moving to new section of that's more appropriate

//then we just order prompts based on the longest strings found within the response and order from top to bottom

?>