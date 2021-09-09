<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['user_id_to_edit'] = $_SESSION['viewing_client_id'];
$sql = "SELECT * FROM management_details WHERE client_id = '".$_SESSION['user_id_to_edit']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 
 
  	<div  class='details-font'>Marketing Details</div>
    
	<form action='/business/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	
	<a  class='to_history' href='/business/view_history.php?view=target_market'>< Target market</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='target_market'   	
	placeholder='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'	
	title='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'
	><?php echo $row['target_market'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=market_sizings'>< Market sizings</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='market_sizings'   	
	placeholder='How big is this market?&#10;What quantifiable facts do we know&#10;What can we estimate to see the whole market size...&#10;There is plenty to go around...'	
	title='How big is this market?&#10;What quantifiable facts do we know&#10;What can we estimate to see the whole market size...&#10;There is plenty to go around...'
	><?php echo $row['market_sizings'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=main_competitors'>< Main competitors</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='main_competitors'   	
	placeholder='Who else notable is doing this?&#10;Do they really matter in a market this big?'	
	title='Who else notable is doing this?&#10;Do they really matter in a market this big?'		
	><?php echo $row['main_competitors'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=main_competitors'>< Key differentiators</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='key_differentiators'   	
	placeholder='What makes this business different?&#10;Be as cold & calculating as possible...&#10;Think from a potential purchasers point of view'	
	title='What makes this business different?&#10;Be as cold & calculating as possible...&#10;Think from a potential purchasers point of view'	
	><?php echo $row['key_differentiators'];?></textarea><br>	
	
	<a  class='to_history' href='/business/view_history.php?view=current_channels'>< Current channels</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='current_channels' 	
	placeholder='What current channels are used to generate business&#10;...and gain awareness for the business&#10;Which are closest to the point of sale?&#10;And of the highest effectivness?'	
	title='What current channels are used to generate business&#10;...and gain awareness for the business&#10;Which are closest to the point of sale?&#10;And of the highest effectivness?'	
	><?php echo $row['current_channels'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=dream_channels'>< Dream channels</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='dream_channels' 	
	placeholder='If you had more time and money what channels for advertising, sales and marketing would be used?&#10;Why?&#10;When will that be possible/required?'	
	title='If you had more time and money what channels for advertising, sales and marketing would be used?&#10;Why?&#10;When will that be possible/required?'	
	><?php echo $row['dream_channels'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=lead_times'>< Lead times</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='lead_times' 		
	placeholder='What are the lead times before work actually starts&#10;Payments are made... &#10;And staff / supply is actually required?'	
	title='What are the lead times before work actually starts&#10;Payments are made... &#10;And staff / supply is actually required?'	
	><?php echo $row['lead_times'];?></textarea><br>
	<a  class='to_history' href='/business/view_history.php?view=other_marketing_notes'>< Other notes</a><br>
	<textarea rows='4' class='secure_input standard_textarea'   name='other_marketing_notes' 		
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	><?php echo $row['other_marketing_notes'];?></textarea><br>	
	
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>