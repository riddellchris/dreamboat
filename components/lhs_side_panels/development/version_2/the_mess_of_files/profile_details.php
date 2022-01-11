<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM ".$_GET['primary_folder']."_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 





if($_SESSION['dreamboat_crew'] != 'yes'){echo "<div class='details-font'>My Summary</div>";}
else{echo "<div class='details-font'>".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."</div>";}


?>


	
	

	
	
<form action='/profile/edit_update.php' method='post' class='side_form'>

	<a class='to_history' href='/profile/view_history.php?view=backstory'>< Backstory</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='backstory' 	
	title=''	
	placeholder='What is this persons backstory?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?'
	<?php
	if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='What is this persons backstory?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?' ";}
	else{echo " title='What is your backstory?&#10;How is it influencing your direction?&#10;How is it influencing your passions?' ";}
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='What is this persons backstory?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?'";}
	else{echo "placeholder='What is your backstory?&#10;How is it influencing your direction?&#10;How is it influencing your passions?'";}
	?>		
	><?php echo $row['backstory'];?></textarea><br>


	<a class='to_history' href='/profile/view_history.php?view=skills'>< Skills</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='skills' 		
	<?php
	
	$title_and_placeholder = "What skills does this person have?&#10;How are they using them?&#10;Where are they going as a result?";
	echo " title='".$title_and_placeholder."' ";
	echo " placeholder = '".$title_and_placeholder."'";
	?>
	><?php echo $row['skills'];?></textarea><br>
<a class='to_history' href='/profile/view_history.php?view=training'>< Training</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='training' 
	
	title='What professional training have you done?&#10;How will that impact where you go?&#10'
	placeholder='What professional training have you done?&#10;How will that impact where you go?&#10'
	<?php
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['training'];?></textarea><br>	
	
	
		<a class='to_history' href='/profile/view_history.php?view=obsessions'>< Obsessions</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='obsessions' 		
	
	title='What are you really obsessed by?&#10;Why?&#10;If multiple how will they come together?'
	placeholder='What are you really obsessed by?&#10;Why?&#10;If multiple how will they come together?'	
	<?php
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['obsessions'];?></textarea><br>
	

<!--
	<a class='to_history' href='/profile/view_history.php?view=friends'>< Friends</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='friends' 		
	<?php
	if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='What friends does this person have?&#10;What are they learning from them?&#10;Where are they going as a result?' ";}
	else{echo " title='Who are your work friends?&#10;How are they helping?&#10;What might they be hindering?' ";}
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='What friends does this person have?&#10;What are they learning from them?&#10;Where are they going as a result?'";}
	else{echo "placeholder='Who are your work friends?&#10;How are they helping?&#10;What might they be hindering?'";}
	?>
	><?php echo $row['friends'];?></textarea><br>
	<a class='to_history' href='/profile/view_history.php?view=family'>< Family</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='family' 		
	<?php
	if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['family'];?></textarea><br>-->



	<a class='to_history' href='/profile/view_history.php?view=hobbies'>< Hobbies</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='hobbies' 	
	placeholder='What hobbies do you have have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?'	
	title='What hobbies do you have have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?'
	<?php
	if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='What hobbies does this person have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?' ";}
	else{echo " title='What hobbies do you have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?' ";}
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='What hobbies does this person have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?'";}
	else{echo "placeholder='What hobbies do you have?&#10;How are they a reward for hard work?&#10;How are they a reward for good work?'";}
	?>	
	
	
	><?php echo $row['hobbies'];?></textarea><br>

	
	
	<a class='to_history' href='/profile/view_history.php?view=other_notes'>< Other</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='other_notes' 	
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php echo $row['other_notes'];?></textarea><br>	
	
	<input type = 'submit' class='login-submit'  style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>