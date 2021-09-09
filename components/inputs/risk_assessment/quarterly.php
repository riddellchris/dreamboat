<?php
if(!isset($_SESSION)){session_start();}

if(isset($_POST['textarea_input'])){$response = mysqli_real_escape_string($conn, $_POST['textarea_input']);}
if(isset($_POST['standard_input'])){$response = mysqli_real_escape_string($conn, $_POST['standard_input']);}
if(isset($_GET['value'])){$response = mysqli_real_escape_string($conn, $_GET['value']);}

//echo $_GET['value'];
//exit();

if($_SESSION['next_prompt_id'] == 282){
	$value = mysqli_real_escape_string($conn, $_GET['value']);
	$sql = "INSERT INTO risk_assessments (first_name)
	        	VALUES('".$response."')";
	$result = mysqli_query($conn, $sql);
echo	$_SESSION['risk_assessment_insert_id'] = mysqli_insert_id($conn);


}
else{





	//if($_SESSION['next_prompt_id'] == 282){$column_to_update = 'first_name';}
	if($_SESSION['next_prompt_id'] == 283){$column_to_update = 'last_name';}
	if($_SESSION['next_prompt_id'] == 284){$column_to_update = 'mobile';}
	if($_SESSION['next_prompt_id'] == 285){$column_to_update = 'work_email';}
	if($_SESSION['next_prompt_id'] == 286){$column_to_update = 'personal_email';}
	if($_SESSION['next_prompt_id'] == 287){$column_to_update = 'company_name';}
	if($_SESSION['next_prompt_id'] == 288){$column_to_update = 'business_industry';}
	if($_SESSION['next_prompt_id'] == 289){$column_to_update = 'current_title';}
	if($_SESSION['next_prompt_id'] == 290){$column_to_update = 'skills_to_succeed';}
	if($_SESSION['next_prompt_id'] == 291){$column_to_update = 'current_salary';}
	if($_SESSION['next_prompt_id'] == 292){$column_to_update = 'expected_salary';}
	if($_SESSION['next_prompt_id'] == 293){$column_to_update = 'owner_staff_contractor';}
	if($_SESSION['next_prompt_id'] == 294){$column_to_update = 'people_in_organisation';}
	if($_SESSION['next_prompt_id'] == 295){$column_to_update = 'direct_reports';}
	if($_SESSION['next_prompt_id'] == 296){$column_to_update = 'under_leadership';}
	if($_SESSION['next_prompt_id'] == 297){$column_to_update = 'hours_worked_a_week';}
	if($_SESSION['next_prompt_id'] == 298){$column_to_update = 'hours_contracted_a_week';}
	if($_SESSION['next_prompt_id'] == 299){$column_to_update = 'hours_in_a_bad_week';}
	if($_SESSION['next_prompt_id'] == 300){$column_to_update = 'responsibility_for_success';}
	if($_SESSION['next_prompt_id'] == 301){$column_to_update = 'current_success';}
	if($_SESSION['next_prompt_id'] == 302){$column_to_update = 'sense_of_control';}
	if($_SESSION['next_prompt_id'] == 303){$column_to_update = 'stressfulness';}	
	if($_SESSION['next_prompt_id'] == 304){$column_to_update = 'supported_at_work';}
	if($_SESSION['next_prompt_id'] == 305){$column_to_update = 'focus_at_work';}
	if($_SESSION['next_prompt_id'] == 306){$column_to_update = 'nights_waking_about_work';}
	if($_SESSION['next_prompt_id'] == 307){$column_to_update = 'satisfied_with_job';}
	if($_SESSION['next_prompt_id'] == 308){$column_to_update = 'supported_by_people_outside_of_work';}
	if($_SESSION['next_prompt_id'] == 309){$column_to_update = 'mood_after_work';}
	if($_SESSION['next_prompt_id'] == 310){$column_to_update = 'get_along_at_work';}
	if($_SESSION['next_prompt_id'] == 311){$column_to_update = 'sunday_nights';}
	if($_SESSION['next_prompt_id'] == 312){$column_to_update = 'bullying';}
	if($_SESSION['next_prompt_id'] == 313){$column_to_update = 'bullying_indirect';}
	if($_SESSION['next_prompt_id'] == 314){$column_to_update = 'violence';}
	if($_SESSION['next_prompt_id'] == 315){$column_to_update = 'leadership_clarity';}
	if($_SESSION['next_prompt_id'] == 316){$column_to_update = 'energy_at_work';}
	if($_SESSION['next_prompt_id'] == 317){$column_to_update = 'life_outside_work';}	
	if($_SESSION['next_prompt_id'] == 318){$column_to_update = 'pressure_to_perform_on_time';}
	if($_SESSION['next_prompt_id'] == 319){$column_to_update = 'pressure_to_perform_longer_hours';}
	if($_SESSION['next_prompt_id'] == 320){$column_to_update = 'get_to_sleep';}
	if($_SESSION['next_prompt_id'] == 321){$column_to_update = 'recognistation';}
	if($_SESSION['next_prompt_id'] == 322){$column_to_update = 'mental_attention';}
	if($_SESSION['next_prompt_id'] == 323){$column_to_update = 'direction_consultation';}
	if($_SESSION['next_prompt_id'] == 324){$column_to_update = 'job_happiness';}
	if($_SESSION['next_prompt_id'] == 325){$column_to_update = 'emotional_taxation';}
	if($_SESSION['next_prompt_id'] == 326){$column_to_update = 'team_task_alignment';}
	if($_SESSION['next_prompt_id'] == 327){$column_to_update = 'team_relationship_quality';}
	if($_SESSION['next_prompt_id'] == 328){$column_to_update = 'body_pains';}
	if($_SESSION['next_prompt_id'] == 329){$column_to_update = 'co_worker_care';}
	if($_SESSION['next_prompt_id'] == 330){$column_to_update = 'stress_leave_risk';}	
	if($_SESSION['next_prompt_id'] == 331){$column_to_update = 'job_change_risk';}
	if($_SESSION['next_prompt_id'] == 332){$column_to_update = 'open_communication';}
	if($_SESSION['next_prompt_id'] == 333){$column_to_update = 'get_out_of_bed';}
	if($_SESSION['next_prompt_id'] == 334){$column_to_update = 'switch_off_timing';}
	if($_SESSION['next_prompt_id'] == 335){$column_to_update = 'anything_else';}
	if($_SESSION['next_prompt_id'] == 336){$column_to_update = 'request_support';}	
	//this one is different but how it actually works in flow/prompts
	if($_SESSION['next_prompt_id'] == 338){$column_to_update = 'social_media_check';}
	
	
	
	
	

echo	$sql = "UPDATE risk_assessments SET ".$column_to_update." = '".$response."' WHERE assessment_number = '".$_SESSION['risk_assessment_insert_id']."'";
		$result = mysqli_query($conn, $sql);
		
		//exit();


}


















