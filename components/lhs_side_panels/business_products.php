<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM management_details WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 

   	<div  class='details-font'>Product Details</div>
	<form action='/management/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	

	<a class='to_history' title='View history' href='/management/view_history.php?view=target_market'>< Target market</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='target_market'   		
	placeholder='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'	
	title='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'	
	><?php if(isset($row['target_market'])){echo $row['target_market'];}?></textarea><br>


	<a class='to_history' title='View history' href='/management/view_history.php?view=starter_packs'>< Starter packages</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='starter_packs'   		
	placeholder='What are the entry products people engage with?&#10;How and why?&#10;'	
	title='What are the entry products people engage with?&#10;How and why?&#10;'
	><?php if(isset($row['starter_packs'])){echo $row['starter_packs'];}?></textarea><br>	
	
	<a class='to_history' title='View history' href='/management/view_history.php?view=other_product_groupings'>< Other groupings</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_product_groupings' 		
	placeholder='What other product packages exist?&#10;Very simply why does each exist?'
	title='What other product packages exist?&#10;Very simply why does each exist?'	
	><?php if(isset($row['other_product_groupings'])){echo $row['other_product_groupings'];}?></textarea><br>	


	<a class='to_history' title='View history' href='/management/view_history.php?view=comparative_examples'>< Comparative examples</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='comparative_examples' 		
	placeholder='What are relevant product comparisons?&#10;Are they relevent to this market?&#10;How do we beat them?&#10;'	
	title='What are relevant product comparisons?&#10;Are they relevent to this market?&#10;How do we beat them?&#10;'
	><?php if(isset($row['comparative_examples'])){echo $row['comparative_examples'];}?></textarea><br>	
	
	<a class='to_history' title='View history' href='/management/view_history.php?view=key_value_propositions'>< Key Value Propositions</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='key_value_propositions' 		
	placeholder='What makes our products amazing?&#10;What are we more than best at?&#10;And why?'	
	title='What makes our products amazing?&#10;What are we more than best at?&#10;And why?'	
	><?php if(isset($row['key_value_propositions'])){echo $row['key_value_propositions'];}?></textarea><br>	
	
			
	<a class='to_history' title='View history' href='/management/view_history.php?view=future_line_expansions'>< Future line expansions</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='future_line_expansions'   		
	placeholder='What future product ideas are there?&#10;'	
	title='What future product ideas are there?&#10;'	
	><?php if(isset($row['future_line_expansions'])){echo $row['future_line_expansions'];}?></textarea><br>	

	<a class='to_history' title='View history' href='/management/view_history.php?view=other_product_notes'>< Other notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_product_notes' 			
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'			
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'	
	><?php if(isset($row['other_product_notes'])){echo $row['other_product_notes'];}?></textarea><br>	


	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>