<?php
if(!isset($_SESSION)){session_start();}

if(	$_GET['secondary_folder'] == 'initial_outreach' OR
	$_GET['secondary_folder'] == 'gap_filling'){ 	$incoming_clients = 'yes';}
else{												$incoming_clients = 'no';}


//if there are messages or notifications then they should show up here in time.. when that's actually happening
//don't just delete this/these comments

//SIMPLEST WAY TO BUILD IN OTHER DATA SOURCES INTO THE SYSTEM
//NOT ENTIRELY COMPUTATIONALLY OPTIMISED BUT IT'S CERTAINLY IMPORTANT
//very crude but get all alerts and notifcations out where to user id = pilots id.
//then we can highlight each user from there
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT from_user_id FROM notifications_and_alerts WHERE for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND alert_on = 'on'";

$result = mysqli_query($conn, $sql);
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$users_with_notifications[$i] = $row['from_user_id'];
	$i++;
}

$sql = "SELECT user_id, end_of_month_reviews_on_off FROM user_review_cycles";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	if($row['end_of_month_reviews_on_off'] == 'on'	){$users_with_monthly_reviews_on[$i] 	= $row['user_id'];}
	if($row['end_of_month_reviews_on_off'] == 'off'	){$users_with_monthly_reviews_off[$i] 	= $row['user_id'];}	
	$i++;
}
//var_dump($users_with_monthly_reviews_off);
//exit();



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
if($incoming_clients == 'yes'){
	echo "	<div style='text-align:center;'>
			<span class='prompt-font blink_me' style='color:red;'>";
			
				if($_GET['secondary_folder'] == 'initial_outreach'){	echo "Find the early adopters";}
				if($_GET['secondary_folder'] == 'gap_filling'){	echo "Fill the gaps";}
			
					echo "</span>
		</div>";
	require $_SERVER['DOCUMENT_ROOT']."/users/incoming_clients/funnel_chart/display.php";
}

if($incoming_clients == 'yes'){$client_gained_sql = " AND client_gained = 'no'";}
if($_GET['secondary_folder'] == 'regular_users'){$client_gained_sql = " AND (client_gained = 'yes' OR contract_sent <> '0000-00-00') ";}
$sql = "SELECT * FROM user_account_details WHERE pilots_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND client_status = 'active' AND dead = 'no' ".$client_gained_sql." ORDER BY first_name, second_name";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

//echo $sql;
//exit();
echo "<div style='width:100%;text-align:center;margin:auto;";
if($incoming_clients == 'no'){echo "padding-top:25vh;";}
echo "'>";

if($incoming_clients == 'no'){

echo "<a class='login-submit'  ";
if($_SESSION['viewing_client_id'] == $_SESSION['user_id']){echo "style='background-color:red;color:white;' ";}
else{echo "style='background-color:#13ad13;color:white;' href='/users/alterations/select_client.php?clients_user_id=".$_SESSION['user_id']."' ";}

echo ">";
if($_SESSION['viewing_client_id'] == $_SESSION['user_id']){echo "I'm selected";}
else{echo "select me";}
echo "</a>";
echo "	<br><br><br><br>";
}









if($incoming_clients == 'yes'){
	
	echo "<div style='font-family:Comfortaa;'><br><br><span style='color:red;'>Your number is ".$_SESSION['pilots_number']."</span><br><br>
	<br>
	Hi John,<br>
	I'm Chris from Dreamboat<br>
	We're stabilitising the Australian economy, so we wanted to show you how.<br>
	Would you like to see what we are doing?<br>
	Set up walkthrough for 10-15 minutes infront of computer";
	echo "<br><br>";

}
echo "<a class='login-submit' href='/users/alterations/add_new.php?page=".$_GET['secondary_folder']."' style = 'margin-bottom:50px;'>Add new</a><br><br><br>";




//CR 17.06.20 DON'T DELETE THIS!!!!
//This is extremely important 
//echo ">>if user is management - display select to view subordinates list of clients<br>";




echo "<div style='display: table;text-align:left;font-family:helvetica;text-transform:uppercase;margin-top:auto;margin-bottom:auto;margin-left:auto;margin-right:auto;'>";


echo "<style>
	.list_cell{display:table-cell;padding:10px;text-align:center;}
	</style>
