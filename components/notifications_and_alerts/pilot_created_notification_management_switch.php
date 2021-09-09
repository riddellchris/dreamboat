<?php
if(!isset($_SESSION)){session_start();}

if($_GET['turn_notifications'] == 'off'){
	$_SESSION['notifications_for_current_client'] = 'off';
}

if($_GET['turn_notifications'] == 'on'){
	$_SESSION['notifications_for_current_client'] = 'on';
}

header("Location: ".$_SESSION['this_page']);
exit();


?>