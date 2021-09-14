<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$sql = "SELECT * FROM all_color_combos WHERE success = 'no' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$background_color	= $row['background_hex'];
$contrast_color		= $row['contrast_hex'];
$text_color		= $row['text_hex'];
$degrees		= rand(0, 360);

var_dump($_POST);
//exit();


$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$prompt = $row['prompt'];
$response = mysqli_real_escape_string($conn, $_GET['value']);
if(isset($_POST['privacy_slider'])){$privacy = 'public';}else{$privacy = 'private';}


//$sql = "INSERT INTO flow_responses_all (user_id, 		      prompt,    response,    privacy,    background_color,    contrast_color,    text_color,    degrees)
//			         VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '$prompt', '$response', '$privacy', '$background_color', '$contrast_color', '$text_color', '$degrees')";
//$result = mysqli_query($conn, $sql);




/*
if(	$_SESSION['next_prompt_id'] != 34 AND
	$_SESSION['next_prompt_id'] != 35 AND
	$_SESSION['next_prompt_id'] != 36 AND
	$_SESSION['next_prompt_id'] != 37 AND
	$_SESSION['next_prompt_id'] != 38 AND
	$_SESSION['next_prompt_id'] != 39 AND
	$_SESSION['next_prompt_id'] != 40 AND
	$_SESSION['next_prompt_id'] != 41){	
	//$sql = "INSERT INTO network_inputs (user_id, prompt, response, privacy, background_color, contrast_color, text_color, degrees)
	//		             VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '$prompt', '$response', '$privacy', '$background_color', '$contrast_color', '$text_color', '$degrees')";
	//					$result = mysqli_query($conn, $sql);
	}*/
//else{
	$value = mysqli_real_escape_string($conn, $_GET['value']);



	//see if it has been less than an hour since they finished work and send them to the progress plus email system
	$sql = "SELECT * FROM progress_plus_time_data WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo "Users current time";	
	$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
	echo "<br>";	
	echo $users_local_timestamp = date("Y-m-d H:i:s", $users_current_time);	
	
	
	
	if($_SESSION['next_prompt_id'] == 34){
	$sql = "INSERT INTO progress_plus_core (user_id, mood, local_timestamp_on_entry)
	        	VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '".$value."', '".$users_local_timestamp."')";
	$result = mysqli_query($conn, $sql);
	$_SESSION['progress_plus_insert_id'] = mysqli_insert_id($conn);
	}
	else{
		if($_SESSION['next_prompt_id'] == 35){$column_to_update = 'productivity';	}
		if($_SESSION['next_prompt_id'] == 36){$column_to_update = 'health';  		}
		if($_SESSION['next_prompt_id'] == 37){$column_to_update = 'happiness';  	}
		if($_SESSION['next_prompt_id'] == 38){$column_to_update = 'focus';  		}
		if($_SESSION['next_prompt_id'] == 39){$column_to_update = 'stress';  		}
		if($_SESSION['next_prompt_id'] == 40){$column_to_update = 'confidence';  	}
		if($_SESSION['next_prompt_id'] == 41){$column_to_update = 'control';  		}
	

	echo	$sql = "UPDATE progress_plus_core SET ".$column_to_update." = '".$value."' WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
		$result = mysqli_query($conn, $sql);
	
	}
//}


