<?php
if(!isset($_SESSION)){session_start();}

//need to run a test for is today the day up here an include in the SQL search
//then we check against the start of their day
$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
echo "<br>";	
echo $todays_date_as_per_users_timezone = date("Y-m-d", $users_current_time);

	
	
//for all users
//if user_services_active_per_user has productivity plus on and the email alert is on too in user_email_settings
echo $sql = "	SELECT *
		FROM reminders
		WHERE latest_version = 'yes' 
		AND email_attempted = 'no'
		AND due = '".$todays_date_as_per_users_timezone."'";	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$user_ids_to_check[$i] = $row['for_user_id'];
$i = $i+1;
}

$user_ids_to_check = array_unique($user_ids_to_check);
$user_ids_to_check = array_values($user_ids_to_check);

$number_to_end_at = count($user_ids_to_check);

for($i=0; $i<$number_to_end_at; $i++){

echo	$user_id = $user_ids_to_check[$i];

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".$user_id."'";
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

		
	if($users_day_of_the_week == '1'){$twenty_four_hr_start_of_work_time = $row['am_monday'];		}
	if($users_day_of_the_week == '2'){$twenty_four_hr_start_of_work_time = $row['am_tuesday'];	}
	if($users_day_of_the_week == '3'){$twenty_four_hr_start_of_work_time = $row['am_wednesday'];	}
	if($users_day_of_the_week == '4'){$twenty_four_hr_start_of_work_time = $row['am_thursday'];	}
	if($users_day_of_the_week == '5'){$twenty_four_hr_start_of_work_time = $row['am_friday'];		}
	if($users_day_of_the_week == '6'){$twenty_four_hr_start_of_work_time = $row['am_saturday'];	}
	if($users_day_of_the_week == '0'){$twenty_four_hr_start_of_work_time = $row['am_sunday'];		}
	
	
	//50 means they have stated they are not working
	if($twenty_four_hr_start_of_work_time != 50){
		

	
	
echo "<br>Complete end of work time<br>";	
	echo	$complete_start_of_work_time = $twenty_four_hr_start_of_work_time*60*60 + $users_current_date_in_unix;
	echo "<br>";	
echo date("Y-m-d\TH:i:s\Z", $complete_start_of_work_time);	
//echo "<br><br>";

	echo	$SecondsDifference = $complete_start_of_work_time - $users_current_time;
	echo "<br>";
	echo 	'minute difference '.$SecondsDifference/60;
		if($SecondsDifference > -1800 AND $SecondsDifference < 1800){
			$sql = "SELECT * FROM user_account_details WHERE user_id ='".$user_id."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
			
			//send the email
			$email		= $row['email'];
			$first_name	= $row['first_name'];
			$second_name	= $row['second_name'];

			$_SESSION['viewing_client_first_name'] 	= $first_name;
			$_SESSION['viewing_client_last_name']	= $second_name;	
			$_SESSION['viewing_client_email']	= $email;

						
			$result = mysqli_query($conn, $sql);			
						
			//then finally we run the notification and alert system
			//create alert notification and send email iff required
			$notification_type = 'reminder';
			require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
			
			//set the icon to red
echo			$sql = "UPDATE reminders
				SET email_attempted = 'yes' 
				WHERE for_user_id = '".$user_id."'";
			$result = mysqli_query($conn, $sql);
			
			
			
		}
	}
}


