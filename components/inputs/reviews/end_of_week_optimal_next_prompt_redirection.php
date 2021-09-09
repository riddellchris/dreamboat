<?php
if(!isset($_SESSION)){session_start();}


//in short this means that we asses the next prompt based on the assumption that there is an appropriate amount of data for the next prompt.... but.....
if($_POST['submit_button'] != 'submit & add another'){
	//change the prompt id now
	$changed = 'no';
	if(($_SESSION['next_prompt_id'] >= 339 && $_SESSION['next_prompt_id'] <= 356) && $changed == 'no'){
	
	
		if($_SESSION['next_prompt_id'] == 339 && $changed == 'no'){
		
			$_SESSION['next_prompt_id'] = 340;
		
		
			//beat test then skip ahead to next designated question and we are done
			$sql = "SELECT * FROM events WHERE status = 'active' AND deleted = 'no' AND user_id = '".$_SESSION['viewing_client_id']."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) != 0 ){$changed = 'yes';}
			else{				   $changed = 'no';}
		}
		if($_SESSION['next_prompt_id'] == 340 && $changed == 'no'){
		
			$_SESSION['next_prompt_id'] = 351;
		
			//beat test then skip ahead to next designated question and we are done
			$sql = "SELECT * FROM events WHERE status = 'active' AND deleted = 'no' AND user_id = '".$_SESSION['viewing_client_id']."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) != 0 ){ $changed = 'yes';}
			else{				    $changed = 'no';}
		}		
		if($_SESSION['next_prompt_id'] == 351 && $changed == 'no'){
			   $_SESSION['next_prompt_id'] = 352; 
			   $changed = 'yes';
		}		
		
		
		
		
		
		
		
	
	}
}
else{
$_SESSION['next_prompt_id'] = $_SESSION['next_prompt_id'];
}

unset($_SESSION['reviewing']); //very important so everything else works well
header("Location: /reviews/questions.php");
exit();
