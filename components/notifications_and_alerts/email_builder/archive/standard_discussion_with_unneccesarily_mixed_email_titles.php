<?php
if(!isset($_SESSION)){session_start();}

if($_POST['tertiary_folder'] == 'item'){	$item = 'yes';}
if($_POST['tertiary_folder'] != 'item'){	$item = 'no';}

$email_title = $user_creating_notifications_name;


if($_POST['primary_folder'] == 'profile'){	
	if($_POST['secondary_folder'] == 'wellbeing'){
		if($_POST['tertiary_folder'] == 'health'){					$email_title .= " discussed your ".$_POST['tertiary_folder']." with you";}
		if($_POST['tertiary_folder'] == 'energy'){					$email_title .= " discussed your ".$_POST['tertiary_folder']." with you";}
		if($_POST['tertiary_folder'] == 'stress'){					$email_title .= " discussed your ".$_POST['tertiary_folder']." with you";}
		if($_POST['tertiary_folder'] == 'mood'){					$email_title .= " discussed your ".$_POST['tertiary_folder']." with you";}
	}
	if($_POST['secondary_folder'] == 'flow'){
		if($_POST['tertiary_folder'] == 'focus'){					$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}
		if($_POST['tertiary_folder'] == 'think'){					$email_title .= " discussed your thinking with you";}
		if($_POST['tertiary_folder'] == 'plan'){					$email_title .= " discussed your planning ahead with you";}
		if($_POST['tertiary_folder'] == 'vent'){					$email_title .= " discussed your venting with you";}
		if($_POST['tertiary_folder'] == 'dream'){					$email_title .= " discussed your dreams with you";}
		if($_POST['tertiary_folder'] == 'reflect'){					$email_title .= " discussed your reflections with you";}
	}

	if($_POST['secondary_folder'] == 'progress'	&&	$item == 'no'){			$email_title .= " discussed your progress with you";}
	if($_POST['secondary_folder'] == 'progress'	&&	$item == 'yes'){		$email_title .= " discussed some progress with you";}					
}
if($_POST['primary_folder'] == 'business'){
	if($_POST['secondary_folder'] == 'products'	&&	$item == 'no'){			$email_title .= " discussed your products with you";}		
	if($_POST['secondary_folder'] == 'services'	&&	$item == 'no'){			$email_title .= " discussed your services with you";}	
	if($_POST['secondary_folder'] == 'products'	&&	$item == 'yes'){		$email_title .= " discussed a product with you";}		
	if($_POST['secondary_folder'] == 'services'	&&	$item == 'yes'){		$email_title .= " discussed a service with you";}		
}	
if($_POST['primary_folder'] == 'network'){
	if($_POST['secondary_folder'] == 'businessess'	&&	$item == 'no'){			$email_title .= " commented on your businesses";}
	if($_POST['secondary_folder'] == 'groups'	&&	$item == 'no'){			$email_title .= " commented on your groups";}
	if($_POST['secondary_folder'] == 'people'	&&	$item == 'no'){			$email_title .= " commented on your people";}	
	if($_POST['secondary_folder'] == 'businessess'	&&	$item == 'yes'){		$email_title .= " commented on a business";}
	if($_POST['secondary_folder'] == 'groups'	&&	$item == 'yes'){		$email_title .= " commented on a group";}
	if($_POST['secondary_folder'] == 'people'	&&	$item == 'yes'){		$email_title .= " commented on a person";}
}
if($_POST['primary_folder'] == 'biz_dev'){
	if($_POST['secondary_folder'] == 'events'	&&	$item == 'no'){			$email_title .= " commented on your events";}
	if($_POST['secondary_folder'] == 'one_to_ones'	&&	$item == 'no'){			$email_title .= " commented on your one to ones";}
	if($_POST['secondary_folder'] == 'referrers'	&&	$item == 'no'){			$email_title .= " commented on your referrers";}	
	if($_POST['secondary_folder'] == 'events'	&&	$item == 'yes'){		$email_title .= " commented on an event";}
	if($_POST['secondary_folder'] == 'one_to_ones'	&&	$item == 'yes'){		$email_title .= " commented on a one to one";}
	if($_POST['secondary_folder'] == 'referrers'	&&	$item == 'yes'){		$email_title .= " commented on a referrer";}
}	
if($_POST['primary_folder'] == 'biz_dev'){
	if($_POST['secondary_folder'] == 'new_potentials'	&&	$item == 'no'){		$email_title .= " commented on your new potential sales";}
	if($_POST['secondary_folder'] == 'potential_upsells'	&&	$item == 'no'){		$email_title .= " commented on your potential upsells";}
	if($_POST['secondary_folder'] == 'recurring_sales'	&&	$item == 'no'){		$email_title .= " commented on your recurring sales";}	
	if($_POST['secondary_folder'] == 'new_potentials'	&&	$item == 'yes'){	$email_title .= " commented on a new potential sale";}
	if($_POST['secondary_folder'] == 'potential_upsells'	&&	$item == 'yes'){	$email_title .= " commented on a potential upsell";}
	if($_POST['secondary_folder'] == 'recurring_sales'	&&	$item == 'yes'){	$email_title .= " commented on a recurring sale";}
}	
if($_POST['primary_folder'] == 'marketing'){
	if($_POST['secondary_folder'] == 'target_markets'	&&	$item == 'no'){		$email_title .= " commented on your target markets";}
	if($_POST['secondary_folder'] == 'channels'		&&	$item == 'no'){		$email_title .= " commented on your marketing channels";}
	if($_POST['secondary_folder'] == 'angles'		&&	$item == 'no'){		$email_title .= " commented on your marketing angles";}	
	if($_POST['secondary_folder'] == 'promotions'		&&	$item == 'no'){		$email_title .= " commented on your promotions";}			
	if($_POST['secondary_folder'] == 'target_markets'	&&	$item == 'yes'){	$email_title .= " commented on a specific target market";}
	if($_POST['secondary_folder'] == 'channels'		&&	$item == 'yes'){	$email_title .= " commented on a specific marketing channel";}
	if($_POST['secondary_folder'] == 'angles'		&&	$item == 'yes'){	$email_title .= " commented on a specific marketing angle";}
	if($_POST['secondary_folder'] == 'promotions'		&&	$item == 'yes'){	$email_title .= " commented on a specific promotion";}		
}	
if($_POST['primary_folder'] == 'management'){
	if($_POST['secondary_folder'] == 'staff'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}
	if($_POST['secondary_folder'] == 'clients'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}		
	if($_POST['secondary_folder'] == 'assets'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}
	if($_POST['secondary_folder'] == 'systems'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}		
	if($_POST['secondary_folder'] == 'other'	&&	$item == 'no'){			$email_title .= " discussed your general management with you";}
	if($_POST['secondary_folder'] == 'staff'	&&	$item == 'yes'){		$email_title .= " discussed a staff member with you";}
	if($_POST['secondary_folder'] == 'clients'	&&	$item == 'yes'){		$email_title .= " discussed a client with you";}				
	if($_POST['secondary_folder'] == 'assets'	&&	$item == 'yes'){		$email_title .= " discussed an asset with you";}
	if($_POST['secondary_folder'] == 'systems'	&&	$item == 'yes'){		$email_title .= " discussed a system with you";}		
	if($_POST['secondary_folder'] == 'other'	&&	$item == 'yes'){		$email_title .= " discussed a general management topic with you";}
}	
if($_POST['primary_folder'] == 'wheelhouse'){
	if($_POST['secondary_folder'] == 'dreams'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}
	if($_POST['secondary_folder'] == 'goals'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}		
	if($_POST['secondary_folder'] == 'milestones'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}		
	if($_POST['secondary_folder'] == 'tasks'	&&	$item == 'no'){			$email_title .= " discussed your ".$_POST['secondary_folder']." with you";}
	if($_POST['secondary_folder'] == 'issues'	&&	$item == 'no'){			$email_title .= " discussed your issues with you";}				
	if($_POST['secondary_folder'] == 'dreams'	&&	$item == 'yes'){		$email_title .= " discussed a specific dream with you";}
	if($_POST['secondary_folder'] == 'goals'	&&	$item == 'yes'){		$email_title .= " discussed a specific goal with you";}		
	if($_POST['secondary_folder'] == 'milestones'	&&	$item == 'yes'){		$email_title .= " discussed a specific milestone with you";}		
	if($_POST['secondary_folder'] == 'tasks'	&&	$item == 'yes'){		$email_title .= " discussed a specific task with you";}		
	if($_POST['secondary_folder'] == 'issues'	&&	$item == 'yes'){		$email_title .= " discussed a specific with you";}
}	
if($_POST['primary_folder'] == 'results'){
	if($_POST['secondary_folder'] == 'kpis'		){					$email_title .= " discussed your KPIs with you";}
	if($_POST['secondary_folder'] == 'revenue_and_profit'){					$email_title .= " discussed your Revenue & Profit with you";}		
	if($_POST['secondary_folder'] == 'revenue_and_income'){					$email_title .= " discussed your Revenue & Income with you";}		
	if($_POST['secondary_folder'] == 'income_and_hours'	){				$email_title .= " discussed your Income & Hours with you";}		
	if($_POST['secondary_folder'] == 'productivity'	){					$email_title .= " discussed your Productivity with you";}
}	
if($_POST['primary_folder'] == 'improvements'){
	if($_POST['secondary_folder'] == 'completed'		&&	$item == 'no'){		$email_title .= " discussed your improvements with you";}
	if($_POST['secondary_folder'] == 'underway'		&&	$item == 'no'){		$email_title .= " discussed your improvements with you";}		
	if($_POST['secondary_folder'] == 'planned'		&&	$item == 'no'){		$email_title .= " discussed your improvements with you";}						
	if($_POST['secondary_folder'] == 'completed'		&&	$item == 'yes'){	$email_title .= " discussed an improvement with you";}
	if($_POST['secondary_folder'] == 'underway'		&&	$item == 'yes'){	$email_title .= " discussed an improvement with you";}		
	if($_POST['secondary_folder'] == 'planned'		&&	$item == 'yes'){	$email_title .= " discussed an improvement with you";}		
}
if($_POST['primary_folder'] == 'messages'){$email_title .= " sent you a message";}	


if($_POST['tertiary_folder']  != 'item'){$url = "/".$_POST['primary_folder']."/".$_POST['secondary_folder']."/";}
if($_POST['tertiary_folder']  == 'item'){$url = "/".$_POST['primary_folder']."/".$_POST['secondary_folder']."/item/display.php?item_id=".$_POST['item_id'];}
$_SESSION['email_title'] = $email_title;
$_SESSION['email_instruction'] = "To read and respond to your<br><span style='color:red;'> Productivity Pilot ".$_SESSION['first_name']."</span><br>just login below:";
$_SESSION['button_copy'] = "Login";