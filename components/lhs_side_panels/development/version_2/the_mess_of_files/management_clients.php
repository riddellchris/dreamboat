<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['user_id_to_edit'] = $_SESSION['viewing_client_id'];
$sql = "SELECT * FROM ".$_SESSION['primary_folder']."_details WHERE client_id = '".$_SESSION['user_id_to_edit']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

$singular = substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1);
$plural = $_SESSION['viewing_client_what_clients_are_called'];

?> 
 
    	<div  class='details-font'><?php echo ucfirst($plural);?> Details</div>
	<form action='/business/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	<a class='to_history' title='View history' href='/business/view_history.php?view=standard_customer_journey'>< Standard <?php echo ucfirst($singular);?> Journey</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='standard_customer_journey'   		
	<?php echo "placeholder='For the bulk of $plural what is their $singular journey?&#10;What are the steps?&#10;And why?'";?>	
	<?php echo "title='For the bulk of $plural what is their $singular journey?&#10;What are the steps?&#10;And why?'";?>	
	

	
	><?php echo $row['standard_customer_journey'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=great_clients'>< Great <?php echo ucfirst($plural);?></a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='great_clients'   		
	<?php echo "placeholder='What makes the best $plural?&#10;How much are they spending?&#10;What are you doing for them?&#10;What can you look for to identify them more readily?'";?>	
	<?php echo "title='What makes the best $plural?&#10;How much are they spending?&#10;What are you doing for them?&#10;What can you look for to identify them more readily?'";?>	
	><?php echo $row['great_clients'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=good_clients'>< Good <?php echo ucfirst($plural);?></a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='good_clients' 		
	<?php echo "placeholder='What makes a good $plural?&#10;Why do they stand out?&#10;How can you train more to be be good $plural?'";?>	
	<?php echo "title='What makes a good $plural?&#10;Why do they stand out?&#10;How can you train more to be be good $plural?'";?>	
	><?php echo $row['good_clients'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=average_clients'>< Average <?php echo ucfirst($plural);?></a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='average_clients' 		
	<?php echo "placeholder='What makes an average $singular?&#10;Why are they like this?&#10;Which ones do we really want?'";?>
	<?php echo "title='What makes an average $singular?&#10;Why are they like this?&#10;Which ones do we really want?'	";?>
	><?php echo $row['average_clients'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=bad_clients'>< Bad <?php echo ucfirst($plural);?></a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='bad_clients' 		
	<?php echo "placeholder='What makes a bad $singular?&#10;How can we avoid them?&#10;What are they costing the business?&#10;Is there anything we can do to avoid these?'";?>	
	<?php echo "title='What makes a bad $singular?&#10;How can we avoid them?&#10;What are they costing the business?&#10;Is there anything we can do to avoid these?'";?>	
	><?php echo $row['bad_clients'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=terrible_clients'>< Terrbile <?php echo ucfirst($plural);?></a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='terrible_clients' 		
	<?php echo "placeholder='What makes the worst $singular?&#10;What can you look for to identify them?&#10;How much do they cost you?&#10;How can you avoid them going forward?'";?>
	<?php echo "title='What makes the worst $singular?&#10;What can you look for to identify them?&#10;How much do they cost you?&#10;How can you avoid them going forward?'";?>	
	><?php echo $row['terrible_clients'];?></textarea><br>
	<a class='to_history' title='View history' href='/business/view_history.php?view=other_clients_notes'>< Other notes</a><br>
	<textarea rows='4'  class='secure_input standard_textarea'  name='other_clients_notes' 			
	<?php echo "placeholder='Are there any other things that are of importance?&#10;Whatever it is... write it here!'";?>			
	<?php echo "title='Are there any other things that are of importance?&#10;Whatever it is... write it here!'";?>	
	><?php echo $row['other_clients_notes'];?></textarea><br>
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>