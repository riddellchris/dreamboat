<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//then turn on anything that needs to be on
$sql_for_alerts = "SELECT * FROM notifications_and_alerts WHERE ";
if($_SESSION['dreamboat_crew'] == 'yes'){ $sql_for_alerts .= " from_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND ";}
$sql_for_alerts .= " for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' 

AND alert_on = 'on'
AND primary_folder = '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
AND secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'
AND tertiary_folder = 'item'
";

//echo $sql;
$result_for_alerts = mysqli_query($conn, $sql_for_alerts);
unset($item_ids_with_active_alerts);
$i_for_alerts = 0;
while($row_for_alerts = mysqli_fetch_array($result_for_alerts, MYSQLI_ASSOC)){
	$item_ids_with_active_alerts[$i_for_alerts] = $row_for_alerts['related_id'];
	$i_for_alerts++;
}

//var_dump($item_ids_with_active_alerts);
//exit();