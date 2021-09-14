<?php
if(!isset($_SESSION)){session_start();}

if($_GET['tertiary_folder'] == 'all'){
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql 		= "SELECT category FROM time_utilisation WHERE item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	$result 	= mysqli_query($conn, $sql);
	$row 		= mysqli_fetch_array($result, MYSQLI_ASSOC);
	$category 	= $row['category'];
	
	$_SESSION['time_activities_page'] = $category;
	header("Location: /time/activities/".$category."/item/display.php?item_id=".$_GET['item_id']);
	exit();
}
else{
	header("Location: /time/activities/".$_GET['tertiary_folder']."/item/display.php?item_id=".$_GET['item_id']);
	exit();
}