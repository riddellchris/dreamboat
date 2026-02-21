<?php

require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/work_diary.php";

$mail->AddReplyTo($email_of_client, $clients_first_name." ".$clients_second_name);
$mail->From = "alerts@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress('chris.riddell@dreamboat.co' , 'Chris Riddell');  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/header_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/horizontal_line.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";

echo $sql = "SELECT * FROM risk_assessments WHERE assessment_number = '".$_SESSION['risk_assessment_insert_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$returned_result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($returned_result, MYSQLI_ASSOC);
echo "<BR><BR>";
//var_dump($row);

$impact_score = 0;
$impact_score += $row['skills_to_succeed'];
$impact_score += $row['responsibility_for_success'];
$impact_score += $row['current_success'];
$impact_score += $row['sense_of_control'];
$impact_score += $row['stressfulness'];
$impact_score += $row['supported_at_work'];
$impact_score += $row['focus_at_work'];
$impact_score += $row['satisfied_with_job'];
$impact_score += $row['supported_by_people_outside_of_work'];
$impact_score += $row['get_along_at_work'];
$impact_score += $row['sunday_nights'];
$impact_score += $row['leadership_clarity'];
$impact_score += $row['energy_at_work'];
$impact_score += $row['life_outside_work'];
$impact_score += $row['pressure_to_perform_on_time'];
$impact_score += $row['pressure_to_perform_longer_hours'];
$impact_score += $row['get_to_sleep'];
$impact_score += $row['recognistation'];
$impact_score += $row['mental_attention'];
$impact_score += $row['direction_consultation'];
$impact_score += $row['job_happiness'];
$impact_score += $row['emotional_taxation'];
$impact_score += $row['team_task_alignment'];
$impact_score += $row['team_relationship_quality'];
$impact_score += $row['co_worker_care'];
$impact_score += $row['stress_leave_risk'];
$impact_score += $row['job_change_risk'];
$impact_score += $row['open_communication'];
$impact_score += $row['get_out_of_bed'];
$impact_score += $row['switch_off_timing'];
$impact_score += $row['social_media_check'];

$productivity_score = 0;
  $productivity_score += $row['current_success'];
  $productivity_score += $row['sense_of_control'];
  $productivity_score += $row['stressfulness'];
  $productivity_score += $row['supported_at_work'];
  $productivity_score += $row['focus_at_work'];
  $productivity_score += $row['satisfied_with_job'];
//$productivity_score += $row['supported_by_people_outside_of_work'];
  $productivity_score += $row['get_along_at_work'];
//$productivity_score += $row['sunday_nights'];
  $productivity_score += $row['leadership_clarity'];
  $productivity_score += $row['energy_at_work'];
//$productivity_score += $row['life_outside_work'];
  $productivity_score += $row['pressure_to_perform_on_time'];
  $productivity_score += $row['pressure_to_perform_longer_hours'];
//$productivity_score += $row['get_to_sleep'];
//$productivity_score += $row['recognistation'];
//$productivity_score += $row['mental_attention'];
  $productivity_score += $row['direction_consultation'];
//$productivity_score += $row['job_happiness'];
//$productivity_score += $row['emotional_taxation'];
  $productivity_score += $row['team_task_alignment'];
  $productivity_score += $row['team_relationship_quality'];
//$productivity_score += $row['co_worker_care'];
  $productivity_score += $row['stress_leave_risk'];
  $productivity_score += $row['job_change_risk'];
  $productivity_score += $row['open_communication'];
//$productivity_score += $row['get_out_of_bed'];
//$productivity_score += $row['switch_off_timing'];
  $productivity_score += $row['social_media_check'];

echo $sql = "SELECT * FROM risk_assessments WHERE assessment_number = '".$_SESSION['risk_assessment_insert_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$returned_result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($returned_result, MYSQLI_ASSOC);

$result_to_display['first_name']	= $row['first_name'];
$result_to_display['last_name']		= $row['last_name'];
$result_to_display['mobile']		= $row['mobile'];
$result_to_display['work_email']	= $row['work_email'];
$result_to_display['personal_email']	= $row['personal_email'];
$result_to_display['company_name']	= $row['company_name'];
$result_to_display['business_industry']	= $row['business_industry'];
$result_to_display['current_title']	= $row['current_title'];
$result_to_display['skills_to_succeed']	= $row['skills_to_succeed'];
$result_to_display['current_salary']	= $row['current_salary'];
$result_to_display['expected_salary']	= $row['expected_salary'];
if($row['owner_staff_contractor'] == 3){$result_to_display['owner_staff_contractor'] = 'Business Owner';}
if($row['owner_staff_contractor'] == 2){$result_to_display['owner_staff_contractor'] = 'Director';}
if($row['owner_staff_contractor'] == 1){$result_to_display['owner_staff_contractor'] = 'Manager';}
if($row['owner_staff_contractor'] == 0){$result_to_display['owner_staff_contractor'] = 'Staff member';}
if($row['owner_staff_contractor'] == -1){$result_to_display['owner_staff_contractor'] = 'Contractor';}
if($row['owner_staff_contractor'] == -2){$result_to_display['owner_staff_contractor'] = 'Support staff';}
if($row['owner_staff_contractor'] == -3){$result_to_display['owner_staff_contractor'] = 'Freelancer';}


$result_to_display['people_in_organisation']	= $row['people_in_organisation'];
$result_to_display['direct_reports']		= $row['direct_reports'];
$result_to_display['under_leadership']		= $row['under_leadership'];
$result_to_display['hours_worked_a_week']		= $row['hours_worked_a_week'];
$result_to_display['hours_contracted_a_week']	= $row['hours_contracted_a_week'];
$result_to_display['hours_in_a_bad_week']		= $row['hours_in_a_bad_week'];
$result_to_display['responsibility_for_success'] = $row['responsibility_for_success'];
$result_to_display['current_success'] = $row['current_success'];
$result_to_display['sense_of_control'] = $row['sense_of_control'];
$result_to_display['stressfulness'] = $row['stressfulness'];	
$result_to_display['supported_at_work'] = $row['supported_at_work'];
$result_to_display['focus_at_work'] = $row['focus_at_work'];
$result_to_display['nights_waking_about_work'];
$result_to_display['satisfied_with_job'] = $row['satisfied_with_job'];
$result_to_display['supported_by_people_outside_of_work'] = $row['supported_by_people_outside_of_work'];
if($row['mood_after_work'] == '3'){$result_to_display['mood_after_work'] = 'Exhausted';}
if($row['mood_after_work'] == '2'){$result_to_display['mood_after_work'] = 'Energised';}
if($row['mood_after_work'] == '1'){$result_to_display['mood_after_work'] = 'Quiet';}
if($row['mood_after_work'] == '0'){$result_to_display['mood_after_work'] = 'Calm';}
if($row['mood_after_work'] == '-1'){$result_to_display['mood_after_work'] = 'Happy';}
if($row['mood_after_work'] == '-2'){$result_to_display['mood_after_work'] = 'Stormy';}
if($row['mood_after_work'] == '3'){$result_to_display['mood_after_work'] = 'Free';}

$result_to_display['get_along_at_work'] = $row['get_along_at_work'];
$result_to_display['sunday_nights'] = $row['sunday_nights'];
if($row['bullying'] == '3'){$result_to_display['bullying'] = 'yes';}
else{$result_to_display['bullying'] = 'no';}
if($row['bullying_indirect'] == '3'){$result_to_display['bullying_indirect'] = 'yes';}
else{$result_to_display['bullying_indirect'] = 'no';}
if($row['violence'] == '3'){$result_to_display['violence'] = 'yes';}
else{$result_to_display['violence'] = 'no';}

$result_to_display['leadership_clarity'] = $row['leadership_clarity'];
$result_to_display['energy_at_work'] = $row['energy_at_work'];
$result_to_display['life_outside_work'] = $row['life_outside_work'];
$result_to_display['pressure_to_perform_on_time'] = $row['pressure_to_perform_on_time'];
$result_to_display['pressure_to_perform_longer_hours'] = $row['pressure_to_perform_longer_hours'];
$result_to_display['get_to_sleep'] = $row['get_to_sleep'];
$result_to_display['recognistation'] = $row['recognistation'];
$result_to_display['mental_attention'] = $row['mental_attention'];
$result_to_display['direction_consultation'] = $row['direction_consultation'];
$result_to_display['job_happiness'] = $row['job_happiness'];
$result_to_display['emotional_taxation'] = $row['emotional_taxation'];
$result_to_display['team_task_alignment'] = $row['team_task_alignment'];
$result_to_display['team_relationship_quality'] = $row['team_relationship_quality'];
if($row['body_pains'] == '3'){$result_to_display['body_pains'] = 'yes';}
else{$result_to_display['body_pains'] = 'no';}
$result_to_display['co_worker_care'] = $row['co_worker_care'];
$result_to_display['stress_leave_risk'] = $row['stress_leave_risk'];	
$result_to_display['job_change_risk'] = $row['job_change_risk'];
$result_to_display['open_communication'] = $row['open_communication'];
$result_to_display['get_out_of_bed'] = $row['get_out_of_bed'];
$result_to_display['switch_off_timing'] = $row['switch_off_timing'];
$result_to_display['anything_else'] = $row['anything_else'];

if($row['request_support'] == '3'){$result_to_display['request_support'] = 'yes';}
else{$result_to_display['request_support'] = 'no';}
	
//this one is different but how it actually works in flow/prompts
$result_to_display['social_media_check'] = $row['social_media_check'];

$responses ='';
$responses .= "My name is:<br>".$result_to_display['first_name']." ".$result_to_display['last_name']."<br><br>";
$responses .= "Mobile number: <br>".$result_to_display['mobile']."<br><br>";
$responses .= "Work email <br>".$result_to_display['work_email']."<br><br>";
$responses .= "Personal email <br>".$result_to_display['personal_email']."<br><br>";
$responses .= "Company name <br>".$result_to_display['company_name']."<br><br>";
$responses .= "Business industry <br>".$result_to_display['business_industry']."<br><br>";
$responses .= "Role title <br>".$result_to_display['current_title']."<br><br>";
$responses .= "Do you have the skills to succeed? <br>".$result_to_display['skills_to_succeed']."<br><br>";
$responses .= "Current salary: <br>".$result_to_display['current_salary']."<br><br>";
$responses .= "Expected salary <br>".$result_to_display['expected_salary']."<br><br>";
$responses .= "Type of role: <br>".$result_to_display['owner_staff_contractor']."<br><br>";
$responses .= "Number of people in organisation: <br>".$result_to_display['people_in_organisation']."<br><br>";
$responses .= "Direct reports: <br>".$result_to_display['direct_reports']."<br><br>";
$responses .= "Under leadership: <br>".$result_to_display['under_leadership']."<br><br>";
$responses .= "Hours worked: <br>".$result_to_display['hours_worked_a_week']."<br><br>";
$responses .= "Hours contracted: <br>".$result_to_display['hours_contracted_a_week']."<br><br>";
$responses .= "Hours in a bad week: <br>".$result_to_display['hours_in_a_bad_week']."<br><br>";
$responses .= "Responsibility for success: <br>".$result_to_display['responsibility_for_success']."<br><br>";
$responses .= "Current job success <br>".$result_to_display['current_success']."<br><br>";
$responses .= "Sense of control at work <br>".$result_to_display['sense_of_control']."<br><br>";
$responses .= "Job stressfulness <br>".$result_to_display['stressfulness']."<br><br>";	
$responses .= "Supported by co-workers <br>".$result_to_display['supported_at_work']."<br><br>";
$responses .= "Ability to focus at work: <br>".$result_to_display['focus_at_work']."<br><br>";
$responses .= "Nights waking: <br>".$result_to_display['nights_waking_about_work']."<br><br>";
$responses .= "Job satisfaction: <br>".$result_to_display['satisfied_with_job']."<br><br>";
$responses .= "Supported outside work: <br>".$result_to_display['supported_by_people_outside_of_work']."<br><br>";
$responses .= "Mood after work: <br>".$result_to_display['mood_after_work']."<br><br>";
$responses .= "Get along with people at work: <br>".$result_to_display['get_along_at_work']."<br><br>";
$responses .= "Sunday night feelings: <br>".$result_to_display['sunday_nights']."<br><br>";
$responses .= "Been bullied: <br>".$result_to_display['bullying']."<br><br>";
$responses .= "Seen bullying: <br>".$result_to_display['bullying_indirect']."<br><br>";
$responses .= "Seen or experienced violence: <br>".$result_to_display['violence']."<br><br>";
$responses .= "Leadership clarity: <br>".$result_to_display['leadership_clarity']."<br><br>";
$responses .= "Energy at work: <br>".$result_to_display['energy_at_work']."<br><br>";
$responses .= "Life outside work: <br>".$result_to_display['energy_at_work']."<br><br>";
$responses .= "Pressure to perform on time: <br>".$result_to_display['pressure_to_perform_on_time']."<br><br>";
$responses .= "Pressure to perform long hours: <br>".$result_to_display['pressure_to_perform_longer_hours']."<br><br>";
$responses .= "Ease of getting to sleep: <br>".$result_to_display['get_to_sleep']."<br><br>";
$responses .= "Accurately recognised for job <br>".$result_to_display['recognistation']."<br><br>";
$responses .= "Mental attention required: <br>".$result_to_display['mental_attention']."<br><br>";
$responses .= "Consulted about direction: <br>".$result_to_display['direction_consultation']."<br><br>";
$responses .= "Job happiness <br>".$result_to_display['job_happiness']."<br><br>";
$responses .= "Emotional taxation: <br>".$result_to_display['emotional_taxation']."<br><br>";
$responses .= "Team task alignment: <br>".$result_to_display['team_task_alignment']."<br><br>";
$responses .= "Team relationship quality: <br>".$result_to_display['team_relationship_quality']."<br><br>";
$responses .= "Recent body pains: <br>".$result_to_display['body_pains']."<br><br>";
$responses .= "Capacity to care for co-worker: <br>".$result_to_display['co_worker_care']."<br><br>";
$responses .= "Stress leave risk: <br>".$result_to_display['stress_leave_risk']."<br><br>";	
$responses .= "Job change risk: <br>".$result_to_display['job_change_risk']."<br><br>";
$responses .= "Open communication: <br>".$result_to_display['open_communication']."<br><br>";
$responses .= "Ability to get out of bed: <br>".$result_to_display['get_out_of_bed']."<br><br>";
$responses .= "Ability to switch off: <br>".$result_to_display['switch_off_timing']."<br><br>";
$responses .= "Social media usage: <br>".$result_to_display['social_media_check']."<br><br>";
$responses .= "Other comments: <br>".$result_to_display['anything_else']."<br><br>";

$responses .= "<br><br>SUMMARY DATA<br><br>";
if(    	$result_to_display['bullying'] == 'no' &&
	$result_to_display['bullying_indirect'] == 'no' &&
	$result_to_display['violence'] == 'no'){$responses .= "No bullying or violence<br>";}
else{$responses .= "Some bullying and violence - check above<br>";}

//general impact score
$responses .= "Impact of:".$impact_score."<br>
	       Under 30 is low<br>
	       30-80 is moderate<br>
	       80 or more is significant<br>
	       LOWER is better - max is 186<br>";
//prior to release
//compare with sleep
//compare with stress
//compare with sense of control
//compare with any violence and or bullying      
	       
//direct productivity impact score
$responses .= "Productivity impact score:".$productivity_score."<br>
	        Under 30  is 0-10%<br>
	        Between 30 and 50 10-15%<br>
		Between 50 and 75 15-20%<br>
		Over 75 20+%<br>
	        LOWER is better - max is 108<br>";
//compare with self rated success
//compare with job happiness
//compare with job change risk


//support recommendation
$responses .= "Request support: <br>".$result_to_display['request_support']."<br><br>";	

//if violence or bullying - HR support
//if stress leave risk high - HR support
//if life happiness low - therapist
//if energy at work low - therapist
//if ability to get out of bed low - therapist
//if supported outside work low - therapist
//if request from us but the above is triggered offer both
//if 

//final results
//form in the email.

//echo $responses;
//exit();


$mail->Subject = $result_to_display['first_name']." ".$result_to_display['last_name']." completed their Workplace Mental Health Risk Assessment"; 
$mail->Body    = $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
		    font-family: helvetica;
		    font-size: 28px;
		    color: #281e96;'>Hi ".$first_name.",<br>".$result_to_display['first_name']."'s Risk Assessment responses are below:<br><br>".$responses."<br><br>".$body_bottom.$horizontal_line.$footer;
		    
		    /*   Or to message them directly just click here:</span><BR>
	<a href='".$url."'  style='min-width: 300px;
		    padding-top: 15px;
		    padding-bottom: 12px;
		    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
		    font-size: 16px;
		    font-weight: 600;
		    font-style: normal;
		    color: #281e96;
		    text-transform: uppercase;
		    text-decoration:none;
		    letter-spacing: .1em;
		    -webkit-appearance: none;
		    height: 52px;
		    border: 0px solid #f7f7f7;
		    text-align: center;
		    margin: 6px;
		    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
		    line-height: normal;
		    box-sizing: border-box;
		    background: #fafafa;
		    text-indent: 0px;
		    text-shadow: none;
		    display: inline-block;'>View full work diary response</a>*/
		    




if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to ".$first_name." ".$second_name;
}



?>