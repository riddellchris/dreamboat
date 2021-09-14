<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM management_details WHERE client_id = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 
 
  	<div  class='details-font'> 
  	<?php
  	
  		//echo $_GET['secondary_folder'];
  		if($_GET['secondary_folder'] == 'events'){	echo "BD Events Plans";}
  		if($_GET['secondary_folder'] == 'one_to_ones'){ echo "One on ones strategies";}	
   		if($_GET['secondary_folder'] == 'referrers'){ 	echo "Referrers Strategy";}	
  	
  	
  	?>
  					</div>
   

	<form action='/business/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	
	<a  class='to_history' href='/business/view_history.php?view=target_market'>< Target market</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='target_market'   	
	placeholder='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'	
	title='How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!'
	><?php echo $row['target_market'];?></textarea><br>


<?php
//edit the titles - done
if(!function_exists(lhs_side_bar_block)){
	function lhs_side_bar_block($descriptor,
				    $display_descriptor, 
				    $title_placeholder,
				    $row){
	echo "	<a  class='to_history' href='/components/lhs_side_panels/view_history.php?view=".$descriptor."'>< ".$display_descriptor."</a><br>
		<textarea rows='4'  class='secure_input standard_textarea'  name='".$descriptor."'   	
		placeholder='".$title_placeholder."'	
		title='".$title_placeholder."'
		>".$row[$descriptor]."</textarea><br>";
	}
}

lhs_side_bar_block('target_market',
		   'Target Market', 
		   'How can we most accurately define the target market?&#10;... not neccesarily demographics....&#10;Vision, key descriptors, key needs, are far better!',$row);


//referrers
	//key identifiers
	//groups to look for
	//best examples
	//typical timeframes
	//thankyou processes if any

//events
	//key selection criteria // size/crowd/cost
	//time allocations
	//key objectives

//one-to-ones	
	//standard process
	//checks/tests to run
	//past mistakes

//other notes as required 
	//check around the place these all differ appropriately
	//storage works correctly
?>
	
	
	<a  class='to_history' href='/business/view_history.php?view=other_marketing_notes'>< Other notes</a><br>
	<textarea rows='4' class='secure_input standard_textarea'   name='other_marketing_notes' 		
	placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'
	><?php echo $row['other_marketing_notes'];?></textarea><br>	


	
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	
	
	</form>