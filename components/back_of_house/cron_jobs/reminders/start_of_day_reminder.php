<?php
if(!isset($_SESSION)){session_start();}


//








//let's just send reminders at 8am every day for now....
//so all we need to do is....
//see if it is just after 8am in Brisbane
$brisbane_basic_time = $_SERVER['REQUEST_TIME'] + 10*60*60;//the end is just an adjustment for poor coding and knowledge of time stuff
//echo "<br>";	


//by using gmdate then the adjustment above will match the GMT timezone - in the future this could match // be found from for every user - but for now this isn't required as everyone is within the current timezone(ish) Australia at least 
$Brisbane_hour 			= gmdate("H", $brisbane_basic_time);
$todays_date_in_Brisbane  	= gmdate("Y-m-d", $brisbane_basic_time);





if($Brisbane_hour == '07'){
	//check for reminders that are due today	
	echo $sql = "	SELECT *
			FROM reminders
			WHERE latest_version = 'yes' 
			AND email_attempted = 'no'
			AND due = '".$todays_date_in_Brisbane."'";	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$reminder_ids_to_check[$i] = $row['reminder_id'];
		$user_ids_to_check[$i] = $row['for_user_id'];
		$i = $i+1;
	}
	
	echo "<br>";	
	var_dump($user_ids_to_check);
	echo "<br>";	
	var_dump($reminder_ids_to_check);
		
	$number_to_end_at = count($user_ids_to_check);
	for($i=0; $i<$number_to_end_at; $i++){
		
		$sql = "SELECT * FROM user_account_details WHERE user_id ='".$user_ids_to_check[$i]."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
		
		//send the email
		$email		= $row['email'];
		$first_name	= $row['first_name'];
		$second_name	= $row['second_name'];
		$pilots_id	= $row['pilots_id'];
		
		$_SESSION['viewing_client_first_name'] 	= $first_name;
		$_SESSION['viewing_client_last_name']	= $second_name;	
	echo	$_SESSION['viewing_client_email']	= $email;
		
		$sql = "SELECT * FROM reminders WHERE reminder_id ='".$reminder_ids_to_check[$i]."'";				
		$result = mysqli_query($conn, $sql);			
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		

		
		if($row['primary_folder'] == 'profile'){	
				if($row['secondary_folder'] == 'progress'){	$reminder_type = "a ".strtoupper($row['secondary_folder']);}		
				if($row['secondary_folder'] == 'wellbeing'){	$reminder_type = "a ".strtoupper($row['secondary_folder']);}
				if($row['secondary_folder'] == 'flow'){		$reminder_type = "a ".strtoupper($row['secondary_folder']);}					
				/// future questions don't send emails or remind the client as they dont exist for the client
		}
		if($row['primary_folder'] == 'business'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'products'	){	$reminder_type = "a PRODUCTS";}	
					if($row['secondary_folder'] == 'services'	){	$reminder_type = "a SERVICES";}
				}
				if($row['tertiary_folder'] == 'item'){
					if($row['secondary_folder'] == 'products'	){	$reminder_type = "a PRODUCT";}	
					if($row['secondary_folder'] == 'services'	){	$reminder_type = "a SERVICE";}	
				}											
			}
		if($row['primary_folder'] == 'network'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'people'){			$reminder_type = "PEOPLE";}		
					if($row['secondary_folder'] == 'businesses'){		$reminder_type = "BUSINESSES";}	
					if($row['secondary_folder'] == 'groups'){			$reminder_type = "GROUPS";}
				}
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'people'){			$reminder_type = "a PERSON";}		
					if($row['secondary_folder'] == 'businesses'){		$reminder_type = "a BUSINESS";}	
					if($row['secondary_folder'] == 'groups'){			$reminder_type = "a GROUP";}
				}
			}
		if($row['primary_folder'] == 'biz_dev'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'events'){			$reminder_type = "an EVENTS";}
					if($row['secondary_folder'] == 'one_to_ones'){		$reminder_type = "a ONE-TO-ONES";}		
					if($row['secondary_folder'] == 'referrers'){		$reminder_type = "a REFERRERS";}
				}	
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'events'){			$reminder_type = "an EVENT";}
					if($row['secondary_folder'] == 'one_to_ones'){		$reminder_type = "a ONE-TO-ONE";}		
					if($row['secondary_folder'] == 'referrers'){		$reminder_type = "a REFERRER";}
				}
			}					
		if($row['primary_folder'] == 'marketing'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'target_markets'){	$reminder_type = "a TARGET MARKETS";}		
					if($row['secondary_folder'] == 'channels'){			$reminder_type = "a MARKETING CHANNELS";}	
					if($row['secondary_folder'] == 'angles'){			$reminder_type = "a MARKETING ANGLES";}
					if($row['secondary_folder'] == 'promotions'){		$reminder_type = "a PROMOTIONS";}						
				}
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'target_markets'){	$reminder_type = "a TARGET market";}		
					if($row['secondary_folder'] == 'channels'){			$reminder_type = "a MARKETING CHANNEL";}	
					if($row['secondary_folder'] == 'angles'){			$reminder_type = "a MARKETING ANGLES";}
					if($row['secondary_folder'] == 'promotions'){		$reminder_type = "a PROMOTION";}						
				}
			}	
		if($row['primary_folder'] == 'sales'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'new_potentials'){		$reminder_type = "NEW POTENTIALS";}		
					if($row['secondary_folder'] == 'potential_upsells'){	$reminder_type = "POTENTIAL UPSELLS";}	
					if($row['secondary_folder'] == 'recurring_sales'){		$reminder_type = "RECURRING SALES";}
					if($row['secondary_folder'] == 'all'){					$reminder_type = "ALL SALES";}					
				}	
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'new_potentials'){		$reminder_type = "a NEW POTENTIAL";}		
					if($row['secondary_folder'] == 'potential_upsells'){	$reminder_type = "a POTENTIAL UPSELL";}	
					if($row['secondary_folder'] == 'recurring_sales'){		$reminder_type = "a RECURRING SALE";}
					if($row['secondary_folder'] == 'all'){					$reminder_type = "a SALE";}					
				}
			}			
		if($row['primary_folder'] == 'management'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'clients'){	$reminder_type = "a CLIENTS";}	
					if($row['secondary_folder'] == 'systems'){	$reminder_type = "a SYSTEMS";}	
					if($row['secondary_folder'] == 'staff'	){	$reminder_type = "your STAFF";}
					if($row['secondary_folder'] == 'assets'	){	$reminder_type = "your ASSETS";}
					if($row['secondary_folder'] == 'other'	){	$reminder_type = "your MANAGEMENT";}
				}
				if($row['tertiary_folder'] == 'item'){
					if($row['secondary_folder'] == 'clients'){	$reminder_type = "a CLIENT";}	
					if($row['secondary_folder'] == 'systems'){	$reminder_type = "a SYSTEMS";}	
					if($row['secondary_folder'] == 'staff'	){	$reminder_type = "a STAFF MEMBER";}
					if($row['secondary_folder'] == 'assets'	){	$reminder_type = "an ASSET";}
					if($row['secondary_folder'] == 'other'	){	$reminder_type = "a MANAGEMENT TOPIC";}			
				}											
			}
		if($row['primary_folder'] == 'wheelhouse'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'dreams'		){	$reminder_type = "your DREAMS";}		
					if($row['secondary_folder'] == 'goals'		){	$reminder_type = "your GOALS";}	
					if($row['secondary_folder'] == 'milestones'	){	$reminder_type = "your MILESTONES";}	
					if($row['secondary_folder'] == 'tasks'		){	$reminder_type = "your TASKS";}
					if($row['secondary_folder'] == 'issues'		){	$reminder_type = "your ISSUES";}	
				}							
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'dreams'		){	$reminder_type = "a DREAM";}		
					if($row['secondary_folder'] == 'goals'		){	$reminder_type = "a GOAL";}	
					if($row['secondary_folder'] == 'milestones'	){	$reminder_type = "a MILESTONE";}	
					if($row['secondary_folder'] == 'tasks'		){	$reminder_type = "a TASK";}
					if($row['secondary_folder'] == 'issues'		){	$reminder_type = "an ISSUE";}	
				}
			}
		if($row['primary_folder'] == 'activities'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'all'			){	$reminder_type = "all your activities";}		
					if($row['secondary_folder'] == 'doing'			){	$reminder_type = "your doing activities";}	
					if($row['secondary_folder'] == 'planning'		){	$reminder_type = "your planning activities";}	
					if($row['secondary_folder'] == 'managing'		){	$reminder_type = "your managing activities";}	
					if($row['secondary_folder'] == 'supporting'		){	$reminder_type = "your supporting activities";}	
					if($row['secondary_folder'] == 'administrating'	){	$reminder_type = "your administrating activities";}	
					if($row['secondary_folder'] == 'growing'		){	$reminder_type = "your growing activities";}	
				}							
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'all'			){	$reminder_type = "an activity";}		
					if($row['secondary_folder'] == 'doing'			){	$reminder_type = "a doing activity";}	
					if($row['secondary_folder'] == 'planning'		){	$reminder_type = "a planning activity";}	
					if($row['secondary_folder'] == 'managing'		){	$reminder_type = "a managing activity";}
					if($row['secondary_folder'] == 'supporting'		){	$reminder_type = "a supporting activity";}	
					if($row['secondary_folder'] == 'administrating'	){	$reminder_type = "a administrating activity";}	
					if($row['secondary_folder'] == 'growing'		){	$reminder_type = "a growing activity";}
				}
			}	
		if($row['primary_folder'] == 'issues'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'all'		){	$reminder_type = "your issues";}		
					if($row['secondary_folder'] == 'critical'	){	$reminder_type = "your critical issues";}	
					if($row['secondary_folder'] == 'important'	){	$reminder_type = "your important issues";}	
					if($row['secondary_folder'] == 'other'		){	$reminder_type = "your other issues";}	
				}							
				if($row['tertiary_folder'] == 'item'){	
					if($row['secondary_folder'] == 'all'		){	$reminder_type = "an issues";}		
					if($row['secondary_folder'] == 'critical'	){	$reminder_type = "a critical issues";}	
					if($row['secondary_folder'] == 'important'	){	$reminder_type = "an important issue";}	
					if($row['secondary_folder'] == 'other'		){	$reminder_type = "an low priority issue";}
				}
			}	
		if($row['primary_folder'] == 'upgrades'){
				if($row['tertiary_folder'] != 'item'){	
					if($row['secondary_folder'] == 'homework'	){	$reminder_type = "HOMEWORK";}						
					if($row['secondary_folder'] == 'planned'	){	$reminder_type = "PLANNED UPGRADES";}		
					if($row['secondary_folder'] == 'underway'	){	$reminder_type = "UNDERWAY UPGRADES";}	
					if($row['secondary_folder'] == 'completed'	){	$reminder_type = "COMPLETED UPGRADES";}	
					if($row['secondary_folder'] == 'planned'	){	$reminder_type = "ALL UPGRADES";}	
				}
				if($row['tertiary_folder'] == 'item'){
					if($row['secondary_folder'] == 'homework'	){	$reminder_type = "a HOMEWORK UPGRADE";}	
					if($row['secondary_folder'] == 'planned'	){	$reminder_type = "a PLANNED UPGRADE";}		
					if($row['secondary_folder'] == 'underway'	){	$reminder_type = "a UNDERWAY UPGRADE";}	
					if($row['secondary_folder'] == 'completed'	){	$reminder_type = "a COMPLETED UPGRADE";}
					if($row['secondary_folder'] == 'planned'	){	$reminder_type = "a PLANNED UPGRADE";}			
				}										
			}

		if($row['primary_folder'] == 'results'){
				if($row['secondary_folder'] == 'kpis'				){	$reminder_type = "a KPI";}		
				if($row['secondary_folder'] == 'revenue_and_profit'	){	$reminder_type = "a REVENUE AND PROFIT";}	
				if($row['secondary_folder'] == 'revenue_and_income'	){	$reminder_type = "a REVENUE AND INCOME";}	
				if($row['secondary_folder'] == 'income_and_hours'	){	$reminder_type = "a INCOME AND HOURS";}	
				if($row['secondary_folder'] == 'productivity'		){	$reminder_type = "a PRODUCTIVITY";}								
			}

		
		
	//maybe useful in the admin section of the system	
	//	if($row['secondary_folder'] == 'homework'){	$reminder_type = "a ".$row['secondary_folder'];}	

		
//		echo $reminder_type;
		
		$_SESSION['primary_folder'] 	= $row['primary_folder'];
		$_SESSION['secondary_folder'] 	= $row['secondary_folder'];		
		$_SESSION['tertiary_folder'] 	= $row['tertiary_folder'];
		$_SESSION['quaternary_folder'] 	= $row['quaternary_folder'];
		$_SESSION['item_id_from_url'] 	= $row['item_id_from_url'];
								
		//then finally we run the notification and alert system
		//create alert notification and send email iff required
		$notification_type = 'reminder';
		//also we must set two user_id variables
		$_SESSION['user_id']	=	$user_ids_to_check[$i];
		$to_user_id		= 	$pilots_id;
		
		require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
		
		//then add the date part to this as well and we are done
		//set the icon to red
		$sql = "UPDATE reminders
			SET email_attempted = 'yes' 
			WHERE reminder_id = '".$reminder_ids_to_check[$i]."'";
		$result = mysqli_query($conn, $sql);
				
	
	}
}