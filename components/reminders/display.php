<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'flow'){

	$sql = "SELECT * FROM reminders 
		WHERE
		for_user_id		= '".$_SESSION['viewing_client_id']."' AND
		primary_folder 		= '".$_GET['primary_folder']."' AND
		secondary_folder 	= '".$_GET['secondary_folder']."' AND		
		tertiary_folder 	= '".$_GET['tertiary_folder']."' AND
		item_id			= '".$_GET['item_id']."'
		ORDER BY reminder_id DESC LIMIT 1";
	//if the date is beyond today //should probably show that somehow

	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


	echo "<style>
		.reminder_inputs{box-shadow:0px 2px 4px rgba(0, 0, 0, 0.1)}
	      </style>
	";

	if($_GET['primary_folder'] == 'profile'){	
			if($_GET['secondary_folder'] == 'wellbeing'){	$checking_up_on = "your ".$_GET['tertiary_folder'];}
			else{						$checking_up_on = "your ".$_GET['secondary_folder'];}
		}
	if($_GET['primary_folder'] == 'business'){
			if($_GET['tertiary_folder'] != 'item'){	
				if($_GET['secondary_folder'] == 'products'	){	$checking_up_on = "your products";}	
				if($_GET['secondary_folder'] == 'services'	){	$checking_up_on = "your services";}
			}
			if($_GET['tertiary_folder'] == 'item'){	
				if($_GET['secondary_folder'] == 'products'	){	$checking_up_on = "this product";}	
				if($_GET['secondary_folder'] == 'services'	){	$checking_up_on = "this service";}			
			}											
		}	
	if($_GET['primary_folder'] == 'network'){
			if($_GET['tertiary_folder'] != 'item'){	
				if($_GET['secondary_folder'] == 'groups'){		$checking_up_on = "your groups";}	
				if($_GET['secondary_folder'] == 'businesses'){		$checking_up_on = "your businesses";}		
				if($_GET['secondary_folder'] == 'people'){		$checking_up_on = "your people";}
			}
			if($_GET['tertiary_folder'] == 'item'){	
				if($_GET['secondary_folder'] == 'groups'){		$checking_up_on = "this group";}	
				if($_GET['secondary_folder'] == 'businesses'){		$checking_up_on = "this business";}		
				if($_GET['secondary_folder'] == 'people'){		$checking_up_on = "this person";}
			}		
		}
	if($_GET['primary_folder'] == 'biz_dev'){
			if($_GET['tertiary_folder'] != 'item'){			
				if($_GET['secondary_folder'] == 'events'){	$checking_up_on = "this event";}	
				if($_GET['secondary_folder'] == 'one_to_ones'){	$checking_up_on = "this one to one";}	
				if($_GET['secondary_folder'] == 'referrers'){	$checking_up_on = "this referrer";}
			}
			if($_GET['tertiary_folder'] == 'item'){			
				if($_GET['secondary_folder'] == 'events'){	$checking_up_on = "your events";}	
				if($_GET['secondary_folder'] == 'one_to_ones'){	$checking_up_on = "your one to ones";}	
				if($_GET['secondary_folder'] == 'referrers'){	$checking_up_on = "your referrers";}
			}
		}
	if($_GET['primary_folder'] == 'sales'){
			if($_GET['tertiary_folder'] != 'item'){
				if($_GET['secondary_folder'] == 'new_potentials'){	$checking_up_on = "these new potential sales";}		
				if($_GET['secondary_folder'] == 'potential_upsells'){	$checking_up_on = "these potential upsells";}	
				if($_GET['secondary_folder'] == 'recurring_sales'){	$checking_up_on = "these recurring sales";}
			}

			if($_GET['tertiary_folder'] == 'item'){
				if($_GET['secondary_folder'] == 'new_potentials'){	$checking_up_on = "this new potential sale";}		
				if($_GET['secondary_folder'] == 'potential_upsells'){	$checking_up_on = "this potential upsell";}	
				if($_GET['secondary_folder'] == 'recurring_sales'){	$checking_up_on = "this recurring sale";}
			}		
		}		
	if($_GET['primary_folder'] == 'marketing'){
			if($_GET['tertiary_folder'] != 'item'){	
				if($_GET['secondary_folder'] == 'target_markets'){	$checking_up_on = "these target markets";}		
				if($_GET['secondary_folder'] == 'channels'){		$checking_up_on = "these marketing channels";}	
				if($_GET['secondary_folder'] == 'angles'){		$checking_up_on = "these marketing angles";}	
				if($_GET['secondary_folder'] == 'promotions'){		$checking_up_on = "these promotions";}
			}	
			if($_GET['tertiary_folder'] == 'item'){	
				if($_GET['secondary_folder'] == 'target_markets'){	$checking_up_on = "this target market";}		
				if($_GET['secondary_folder'] == 'channels'){		$checking_up_on = "this marketing channel";}	
				if($_GET['secondary_folder'] == 'angles'){		$checking_up_on = "this marketing angle";}	
				if($_GET['secondary_folder'] == 'promotions'){		$checking_up_on = "this promotion";}
			}				
		}		
	if($_GET['primary_folder'] == 'wheelhouse'){
		if($_GET['tertiary_folder'] != 'item'){
			if($_GET['secondary_folder'] == 'dreams'	){	$checking_up_on = "your dreams";}		
			if($_GET['secondary_folder'] == 'goals'	){		$checking_up_on = "your goals";}	
			if($_GET['secondary_folder'] == 'milestones'){		$checking_up_on = "your milestones";}	
			if($_GET['secondary_folder'] == 'tasks'	){		$checking_up_on = "your tasks";}	
			if($_GET['secondary_folder'] == 'issues'	){	$checking_up_on = "your issues";}							
		}
		else{
			if($_GET['secondary_folder'] == 'dreams'	){	$checking_up_on = "this dream";}		
			if($_GET['secondary_folder'] == 'goals'		){	$checking_up_on = "this goal";}	
			if($_GET['secondary_folder'] == 'milestones'	){	$checking_up_on = "this milestone";}	
			if($_GET['secondary_folder'] == 'tasks'		){	$checking_up_on = "this task";}	
			if($_GET['secondary_folder'] == 'issues'	){	$checking_up_on = "this task";}			
		
		}
	}
	if($_GET['primary_folder'] == 'time'){$checking_up_on = "your time";}
	if($_GET['primary_folder'] == 'management'){
			if($_GET['tertiary_folder'] != 'item'){	
				if($_GET['secondary_folder'] == 'other'		){	$checking_up_on = "your other management areas";}		
				if($_GET['secondary_folder'] == 'assets'	){	$checking_up_on = "your assets";}	
				if($_GET['secondary_folder'] == 'systems'	){	$checking_up_on = "your systems";}	
				if($_GET['secondary_folder'] == 'staff'		){	$checking_up_on = "your staff";}
				if($_GET['secondary_folder'] == 'clients'	){	$checking_up_on = "your clients";}	
			}
			if($_GET['tertiary_folder'] == 'item'){
				if($_GET['secondary_folder'] == 'other'		){	$checking_up_on = "this management area";}		
				if($_GET['secondary_folder'] == 'assets'	){	$checking_up_on = "this business assets";}	
				if($_GET['secondary_folder'] == 'systems'	){	$checking_up_on = "this systems";}	
				if($_GET['secondary_folder'] == 'staff'		){	$checking_up_on = "this staff member";}	
				if($_GET['secondary_folder'] == 'clients'	){	$checking_up_on = "this client";}		
			}						
							
		}

	if($_GET['primary_folder'] == 'tracking'){
			if($_GET['secondary_folder'] == 'kpis'			){	$checking_up_on = "these kpis";}		
			if($_GET['secondary_folder'] == 'revenue_and_profit'	){	$checking_up_on = "your revenue and profit";}	
			if($_GET['secondary_folder'] == 'revenue_and_income'	){	$checking_up_on = "your revenue and income";}	
			if($_GET['secondary_folder'] == 'income_and_hours'	){	$checking_up_on = "your income and hours";}	
			if($_GET['secondary_folder'] == 'productivity'		){	$checking_up_on = "your productivity";}								
		}
	if($_GET['primary_folder'] == 'improvements'){
			if($_GET['tertiary_folder'] != 'item'){	
				if($_GET['secondary_folder'] == 'planned'	){	$checking_up_on = "your planned improvements";}		
				if($_GET['secondary_folder'] == 'underway'	){	$checking_up_on = "your underway improvements";}	
				if($_GET['secondary_folder'] == 'completed'	){	$checking_up_on = "your completed improvements";}	
			}
			if($_GET['tertiary_folder'] == 'item'){
				if($_GET['secondary_folder'] == 'planned'	){	$checking_up_on = "this planned improvement";}		
				if($_GET['secondary_folder'] == 'underway'	){	$checking_up_on = "this underway improvement";}	
				if($_GET['secondary_folder'] == 'completed'	){	$checking_up_on = "this completed improvement";}		
			}										
		}






	echo "<div style='width:100%;text-align:center;font-family:Comfortaa;color:#281e96;margin-top:20px;'>";
		echo "<form action='/components/reminders/submit.php' method='post'>";	
			echo "<div style='width:100%;text-align:center;'>";			
				echo "<div style='width:100%;max-width:1100px;display: inline-block;text-align:left;'>";	
					echo "Add a reminder to check on ".$checking_up_on." by the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<br>";	
					echo "<input name='date' class='secure_input reminder_inputs' style='text-align:center;font-family:Comfortaa;max-width:1100px;width:100%;float:left;' type='date'";
					if($row['date'] != '0000-00-00'){echo "value = '".$row['due']."'";}				
					echo " >";
		
					echo "<br>";
					echo "<input name='reminder' class='secure_input reminder_inputs' style='width:100%;max-width:1100px;' placeholder = 'What should you check on at this time???'";
					if($row['reminder_text'] != ''){echo "value = '".$row['reminder_text']."'";}
					echo "></input>";
					
					echo hidden_form_inputs_for_folders_and_items();
										
					echo "<input class='blue-button wide-button' style='height:45px;display:inline;' type='submit' value='Save'>";
				echo "</div>";
			echo "</div>";						
		echo "</form>";				
	echo "</div>";
	


}




?>