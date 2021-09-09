<?php
if(!isset($_SESSION)){session_start();}

if($_GET['tertiary_folder'] == 'all'){
	$sql = "SELECT category FROM time_utilisation WHERE item_id = '".$_GET['item_id']."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$category = $row['category'];
	
	$_SESSION['time_activities_page'] = $category;
	header("Location: /time/activities/".$category."/item/display.php?item_id=".$_GET['item_id']);
	exit();
}
else{
	header("Location: /time/activities/".$_GET['tertiary_folder']."/item/display.php?item_id=".$_GET['item_id']);
	exit();
}