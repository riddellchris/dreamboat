<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";



//then turn on anything that needs to be on
$sql = "SELECT * FROM notifications_and_alerts WHERE ";
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes'){ $sql .= " from_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND ";}
$sql .= " for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY notification_id DESC";

//echo $sql;


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0){
//if no notifications
///You have no notifications yet sorry
echo "<div class='prompt-font' style='width:100%;text-align:center;height:50vh;bottom: 0;position: absolute;'>You have no notifications yet sorry</div>";

}
else{

	echo "<div style='height:50px;'></div>";
	require $_SERVER['DOCUMENT_ROOT']."/components/items/lists/full_color_full_box.php";	
}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>