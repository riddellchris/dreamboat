<?php
if(!isset($_SESSION)){session_start();}


$sql = "SELECT * FROM labels 
	WHERE 	primary_folder 		= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
	AND 	secondary_folder 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'
	AND 	tertiary_folder 	= '".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."'
	AND 	quarternary_folder 	= '".mysqli_real_escape_string($conn, $_GET['quarternary_folder'])."'
	AND 	item_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
	AND 	status			= 'active'";


	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$currently_applied_labels = array();
$label_number_on_this_item = 0;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

$currently_applied_labels[$label_number_on_this_item] = $row['label_name'];
$currently_applied_labels_id[$label_number_on_this_item] = $row['label_id'];



$label_number_on_this_item ++;

$total_number_of_labels_on_this_item = $label_number_on_this_item;

}

//var_dump($currently_applied_labels);
//exit();