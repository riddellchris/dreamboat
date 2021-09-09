<?php
if(!isset($_SESSION)){session_start();}
$swap_done = 'no';

if($_SESSION['show_as_dreamboat_crew'] == 'yes'	&& $swap_done == 'no'){	$_SESSION['show_as_dreamboat_crew'] 	= 'no';		$swap_done = 'yes';}
if($_SESSION['show_as_dreamboat_crew'] == 'no'	&& $swap_done == 'no'){	$_SESSION['show_as_dreamboat_crew'] 	= 'yes';	$swap_done = 'yes';}

header("Location: ".$_SESSION['this_page']);
exit();


?>
