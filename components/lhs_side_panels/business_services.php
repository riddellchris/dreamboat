<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM  management_details WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 

    	<div  class='details-font'>Services Details</div>
	<form action='/management/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	<a class='to_history' title='View history' href='/management/view_history.php?view=standard_customer_journey'>< Standard Customer Journey</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='standard_customer_journey'   		
	placeholder='For the bulk of clients what is their customer journey?&#10;What are the steps?&#10;And why?'	
	title='For the bulk of clients what is their customer journey?&#10;What are the steps?&#10;And why?'	
	><?php echo $row['standard_customer_journey'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=intial_engagements'>< Initial engagements</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='intial_engagements'   		
	placeholder='What does the initial engagement look like normally?&#10;What else do we learn?&#10;'	
	title='What does the initial engagement look like normally?&#10;What else do we learn?&#10;'	
	><?php echo $row['intial_engagements'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=standard_projects'>< Standard projects</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='standard_projects' 		
	placeholder='What standard projects do we offer?&#10;... there will be some variations...'	
	title='What standard projects do we offer?&#10;... there will be some variations...'	
	><?php echo $row['standard_projects'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=ongoing_work'>< Ongoing work</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='ongoing_work' 		
	placeholder='What categories of ongoing work do we offer?'
	title='What categories of ongoing work do we offer?'	
	><?php echo $row['ongoing_work'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=disengagement_issues'>< Disengagement issues</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='disengagement_issues' 		
	placeholder='Why do people disengage with the service?&#10;... and how can this be avoided?'	
	title='Why do people disengage with the service?&#10;... and how can this be avoided?'	
	><?php echo $row['disengagement_issues'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=upsell_and_onsell_potential'>< Upsell & onsell potential</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='upsell_and_onsell_potential' 		
	placeholder='How can we upsell current clients?&#10;...and onsell them to more?&#10;What potential exists to do that too?'
	title='How can we upsell current clients?&#10;...and onsell them to more?&#10;What potential exists to do that too?'	
	><?php echo $row['upsell_and_onsell_potential'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=other_services_notes'>< Other notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_services_notes' 			
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'			
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php echo $row['other_services_notes'];?></textarea><br>
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>