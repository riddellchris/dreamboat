<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
if($_SESSION['productivity_pilot'] == 'yes'){
	$sql = "UPDATE user_account_details SET low_progress_plus = 'off' WHERE user_id = '".$_SESSION['viewing_client_id']."'";
	$result = mysqli_query($conn, $sql);
}
else{
	$sql = "UPDATE user_alert_system SET top_nav_progress_plus = 'off' WHERE user_id = '".$_SESSION['user_id']."'";
	$result = mysqli_query($conn, $sql);
}



//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/profile/reviews/progress_plus/workings.php";

//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>