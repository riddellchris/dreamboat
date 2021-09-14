<?php
if(!isset($_SESSION)){session_start();}

if(		$_GET['primary_folder'] 	== 'map' 			OR
		$_GET['primary_folder'] 	== 'admin' 			OR
		$_GET['primary_folder'] 	== 'interrogation' 	OR
		$_GET['primary_folder'] 	== 'notes' 			OR
		$_GET['primary_folder'] 	== 'results' 		OR
		$_GET['primary_folder'] 	== 'wheelhouse' 	OR
		$_GET['primary_folder'] 	== 'messages' 		OR
		$_GET['primary_folder'] 	== 'activities' 	OR	
		$_GET['primary_folder'] 	== 'issues' 		OR
		$_GET['primary_folder'] 	== 'upgrades' 		OR
	(	$_GET['primary_folder'] 	== 'management' 	AND $_GET['secondary_folder'] != 'clients') 	OR
	(	$_GET['primary_folder'] 	== 'management' 	AND $_GET['tertiary_folder'] == 'item') 		OR
		$_GET['primary_folder'] 	== 'marketing' 		OR
	(	$_GET['primary_folder'] 	== 'sales' 			AND $_GET['tertiary_folder'] == 'item') 		OR
	(	$_GET['primary_folder'] 	== 'biz_dev' 		AND $_GET['tertiary_folder'] == 'item') 		OR
	(	$_GET['primary_folder'] 	== 'network' 		AND $_GET['tertiary_folder'] == 'item')			OR
		$_GET['primary_folder'] 	== 'business' 		OR
	(	$_GET['primary_folder'] 	== 'profile' 		AND $_GET['secondary_folder'] != 'reviews')	
		
		
		OR		$_GET['primary_folder'] 	== 'network' 
		OR		$_GET['primary_folder'] 	== 'biz_dev' 		
		OR		$_GET['primary_folder'] 	== 'sales' 		
		OR		$_GET['primary_folder'] 	== 'marketing' 	
		OR		$_GET['primary_folder'] 	== 'management' 				
	){$settings_off = 'yes';$data_hidden = 'yes';}

if(	$_GET['primary_folder'] 	== 'profile' 		AND $_GET['secondary_folder'] == 'reviews')	{

$data_hidden = 'yes';
}


