<?php
if(!isset($_SESSION)){session_start();}

if($_GET['change_to'] == 'non_referrer'	){$query_element = " SET referrer = 'no'";}
if($_GET['change_to'] == 'referrer'	){$query_element = " SET referrer = 'yes'";}
if($_GET['change_to'] == 'non_client'	){$query_element = " SET client = 'no'";}
if($_GET['change_to'] == 'client'	){$query_element = " SET client = 'yes'";}
if($_GET['change_to'] == 'non_staff'	){$query_element = " SET staff = 'no'";}
if($_GET['change_to'] == 'staff'	){$query_element = " SET staff = 'yes'";}



$sql = "UPDATE people ".$query_element."
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND 	item_id = '".$_GET['item_id'] ."'";
//echo $sql;
//exit();	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);


header("Location: /".$_GET['primary_folder']."/".$_GET['secondary_folder']."/item/display.php?item_id=".$_GET['item_id']);
exit();


