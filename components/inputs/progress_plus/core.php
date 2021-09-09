<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$prompt = $row['prompt'];
$response = mysqli_real_escape_string($conn, $_GET['value']);

$value = mysqli_real_escape_string($conn, $_GET['value']);

if($_GET['value'] < 1){
	$sql = "UPDATE user_account_details SET low_progress_plus = 'on' WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);
}








//see if it has been less than an hour since they finished work and send them to the progress plus email system
$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "Users current time";	
$users_current_time = $_SERVER['REQUEST_TIME']+ $row['timezone_decimal_GMT_adjustment']*60*60 + 5*60*60;//the end is just an adjustment for poor coding and knowldge of time stuff
echo "<br>";	
echo $users_local_timestamp = date("Y-m-d H:i:s", $users_current_time);	

if(	$_SESSION['next_prompt_id'] == 35 	OR
	$_SESSION['next_prompt_id'] == 175  	OR
	$_SESSION['next_prompt_id'] == 183  	OR
	$_SESSION['next_prompt_id'] == 191){
	if($_SESSION['next_prompt_id'] == 35 ){$related_to = 'end_of_day';}
	if($_SESSION['next_prompt_id'] == 175){$related_to = 'point_in_time_only';}
	if($_SESSION['next_prompt_id'] == 183){$related_to = 'end_of_week';}
	if($_SESSION['next_prompt_id'] == 191){$related_to = 'end_of_month';}

	$sql = "INSERT INTO progress_plus_core (user_id, productivity, local_timestamp_on_entry, related_to)
	        	VALUES('".$_SESSION['user_id']."', '".$value."', '".$users_local_timestamp."', '".$related_to."')";
	$result = mysqli_query($conn, $sql);
	$_SESSION['progress_plus_insert_id'] = mysqli_insert_id($conn);
}
else{
	if($_SESSION['next_prompt_id'] == 34){$column_to_update = 'energy';		}	
	if($_SESSION['next_prompt_id'] == 35){$column_to_update = 'productivity';	}
	if($_SESSION['next_prompt_id'] == 36){$column_to_update = 'health';  		}
	if($_SESSION['next_prompt_id'] == 37){$column_to_update = 'happiness';  	}
	if($_SESSION['next_prompt_id'] == 38){$column_to_update = 'focus';  		}
	if($_SESSION['next_prompt_id'] == 39){$column_to_update = 'stress';  		}
	if($_SESSION['next_prompt_id'] == 40){$column_to_update = 'confidence';  	}
	if($_SESSION['next_prompt_id'] == 41){$column_to_update = 'control';  		}

	if($_SESSION['next_prompt_id'] == 174){$column_to_update = 'energy';		}	
	if($_SESSION['next_prompt_id'] == 175){$column_to_update = 'productivity';	}
	if($_SESSION['next_prompt_id'] == 176){$column_to_update = 'health';  		}
	if($_SESSION['next_prompt_id'] == 177){$column_to_update = 'happiness';  	}
	if($_SESSION['next_prompt_id'] == 178){$column_to_update = 'focus';  		}
	if($_SESSION['next_prompt_id'] == 179){$column_to_update = 'stress';  		}
	if($_SESSION['next_prompt_id'] == 180){$column_to_update = 'confidence';  	}
	if($_SESSION['next_prompt_id'] == 181){$column_to_update = 'control';  		}

	if($_SESSION['next_prompt_id'] == 182){$column_to_update = 'energy';		}		
	if($_SESSION['next_prompt_id'] == 183){$column_to_update = 'productivity';	}
	if($_SESSION['next_prompt_id'] == 184){$column_to_update = 'health';  		}
	if($_SESSION['next_prompt_id'] == 185){$column_to_update = 'happiness';  	}
	if($_SESSION['next_prompt_id'] == 186){$column_to_update = 'focus';  		}
	if($_SESSION['next_prompt_id'] == 187){$column_to_update = 'stress';  		}
	if($_SESSION['next_prompt_id'] == 188){$column_to_update = 'confidence';  	}
	if($_SESSION['next_prompt_id'] == 189){$column_to_update = 'control';  		}

	if($_SESSION['next_prompt_id'] == 190){$column_to_update = 'energy';		}		
	if($_SESSION['next_prompt_id'] == 191){$column_to_update = 'productivity';	}
	if($_SESSION['next_prompt_id'] == 192){$column_to_update = 'health';  		}
	if($_SESSION['next_prompt_id'] == 193){$column_to_update = 'happiness';  	}
	if($_SESSION['next_prompt_id'] == 194){$column_to_update = 'focus';  		}
	if($_SESSION['next_prompt_id'] == 195){$column_to_update = 'stress';  		}
	if($_SESSION['next_prompt_id'] == 196){$column_to_update = 'confidence';  	}
	if($_SESSION['next_prompt_id'] == 197){$column_to_update = 'control';  		}	
				
echo	$sql  = "UPDATE progress_plus_core SET ";
	$sql .= $column_to_update." = '".$value."'"; 
	$sql .=	"WHERE input_id = '".$_SESSION['progress_plus_insert_id']."'";
	$result = mysqli_query($conn, $sql);

}



