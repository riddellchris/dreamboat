<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['menu_set_productivity_tracker_category'])	){$_SESSION['menu_set_productivity_tracker_category'] = 'productivity';}
if(!isset($_SESSION['menu_set_productivity_tracker_period'])	){$_SESSION['menu_set_productivity_tracker_period'] = 'daily';}

if($_SESSION['menu_set_productivity_tracker_category'] != 'data'){	
	header("Location: display.php?category=".$_SESSION['menu_set_productivity_tracker_category']."&period=".$_SESSION['menu_set_productivity_tracker_period']);
	exit();
}
else{
	header("Location: display_data.php");
	exit();
}



?>