//change the prompt id now
$changed = 'no';
if($_SESSION['next_prompt_id'] == 34 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 35;}
if($_SESSION['next_prompt_id'] == 35 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 36;}
if($_SESSION['next_prompt_id'] == 36 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 37;}
if($_SESSION['next_prompt_id'] == 37 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 38;}
if($_SESSION['next_prompt_id'] == 38 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 39;}
if($_SESSION['next_prompt_id'] == 39 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 40;}
if($_SESSION['next_prompt_id'] == 40 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 41;}
if($_SESSION['next_prompt_id'] == 41 && $changed == 'no'){


echo	$sql = "SELECT mood FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['mood'] == 3){	$_SESSION['next_prompt_id'] = 66;}
	if($row['mood'] == 2){	$_SESSION['next_prompt_id'] = 67;}
	if($row['mood'] == 1){	$_SESSION['next_prompt_id'] = 68;}
	if($row['mood'] == 0){	$_SESSION['next_prompt_id'] = 69;}
	if($row['mood'] == -1){	$_SESSION['next_prompt_id'] = 70;}
	if($row['mood'] == -2){	$_SESSION['next_prompt_id'] = 71;}
	if($row['mood'] == -3){	$_SESSION['next_prompt_id'] = 72;}
	
	
	echo $_SESSION['next_prompt_id'];
	//exit();
	
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 66 OR 
	 $_SESSION['next_prompt_id'] == 67 OR 
	 $_SESSION['next_prompt_id'] == 68 OR 
	 $_SESSION['next_prompt_id'] == 69 OR 
	 $_SESSION['next_prompt_id'] == 70 OR 
	 $_SESSION['next_prompt_id'] == 71 OR 
	 $_SESSION['next_prompt_id'] == 72) && $changed == 'no'){
	 
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
		
	$sql = "UPDATE progress_plus_core SET mood_why = '".$response."', mood_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);




	 
	$sql = "SELECT productivity FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['productivity'] == 3){	$_SESSION['next_prompt_id'] = 73;}
	if($row['productivity'] == 2){	$_SESSION['next_prompt_id'] = 74;}
	if($row['productivity'] == 1){	$_SESSION['next_prompt_id'] = 75;}
	if($row['productivity'] == 0){	$_SESSION['next_prompt_id'] = 76;}
	if($row['productivity'] == -1){	$_SESSION['next_prompt_id'] = 77;}
	if($row['productivity'] == -2){	$_SESSION['next_prompt_id'] = 78;}
	if($row['productivity'] == -3){	$_SESSION['next_prompt_id'] = 79;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 73 OR 
	$_SESSION['next_prompt_id'] == 74 OR 
	$_SESSION['next_prompt_id'] == 75 OR 
	$_SESSION['next_prompt_id'] == 76 OR 
	$_SESSION['next_prompt_id'] == 77 OR 
	$_SESSION['next_prompt_id'] == 78 OR 
	$_SESSION['next_prompt_id'] == 79) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET productivity_why = '".$response."', productivity_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	$sql = "SELECT health FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['health'] == 3){	$_SESSION['next_prompt_id'] = 80;}
	if($row['health'] == 2){	$_SESSION['next_prompt_id'] = 81;}
	if($row['health'] == 1){	$_SESSION['next_prompt_id'] = 82;}
	if($row['health'] == 0){	$_SESSION['next_prompt_id'] = 83;}
	if($row['health'] == -1){	$_SESSION['next_prompt_id'] = 84;}
	if($row['health'] == -2){	$_SESSION['next_prompt_id'] = 85;}
	if($row['health'] == -3){	$_SESSION['next_prompt_id'] = 86;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 80 OR 
	$_SESSION['next_prompt_id'] == 81 OR 
	$_SESSION['next_prompt_id'] == 82 OR 
	$_SESSION['next_prompt_id'] == 83 OR 
	$_SESSION['next_prompt_id'] == 84 OR 
	$_SESSION['next_prompt_id'] == 85 OR 
	$_SESSION['next_prompt_id'] == 86) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET health_why = '".$response."', health_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	$sql = "SELECT happiness FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['happiness'] == 3){	$_SESSION['next_prompt_id'] = 87;}
	if($row['happiness'] == 2){	$_SESSION['next_prompt_id'] = 88;}
	if($row['happiness'] == 1){	$_SESSION['next_prompt_id'] = 89;}
	if($row['happiness'] == 0){	$_SESSION['next_prompt_id'] = 90;}
	if($row['happiness'] == -1){	$_SESSION['next_prompt_id'] = 91;}
	if($row['happiness'] == -2){	$_SESSION['next_prompt_id'] = 92;}
	if($row['happiness'] == -3){	$_SESSION['next_prompt_id'] = 93;}
	$changed = 'yes';
}

