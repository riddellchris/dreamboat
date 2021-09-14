<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM management_details WHERE client_id = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 
    	<div  class='details-font'>Sales Details</div>
 	<form action='/business/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	
	<a class='to_history' href='/business/view_history.php?view=target_market'>< Target market</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='target_market'   	
	placeholder='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'	
	title='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'
	><?php echo $row['target_market'];?></textarea><br>
	<a class='to_history' href='/business/view_history.php?view=pain_points'>< Pain points</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='pain_points'   	
	placeholder='What pain points exist for the target market?&#10;How can we leverage these points to help them better?'	
	title='What pain points exist for the target market?&#10;How can we leverage these points to help them better?'
	><?php echo $row['pain_points'];?></textarea><br>

	<a class='to_history' href='/business/view_history.php?view=urgency_tipping_points'>< Urgency/tipping points</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='urgency_tipping_points'   	
	placeholder='What tips them into action?&#10;How do we get them to commit?&#10;Why does this happen?'	
	title='What tips them into action?&#10;How do we get them to commit?&#10;Why does this happen?'
	><?php echo $row['urgency_tipping_points'];?></textarea><br>

	<a class='to_history' href='/business/view_history.php?view=key_sales_phrases'>< Key Phrases</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='key_sales_phrases'   	
	placeholder='What if any sales phrases are very poignant?&#10;...and if even needed... Why?'	
	title='What if any sales phrases are very poignant?&#10;...and if even needed... Why?'		
	><?php echo $row['key_sales_phrases'];?></textarea><br>
	<a class='to_history' href='/business/view_history.php?view=starter_packs'>< Starter packages</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='starter_packs'   	
	placeholder='What are the entry products people engage with?&#10;How and why?'	
	title='What are the entry products people engage with?&#10;How and why?'	
	><?php echo $row['starter_packs'];?></textarea><br>	
	
	<a class='to_history' href='/business/view_history.php?view=expansion_processes'>< Expansion process</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='expansion_processes' 	
	placeholder='How can we expand the scope of assistance?&#10;'	
	title='How can we expand the scope of assistance?&#10;'	
	><?php echo $row['expansion_processes'];?></textarea><br>


	<a class='to_history' href='/business/view_history.php?view=other_sales_notes'>< Other notes</a><br>
	<textarea rows='4' class='secure_input standard_textarea'   name='other_sales_notes' 		
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	><?php echo $row['other_sales_notes'];?></textarea><br>	
	
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>