<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'add'){	$_SESSION['technology_sub_menu'] = 'add new';}
if($_GET['to'] == 'discuss'){	$_SESSION['technology_sub_menu'] = 'discuss';}
if($_GET['to'] == 'prioritise'){$_SESSION['technology_sub_menu'] = 'prioritise';}
if($_GET['to'] == 'link'){	$_SESSION['technology_sub_menu'] = 'link';}
if($_GET['to'] == 'solve'){$_SESSION['technology_sub_menu']	 = 'solve';}

header("Location: ".$_SESSION['this_page']);
exit();

?>