";


	echo "<div style='display: table-row;'>";
		echo "<div class='list_cell'></div>";
		echo "<div class='list_cell'></div>";
		echo "<div class='list_cell'></div>";
		echo "<div class='list_cell'></div>";
		//echo "<div class='list_cell'></div>";
		//echo "<div class='list_cell'></div>";
	
if($incoming_clients == 'no'){
require_file('/components/functions/text_and_design/span_of_text_in_color.php');

	echo "<div class='list_cell'></div>";
	echo "<div class='list_cell'  style='background-color: red;'>DEMO MODULE</div>";	
	echo "<div class='list_cell'><span style='color: green;'>Just <br> wellbeing & flow</span><br>mental<br>health<br>only<br>FREE</div>";	//not released yet - will only be released to the market when auto/prompt coaching is really at an incredible standard/// don't deleted this
	echo "<div class='list_cell'><span style='color: orange;'>not<br>recommended<br>SOLO<BR>for real<br>progress</span><br>digital<br>platform<br>$25+GST</div>";  //digital platform "plus" and other modules to come will be additional to this
	echo "<div class='list_cell'><span style='color: red;'></span><br>unlimited<br>text<br>$75+GST</div>";
	echo "<div class='list_cell'><span style='color:orange;'>not<br>recommended<br>for real<br>progress</span><br>monthly<br>1/2 hour<br>session<br>$70+GST</div>";
	echo "<div class='list_cell'>fortnightly<br>1/2 hour<br>sessions<br>$130+GST</div>";
	echo "<div class='list_cell'>weekly<br>1/2 hour<br>sessions<br>$250+GST</div>";
	echo "<div class='list_cell'><span style='color:orange;'>for max<br> of 2-3<br>months to<br>start</span><br>sessions<br>$460+GST</div>";	
	echo "<div class='list_cell'>total<br>current<br>value</div>";
}
else{

//we do need to make these sortable so i can order by last calls etc
	echo "<div class='list_cell'>call<br>1<br>made</div>";
	echo "<div class='list_cell'>call<br>2<br>made</div>";
	echo "<div class='list_cell'>call<br>3<br>made</div>";
	echo "<div class='list_cell'>link to<br>slideshow<br>sent</div>";
	echo "<div class='list_cell'>Initial walkthrough and discussion had<br>had</div>";
	echo "<div class='list_cell'>invoice/contract<br>sent</div>";		
	echo "<div class='list_cell'>session<br>1<br>had</div>";
	echo "<div class='list_cell'>session<br>2<br>had</div>";
	echo "<div class='list_cell'>cooling<br>off<br>end</div>";	
	echo "<div class='list_cell'>session<br>3<br>had</div>";
	echo "<div class='list_cell'>session<br>4<br>had</div>";

}

		echo "<div class='list_cell'>proven<br>referrer</div>";		
		echo "<div class='list_cell'>locked<br>by<br>pilot</div>";
		echo "<div class='list_cell'>number<br>of<br>logins<br>recorded</div>";	
		echo "<div class='list_cell'>initial<br>password<br>changed<br>from<br>hello</div>";

		//echo "<div class='list_cell'>number<br>of<br>password<br>changes</div>";		
		//echo "<div class='list_cell'>monthly<br>reviews</div>";	
		
	echo "</div>";


function been_a_week_test($date_time_1){


	$SecondsDifference = ($_SERVER['REQUEST_TIME'] - 	 strtotime($date_time_1));
  	//$SecondsDifference = gmdate("Y-m-d\ H:i:s\ ", date($_SERVER['REQUEST_TIME'])) +10*60*60 - strtotime($date_time_1) ;

	if($SecondsDifference > 7*24*60*60 && $date_time_1 != '0000-00-00 00:00:00'){	return 'yes';exit();}
	else{return 'no'; exit();}
}




