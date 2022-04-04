<?php
if(!isset($_SESSION)){session_start();}

	$sql = "SELECT * FROM data_user_login_logouts WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY session_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1){$this_login_count = $row['user_login_count'] + 1;}
	else{$this_login_count = 1;}
	
	$sql = "INSERT INTO data_user_login_logouts (user_id, user_login_count) VALUES ('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '".$this_login_count."')";
	$result = mysqli_query($conn, $sql);
	$_SESSION['this_users_session_id'] = $this_login_count;	
	
	$sql = "UPDATE user_account_details SET number_of_logins_recorded = '".$this_login_count."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
	$result = mysqli_query($conn, $sql);	