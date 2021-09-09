<?php
if(!isset($_SESSION)){session_start();}

//get out the submission process for the next prompt id.
$sql = "SELECT submission_process FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$sent = 'no';



if($sent == 'no' && $row['submission_process'] == 'end_of_week_sales_marketing_and_bd_review'   ){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/reviews/end_of_week.php";}
if($sent == 'no' && $row['submission_process'] == 'contact_us_get_help'	       			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/contact_us/get_help";}
if($sent == 'no' && $row['submission_process'] == 'contact_us_provide_feedback' 		){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/contact_us/provide_feedback.php";}
if($sent == 'no' && $row['submission_process'] == 'contact_us_request_a_feature'		){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/contact_us/request_a_feature.php";}
if($sent == 'no' && $row['submission_process'] == 'contact_us_other'	       			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/contact_us/other.php";}
if($sent == 'no' && $row['submission_process'] == 'flow_loop'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/flow_loop.php";}
if($sent == 'no' && $row['submission_process'] == 'add_dream'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/add.php";}
if($sent == 'no' && $row['submission_process'] == 'add_goal'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/add_goal.php";}
if($sent == 'no' && $row['submission_process'] == 'add_milestone'				){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/add.php";}
if($sent == 'no' && $row['submission_process'] == 'add_issue'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/add_issue.php";}
if($sent == 'no' && $row['submission_process'] == 'add_task'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/add.php";}
if($sent == 'no' && $row['submission_process'] == 'productivity_tracker_end_of_day'		){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/productivity_tracker/end_of_day.php";}
if($sent == 'no' && $row['submission_process'] == 'productivity_tracker_end_of_week'		){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/productivity_tracker/end_of_week.php";}
if($sent == 'no' && $row['submission_process'] == 'productivity_tracker_end_of_month'		){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/productivity_tracker/end_of_month.php";}
if($sent == 'no' && $row['submission_process'] == 'work_diary_end_of_day'			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/work_diary/end_of_day.php";}
if($sent == 'no' && $row['submission_process'] == 'work_diary_end_of_week'			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/work_diary/end_of_week.php";}
if($sent == 'no' && $row['submission_process'] == 'work_diary_end_of_month'			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/work_diary/end_of_month.php";}
if($sent == 'no' && $row['submission_process'] == 'progress_plus_core'				){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/progress_plus/core.php";}
if($sent == 'no' && $row['submission_process'] == 'progress_plus_why'				){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/progress_plus/why.php";}
if($sent == 'no' && $row['submission_process'] == 'progress_plus_how'				){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/progress_plus/how.php";}
if($sent == 'no' && $row['submission_process'] == 'risk_assessment'				){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/risk_assessment/quarterly.php";}

if($sent == 'no' && $row['submission_process'] == 'productivity_pilot_session'			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/productivity_pilots/session.php";}
	
if($sent == 'no' && $row['submission_process'] == 'add_person'					){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/people/add.php";}

if($sent == 'no' && $row['submission_process'] == 'end_of_session_review'			){$sent = 'yes'; require $_SERVER['DOCUMENT_ROOT']."/components/inputs/coaching/audio/session_review.php";}

//in short it is broken here so let's fix that then
if($sent == 'no'){header("Location: ".$_SESSION['last_page_used']);}

?>