while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	echo "<div style='display: table-row;'>";
	
	if($incoming_clients == 'no'){
		echo "<div class='list_cell'><a href='/users/alterations/change_client_status.php?change_client_status_to=no&id=".$row['user_id']."' style='color: black;'><< </a></div>";
	}
		echo "<div class='list_cell'><a href='/users/alterations/mark_dead.php?id=".$row['user_id']."' style='color:red;' title='Mark this user dead'>x</a></div>";
		echo "<div class='list_cell' title='To change this users name - select them and go to /profile/details/' style='padding-left:30px;";
			if(in_array($row['user_id'], $users_with_notifications)){echo "color:orange;";}
			else{echo "color:#707070;";}
			echo "'>";
			echo $row['first_name']." ".$row['second_name'];
		echo "</div>";
		//$title = "title = 'Business name'";
		//echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_business_name.php?clients_user_id=".$row['user_id']."'>";
		//	if($row['business_name']==''){echo ' --- ';}else{echo $row['business_name'];}
		//echo "</a></div>";
		//$title = "title = 'Business website'";
		//echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_business_website.php?clients_user_id=".$row['user_id']."'> ";
		//	if($row['business_website']==''){echo ' --- ';}else{echo $row['business_website'];}
		//echo "</a></div>";
		$title = "title = 'Email address'";
		echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_email.php?clients_user_id=".$row['user_id']."'>";
			if($row['email']==''){echo ' --- ';}else{echo $row['email'];}
		echo "</a></div>";
		$title = "title = 'Phone number'";		
		echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_phone_number.php?clients_user_id=".$row['user_id']."'>";
				if($row['phone_number']==''){echo ' --- ';}else{echo $row['phone_number'];}
		echo "</a></div>";
		
		
if($incoming_clients == 'no'){


	if($row['demos_on']=='yes'){$set='no';}else{$set='yes';}
	echo"<div class='list_cell' style='background-color: red;'> <a href='/users/alterations/change_plan.php?to=demos_on&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['demos_on']=='yes'){echo " style='color: #00ff00;";}else{echo "style='color:#cecece;";}
		echo "'>";
		if($row['demos_on']==''){echo ' --- ';}else{echo $row['demos_on'];}
	echo "</a></div>";

	if($row['mental_health_platform']=='yes'){$set='no';}else{$set='yes';}
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=mental_health_platform&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['mental_health_platform']=='yes'){echo " style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['mental_health_platform']==''){echo ' --- ';}else{echo $row['mental_health_platform'];}
	echo "</a></div>";
	
	if($row['digital']=='yes'){$set='no';}else{$set='yes';}
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=digital&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['digital']=='yes'){echo " style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['digital']==''){echo ' --- ';}else{echo $row['digital'];}
	echo "</a></div>";
	if($row['text']=='yes'){$set='no';}else{$set='yes';}		
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=text&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['text']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['text']==''){echo ' --- ';}else{echo $row['text'];}
	echo "</a></div>";
	if($row['audio_monthly']=='yes'){$set='no';}else{$set='yes';}			
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=audio_monthly&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['audio_monthly']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['audio_monthly']==''){echo ' --- ';}else{echo $row['audio_monthly'];}
	echo "</a></div>";	
	if($row['audio_fortnightly']=='yes'){$set='no';}else{$set='yes';}			
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=audio_fortnightly&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['audio_fortnightly']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['audio_fortnightly']==''){echo ' --- ';}else{echo $row['audio_fortnightly'];}
	echo "</a></div>";	
	
	
	
	
	if($row['audio']=='yes'){$set='no';}else{$set='yes';}			
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=audio&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['audio']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['audio']==''){echo ' --- ';}else{echo $row['audio'];}
	echo "</a></div>";
	if($row['audio_full_hour']=='yes'){$set='no';}else{$set='yes';}			
	echo"<div class='list_cell'> <a href='/users/alterations/change_plan.php?to=audio_full_hour&clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['audio_full_hour']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		if($row['audio_full_hour']==''){echo ' --- ';}else{echo $row['audio_full_hour'];}
	echo "</a></div>";
	echo"<div class='list_cell'><a href='/users/alterations/change_value.php?clients_user_id=".$row['user_id']."'";
	
	if(	(
		$row['audio_full_hour']		=='yes' OR
		$row['audio']				=='yes' OR
		$row['text']				=='yes' OR
		$row['digital']				=='yes') &&
		$row['current_subscription_value'] =='0.00'
		
		){echo "style='color:red;' class='blink_me'";}
	else{echo "style = 'color:green;'";}
	
	echo ">$".$row['current_subscription_value']."</a></div>";	
}	

