<?php
if(!isset($_SESSION)){session_start();}

if($_POST['tertiary_folder'] == 'item'){	$item = 'yes';}
if($_POST['tertiary_folder'] != 'item'){	$item = 'no';}

$email_title = $user_creating_notifications_name;

if($_POST['primary_folder'] != 'messages'){


	$email_title .= " discussed your ";
	
	
	if($_POST['primary_folder'] == 'profile'){	
		if($_POST['secondary_folder'] == 'wellbeing'){
			if($_POST['tertiary_folder'] == 'health'){					$email_title .= $_POST['tertiary_folder'];}
			if($_POST['tertiary_folder'] == 'energy'){					$email_title .= $_POST['tertiary_folder'];}
			if($_POST['tertiary_folder'] == 'stress'){					$email_title .= $_POST['tertiary_folder'];}
			if($_POST['tertiary_folder'] == 'mood'){					$email_title .= $_POST['tertiary_folder'];}
		}
		if($_POST['secondary_folder'] == 'flow'){
			if($_POST['tertiary_folder'] == 'focus'){					$email_title .= $_POST['secondary_folder'];}
			if($_POST['tertiary_folder'] == 'think'){					$email_title .= "thinking";}
			if($_POST['tertiary_folder'] == 'plan'){					$email_title .= "planning ahead";}
			if($_POST['tertiary_folder'] == 'vent'){					$email_title .= "venting";}
			if($_POST['tertiary_folder'] == 'dream'){					$email_title .= "dreams";}
			if($_POST['tertiary_folder'] == 'reflect'){					$email_title .= "reflections";}
		}
	
		if($_POST['secondary_folder'] == 'progress'	&&	$item == 'no'){			$email_title .= "progress";}
		if($_POST['secondary_folder'] == 'progress'	&&	$item == 'yes'){		$email_title .= "progress";}					
	}
	if($_POST['primary_folder'] == 'business'){
		if($_POST['secondary_folder'] == 'products'	&&	$item == 'no'){			$email_title .= "products";}		
		if($_POST['secondary_folder'] == 'services'	&&	$item == 'no'){			$email_title .= "services";}	
		if($_POST['secondary_folder'] == 'products'	&&	$item == 'yes'){		$email_title .= "product";}		
		if($_POST['secondary_folder'] == 'services'	&&	$item == 'yes'){		$email_title .= "service";}		
	}	
	if($_POST['primary_folder'] == 'network'){
		if($_POST['secondary_folder'] == 'businessess'	&&	$item == 'no'){			$email_title .= "businesses";}
		if($_POST['secondary_folder'] == 'groups'	&&	$item == 'no'){			$email_title .= "groups";}
		if($_POST['secondary_folder'] == 'people'	&&	$item == 'no'){			$email_title .= "people";}	
		if($_POST['secondary_folder'] == 'businessess'	&&	$item == 'yes'){		$email_title .= "business";}
		if($_POST['secondary_folder'] == 'groups'	&&	$item == 'yes'){		$email_title .= "group";}
		if($_POST['secondary_folder'] == 'people'	&&	$item == 'yes'){		$email_title .= "person";}
	}
	if($_POST['primary_folder'] == 'biz_dev'){
		if($_POST['secondary_folder'] == 'events'	&&	$item == 'no'){			$email_title .= "events";}
		if($_POST['secondary_folder'] == 'one_to_ones'	&&	$item == 'no'){			$email_title .= "one to ones";}
		if($_POST['secondary_folder'] == 'referrers'	&&	$item == 'no'){			$email_title .= "referrers";}	
		if($_POST['secondary_folder'] == 'events'	&&	$item == 'yes'){		$email_title .= "event";}
		if($_POST['secondary_folder'] == 'one_to_ones'	&&	$item == 'yes'){		$email_title .= "one to one";}
		if($_POST['secondary_folder'] == 'referrers'	&&	$item == 'yes'){		$email_title .= "referrer";}
	}	
	if($_POST['primary_folder'] == 'biz_dev'){
		if($_POST['secondary_folder'] == 'new_potentials'	&&	$item == 'no'){		$email_title .= "new potential sales";}
		if($_POST['secondary_folder'] == 'potential_upsells'	&&	$item == 'no'){		$email_title .= "potential upsells";}
		if($_POST['secondary_folder'] == 'recurring_sales'	&&	$item == 'no'){		$email_title .= "recurring sales";}	
		if($_POST['secondary_folder'] == 'new_potentials'	&&	$item == 'yes'){	$email_title .= "new potential sale";}
		if($_POST['secondary_folder'] == 'potential_upsells'	&&	$item == 'yes'){	$email_title .= "potential upsell";}
		if($_POST['secondary_folder'] == 'recurring_sales'	&&	$item == 'yes'){	$email_title .= "recurring sale";}
	}	
	if($_POST['primary_folder'] == 'marketing'){
		if($_POST['secondary_folder'] == 'target_markets'	&&	$item == 'no'){		$email_title .= "target markets";}
		if($_POST['secondary_folder'] == 'channels'		&&	$item == 'no'){		$email_title .= "marketing channels";}
		if($_POST['secondary_folder'] == 'angles'		&&	$item == 'no'){		$email_title .= "marketing angles";}	
		if($_POST['secondary_folder'] == 'promotions'		&&	$item == 'no'){		$email_title .= "promotions";}			
		if($_POST['secondary_folder'] == 'target_markets'	&&	$item == 'yes'){	$email_title .= "target market";}
		if($_POST['secondary_folder'] == 'channels'		&&	$item == 'yes'){	$email_title .= "marketing channel";}
		if($_POST['secondary_folder'] == 'angles'		&&	$item == 'yes'){	$email_title .= "marketing angle";}
		if($_POST['secondary_folder'] == 'promotions'		&&	$item == 'yes'){	$email_title .= "promotion";}		
	}	
	if($_POST['primary_folder'] == 'management'){
		if($_POST['secondary_folder'] == 'staff'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}
		if($_POST['secondary_folder'] == 'clients'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}		
		if($_POST['secondary_folder'] == 'assets'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}
		if($_POST['secondary_folder'] == 'systems'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}		
		if($_POST['secondary_folder'] == 'other'	&&	$item == 'no'){			$email_title .= "general management";}
		if($_POST['secondary_folder'] == 'staff'	&&	$item == 'yes'){		$email_title .= "staff member";}
		if($_POST['secondary_folder'] == 'clients'	&&	$item == 'yes'){		$email_title .= "client";}				
		if($_POST['secondary_folder'] == 'assets'	&&	$item == 'yes'){		$email_title .= "asset";}
		if($_POST['secondary_folder'] == 'systems'	&&	$item == 'yes'){		$email_title .= "system";}		
		if($_POST['secondary_folder'] == 'other'	&&	$item == 'yes'){		$email_title .= "general management";}
	}	
	if($_POST['primary_folder'] == 'wheelhouse'){
		if($_POST['secondary_folder'] == 'dreams'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}
		if($_POST['secondary_folder'] == 'goals'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}		
		if($_POST['secondary_folder'] == 'milestones'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}		
		if($_POST['secondary_folder'] == 'tasks'	&&	$item == 'no'){			$email_title .= $_POST['secondary_folder'];}
		if($_POST['secondary_folder'] == 'issues'	&&	$item == 'no'){			$email_title .= "issues";}				
		if($_POST['secondary_folder'] == 'dreams'	&&	$item == 'yes'){		$email_title .= "dream";}
		if($_POST['secondary_folder'] == 'goals'	&&	$item == 'yes'){		$email_title .= "goal";}		
		if($_POST['secondary_folder'] == 'milestones'	&&	$item == 'yes'){		$email_title .= "milestone";}		
		if($_POST['secondary_folder'] == 'tasks'	&&	$item == 'yes'){		$email_title .= "task";}		
		if($_POST['secondary_folder'] == 'issues'	&&	$item == 'yes'){		$email_title .= "issue";}
	}	
	if($_POST['primary_folder'] == 'results'){
		if($_POST['secondary_folder'] == 'kpis'		){					$email_title .= "KPIs";}
		if($_POST['secondary_folder'] == 'revenue_and_profit'){					$email_title .= "Revenue & Profit";}		
		if($_POST['secondary_folder'] == 'revenue_and_income'){					$email_title .= "Revenue & Income";}		
		if($_POST['secondary_folder'] == 'income_and_hours'	){				$email_title .= "Income & Hours";}		
		if($_POST['secondary_folder'] == 'productivity'	){					$email_title .= "Productivity";}
	}	
	if($_POST['primary_folder'] == 'improvements'){
		if($_POST['secondary_folder'] == 'completed'		&&	$item == 'no'){		$email_title .= "improvements";}
		if($_POST['secondary_folder'] == 'underway'		&&	$item == 'no'){		$email_title .= "improvements";}		
		if($_POST['secondary_folder'] == 'planned'		&&	$item == 'no'){		$email_title .= "improvements";}						
		if($_POST['secondary_folder'] == 'completed'		&&	$item == 'yes'){	$email_title .= "improvement";}
		if($_POST['secondary_folder'] == 'underway'		&&	$item == 'yes'){	$email_title .= "improvement";}		
		if($_POST['secondary_folder'] == 'planned'		&&	$item == 'yes'){	$email_title .= "improvement";}		
	}
	
	$email_title .= " with you";
}
if($_POST['primary_folder'] == 'messages'){$email_title .= " sent you a message";}	

if($_POST['tertiary_folder']  != 'item'){$url = "/".$_POST['primary_folder']."/".$_POST['secondary_folder']."/";}
if($_POST['tertiary_folder']  == 'item'){$url = "/".$_POST['primary_folder']."/".$_POST['secondary_folder']."/item/display.php?item_id=".$_POST['item_id'];}
$_SESSION['email_title'] = $email_title;
$_SESSION['email_instruction'] = "To read and respond to your<br><span style='color:red;'> Productivity Pilot ".$_SESSION['first_name']."</span><br>just login below:";
$_SESSION['button_copy'] = "Login";