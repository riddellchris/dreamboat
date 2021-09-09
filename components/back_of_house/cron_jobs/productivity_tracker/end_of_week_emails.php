<?php


if(!isset($_SESSION)){session_start();}
//for all users
//if user_services_active_per_user has productivity plus on and the email alert is on too in user_email_settings
echo $sql = "SELECT *
	FROM user_account_details
	INNER JOIN user_email_settings ON user_account_details.user_id = user_email_settings.user_id
	WHERE user_email_settings.tracker_emails = 'on' AND
	user_account_details.status = 'active'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$user_ids_to_check[$i] = $row['user_id'];
$i = $i+1;
}
$number_to_end_at = $i;



for($i=0; $i<$number_to_end_at; $i++){

	$_SESSION['user_id'] = $user_ids_to_check[$i];

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo "Users current time";	
	$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
	echo "<br>";	
	echo date("Y-m-d\TH:i:s\Z", $users_current_time);
		echo "<br>";
		
	echo $users_date_type_1 = date("Y-m-d", $users_current_time);
	echo "<br>";
echo	$users_day_of_the_week = date("w", strtotime($users_date_type_1));//start time
	echo "<br>";	
echo	$users_current_date = date("d F Y", date($users_current_time));//start time
//	echo "<br>";
//	echo(strtotime("18 May 2019") . "<br>");	
echo	$users_current_date_in_unix = strtotime($users_current_date);//start time
	echo "<br>";	

		
	if($users_day_of_the_week == '1'){$twenty_four_hr_end_of_work_time = $row['pm_monday'];		$day_to_test = 'monday';}
	if($users_day_of_the_week == '2'){$twenty_four_hr_end_of_work_time = $row['pm_tuesday'];	$day_to_test = 'tuesday';}
	if($users_day_of_the_week == '3'){$twenty_four_hr_end_of_work_time = $row['pm_wednesday'];	$day_to_test = 'wednesday';}
	if($users_day_of_the_week == '4'){$twenty_four_hr_end_of_work_time = $row['pm_thursday'];	$day_to_test = 'thursday';}
	if($users_day_of_the_week == '5'){$twenty_four_hr_end_of_work_time = $row['pm_friday'];		$day_to_test = 'friday';}
	if($users_day_of_the_week == '6'){$twenty_four_hr_end_of_work_time = $row['pm_saturday'];	$day_to_test = 'saturday';}
	if($users_day_of_the_week == '0'){$twenty_four_hr_end_of_work_time = $row['pm_sunday'];		$day_to_test = 'sunday';}
	
	
	//50 means they have stated they are not working
	if($twenty_four_hr_end_of_work_time != 50
		&& $day_to_test == $row['last_day_of_week']
	
	
		){
		

	
	
echo "<br>Complete end of work time<br>";	
	echo	$complete_end_of_work_time = $twenty_four_hr_end_of_work_time*60*60 + $users_current_date_in_unix;
	echo "<br>";	
echo date("Y-m-d\TH:i:s\Z", $complete_end_of_work_time);	
//echo "<br><br>";


	//we send end of week emails 2 hours before the end of the week 
	//assuming of course that it's the last day of the week
	echo	$SecondsDifference = $complete_end_of_work_time - 2*60*60 - $users_current_time;
	echo "<br>minutes difference";
	echo 	$SecondsDifference/60;
		if($SecondsDifference > -1800 AND $SecondsDifference < 1800){
			$sql = "SELECT * FROM user_account_details WHERE user_id ='".$_SESSION['user_id']."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
			
			//send the email
			$email		= $row['email'];
			$first_name	= $row['first_name'];
			$second_name	= $row['second_name'];
			
			$security_key = md5(rand(999, 99999));
			
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
			$sql = "INSERT INTO productivity_tracker_security (user_id, security_key, end_of_what) VALUES ('".$_SESSION['user_id']."','".$security_key."','week')";
			
			$result = mysqli_query($conn, $sql);			
						
			$url		= "https://dreamboat.com.au/tracker/incoming.php?user_id=".$_SESSION['user_id']."&security_key=".$security_key;
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/productivity_tracker/end_of_week.php";
		}
	}
}


