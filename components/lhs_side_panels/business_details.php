<?php
if(!isset($_SESSION)){session_start();}

//$sql = "SELECT * FROM ".$_GET['primary_folder']."_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";
$sql = "SELECT * FROM management_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

if($_SESSION['dreamboat_crew'] != 'yes'){echo "<div class='details-font'>My Summary</div>";}
else{echo "<div class='details-font'>".$_SESSION['viewing_client_business_name']."</div>";}


?>


	
	

	
	
<form action='/business/edit_update.php' method='post' class='side_form'>

	<a class='to_history' href='/business/view_history.php?view=vision'>< Vision</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='vision' 	

	<?php
	$questions = 'What is the vision of this business?&#10;What does it look like?&#10;What does it really mean?&#10;How does it guide the business direction today?&#10;';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";	
	/*
	//this stuff would be nice but it's a bit boring and repetitive right now
	if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='What is this persons backstory?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?' ";}
	else{echo " title='What is your backstory?&#10;How is it influencing your direction?&#10;How is it influencing your passions?' ";}
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='What is this persons backstory?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?'";}
	else{echo "placeholder='What is your backstory?&#10;How is it influencing your direction?&#10;How is it influencing your passions?'";}
	*/
	?>		
	><?php echo $row['vision'];?></textarea><br>


	<a class='to_history' href='/business/view_history.php?view=mission'>< Mission</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='mission' 		
	<?php
	$questions = 'What is the mission of this business?&#10;What is it out to change?&#10;How does it impact the business direction?';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";	
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='What friends does this person have?&#10;What are they learning from them?&#10;Where are they going as a result?' ";}
	//else{echo " title='Who are your work friends?&#10;How are they helping?&#10;What might they be hindering?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='What friends does this person have?&#10;What are they learning from them?&#10;Where are they going as a result?'";}
	//else{echo "placeholder='Who are your work friends?&#10;How are they helping?&#10;What might they be hindering?'";}
	?>
	><?php echo $row['mission'];?></textarea><br>
	
<!--
<a class='to_history' href='/business/view_history.php?view=core_competencies'>< Core Competencies</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='core_competencies' 
	
	title='What professional training have you done?&#10;How will that impact where you go?&#10'
	placeholder='What professional training have you done?&#10;How will that impact where you go?&#10'
	<?php
	$questions = 'What is the vision of this business?&#10;How does it impact the business direction?&#10;What good is that & what bad is that?';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['core_competencies'];?></textarea><br>	
-->
	
		<a class='to_history' href='/business/view_history.php?view=strengths'>< Strengths</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='strengths' 			
	<?php
	$questions = 'What are the principle strengths of this business?&#10;Why are they such strengths?&#10;And how can we leverage these strengths?';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['strengths'];?></textarea><br>
		<a class='to_history' href='/business/view_history.php?view=weaknesses'>< Weaknesses</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='weaknesses' 			
	<?php
	$questions = 'What are the weaknesses of this business?&#10;How does it leave the business vulnerable?&#10;What can be done to minimise associated risks?';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['weaknesses'];?></textarea><br>	
		<a class='to_history' href='/business/view_history.php?view=opportunities'>< Opportunities</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='opportunities' 			
	<?php
	$questions = 'What strategic opportunities are available for this business?&#10;What would be required to do so?&#10;Are they worth pursuing?';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['opportunities'];?></textarea><br>
		<a class='to_history' href='/business/view_history.php?view=threats'>< Threats</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='threats' 			
	<?php
	$questions = 'What threats are there to this business?&#10;What can be done about them?&#10;';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['threats'];?></textarea><br>	
		<a class='to_history' href='/business/view_history.php?view=competitors'>< Competitors</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='competitors' 			
	<?php
	$questions = 'What principle competitors are relevant to this business?&#10;How does it impact the business direction?&#10;';
	echo " title 		= '".$questions."' ";
	echo " placeholder 	= '".$questions."' ";
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo " title='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?' ";}
	//else{echo " title='Who is in your family?&#10;How are they helping?&#10;How supportive are they?' ";}
	//if($_SESSION['dreamboat_crew'] == 'yes'){echo "placeholder='Who is in the family of this person?&#10;What influence do they have on the business if any?&#10;How supportive are they?'";}
	//else{echo "placeholder='Who is in your family?&#10;How are they helping?&#10;How supportive are they?'";}
	?>
	><?php echo $row['competitors'];?></textarea><br>	

	
	<a class='to_history' href='/business/view_history.php?view=other_business_notes'>< Other</a><br>	
	<textarea rows='4' 	class='secure_input standard_textarea'  name='other_business_notes' 	
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php echo $row['other_business_notes'];?></textarea><br>	
	
	<input type = 'submit' class='login-submit'  style='max-width:1100px;width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>