if(	($_SESSION['next_prompt_id'] == 87 OR 
	$_SESSION['next_prompt_id'] == 88 OR 
	$_SESSION['next_prompt_id'] == 89 OR 
	$_SESSION['next_prompt_id'] == 90 OR 
	$_SESSION['next_prompt_id'] == 91 OR 
	$_SESSION['next_prompt_id'] == 92 OR 
	$_SESSION['next_prompt_id'] == 93) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET happiness_why = '".$response."', happiness_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	$sql = "SELECT focus FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['focus'] == 3){	$_SESSION['next_prompt_id'] = 94;}
	if($row['focus'] == 2){	$_SESSION['next_prompt_id'] = 95;}
	if($row['focus'] == 1){	$_SESSION['next_prompt_id'] = 96;}
	if($row['focus'] == 0){	$_SESSION['next_prompt_id'] = 97;}
	if($row['focus'] == -1){	$_SESSION['next_prompt_id'] = 98;}
	if($row['focus'] == -2){	$_SESSION['next_prompt_id'] = 99;}
	if($row['focus'] == -3){	$_SESSION['next_prompt_id'] = 100;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 94 OR 
	$_SESSION['next_prompt_id'] == 95 OR 
	$_SESSION['next_prompt_id'] == 96 OR 
	$_SESSION['next_prompt_id'] == 97 OR 
	$_SESSION['next_prompt_id'] == 98 OR 
	$_SESSION['next_prompt_id'] == 99 OR 
	$_SESSION['next_prompt_id'] == 100) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET focus_why = '".$response."', focus_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	$sql = "SELECT stress FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['stress'] == 3){	$_SESSION['next_prompt_id'] = 101;}
	if($row['stress'] == 2){	$_SESSION['next_prompt_id'] = 102;}
	if($row['stress'] == 1){	$_SESSION['next_prompt_id'] = 103;}
	if($row['stress'] == 0){	$_SESSION['next_prompt_id'] = 104;}
	if($row['stress'] == -1){	$_SESSION['next_prompt_id'] = 105;}
	if($row['stress'] == -2){	$_SESSION['next_prompt_id'] = 106;}
	if($row['stress'] == -3){	$_SESSION['next_prompt_id'] = 107;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 101 OR 
	$_SESSION['next_prompt_id'] == 102 OR 
	$_SESSION['next_prompt_id'] == 103 OR 
	$_SESSION['next_prompt_id'] == 104 OR 
	$_SESSION['next_prompt_id'] == 105 OR 
	$_SESSION['next_prompt_id'] == 106 OR 
	$_SESSION['next_prompt_id'] == 107) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET stress_why = '".$response."', stress_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);	
	
	
	
	
	
	
	
	$sql = "SELECT confidence FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['confidence'] == 3){	$_SESSION['next_prompt_id'] = 108;}
	if($row['confidence'] == 2){	$_SESSION['next_prompt_id'] = 109;}
	if($row['confidence'] == 1){	$_SESSION['next_prompt_id'] = 110;}
	if($row['confidence'] == 0){	$_SESSION['next_prompt_id'] = 111;}
	if($row['confidence'] == -1){	$_SESSION['next_prompt_id'] = 112;}
	if($row['confidence'] == -2){	$_SESSION['next_prompt_id'] = 113;}
	if($row['confidence'] == -3){	$_SESSION['next_prompt_id'] = 114;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 108 OR 
	$_SESSION['next_prompt_id'] == 109 OR 
	$_SESSION['next_prompt_id'] == 110 OR 
	$_SESSION['next_prompt_id'] == 111 OR 
	$_SESSION['next_prompt_id'] == 112 OR 
	$_SESSION['next_prompt_id'] == 113 OR 
	$_SESSION['next_prompt_id'] == 114) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET confidence_why = '".$response."', confidence_improvement = '".$response_how."'  WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	$sql = "SELECT control FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row['control'] == 3){	$_SESSION['next_prompt_id'] = 115;}
	if($row['control'] == 2){	$_SESSION['next_prompt_id'] = 116;}
	if($row['control'] == 1){	$_SESSION['next_prompt_id'] = 117;}
	if($row['control'] == 0){	$_SESSION['next_prompt_id'] = 118;}
	if($row['control'] == -1){	$_SESSION['next_prompt_id'] = 119;}
	if($row['control'] == -2){	$_SESSION['next_prompt_id'] = 120;}
	if($row['control'] == -3){	$_SESSION['next_prompt_id'] = 121;}
	$changed = 'yes';
}
if(	($_SESSION['next_prompt_id'] == 115 OR 
	 $_SESSION['next_prompt_id'] == 116 OR 
	 $_SESSION['next_prompt_id'] == 117 OR 
	 $_SESSION['next_prompt_id'] == 118 OR 
	 $_SESSION['next_prompt_id'] == 119 OR 
	 $_SESSION['next_prompt_id'] == 120 OR 
	 $_SESSION['next_prompt_id'] == 121) && $changed == 'no'){
	
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$response_how = mysqli_real_escape_string($conn, $_POST['how_to_improve']);
	$sql = "UPDATE progress_plus_core SET control_why = '".$response."', control_improvement = '".$response_how."' WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);	
	
	$_SESSION['next_prompt_id'] = 122;
	$changed = 'yes';
	}
	
/*
if(($_SESSION['next_prompt_id'] == 24 

($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 
($_SESSION['next_prompt_id'] == 24) 

		if($_SESSION['next_prompt_id'] == 35){$column_to_update = 'enjoy_most';			}
		if($_SESSION['next_prompt_id'] == 36){$column_to_update = 'wasnt_ideal';  		}
		if($_SESSION['next_prompt_id'] == 37){$column_to_update = 'what_to_do_more_of';  	}
		if($_SESSION['next_prompt_id'] == 38){$column_to_update = 'how_to_do_that';  		}
		if($_SESSION['next_prompt_id'] == 39){$column_to_update = 'prefer_less_of';  		}
		if($_SESSION['next_prompt_id'] == 40){$column_to_update = 'time_best_spent';  		}
		if($_SESSION['next_prompt_id'] == 41){$column_to_update = 'achieve_tomorrow';  		}
		if($_SESSION['next_prompt_id'] == 41){$column_to_update = 'focus_going_forward';  	}
		if($_SESSION['next_prompt_id'] == 41){$column_to_update = 'reminder_email';  		}
	$response = mysqli_real_escape_string($conn, $_POST['why_that_rating']);
	$sql = "UPDATE progress_plus_core SET control_why = '".$response."' WHERE input_id = '".mysqli_real_escape_string($conn, $_SESSION['progress_plus_insert_id'])."'";
	$result = mysqli_query($conn, $sql);

&& $changed == 'no'){ 



 }
	
	*/
	
	


header("Location: /progress_plus/questions/");

?>