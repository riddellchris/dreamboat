<?php
if(!isset($_SESSION)){session_start();}
//for all users
//if user_services_active_per_user has productivity plus on and the email alert is on too in user_email_settings
 $sql = "SELECT * FROM user_email_settings 
 	 INNER JOIN user_account_details 
 	 ON user_email_settings.user_id = user_account_details.user_id 
 	 WHERE 
 	 	(user_email_settings.productivity_tracker_end_of_day = 'on' 
	 	 AND user_account_details.plan = 'fortnightly')
	 	 OR  user_account_details.productivity_pilot = 'yes'
 	 	 OR user_account_details.special_tracker_list = 'yes'";
 	 	 
	 	 
 	 	 
 	 	 
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$user_ids_to_check[$i] = $row['user_id'];
$i = $i+1;
}
$number_to_end_at = $i;

var_dump($user_ids_to_check);


for($i=0; $i<$number_to_end_at; $i++){


echo "User id = ";
echo	$_SESSION['user_id'] = $user_ids_to_check[$i];

	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//	echo "Users current time";	
	$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
//	echo "<br>";	
	date("Y-m-d\TH:i:s\Z", $users_current_time);
//		echo "<br>";
		
	$users_date_type_1 = date("Y-m-d", $users_current_time);
//	echo "<br>";
	$users_day_of_the_week = date("w", strtotime($users_date_type_1));//start time
//	echo "<br>";	
	$users_current_date = date("d F Y", date($users_current_time));//start time
//	echo "<br>";
//	echo(strtotime("18 May 2019") . "<br>");	
	$users_current_date_in_unix = strtotime($users_current_date);//start time
//	echo "<br>";	

		
	if($users_day_of_the_week == '1'){$twenty_four_hr_end_of_work_time = $row['pm_monday'];		}
	if($users_day_of_the_week == '2'){$twenty_four_hr_end_of_work_time = $row['pm_tuesday'];	}
	if($users_day_of_the_week == '3'){$twenty_four_hr_end_of_work_time = $row['pm_wednesday'];	}
	if($users_day_of_the_week == '4'){$twenty_four_hr_end_of_work_time = $row['pm_thursday'];	}
	if($users_day_of_the_week == '5'){$twenty_four_hr_end_of_work_time = $row['pm_friday'];		}
	if($users_day_of_the_week == '6'){$twenty_four_hr_end_of_work_time = $row['pm_saturday'];	}
	if($users_day_of_the_week == '0'){$twenty_four_hr_end_of_work_time = $row['pm_sunday'];		}
	
	
	//50 means they have stated they are not working
	if($twenty_four_hr_end_of_work_time != 50){
		

	
	
//echo "<br>Complete end of work time<br>";	
		$complete_end_of_work_time = $twenty_four_hr_end_of_work_time*60*60 + $users_current_date_in_unix;
//	echo "<br>";	
        date("Y-m-d\TH:i:s\Z", $complete_end_of_work_time);	
//echo "<br><br>";

		$SecondsDifference = $complete_end_of_work_time - $users_current_time;
//	echo "<br>";
	 	$SecondsDifference/60;
		if($SecondsDifference > -1800 AND $SecondsDifference < 1800){
			$sql = "SELECT * FROM user_account_details WHERE user_id ='".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
			
			//send the email
			echo "<br>Send email to ";
			echo $email		= $row['email'];
			echo $first_name	= $row['first_name'];
			echo $second_name	= $row['second_name'];
			
			$security_key = md5(rand(999, 99999));
			
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
			$sql = "INSERT INTO productivity_tracker_security (user_id, security_key) VALUES ('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."','".$security_key."')";
			
			$result = mysqli_query($conn, $sql);			
						
			$url		= "https://dreamboat.com.au/productivity_tracker/incoming.php?user_id=".$_SESSION['user_id']."&security_key=".$security_key;
			require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/productivity_tracker/end_of_day.php";
			
			//set the icon to red
			$sql = "UPDATE user_alert_system
				SET top_nav_productivity_tracker = 'on' 
				WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
			$result = mysqli_query($conn, $sql);
	
		}
	}
}


