<?php
if(!isset($_SESSION)){session_start();}
//for all users
//if user_services_active_per_user has productivity plus on and the email alert is on too in user_email_settings
echo $sql = "SELECT *
	FROM user_account_details
	WHERE client_status = 'active' AND tracker_email_on = 'yes'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$user_ids_to_check[$i] = $row['user_id'];
$i = $i+1;
}
$number_to_end_at = $i;



for($i=0; $i<$number_to_end_at; $i++){

	$user_id = $user_ids_to_check[$i];
echo "<br>";
echo "<br>";
echo "User id = ".$user_id;

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".$user_id."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<br>";
	echo "Users current time";	
	
	
	//72,75,76 have daylight savings
	if(	$row['timezone_id'] == 72 OR
		$row['timezone_id'] == 75 OR
		$row['timezone_id'] == 76){
		$daylight_savings_time_adjustment = 60*60;
		}
	else{$daylight_savings_time_adjustment = 0;}
	
	$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60 + $daylight_savings_time_adjustment;
	

	
	//the end is just an adjustment for poor coding and knowldge of time stuff
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

		
	if($users_day_of_the_week == '1'){$twenty_four_hr_end_of_work_time = $row['pm_monday'];		}
	if($users_day_of_the_week == '2'){$twenty_four_hr_end_of_work_time = $row['pm_tuesday'];	}
	if($users_day_of_the_week == '3'){$twenty_four_hr_end_of_work_time = $row['pm_wednesday'];	}
	if($users_day_of_the_week == '4'){$twenty_four_hr_end_of_work_time = $row['pm_thursday'];	}
	if($users_day_of_the_week == '5'){$twenty_four_hr_end_of_work_time = $row['pm_friday'];		}
	if($users_day_of_the_week == '6'){$twenty_four_hr_end_of_work_time = $row['pm_saturday'];	}
	if($users_day_of_the_week == '0'){$twenty_four_hr_end_of_work_time = $row['pm_sunday'];		}
	
	
	//50 means they have stated they are not working
	if($twenty_four_hr_end_of_work_time != 50){
		

	
	
echo "<br>Complete end of work time<br>";	
	echo	$complete_end_of_work_time = $twenty_four_hr_end_of_work_time*60*60 + $users_current_date_in_unix;
	echo "<br>";	
echo date("Y-m-d\TH:i:s\Z", $complete_end_of_work_time);	
//echo "<br><br>";

	echo	$SecondsDifference = $complete_end_of_work_time - $users_current_time;
	echo "<br>";
	echo 	$SecondsDifference;
		if($SecondsDifference > -1800 AND $SecondsDifference < 1800){
			$sql = "SELECT * FROM user_account_details WHERE user_id ='".$user_id."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
			
			//send the email
			$email		= $row['email'];
			$first_name	= $row['first_name'];
			$second_name	= $row['second_name'];
			
			$security_key = md5(rand(999, 99999));
			
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
			$sql = "INSERT INTO work_diary_security (user_id, security_key) VALUES ('".$user_id."','".$security_key."')";
			
			$result = mysqli_query($conn, $sql);			
						
			$url		= "https://dreamboat.com.au/tracking/daily_improvement_program/incoming.php?user_id=".$user_id."&security_key=".$security_key;
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/work_diary/end_of_day.php";
			
			//set the icon to red
/*echo			$sql = "UPDATE user_alert_system
				SET top_nav_work_diary = 'on' 
				WHERE user_id = '".$user_id."'";
			$result = mysqli_query($conn, $sql);	*/
		}
	}
}


