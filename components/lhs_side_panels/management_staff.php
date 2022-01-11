<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM ".$_GET['primary_folder']."_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
 
 
    	<div  class='details-font'>Staff Details</div>
	<form action='/management/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	<a class='to_history' title='View history' href='/management/view_history.php?view=staff_vision'>< Staff vision</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='staff_vision'   		
	placeholder='What does the team look like in the future&#10;Where is it?&#10;Why?'
	title='What does the team look like in the future&#10;Where is it?&#10;Why?'
				><?php echo $row['staff_vision'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=critical_cultural_notes'>< Critical cultural notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='critical_cultural_notes' 	
	placeholder='What is the culture built around?&#10;What is it not too?'	
	title='What is the culture built around?&#10;What is it not too?'		
	><?php echo $row['critical_cultural_notes'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=hiring_channels'>< Hiring channels</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='hiring_channels' 		
	placeholder='How do you find potential staff?&#10;Where is best to look?'		
	title='How do you find potential staff?&#10;Where is best to look?'	
	><?php echo $row['hiring_channels'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=hiring_processes'>< Hiring processes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='hiring_processes' 		
	placeholder='How do you qualify staff?&#10;What are the recruitment stages?'		
	title='How do you qualify staff?&#10;What are the recruitment stages?'		
	><?php echo $row['hiring_processes'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=biggest_staffing_issues'>< Biggest issues</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='biggest_staffing_issues' 		
	placeholder='What staff issues limit or threaten supply most?&#10;What steps can be taken?'		
	title='What staff issues limit or threaten supply most?&#10;What steps can be taken?'	
	><?php echo $row['biggest_staffing_issues'];?></textarea><br>
	<a class='to_history' title='View history' href='/management/view_history.php?view=other_staff_notes'>< Other notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_staff_notes' 			
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php echo $row['other_staff_notes'];?></textarea><br>
		
	
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>