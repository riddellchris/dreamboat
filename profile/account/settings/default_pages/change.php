<?php
if(!isset($_SESSION)){session_start();}



function clean_variable_to_change_homepage_to($get_variable, $acceptable_name){

	//echo $get_variable." ".$acceptable_name;
	//echo "<br>";

	if($get_variable == $acceptable_name){
		require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
		$_SESSION['users_homepage'] = $acceptable_name;	
 	$sql = "UPDATE user_account_details SET home_page = '".$_SESSION['users_homepage']."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
		mysqli_query($conn, $sql);
	}
}

clean_variable_to_change_homepage_to($_GET['to'], 'users');
clean_variable_to_change_homepage_to($_GET['to'], 'notes');
clean_variable_to_change_homepage_to($_GET['to'], 'data');
clean_variable_to_change_homepage_to($_GET['to'], 'map');
clean_variable_to_change_homepage_to($_GET['to'], 'insights');
clean_variable_to_change_homepage_to($_GET['to'], 'profile');
clean_variable_to_change_homepage_to($_GET['to'], 'business');
clean_variable_to_change_homepage_to($_GET['to'], 'network');
clean_variable_to_change_homepage_to($_GET['to'], 'biz_dev');
clean_variable_to_change_homepage_to($_GET['to'], 'sales');
clean_variable_to_change_homepage_to($_GET['to'], 'marketing');
clean_variable_to_change_homepage_to($_GET['to'], 'wheelhouse');
clean_variable_to_change_homepage_to($_GET['to'], 'time');
clean_variable_to_change_homepage_to($_GET['to'], 'management');
clean_variable_to_change_homepage_to($_GET['to'], 'results');
clean_variable_to_change_homepage_to($_GET['to'], 'financials');
clean_variable_to_change_homepage_to($_GET['to'], 'improvements');
clean_variable_to_change_homepage_to($_GET['to'], 'messages');
clean_variable_to_change_homepage_to($_GET['to'], 'notifications');





header("Location: ".$_SESSION['this_page']);
exit();



?>