echo "
<style>
	.hidden{display:none;}
	.unhidden{display:inline-block;width:calc(100% - 18px);}
	.charts_and_more{
		padding:10px 12px 14px;
		margin-left:0px;
		background-color: red;
		//background-color:#00a300;
		float: left;
	}
	.charts_and_more:hover{
		//just hidden for now
		background-color: red;
		//background-color:#016101;
	}
	.charts_and_more.nav-links:hover{color:#ffffff;}
	.settings{	
		//float:left;
		padding:10px 12px 14px;
		margin-left:auto;
		margin-right:auto;
		background-color: #cecece;
		color: black;
		max-width:100px;
		text-align:center;
	}
	.settings:hover{
		background-color: #b0b0b0;
	}
	.settings.nav-links:hover{color:#ffffff;}
	.reminders{	
		padding:10px 12px 14px;
		margin-left:0px;
		background-color: #8cff93;
		color: #0a7a11;
		float: right;";
if($settings_off != 'yes'){echo "margin-top: -51px;";}
		
echo"		
	}
	.reminders:hover{
		background-color:#06610b;
	}
	.reminders.nav-links:hover{color:#ffffff;}
	.review_now_div{	
		padding:10px 12px 14px;
		margin-left:0px;
		//just hidden for now;
		background-color:#ff0000;
		//background-color:#00a300;
		background-color:#ff0000;
		float: left;
	}
	.review_now_div:hover{
		background-color:#ad0707;
	}
	.review_now_div.nav-links:hover{color:#ffffff;}		
</style>";


echo "
<script>";

//a settings div should appear here to trigger and alter the way the page runs for this user
//based on a pilots opinitions/reading of the situationa and other data sourcess
//ultimately this should be done with sometechnological assistance too
//this div should be red and underneath on the left hand side and mostly use:
//Selects 
//On/of switches & othes
//switches and alerts as required.

/*
if($data_hidden != 'yes'){
	$function_name 		 = 'show_hide_charts_and_more';
	$hide_only_function_name = 'hide_charts_and_more';
	$element_to_show_hide 	 = 'data_and_more_div';
	require $_SERVER['DOCUMENT_ROOT']."/components/functions/javascript/show_hide_div.php";
}

if($settings_off != 'yes'){
	$function_name 		 = 'show_hide_settings';
	$hide_only_function_name = 'hide_settings';
	$element_to_show_hide 	 = 'settings_div';
	require $_SERVER['DOCUMENT_ROOT']."/components/functions/javascript/show_hide_div.php";
}	
*/



$function_name 		 		= 'show_hide_reminders';
$hide_only_function_name 	= 'hide_reminders';
$element_to_show_hide 	 	= 'reminder_div';
require $_SERVER['DOCUMENT_ROOT']."/components/functions/javascript/show_hide_div.php";	
	
echo"
</script>
";
echo "<div id='top_of_discussion_tabs' style='max-width:1100px;margin:auto;display:flow-root;'>";

//probably should put this into some sort of file...
//require_once $_SERVER['DOCUMENT_ROOT']."";

//reviews are now just for text///updates are for lists and data
/*
$primary = $_SESSION['primary_folder'];
$secondary = $_SESSION['secondary_folder'];

if($_GET['tertiary_folder'] != 'item'){
	if($primary == 'business'){$show_review_now = 'yes';}
	if($primary == 'network'){$show_review_now = 'yes';}
	if($primary == 'biz_dev'){$show_review_now = 'yes';}
	if($primary == 'sales'){$show_review_now = 'yes';}
	//nothing for marketing just yet
	if($primary == 'management' && $secondary == 'clients'){$show_review_now = 'yes';}
}

if($show_review_now == 'yes'){	*/

//see if 
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_account_details 
		WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['client_or_crew'] == 'crew'){$crew = 'yes';}else{$crew = 'no';}

//then turn on anything that needs to be on
$sql = "SELECT * FROM notifications_and_alerts 
		WHERE ";
if($crew == 'yes'){ $sql .= " from_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND ";}
$sql .= " for_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND alert_on = 'on' AND reminder = 'yes'";

//echo $sql;
//exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result)){
	$test = 'true';
		if($_GET['primary_folder'] 		!= 	$row['primary_folder']){	$test = 'false';}
		if($_GET['secondary_folder'] 	!= 	$row['secondary_folder']){	$test = 'false';}
	if(isset($_GET['tertiary_folder'])){
		if($_GET['tertiary_folder'] 	!= 	$row['tertiary_folder']){	$test = 'false';}
	}
		if($_GET['item_id_from_url'] 	!= 	$row['related_id']){		$test = 'false';}
	if(	$test == 'false'){	$active_reminder = 'yes';	}
}



/*
///SETTITNGS DIV
//CR 22.6.20
//the settings div is going to be more important than charts or reivews
*/

if($data_hidden != 'yes'){
	echo "<div id='data_and_more_div' class='hidden' style='background-color:#ffbfbf;padding:8px;min-height:80px;'>";
//	require_once $_SERVER['DOCUMENT_ROOT']."/components/data/display.php";
	echo "</div>";
}
if($settings_off != 'yes'){
	echo "<div id='settings_div' class='hidden' style='background-color:#e3e3e3;padding:8px;min-height:80px;'>";
		require_once $_SERVER['DOCUMENT_ROOT']."/components/settings/display.php";
	echo "</div>";
}

	echo "<div id='reminder_div' ";
	if($active_reminder == 'yes'){	echo "class='unhidden currently_active_reminder' style='background-color: orange;";}
	else{				echo "class='hidden'  style='background-color:#45c14c;";}
	echo "padding:8px;'>";
		require_once $_SERVER['DOCUMENT_ROOT']."/components/reminders/display.php";
	echo "</div>";
	
	
	
	
	
	


//the actual tabs at the bottom of all discussion tabs
if($data_hidden != 'yes'){
	echo "<div id='view_charts_and_more_tab' class='nav-links charts_and_more' style='' href='javascript:void(0);'>";
		echo "<a onclick='show_hide_charts_and_more();hide_reminders();hide_settings();'>view data</a>";
	echo "</div>";	
}
if($settings_off != 'yes'){	
	echo "<div id='view_settings_tab' class='nav-links settings' style='' href='javascript:void(0);'>";
		echo "<a onclick='show_hide_settings();hide_reminders();hide_charts_and_more();'>view settings</a>";
	echo "</div>";		
}	
	echo "<div id='edit_reminder_tab' class='nav-links reminders'  style=''	href='javascript:void(0);'>";
		echo "<a onclick='show_hide_reminders();hide_settings();hide_charts_and_more();'>set reminder</a>";
	echo "</div>";		
echo "</div>";	