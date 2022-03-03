<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


$var = 'data';          if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'map';           if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'insights';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'overview';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'highlights';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'profile';       if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'business';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'network';       if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'biz_dev';       if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'management';    if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'sales';         if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'marketing';     if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'wheelhouse';    if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'activities';    if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'time';        	if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'issues';        if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'upgrades';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'results';       if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'finances';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'messages';      if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}
$var = 'notifications'; if($_GET['type'] == $var	){$nav_setting_to_change = $var;		$clean_get = 'yes';}




if($clean_get == 'yes'){


	$sql 	= "SELECT ".$nav_setting_to_change." FROM user_main_nav_control WHERE user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
	$result = mysqli_query($conn, $sql);
	$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);

	$current_setting = $row[$nav_setting_to_change];
	
	if($current_setting == 'yes'){$new_setting = 'no';}
	if($current_setting == 'no'){$new_setting = 'yes';}
	
	$sql = "UPDATE user_main_nav_control SET ".$nav_setting_to_change."= '".$new_setting."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";


	mysqli_query($conn, $sql);
}

header("Location: ".$_SESSION['this_page']);
exit();

