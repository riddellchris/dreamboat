<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM ".$_GET['primary_folder']."_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 

    	<div  class='details-font'>Systems Details</div>
	<form action='/management/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	<a class='to_history' title='View history' href='/management/view_history.php?view=current_systems_issues'>< Current issues</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='current_systems_issues'   		
	placeholder='What current issues exist with the business systems?&#10;How can they be resolved?&#10;And why?'	
	title='What current issues exist with the business systems?&#10;How can they be resolved?&#10;And why?'	
	><?php echo $row['current_systems_issues'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=potential_systems_improvements'>< Potential improvements</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='potential_systems_improvements'   		
	placeholder='What improvements would make these systems ideal?&#10;What else would be saved or earnt?&#10;'	
	title='What does the initial engagement look like normally?&#10;What else would be saved or earnt?&#10;'	
	><?php echo $row['potential_systems_improvements'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=overdue_systems_simplifications'>< Overdue simplifications</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='overdue_systems_simplifications' 		
	placeholder='What simplifications should be applied to these systems?&#10;How can this be achieved?'	
	title='What simplifications should be applied to these systems?&#10;How can this be achieved?'	
	><?php echo $row['overdue_systems_simplifications'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=systems_user_engagement_issues'>< User engagement issues</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='systems_user_engagement_issues' 		
	placeholder='What user engagement issues are there?&#10;How can we get better engagmennt & usage?'
	title='What user engagement issues are there?&#10;How can we get better engagmennt & usage?'	
	><?php echo $row['systems_user_engagement_issues'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=business_systems_issues'>< Business issues</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='business_systems_issues' 		
	placeholder='What business issues is this all causing?&#10;... and how can these be mitigated or minimised?'	
	title='Why do people disengage with the service?&#10;... and how can these be mitigated or minimised?'	
	><?php echo $row['business_systems_issues'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=future_systems_requirements'>< Future requirements</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='future_systems_requirements' 		
	placeholder='With more growth what might be required?&#10;What planning should be done now then?'
	title='With more growth what might be required?&#10;What planning should be done now then?'	
	><?php echo $row['future_systems_requirements'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=other_systems_notes'>< Other notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_systems_notes' 			
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'			
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php echo $row['other_systems_notes'];?></textarea><br>
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>