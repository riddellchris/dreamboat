<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'sales'){		$_SESSION['performance_sub_menu'] = 'sales';}
if($_GET['to'] == 'management'){	$_SESSION['performance_sub_menu'] = 'management';}
if($_GET['to'] == 'financials'){		$_SESSION['performance_sub_menu'] = 'financials';}

header("Location: ".$_SESSION['this_page']);
exit();

?>