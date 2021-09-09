<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$note = mysqli_real_escape_string($conn, $_POST['note']);

$current_date = date('Y-m-d H:i:s');
echo $sql  = "UPDATE coaching_audio_session_notes SET ".$_SESSION['session_next_question']." = '".$note."', time_".$_SESSION['session_next_question']."= '".$current_date."' WHERE session_id = '".$_SESSION['session_id']."'";

mysqli_query($conn, $sql);


$session_next_question_completed = 'no';
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'how_are_they'){					$_SESSION['session_next_question'] = 'how_was_their_week';			$session_next_question_completed = 'yes';}	
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'how_was_their_week'){				$_SESSION['session_next_question'] = 'what_are_the_issues';			$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_are_the_issues'){				$_SESSION['session_next_question'] = 'what_is_the_biggest_issue';		$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_is_the_biggest_issue'){			$_SESSION['session_next_question'] = 'what_resolutions_are_there';		$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_resolutions_are_there'){			$_SESSION['session_next_question'] = 'what_planning_can_be_done_for_the_future';$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_planning_can_be_done_for_the_future'){	$_SESSION['session_next_question'] = 'what_is_the_plan_for_the_week_ahead';	$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_is_the_plan_for_the_week_ahead'){		$_SESSION['session_next_question'] = 'what_is_on_for_the_rest_of_the_day';	$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_is_on_for_the_rest_of_the_day'){		$_SESSION['session_next_question'] = 'book_next_session';			$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'book_next_session'){				$_SESSION['session_next_question'] = 'what_did_you_learn_about_them_today';	$session_next_question_completed = 'yes';}	
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'what_did_you_learn_about_them_today'){		$_SESSION['session_next_question'] = 'most_important_piece_of_advice_for_feed';	$session_next_question_completed = 'yes';}
if($session_next_question_completed == 'no' && $_SESSION['session_next_question'] == 'most_important_piece_of_advice_for_feed'){		unset($_SESSION['session_next_question']); unset($_SESSION['session_id']);	header("Location: /productivity_pilots/");exit();}

header("Location: ../sessions/standard.php");exit();


?>