//change the prompt id now
$changed = 'no';
if($_SESSION['next_prompt_id'] == 35 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 38;}
if($_SESSION['next_prompt_id'] == 38 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 39;}
if($_SESSION['next_prompt_id'] == 39 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 40;}
if($_SESSION['next_prompt_id'] == 40 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 41;}
if($_SESSION['next_prompt_id'] == 41 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 36;}
if($_SESSION['next_prompt_id'] == 36 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 37;}
if($_SESSION['next_prompt_id'] == 37 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 34;}
if($_SESSION['next_prompt_id'] == 34 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 199;}
//why is your x y now? and how can you improve it now?


if($_SESSION['next_prompt_id'] == 175 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 178;}
if($_SESSION['next_prompt_id'] == 178 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 179;}
if($_SESSION['next_prompt_id'] == 179 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 180;}
if($_SESSION['next_prompt_id'] == 180 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 181;}
if($_SESSION['next_prompt_id'] == 181 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 176;}
if($_SESSION['next_prompt_id'] == 176 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 177;}
if($_SESSION['next_prompt_id'] == 177 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 174;}
if($_SESSION['next_prompt_id'] == 174 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 198;}
//why was your x y today? and how can you improve it tomorrow?


if($_SESSION['next_prompt_id'] == 183 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 186;}
if($_SESSION['next_prompt_id'] == 186 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 187;}
if($_SESSION['next_prompt_id'] == 187 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 188;}
if($_SESSION['next_prompt_id'] == 188 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 189;}
if($_SESSION['next_prompt_id'] == 189 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 184;}
if($_SESSION['next_prompt_id'] == 184 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 185;}
if($_SESSION['next_prompt_id'] == 185 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 182;}
if($_SESSION['next_prompt_id'] == 182 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 200;}
//why was your x y this week? and how can you improve it next week?


if($_SESSION['next_prompt_id'] == 191 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 194;}
if($_SESSION['next_prompt_id'] == 194 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 195;}
if($_SESSION['next_prompt_id'] == 195 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 196;}
if($_SESSION['next_prompt_id'] == 196 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 197;}
if($_SESSION['next_prompt_id'] == 197 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 192;}
if($_SESSION['next_prompt_id'] == 192 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 193;}
if($_SESSION['next_prompt_id'] == 193 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 190;}
if($_SESSION['next_prompt_id'] == 190 && $changed == 'no'){$changed = 'yes';$_SESSION['next_prompt_id'] = 201;}
//why was your x y this month? and how can you improve it next month?


//echo "<br><br>";
//echo $_SESSION['next_prompt_id'];

if(	$_SESSION['next_prompt_id'] == 198 	OR
	$_SESSION['next_prompt_id'] == 199  	OR
	$_SESSION['next_prompt_id'] == 200  	OR
	$_SESSION['next_prompt_id'] == 201){
	
	unset($_SESSION['progress_plus_how_rating']);	
	unset($_SESSION['progress_plus_how_category']);
	unset($_SESSION['progress_plus_why_rating']);	
	unset($_SESSION['progress_plus_why_category']);
	unset($_SESSION['progress_plus_how_why_rating']);	
	unset($_SESSION['progress_plus_how_why_category']);
			
	header("Location: /inputs/progress_plus/why.php");
	exit();	
	}
else{
	header("Location: /progress_plus/questions/");
	exit();
}
?>