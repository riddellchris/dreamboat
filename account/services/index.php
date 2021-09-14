<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

$sql = "SELECT * FROM user_services_active_per_user WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<br>";

//var_dump($_SESSION);
if($_SESSION['user_services_released_to_users_network'] == 'yes'){
//always green as paid up and always active
echo "<a class='green-button wide-button' href='network/'>network - active</a>";
echo "<br>";
}

if($_SESSION['user_services_released_to_users_wheelhouse'] == 'yes'){
	if($row['wheelhouse'] == 'yes'){echo "<a class='green-button wide-button' href='wheelhouse/'>wheelhouse - active</a>";}
	else{echo "<a class='blue-button wide-button'>wheelhouse</a>";}
	echo "<br>";
}

if($_SESSION['user_services_released_to_users_work_diary'] == 'yes'){
	if($row['work_diary'] == 'yes'){echo "<a class='green-button wide-button' href='work_diary/'>work diary - active</a>";}
	else{echo "<a class='blue-button wide-button'>work diary</a>";}
	echo "<br>";
}

if($_SESSION['user_services_released_to_users_progress_plus'] == 'yes'){
	if($row['progress_plus'] == 'yes'){echo "<a class='green-button wide-button' href='progress_plus/'>progress plus - active</a>";}
	else{echo "<a class='blue-button wide-button'>progress plus</a>";}
	echo "<br>";
}

if($_SESSION['user_services_released_to_users_productivity_tracker'] == 'yes'){
	if($row['progress_plus'] == 'yes'){echo "<a class='green-button wide-button' href='productivity_tracker/'>productivity tracker - active</a>";}
	else{echo "<a class='blue-button wide-button'>productivity tracker</a>";}
	echo "<br>";
}
/*

if($row['productivity_pilots'] == 'yes'){echo "<a class='green-button wide-button' href=''>productivity pilots</a>";}
else{echo "<a class='blue-button wide-button'>text productivity pilot</a>";}
echo "<br>";

if($row['productivity_pilots'] == 'yes'){echo "<a class='green-button wide-button' href=''>productivity pilots</a>";}
else{echo "<a class='blue-button wide-button'>audio productivity pilot</a>";}
echo "<br>";*/



echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>