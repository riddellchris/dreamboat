<?php
if(!isset($_SESSION)){session_start();}


$sql = "											SELECT * FROM labels 
													WHERE 	primary_folder 		= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
													AND 	secondary_folder 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";
if(isset($_GET['tertiary_folder']) 
	&& $_GET['tertiary_folder'] != 'unknown'){		$sql .= " 	AND tertiary_folder 		= '".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."' ";}
if(isset($_GET['quarternary_folder'])
&& $_GET['quarternary_folder'] != 'unknown'
){	$sql .= " 	AND quarternary_folder 		= '".mysqli_real_escape_string($conn, $_GET['quarternary_folder'])."' ";}
if(isset($_GET['item_id'])){			$sql .= " 	AND item_id 				= '".mysqli_real_escape_string($conn, $_GET['item_id'])."' ";}
										$sql .= "	AND status					= 'active'";

//echo $sql;exit();
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$total_number_of_labels_on_this_item = 0;
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