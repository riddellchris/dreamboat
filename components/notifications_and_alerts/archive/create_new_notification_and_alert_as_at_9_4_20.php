<?php
if(!isset($_SESSION)){session_start();}
//this is "me" because it's always the person working on the platform that is MAKING the notificaions so to speak
//$user_creating_notifications_name = $_SESSION['first_name']." ".$_SESSION['last_name'];

$user_creating_notifications_name = 'You';
	
//	echo $_GET['primary_folder'];
//	echo $_GET['secondary_folder'] ;
//	echo $_GET['tertiary_folder'];
//	exit();
	
if($notification_type == 'standard_discussion'){

/*	if($_GET['primary_folder'] == 'wellbeing'){
		$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";
		if($_GET['secondary_folder'] == 'health'){	$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'energy'){	$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'stress'){	$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'mood'){	$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
	}
	if($_GET['primary_folder'] == 'flow'){
		$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";
		if($_GET['secondary_folder'] == 'focus'){	$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'think'){	$description = $user_creating_notifications_name." discussed your thinking with you";}
		if($_GET['secondary_folder'] == 'plan'){	$description = $user_creating_notifications_name." discussed your planning ahead with you";}
		if($_GET['secondary_folder'] == 'vent'){	$description = $user_creating_notifications_name." discussed your venting with you";}
		if($_GET['secondary_folder'] == 'dream'){	$description = $user_creating_notifications_name." discussed your dreams with you";}
		if($_GET['secondary_folder'] == 'reflect'){	$description = $user_creating_notifications_name." discussed your reflections with you";}
	}*/
	if($_GET['primary_folder'] == 'profile'){	
		if($_GET['tertiary_folder']  != 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";}
		if($_GET['secondary_folder'] == 'issues'			&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your issues with you";}
		if($_GET['secondary_folder'] == 'homework'			&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your homework with you";}		
		if($_GET['secondary_folder'] == 'progress'			&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your progress with you";}
		if($_GET['secondary_folder'] == 'future_questions'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your progress with you";}								
	
		if($_GET['tertiary_folder']  == 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id'];}
		if($_GET['secondary_folder'] == 'issues'			&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed an issue with you";}
		if($_GET['secondary_folder'] == 'homework'			&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed some homework with you";}		
		if($_GET['secondary_folder'] == 'progress'			&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed some progress with you";}	
		if($_GET['secondary_folder'] == 'future_questions'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed some progress with you";}					
	}
	if($_GET['primary_folder'] == 'network'){
		if($_GET['tertiary_folder']  != 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";}	
		if($_GET['secondary_folder'] == 'messages'){$description = $user_creating_notifications_name." sent you a message";}
		
		if($_GET['tertiary_folder']  == 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id'];}
		if($_GET['secondary_folder'] == 'organisations'){$description = $user_creating_notifications_name." commented on an organisation";}
		if($_GET['secondary_folder'] == 'people'){$description = $user_creating_notifications_name." commented on an person";}
	}
	if($_GET['primary_folder'] == 'wheelhouse'){
		if($_GET['tertiary_folder']  != 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";}
		if($_GET['secondary_folder'] == 'dreams'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'goals'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'milestones'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'tasks'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}				
	
		if($_GET['tertiary_folder']  == 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id'];}
		if($_GET['secondary_folder'] == 'dreams'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a dream with you";}
		if($_GET['secondary_folder'] == 'goals'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a goal with you";}		
		if($_GET['secondary_folder'] == 'milestones'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a milestone task with you";}		
		if($_GET['secondary_folder'] == 'tasks'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a specific task with you";}		
	}	
	if($_GET['primary_folder'] == 'management'){
		if($_GET['tertiary_folder']  != 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";}
		if($_GET['secondary_folder'] == 'staff'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}
		if($_GET['secondary_folder'] == 'clients'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'sales'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'marketing'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'products'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
		if($_GET['secondary_folder'] == 'services'	&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your ".$_GET['secondary_folder']." with you";}		
	
	
		if($_GET['tertiary_folder']  == 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id'];}
		if($_GET['secondary_folder'] == 'staff'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a staff member with you";}
		if($_GET['secondary_folder'] == 'clients'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a client with you";}		
		if($_GET['secondary_folder'] == 'sales'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a sales activity with you";}		
		if($_GET['secondary_folder'] == 'marketing'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a marketing & BD activity with you";}		
		if($_GET['secondary_folder'] == 'products'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a product with you";}		
		if($_GET['secondary_folder'] == 'services'	&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed a service with you";}		
	}
	if($_GET['primary_folder'] == 'tracking'){
		$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";
		if($_GET['secondary_folder'] == 'kpis'		){$description = $user_creating_notifications_name." discussed your KPIs with you";}
		if($_GET['secondary_folder'] == 'revenue_and_profit'){$description = $user_creating_notifications_name." discussed your Revenue & Profit with you";}		
		if($_GET['secondary_folder'] == 'revenue_and_income'){$description = $user_creating_notifications_name." discussed your Revenue & Income with you";}		
		if($_GET['secondary_folder'] == 'income_and_hours'	){$description = $user_creating_notifications_name." discussed your Income & Hours with you";}		
		if($_GET['secondary_folder'] == 'productivity'	){$description = $user_creating_notifications_name." discussed your Productivity with you";}
	}	
	

	if($_GET['primary_folder'] == 'improvements'){
		if($_GET['tertiary_folder']  != 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";}
		if($_GET['secondary_folder'] == 'completed'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your improvements with you";}
		if($_GET['secondary_folder'] == 'underway'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your improvements with you";}		
		if($_GET['secondary_folder'] == 'planned'		&&	$_GET['tertiary_folder'] == ''){$description = $user_creating_notifications_name." discussed your improvements with you";}						
	
		if($_GET['tertiary_folder']  == 'item'){$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id'];}
		if($_GET['secondary_folder'] == 'completed'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed an improvement with you";}
		if($_GET['secondary_folder'] == 'underway'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed an improvement with you";}		
		if($_GET['secondary_folder'] == 'planned'		&&	$_GET['tertiary_folder'] == 'item'){$description = $user_creating_notifications_name." discussed an improvement with you";}		
	}
	
	$_SESSION['email_title'] = $description;
	$_SESSION['email_instruction'] = "To read and respond to your<br><span style='color:red;'> Productivity Pilot ".$_SESSION['first_name']."</span><br>just login below:";
	$_SESSION['button_copy'] = "Login";
}

if($notification_type == 'add_new'){

	//this should really include a link and perhaps even the title of the thing.... 



	if($_SESSION['adding_new'] == 'dreams'){		$description = $user_creating_notifications_name." added a new dream to your Dreamboat";};
	if($_SESSION['adding_new'] == 'goals'){			$description = $user_creating_notifications_name." added a new goal to your Dreamboat";};
	if($_SESSION['adding_new'] == 'milestones'){		$description = $user_creating_notifications_name." added a new milestone to your Dreamboat";};
	if($_SESSION['adding_new'] == 'tasks'){			$description = $user_creating_notifications_name." added a new task to your Dreamboat";};
	if($_SESSION['adding_new'] == 'issues'){		$description = $user_creating_notifications_name." added a new issue to your Dreamboat";};
	if($_SESSION['adding_new'] == 'progress'){		$description = $user_creating_notifications_name." added a new piece of progress to your Dreamboat";};
	if($_SESSION['adding_new'] == 'homework'){		$description = $user_creating_notifications_name." added a new homework activity to your Dreamboat";};
	if($_GET['primary_folder'] == 'improvements'){	$description = $user_creating_notifications_name." added a new improvement to your Dreamboat";};
	if($_SESSION['adding_new'] == 'people'){		$description = $user_creating_notifications_name." added a new person to your Dreamboat";};
//	if($_SESSION['adding_new'] == 'people'){		$description = $user_creating_notifications_name." added a <a href=&#39;/item/display.php?item_id=".$last_insert_id."&#39;>new person</a> to your Dreamboat";};
	if($_SESSION['adding_new'] == 'organisations'){		$description = $user_creating_notifications_name." added a new organisation to your Dreamboat";};
	
	if($_SESSION['adding_new'] == 'staff'){			$description = $user_creating_notifications_name." added a new person to your Dreamboat";};
	if($_SESSION['adding_new'] == 'clients'){		$description = $user_creating_notifications_name." added a new client to your Dreamboat";};
	if($_SESSION['adding_new'] == 'sales'){			$description = $user_creating_notifications_name." added a new sales activity to your Dreamboat";};
	if($_SESSION['adding_new'] == 'marketing'){		$description = $user_creating_notifications_name." added a new marketing activity to your Dreamboat";};
	if($_SESSION['adding_new'] == 'products'){		$description = $user_creating_notifications_name." added a new product to your Dreamboat";};
	if($_SESSION['adding_new'] == 'services'){		$description = $user_creating_notifications_name." added a new service to your Dreamboat";};

	$url = $url_to_visit;
	$_SESSION['email_title'] = $description;
	$_SESSION['email_instruction'] = "To check it out<br>just login below:";
	$_SESSION['button_copy'] = "Login";

}


/*
///save all this for later - it's not the biggest of issues 
//let's just test what we have and finally be done with it all
if(	$notification_type == 'deleted'	OR
	$notification_type == 'undeleted'
	){	
	if($_GET['primary_folder'] == 'profile'){
		if($_GET['secondary_folder'] == 'issues'){	$end_bit = "an issue";}
		if($_GET['secondary_folder'] == 'homework'){$end_bit = "some homework";}	
		if($_GET['secondary_folder'] == 'progress'){$end_bit = "some progress";}
	}	
	if($_GET['primary_folder'] == 'network'){
		if($_GET['secondary_folder'] == 'organisations'){$end_bit = "an organisation";}
		if($_GET['secondary_folder'] == 'people'){$end_bit = "a person";}
	}
	if($_GET['primary_folder'] == 'wheelhouse'){
		if($_GET['secondary_folder'] == 'dreams'){		$end_bit = "a dream";}	
		if($_GET['secondary_folder'] == 'milestones'){	$end_bit = "a milestone";}
		if($_GET['secondary_folder'] == 'goals'){		$end_bit = "a goal";}	
		if($_GET['secondary_folder'] == 'tasks'){		$end_bit = "a task";}		
			
	}
	if($_GET['primary_folder'] == 'management'){
		if($_GET['secondary_folder'] == 'staff'){		$end_bit = "a staff member";}	
		if($_GET['secondary_folder'] == 'clients'){		$end_bit = "a client";}
		if($_GET['secondary_folder'] == 'sales'){		$end_bit = "a sales activity";}
		if($_GET['secondary_folder'] == 'marketing'){	$end_bit = "a marketing activity";}	
		if($_GET['secondary_folder'] == 'services'){	$end_bit = "a service";}	
		if($_GET['secondary_folder'] == 'products'){	$end_bit = "a product";}	

	}
	if($_GET['primary_folder'] == 'improvements'){
		$end_bit = "an improvement";	
	}
	if(	$notification_type == 'deleted'){	$description = $user_creating_notifications_name." deleted ".$end_bit;	}
	if(	$notification_type == 'undeleted'){	$description = $user_creating_notifications_name." un-deleted ".$end_bit;	}	
	$_SESSION['email_title'] = $description;
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
		
		echo 'in here';
		
		$url = "/".$_GET['primary_folder']."/".$_GET['secondary_folder']."/";
		$description = "You have ".$reminder_type." reminder on your Dreamboat.";
		$_SESSION['email_title'] = $description;
		$_SESSION['email_instruction'] = "To view and respond to it <br>just login below:";
		$_SESSION['button_copy'] = "Login";		

		$first_name = $_SESSION['viewing_client_first_name'];
		$last_name = $_SESSION['viewing_client_last_name'];	
		$email_address_for_sending = $_SESSION['viewing_client_email'];
}

		

if($_SESSION['dreamboat_crew'] == 'yes'){$to_user_id = $_SESSION['viewing_client_id'];}
else{$to_user_id = $_SESSION['pilots_id'];}

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";

//this shouldn't be from the URL this should be from the last insert OR from the URL depending on if it is discussion or not// if it is a new creation then it should be just the new one and add an item thing in too really.
if($notification_type == 'add_new'){
	$tertiary_folder = "item";
	$related_item_id = $last_insert_id;
}
else{
	$tertiary_folder = $_GET['tertiary_folder'];
	$related_item_id = $_GET['item_id'];


}



	//add notification and alert
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
		VALUES	('".$_GET['primary_folder']."', 						 
			 '".$_GET['secondary_folder']."',
			 '".$tertiary_folder."',
			 '".$related_item_id."', 
			 '".$description."', 
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
			VALUES	('".$_GET['primary_folder']."', 						 
				 '".$_GET['secondary_folder']."',
				 '".$tertiary_folder."',
				 '".$related_item_id."',
				 '".$description."', 
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
			VALUES('yes','".$description."','".$_GET['primary_folder']."','".$_GET['secondary_folder']."','".$related_item_id."','".$to_user_id."','".mysqli_real_escape_string($conn, $_SESSION['user_id'])."')	";
			mysqli_query($conn, $sql);
			
		}					





//send email
//only create emails from the pilot to the client
if(
	($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['notifications_for_current_client'] == 'on') OR 
	($notification_type == 'reminder' && $row['secondary_folder'] != 'future_questions')
	){
	
	echo 'hello';
	
echo 	$subject = $_SESSION['email_title'];
echo "<br>";
echo 	$first_name = $_SESSION['viewing_client_first_name'];
echo "<br>";
echo 	$last_name = $_SESSION['viewing_client_last_name'];	
echo "<br>";
echo 	$email_address_for_sending = $_SESSION['viewing_client_email'];

//NO reminder emails for now so can use as an internal platform
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/test_for_notifications.php";
}