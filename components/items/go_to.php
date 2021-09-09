<?php
if(!isset($_SESSION)){session_start();}

//given the database and item id and viewing client id
//$_GET['i'];
//$_SESSION['viewing_client_id'];

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM items_all 
	WHERE user_id = '".$_SESSION['viewing_client_id']."' 
	AND found_in_database = '".mysqli_real_escape_string($conn, $_GET['db'])."'
	AND item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$primary_folder 	= $row['found_in_primary_folder'];
$secondary_folder 	= $row['found_in_secondary_folder'];
$item_id 		= $row['item_id'];


header("Location: /".$primary_folder."/".$secondary_folder."/item/display.php?item_id=".$item_id."&critical_nodes=".$_GET['critical_nodes']."&issues_on_or_off=".$_GET['issues_on_or_off']."&edges_selected=".$_GET['edges_selected']);
exit();

?>