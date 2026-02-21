<?php
if(!isset($_SESSION)){session_start();}
//bit of an anomalie here 
//first here we just check we are in the right folder / mode of imrpovement
//if not we adjust change the menu and send them to the right place

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$id_to_check = mysqli_real_escape_string($conn, $_GET['item_id']);

$sql = "SELECT * FROM upgrades WHERE item_id = '".$id_to_check."'";
//echo $sql; exit();
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row['mode'] == 'planned'){	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/display.php";}
if($row['mode'] == 'underway'){	$_SESSION['upgrades_page']	= 'underway';	header("Location: /upgrades/underway/item/display.php?item_id=".$id_to_check);exit();}
if($row['mode'] == 'completed'){$_SESSION['upgrades_page']	= 'completed';	header("Location: /upgrades/completed/item/display.php?item_id=".$id_to_check);exit();}

?>