<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'sales'){		$_SESSION['performance_sub_menu'] = 'sales';}
if($_GET['to'] == 'management'){	$_SESSION['performance_sub_menu'] = 'management';}
if($_GET['to'] == 'finances'){		$_SESSION['performance_sub_menu'] = 'finances';}

header("Location: ".$_SESSION['this_page']);
exit();

?>