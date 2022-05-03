<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT home_page FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

//in time this should evolve into default pages INCLUDING SUB-MENUs but that's not important now...
//for that page it should really be:
//a column of selects - home page at top<br>Then defaults for each page below that<br>obviously using their inputs

//require $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";


function home_page_change_buttons($page_to_change_to,$home_page){
//echo $page_to_change_to;
//echo $row['home_page'] ;
//echo strip_underscores($page_to_change_to);
	echo "<a class='";
	if($home_page == $page_to_change_to){echo 'red';}else{echo 'blue';}
	echo"-button wide-button' href='change.php?to=".$page_to_change_to."'>".strip_underscores($page_to_change_to)."</a><br>";
}


//hidden for now until it's turned on
if($_SESSION['dreamboat_crew'] == 'yes'){
	home_page_change_buttons('users',		$row['home_page']);	
	home_page_change_buttons('notes',		$row['home_page']);
}


$nav_name = "data"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
$nav_name = "map"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
//$nav_name = "insights"; if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
$nav_name = "profile"; 	if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}



if($_SESSION['viewing_client_mental_health_only'] != 'yes'){
	$nav_name = "business"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "network"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "biz_dev"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "sales"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "marketing"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "management"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "wheelhouse"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "activities"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "time"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}	
	$nav_name = "issues"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "upgrades"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "results"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
	$nav_name = "financials"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
}

$nav_name = "messages"; 			if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}
$nav_name = "notifications"; 		if($_SESSION['main_nav_control'][$nav_name] == 'yes'){home_page_change_buttons($nav_name,		$row['home_page']);}


/*
if($_SESSION['dreamboat_crew'] == 'yes'){
	home_page_change_buttons('users',$row['home_page']);
}
*/
echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../../'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>