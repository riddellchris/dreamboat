<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'initial_email'){		$_SESSION['performance_sales_sub_menu'] = 'initial_email';}
if($_GET['to'] == 'call_1'){			$_SESSION['performance_sales_sub_menu'] = 'call_1';}
if($_GET['to'] == 'call_2'){			$_SESSION['performance_sales_sub_menu'] = 'call_2';}
if($_GET['to'] == 'call_3'){			$_SESSION['performance_sales_sub_menu'] = 'call_3';}
if($_GET['to'] == 'prospectus'){		$_SESSION['performance_sales_sub_menu'] = 'prospectus';}
if($_GET['to'] == 'follow_up_done'){		$_SESSION['performance_sales_sub_menu'] = 'follow_up_done';}
if($_GET['to'] == 'walkthrough_planned'){	$_SESSION['performance_sales_sub_menu'] = 'walkthrough_planned';}
if($_GET['to'] == 'walkthrough_had'){		$_SESSION['performance_sales_sub_menu'] = 'walkthrough_had';}


header("Location: ".$_SESSION['this_page']);
exit();

?>