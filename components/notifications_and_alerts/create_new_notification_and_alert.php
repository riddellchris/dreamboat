<?php
if(!isset($_SESSION)){session_start();}
//this is "me" because it's always the person working on the platform that is MAKING the notificaions so to speak
$user_creating_notifications_name = $_SESSION['first_name']." ".$_SESSION['last_name'];	

if($notification_type == 'standard_discussion'){	require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/email_builder/standard_discussion.php";}
if($notification_type == 'add_new'){			require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/email_builder/added_new_item.php";}


/*
///save all this for later - it's not the biggest of issues 
//let's just test what we have and finally be done with it all
if(	$notification_type == 'deleted'	OR
	$notification_type == 'undeleted'
	){	
	if($_POST['primary_folder'] == 'profile'){
		if($_POST['secondary_folder'] == 'issues'){	$end_bit = "an issue";}
		if($_POST['secondary_folder'] == 'homework'){$end_bit = "some homework";}	
		if($_POST['secondary_folder'] == 'progress'){$end_bit = "some progress";}
	}	
	if($_POST['primary_folder'] == 'network'){
		if($_POST['secondary_folder'] == 'organisations'){$end_bit = "an organisation";}
		if($_POST['secondary_folder'] == 'people'){$end_bit = "a person";}
	}
	if($_POST['primary_folder'] == 'wheelhouse'){
		if($_POST['secondary_folder'] == 'dreams'){		$end_bit = "a dream";}	
		if($_POST['secondary_folder'] == 'milestones'){	$end_bit = "a milestone";}
		if($_POST['secondary_folder'] == 'goals'){		$end_bit = "a goal";}	
		if($_POST['secondary_folder'] == 'tasks'){		$end_bit = "a task";}		
			
	}
	if($_POST['primary_folder'] == 'management'){
		if($_POST['secondary_folder'] == 'staff'){		$end_bit = "a staff member";}	
		if($_POST['secondary_folder'] == 'clients'){		$end_bit = "a client";}
		if($_POST['secondary_folder'] == 'sales'){		$end_bit = "a sales activity";}
		if($_POST['secondary_folder'] == 'marketing'){	$end_bit = "a marketing activity";}	
		if($_POST['secondary_folder'] == 'services'){	$end_bit = "a service";}	
		if($_POST['secondary_folder'] == 'products'){	$end_bit = "a product";}	

	}
	if($_POST['primary_folder'] == 'improvements'){
		$end_bit = "an improvement";	
	}
	if(	$notification_type == 'deleted'){	$email_title = $user_creating_notifications_name." deleted ".$end_bit;	}
	if(	$notification_type == 'undeleted'){	$email_title = $user_creating_notifications_name." un-deleted ".$end_bit;	}	
	$_SESSION['email_title'] = $email_title;
	$_SESSION['email_instruction'] = "To check it out<br>just login below:";
	$_SESSION['button_copy'] = "Login";
}




if($notification_type == 'resolved'){	

}
if($notification_type == 'active'){	

}
if($notification_type == 'changed rank'){	
 changed the rank of 
 
}
if($notification_type == 'tracking_data'){	
added new tracking data
}
if($notification_type == 'left_hand_side_planning'){	

}
if($notification_type == 'title_edit'){	

}

		//slid wheelhouse
		//slid improvements
		//change rank
*/		

if($notification_type == 'reminder'){	
		
	//	echo 'in here';
		
		
		$url = "/".$_POST['primary_folder']."/".$_POST['secondary_folder']."/";
		$email_title = "You have ".$reminder_type." reminder on your Dreamboat.";
		$_SESSION['email_title'] = $email_title;
		$_SESSION['email_instruction'] = "To view and respond to it <br>just login below:";
		$_SESSION['button_copy'] = "Login";		

		$first_name = $_SESSION['viewing_client_first_name'];
		$last_name = $_SESSION['viewing_client_last_name'];	
		$email_address_for_sending = $_SESSION['viewing_client_email'];
}
else{
		
	//in reminders... being a cron job we set these independt of a "session" just as client and pilot
	if($_SESSION['dreamboat_crew'] == 'yes'){$to_user_id = $_SESSION['viewing_client_id'];}
	else{$to_user_id = $_SESSION['pilots_id'];}
}


require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";

//this shouldn't be from the URL this should be from the last insert OR from the URL depending on if it is discussion or not// if it is a new creation then it should be just the new one and add an item thing in too really.
if($notification_type == 'add_new'){
	$tertiary_folder = "item";
	$related_item_id = $last_insert_id;
}
else{
	$tertiary_folder = $_POST['tertiary_folder'];
	$related_item_id = $_POST['item_id'];


}



	//add notification and alert
 	$sql = "INSERT INTO notifications_and_alerts (
 							root_db,
							primary_folder, 
							secondary_folder, 
							tertiary_folder, 
							related_id, ";
			if($notification_type == 'reminder'){ $sql .= " reminder, ";}				
							$sql.="
							description, 
							link_to,
							from_user_id, 
							for_user_id,
							background_color,
							contrast_color,
							text_color,
							degrees							
							)
		VALUES	(	'".$db."'
				'".$_POST['primary_folder']."', 						 
			 '".$_POST['secondary_folder']."',
			 '".$tertiary_folder."',
			 '".$related_item_id."', ";
			 
			if($notification_type == 'reminder'){ $sql .= " 'yes', ";}			 
		$sql .="	 
			 '".$email_title."', 
			 '".$url."', 			 
			 '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', 
			 '".$to_user_id."',
			 '".$background_color."',
			 '".$contrast_color."',
			 '".$text_color."',
			 '".$degrees."' 
			 )";
//	echo $sql;
//	exit();		 
	mysqli_query($conn, $sql);

	//do it again in reverse
	if($notification_type == 'reminder'){
		//add notification and alert going the other way
	 	$sql = "INSERT INTO notifications_and_alerts (
								primary_folder, 
								secondary_folder, 
								tertiary_folder, 
								related_id, 
								description, 
								link_to,
								from_user_id, 
								for_user_id,
								background_color,
								contrast_color,
								text_color,
								degrees							
								)
			VALUES	('".$_POST['primary_folder']."', 						 
				 '".$_POST['secondary_folder']."',
				 '".$tertiary_folder."',
				 '".$related_item_id."',
				 '".$email_title."', 
				 '".$url."', 			 
				 '".$to_user_id."',
				 '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', 
				 '".$background_color."',
				 '".$contrast_color."',
				 '".$text_color."',
				 '".$degrees."' 
				 )";
				 
		mysqli_query($conn, $sql);
	
	
	}


	if(	$notification_type == 'add_new' 		OR
		$notification_type == 'deleted' 		OR
		$notification_type == 'completed' 		OR
		$notification_type == 'resolved' 		OR
		$notification_type == 'undeleted' 		OR
		$notification_type == 'marked active' 		OR
		$notification_type == 'marked inactive' 		OR
		//slid wheelhouse
		//slid improvements
		//change rank
		//edit title
		$notification_type == 'updated_tracking_data'		OR
		$notification_type == 'updated_left_had_side_data'){	 
			
		//add to appropriate discussions feeds too
		$sql = "INSERT INTO discussion (system_notification, comment, primary_folder, secondary_folder, related_id , to_user_id, user_id)
			VALUES('yes','".$email_title."','".$_POST['primary_folder']."','".$_POST['secondary_folder']."','".$related_item_id."','".$to_user_id."','".mysqli_real_escape_string($conn, $_SESSION['user_id'])."')	";
			mysqli_query($conn, $sql);
			
		}					





//send email
//only create emails from the pilot to the client
if(
	($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['notifications_for_current_client'] == 'on') OR 
	($notification_type == 'reminder' && $row['secondary_folder'] != 'future_questions')
	){
	
//	echo 'hello';
	 	$subject = $_SESSION['email_title'];
//echo "<br>"; 	
$first_name = $_SESSION['viewing_client_first_name'];
// "<br>";
 	$last_name = $_SESSION['viewing_client_last_name'];	
//echo "<br>";
 	$email_address_for_sending = $_SESSION['viewing_client_email'];

//NO reminder emails for now so can use as an internal platform
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/test_for_notifications.php";
}