<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'staff'){		$_SESSION['performance_management_sub_menu'] = 'staff';}
if($_GET['to'] == 'tech'){		$_SESSION['performance_management_sub_menu'] = 'tech';}
if($_GET['to'] == 'auto_coach'){	$_SESSION['performance_management_sub_menu'] = 'auto_coach';}

header("Location: ".$_SESSION['this_page']);
exit();

?>