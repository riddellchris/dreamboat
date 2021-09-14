<?php


$_SESSION['user_id_to_edit'] = $_SESSION['viewing_client_id'];
$sql = "SELECT * FROM improvements_details WHERE client_id = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' ORDER BY update_id DESC  LIMIT 1";



require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){  
$sql = "INSERT INTO improvements_details (user_id) VALUES ('".$_SESSION['user_id_to_edit']."')";
//exit();
$result = mysqli_query($conn, $sql);

}
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>
 
    <div class='details-font'>Improvement phases</div>
	<form action='/improvements/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	
	
	<a class='to_history' href='/improvements/view_history.php?view=next_few_months' title='View the history of the next few months improvements list'>< Next few months</a>
	
	<br>
	<textarea rows='3'  class='secure_input standard_textarea'  name='next_few_months' 		
		placeholder='What should happen in the next few months?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next few months?&#10;What&#39;s realistic?&#10;What should be pushed back?'		><?php echo $row['next_few_months'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=three_months_away'>< 3 months away</a><br>	
	<textarea rows='3'  class='secure_input standard_textarea'  name='three_months_away'   		
		placeholder='What should happen in the next three months?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next three months?&#10;What&#39;s realistic?&#10;What should be pushed back?'	><?php echo $row['three_months_away'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=six_months_away'>< 6 months away</a><br>	
	<textarea rows='3'  class='secure_input standard_textarea'  name='six_months_away'  		
		placeholder='What should happen in the next six months?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next six months?&#10;What&#39;s realistic?&#10;What should be pushed back?'><?php echo $row['six_months_away'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=twelve_months_away'>< 12 months away</a><br>	
	<textarea rows='3'  class='secure_input standard_textarea'  name='twelve_months_away' 			
		placeholder='What should happen in the next twelve months?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next twelve months?&#10;What&#39;s realistic?&#10;What should be pushed back?'	><?php echo $row['twelve_months_away'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=three_years_away'>< 3 years away</a><br>	
	<textarea rows='3'  class='secure_input standard_textarea'  name='three_years_away' 		
		placeholder='What should happen in the next three years?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next three years?&#10;What&#39;s realistic?&#10;What should be pushed back?'	><?php echo $row['three_years_away'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=five_years_away'>< 5 years away</a><br>	
	<textarea rows='3'  class='secure_input standard_textarea'  name='five_years_away' 			
	placeholder='What should happen in the next five years?&#10;What&#39;s realistic?&#10;What should be pushed back?' 
		title='What should happen in the next five years?&#10;What&#39;s realistic?&#10;What should be pushed back?'		><?php echo $row['five_years_away'];?></textarea><br>
	<a class='to_history' href='/improvements/view_history.php?view=other_notes'>< Other notes</a><br>	
	<textarea rows='3' class='secure_input standard_textarea'  name='other_notes' 		placeholder='Other notes'	><?php echo $row['other_notes'];?></textarea><br>	
	
	<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
	</form>
	