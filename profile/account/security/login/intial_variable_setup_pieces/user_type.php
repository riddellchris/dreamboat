<?php
if (!isset($_SESSION)) {
	session_start();
}


$sql = "SELECT * FROM user_account_details  
        WHERE user_id = '".$_SESSION['viewing_client_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 0){$
        $sql = "INSERT INTO user_account_details (user_id) VALUES ('".$_SESSION['user_id']."')";
        mysqli_query($conn, $sql);
    }


if($row['multi_user'] == 'yes') {
	$_SESSION['multi_user'] 						= 'yes';
}


if($row['dreamboat_crew'] == 'yes') {
	$_SESSION['dreamboat_crew'] 						= 'yes';

	$_SESSION['pilots_id'] 								= $_SESSION['user_id']; // for when they have dreamboat crew display off still to enter the right stuff
	$_SESSION['show_as_dreamboat_crew'] 				= 'no';
	$_SESSION['dreamboat_crew_navigation_option_on'] 	= 'yes';
	$_SESSION['pilots_first_name'] 						= $row['first_name'];
	$_SESSION['pilots_number'] 							= $row['phone_number'];
/*
	if ($row['dreamboat_management'] == 'yes') {
		$_SESSION['dreamboat_management'] 		= 'yes';
	}
	if ($row['dreamboat_admin'] 		== 'yes') {
		$_SESSION['dreamboat_admin'] 			= 'yes';
	}
	if ($row['dreamboat_developer'] 	== 'yes') {
		$_SESSION['dreamboat_developer'] 		= 'yes';
		$_SESSION['dreamboat_developer_view'] 	= 'live';
	}
	*/
}
else{
	$_SESSION['dreamboat_crew']             = 'no';
    $_SESSION['user_type_client']           = $row['client'];
    $_SESSION['user_type_client_master']    = $row['master_client'];
    $_SESSION['pilots_id'] 		            = $row['pilots_id'];

	//get pilots first name for the call button			
	$sql = "SELECT * FROM user_account_details 
			WHERE user_id = '" . mysqli_real_escape_string($conn, $_SESSION['pilots_id']) . "'";
//			echo $sql; exit();
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION['pilots_first_name']  = $row['first_name'];
	$_SESSION['pilots_number']      = $row['phone_number'];
}
