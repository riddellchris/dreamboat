<?php
if(!isset($_SESSION)){session_start();}
//for all users
//if user_services_active_per_user has productivity plus on and the email alert is on too in user_email_settings
echo $sql = "	SELECT * FROM work_diary 
		INNER JOIN user_account_details 
		ON work_diary.user_id = user_account_details.user_id 
		WHERE work_diary.pilot_notified = 'no'";
		
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$input_ids_to_send_for[$i] 	= $row['input_id'];
	$user_id_of_client[$i]		= $row['user_id'];
	$first_name_of_client[$i]	= $row['first_name'];
	$second_name_of_client[$i]	= $row['second_name'];	
	$email_of_client[$i]		= $row['email'];
	$corresponding_pilot_id[$i] 	= $row['primary_pilots_id'];	
	$i = $i+1;
}

$number_to_end_at = $i;

for($i=0; $i<$number_to_end_at; $i++){

	$work_diary_to_send 	= $input_ids_to_send_for[$i];
	$clients_user_id 	= $user_id_of_client[$i];	
	$clients_first_name 	= $first_name_of_client[$i];
	$clients_second_name 	= $second_name_of_client[$i];	
	$email_of_client	= $email_of_client[$i];
	$pilot_to_send_to 	= $corresponding_pilot_id[$i];
	
	$sql = "SELECT * FROM user_account_details WHERE user_id ='".$pilot_to_send_to."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
	
	//send the email
	$first_name	= $row['first_name'];
	$second_name	= $row['second_name'];
	$email		= $row['email'];
				
	$url		= "https://dreamboat.com.au/messages/between.php?user_a=".$user_id."&user_b=".$clients_user_id;
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/work_diary/send_to_pilot.php";
	

	$sql = "UPDATE work_diary 
		SET pilot_notified = 'yes'
		WHERE input_id = '".$work_diary_to_send ."'";	
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);	
			
		
	
}