else{






	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=call_1_made&clients_user_id=".$row['user_id']."'";
			if($row['call_1_made'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			echo ">";
			if($row['call_1_made']=='yes'){echo $row['call_1_made_display_date'];}else{echo $row['call_1_made'];}
	echo "</a></div>";
	echo"<div class='list_cell'><a href='/users/alterations/change_sales.php?type=call_2_made&clients_user_id=".$row['user_id']."'";	
			if($row['call_2_made'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			
			
//	   $CurrentTime = date($_SERVER['REQUEST_TIME']);

	   //https://stackoverflow.com/questions/40905174/calculate-the-difference-between-2-timestamps-in-php
//	   $datetime1 = gmdate("Y-m-d\ H:i:s\ ", $CurrentTime);//start time
//	   $datetime2 = $time_to_check_against;//end time
	   	
	  
	  
	 //  echo ($_SERVER['REQUEST_TIME'] - 	 strtotime($row['call_1_made_date_time']))/60/60/24;exit();
	//   echo strtotime($row['call_1_made_date_time']);exit(); ;	
	//echo 		$_SERVER['REQUEST_TIME'];exit();
	// strtotime($row['call_1_made_date_time']);	
	//echo $SecondsDifference = gmdate("Y-m-d\ H:i:s\ ", date($_SERVER['REQUEST_TIME'])) +10*60*60 - strtotime($row['call_1_made_date_time'])  ;
//exit();
//	if($SecondsDifference > 7*24*60 && $date_time_1 != '0000-00-00 00:00:00'){	return 'yes';exit();}
//	else{return 'no'; exit();}
			
			//if(been_a_week_test($row['call_1_made_date_time']) == 'yes'){echo "class='blink_me'";}
			if(been_a_week_test($row['call_1_made_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['call_2_made']==''){echo $row['call_2_made_display_date'];}else{echo $row['call_2_made'];}
	echo "</a></div>";
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=call_3_made&clients_user_id=".$row['user_id']."'";	
			if($row['call_3_made'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['call_2_made_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['call_3_made']==''){echo $row['call_3_made_display_date'];}else{echo $row['call_3_made'];}
	echo "</a></div>";
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=email_sent&clients_user_id=".$row['user_id']."'";	
			if($row['email_sent'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['call_3_made_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['email_sent']==''){echo $row['email_sent_display_date'];}else{echo $row['email_sent'];}
	echo "</a></div>";
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=walkthrough_had&clients_user_id=".$row['user_id']."'";	
			if($row['walkthrough_had'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['email_sent_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['walkthrough_had']==''){echo $row['walkthrough_had_display_date'];}else{echo $row['walkthrough_had'];}
	echo "</a></div>";	
		echo"<div class='list_cell'> <a";
		if($row['contract_sent']!='0000-00-00'){echo " style='color:black;'";}
		
			echo " href='/users/alterations/change_contract_sent_date.php?clients_user_id=".$row['user_id']."'>";
			if($row['contract_sent']=='0000-00-00'){echo ' --- ';}else{
				echo date("M j, Y", strtotime($row['contract_sent']));
			}
		echo "</a></div>";		
	
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=session_1_had&clients_user_id=".$row['user_id']."'";	
			if($row['session_1_had'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['walkthrough_had_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['session_1_had']==''){echo $row['session_1_had_display_date'];}else{echo $row['session_1_had'];}
	echo "</a></div>";
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=session_2_had&clients_user_id=".$row['user_id']."'";	
			if($row['session_2_had'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['session_1_had_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['session_2_had']==''){echo $row['session_2_had_display_date'];}else{echo $row['session_2_had'];}
	echo "</a></div>";
	
		echo"<div class='list_cell'> <a ";
		
		
		
		

	  	if($row['cooling_off_date'] 	!='0000-00-00' &&
	  	   $row['contract_sent']	!='0000-00-00'){
			// Declare two dates 
		$start_date = strtotime($row['contract_sent']); 
	//echo "<br>";
		$end_date = strtotime($row['cooling_off_date']); 
			  
			// Get the difference and divide into  
			// total no. seconds 60/60/24 to get  
			// number of days 
	$difference_in_dates = ($end_date - $start_date)/60/60/24; 
		
		}
			if($difference_in_dates < 15){
				echo  "style='color: red;' title='this date is TOO close to the contract send'";
			}
			else{
				//if gap greater than 15 standard days (our base estimate for minimal 11 business day gap
				//then we can see if it has passed or not yet
				if($row['cooling_off_date']!='0000-00-00'){
					$date = new DateTime($row['cooling_off_date']);
					$now = new DateTime();
				
					if($date < $now) {
				    		echo " style='color: #00ff00;' title='this day has passed now'";
					}
					else{ 
						echo  "style='color: red;' title='this day has NOT YET passed'";
					}				
				}
			}
			echo " href='/users/alterations/change_cooling_off_date.php?clients_user_id=".$row['user_id']."'>";
			if($row['cooling_off_date']=='0000-00-00'){echo ' --- ';}else{	echo date("M j, Y", strtotime($row['cooling_off_date']));}
		echo "</a></div>";	
	
	
//exit();	
	
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=session_3_had&clients_user_id=".$row['user_id']."'";	
			if($row['session_3_had'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['session_2_had_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['session_3_had']==''){echo $row['session_3_had_display_date'];}else{echo $row['session_3_had'];}
	echo "</a></div>";
	echo"<div class='list_cell'> <a href='/users/alterations/change_sales.php?type=session_4_had&clients_user_id=".$row['user_id']."'";	
			if($row['session_4_had'] == 'no'){echo "style='color:red;'";}else{echo "style='color: green;'";}
			if(been_a_week_test($row['session_3_had_date_time']) == 'yes'){echo "class='blink_me'";}
			echo ">";
			if($row['session_4_had']==''){echo $row['session_4_had_display_date'];}else{echo $row['session_4_had'];}
	echo "</a></div>";




}	

	if($row['proven_referrer']=='yes'){$set =  "no";}	else{$set =  "yes";}
	echo"<div class='list_cell'> <a href='/users/alterations/change_referrer.php?clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['proven_referrer']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		echo $row['proven_referrer'];
	echo "</a></div>";	

		echo"<div class='list_cell'> <a href='/users/alterations/edit_lock.php?clients_user_id=".$row['user_id'];
				if($row['locked_by_pilot']=='yes'){echo "&locked=no' title='currently locked'";}
				else{echo "&locked=yes' title='currently UNlocked'";}		
		
			echo ">";
				if($row['locked_by_pilot']=='yes'){echo "<i style='color: red;' class='fas fa-key' title='currently locked&#10;click to change'></i>";}
				else{echo "<i style='color: #00ff00;' class='fas fa-key'  title='currently UNlocked&#10;click to change'></i>";}
		echo "</a></div>";		
		echo"<div class='list_cell'>";
				echo $row['number_of_logins_recorded'];
		echo "</div>";
		echo"<div class='list_cell'>";
		
				
		
				if($row['password_initial_default_changed']=='yes'){echo "<span style='color: #00ff00;'>yes</span>";}
										  else{echo "<span ";
										  
										  if($row['number_of_logins_recorded'] > 0){echo "class='blink_me'";}
										  
										  
										  
										  
										  echo "style='color: #ff0000;'>no</span>";}
		echo "</div>";		

		//echo"<div class='list_cell'>";
		//		echo $row['number_of_password_resets'];
		//echo "</div>";		
		//echo"<div class='list_cell'>";
		//	if(in_array($row['user_id'], $users_with_monthly_reviews_on)){echo "on";}
		//	if(in_array($row['user_id'], $users_with_monthly_reviews_off)){echo "off";}
		//echo "</div>";					
				
		
		if($row['user_id'] != $_SESSION['viewing_client_id']){
		echo "<div><a style='float:right;color:#13ad13;text-decoration:none;' href='/users/alterations/select_client.php?clients_user_id=".$row['user_id']."'>Select ></a></div>";
		}
		else{echo "<span style='color:red;float:right;'>selected &nbsp;&nbsp;</span>";}
		
	if($incoming_clients == 'yes'){	
		echo"<div class='list_cell'>";	
			echo "<a href='/users/alterations/change_client_status.php?change_client_status_to=yes&id=".$row['user_id']."'
				style='color:black;'>make client>></a>";
			echo "</div>";	
	}
	echo "</div>";
	echo "<br>";
}
echo "</div>";
echo "</div>";
echo "<div style='width:100%;text-align:center;margin-top:25px;margin-left:auto;margin-right:auto;font-family:Comfortaa;'>";
print_copy_for_pilots_only("
	if you pay for anything greater than or including fortnightly half hour sessions - platform access and text based discussion is included.<br>
	Below that platform access is included for both unlimited text an monthly half hour sessions
	below that platform access must be paid for at $20 a month + GST other than just free access to the mental health component of the platform.");
	echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>