//change the prompt id now
$changed = 'no';
if($_SESSION['next_prompt_id'] == 282 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 283;}
if($_SESSION['next_prompt_id'] == 283 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 284;}
if($_SESSION['next_prompt_id'] == 284 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 285;}
if($_SESSION['next_prompt_id'] == 285 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 286;}
if($_SESSION['next_prompt_id'] == 286 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 287;}
if($_SESSION['next_prompt_id'] == 287 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 288;}
if($_SESSION['next_prompt_id'] == 288 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 289;}
if($_SESSION['next_prompt_id'] == 289 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 290;}

if($_SESSION['next_prompt_id'] == 290 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 291;}
if($_SESSION['next_prompt_id'] == 291 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 292;}
if($_SESSION['next_prompt_id'] == 292 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 293;}
if($_SESSION['next_prompt_id'] == 293 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 294;}
if($_SESSION['next_prompt_id'] == 294 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 295;}
if($_SESSION['next_prompt_id'] == 295 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 296;}
if($_SESSION['next_prompt_id'] == 296 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 297;}
if($_SESSION['next_prompt_id'] == 297 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 298;}
if($_SESSION['next_prompt_id'] == 298 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 299;}
if($_SESSION['next_prompt_id'] == 299 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 300;}

if($_SESSION['next_prompt_id'] == 300 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 301;}
if($_SESSION['next_prompt_id'] == 301 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 302;}
if($_SESSION['next_prompt_id'] == 302 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 303;}
if($_SESSION['next_prompt_id'] == 303 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 304;}
if($_SESSION['next_prompt_id'] == 304 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 305;}
if($_SESSION['next_prompt_id'] == 305 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 306;}
if($_SESSION['next_prompt_id'] == 306 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 307;}
if($_SESSION['next_prompt_id'] == 307 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 308;}
if($_SESSION['next_prompt_id'] == 308 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 309;}
if($_SESSION['next_prompt_id'] == 309 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 338;}
if($_SESSION['next_prompt_id'] == 338 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 310;}

if($_SESSION['next_prompt_id'] == 310 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 311;}
if($_SESSION['next_prompt_id'] == 311 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 312;}
if($_SESSION['next_prompt_id'] == 312 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 313;}
if($_SESSION['next_prompt_id'] == 313 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 314;}
if($_SESSION['next_prompt_id'] == 314 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 315;}
if($_SESSION['next_prompt_id'] == 315 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 316;}
if($_SESSION['next_prompt_id'] == 316 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 317;}
if($_SESSION['next_prompt_id'] == 317 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 318;}
if($_SESSION['next_prompt_id'] == 318 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 319;}
if($_SESSION['next_prompt_id'] == 319 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 320;}

if($_SESSION['next_prompt_id'] == 320 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 321;}
if($_SESSION['next_prompt_id'] == 321 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 322;}
if($_SESSION['next_prompt_id'] == 322 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 323;}
if($_SESSION['next_prompt_id'] == 323 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 324;}
if($_SESSION['next_prompt_id'] == 324 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 325;}
if($_SESSION['next_prompt_id'] == 325 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 326;}
if($_SESSION['next_prompt_id'] == 326 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 327;}
if($_SESSION['next_prompt_id'] == 327 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 328;}
if($_SESSION['next_prompt_id'] == 328 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 329;}
if($_SESSION['next_prompt_id'] == 329 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 330;}

if($_SESSION['next_prompt_id'] == 330 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 331;}
if($_SESSION['next_prompt_id'] == 331 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 332;}
if($_SESSION['next_prompt_id'] == 332 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 333;}
if($_SESSION['next_prompt_id'] == 333 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 334;}
if($_SESSION['next_prompt_id'] == 334 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 335;}
if($_SESSION['next_prompt_id'] == 335 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 336;}
if($_SESSION['next_prompt_id'] == 336 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 337;require $_SERVER['DOCUMENT_ROOT']."/risk_assessments/output_email.php";}


//if($_SESSION['next_prompt_id'] == 142 && $changed == 'no'){header("Location: /tracking/daily_improvement_program/");exit();}
header("Location: /risk_assessments/questions/index.php");