<?php
if(!isset($_SESSION)){session_start();}
//$_SESSION['user_id'] = '6';
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";




for($i = 0; $i <= 30; $i++){
	$sql = "INSERT INTO productivity_tracker_inputs (	
		user_id, 
	   	time_in_users_zone, 
	   	time_in_users_zone_unix,
	   	date_whole,
	   	date_year,
	   	date_month,
	   	date_day,
	   	dummy_intro_data,
	   	goal,
	   	goal_date,
	   	achieved,
	   	most_recent,
	   	income,
	   	minutes_worked,
	   	minutes_of_high_competency,
	   	minutes_of_average_competency,
	   	minutes_of_low_competency,
	   	minutes_of_high_value,
	   	minutes_of_average_value,
	   	minutes_of_low_value,
	   	minutes_of_high_efficiency, 
	   	minutes_of_average_efficiency, 
	   	minutes_of_low_efficiency 
	   	) 
						   	
		VALUES (
		'".mysqli_real_escape_string($conn, $_SESSION['user_id'])."',
		'".$time_in_users_zone[$i]."',
		'".$time_in_users_zone_unix[$i]."',
		'".$date_whole[$i]."',					
		'".$date_year[$i]."',
		'".$date_month[$i]."',
		'".$date_day[$i]."',
		'".$dummy_intro_data[$i]."',
		'".$goal[$i]."',
		'".$goal_date[$i]."',
		'".$achieved[$i]."',
		'".$most_recent[$i]."',
		'".$income[$i]."',
		'".$minutes_worked[$i]."',
		'".$minutes_of_high_competency[$i]."',
		'".$minutes_of_average_competency[$i]."',
		'".$minutes_of_low_competency[$i]."',
		'".$minutes_of_high_value[$i]."',
		'".$minutes_of_average_value[$i]."',
		'".$minutes_of_low_value[$i]."',
		'".$minutes_of_high_efficiency[$i]."',
		'".$minutes_of_average_efficiency[$i]."',
		'".$minutes_of_low_efficiency[$i]."')";
	
	mysqli_query($conn, $sql);
}
?>