<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//user_alerts
$sql = "INSERT INTO 		user_alert_system (user_id) VALUES ('".$user_id."')";
mysqli_query($conn, $sql);
//email settings
$sql = "INSERT INTO 		user_email_settings (user_id) VALUES ('".$user_id."')";
mysqli_query($conn, $sql);
//services released to user
$sql = "INSERT INTO 		user_work_schedules (user_id) VALUES ('".$user_id."')";
mysqli_query($conn, $sql);
//services released to user
$sql = "INSERT INTO 		user_menu_defaults (user_id) VALUES ('".$user_id."')";//this is not used as yet but it probably should be
mysqli_query($conn, $sql);
$sql = "INSERT INTO 		user_review_cycles (user_id) VALUES ('".$user_id."')";
mysqli_query($conn, $sql);
$sql = "INSERT INTO 		user_main_nav_control (user_id) VALUES ('".$user_id."')";
mysqli_query($conn, $sql);

//this is not actually needed
//require $_SERVER['DOCUMENT_ROOT']."/components/controls/defaults_to_apply_for_every_user.php";

$creating_new_user = 'yes';
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/main_nav_initialisation.php";
unset($creating_new_user);

mysqli_close($conn);

?>