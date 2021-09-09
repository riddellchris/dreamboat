<?php
if(!isset($_SESSION)){session_start();}
/*
if(isset($_SESSION['primary_folder']) && $_SESSION['primary_folder'] == 'content'){
$user_to_view = 2;
$mode = 'new_potentials';

}
else{*/
$user_to_view = $_SESSION['viewing_client_id'];
$mode = $_GET['secondary_folder'];
//}

$sql = "SELECT * FROM sales 
	WHERE user_id = '".$user_to_view."'
	AND category = '".$mode."'
	AND status = 'active'
	AND deleted = 'no'
	
	";

//	echo $sql;
//	exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


$revenue_at_90_to_100_percent	= 0;
$revenue_at_80_to_90_percent	= 0;
$revenue_at_70_to_80_percent	= 0;
$revenue_at_60_to_70_percent	= 0;
$revenue_at_50_to_60_percent	= 0;
$revenue_at_40_to_50_percent	= 0;
$revenue_at_30_to_40_percent	= 0;
$revenue_at_20_to_30_percent	= 0;
$revenue_at_10_to_20_percent	= 0;
$revenue_at_0_to_10_percent	= 0;

$weighted_funnel = 0;

$result = mysqli_query($conn, $sql);

$number_of_funnel_results = mysqli_num_rows($result);


$funnel_value = '0';
$weighted_funnel = '0';

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	if($row['probability'] >= 90 && 100 >= $row['probability']){	$revenue_at_90_to_100_percent += $row['price'];}
	if($row['probability'] >= 80 && 90  > $row['probability']){		$revenue_at_80_to_90_percent += $row['price'];}
	if($row['probability'] >= 70 && 80  > $row['probability']){		$revenue_at_70_to_80_percent += $row['price'];}
	if($row['probability'] >= 60 && 70  > $row['probability']){		$revenue_at_60_to_70_percent += $row['price'];}
	if($row['probability'] >= 50 && 60  > $row['probability']){		$revenue_at_50_to_60_percent += $row['price'];}
	if($row['probability'] >= 40 && 50  > $row['probability']){		$revenue_at_40_to_50_percent += $row['price'];}
	if($row['probability'] >= 30 && 40  > $row['probability']){		$revenue_at_30_to_40_percent += $row['price'];}
	if($row['probability'] >= 20 && 30  > $row['probability']){		$revenue_at_20_to_30_percent += $row['price'];}
	if($row['probability'] >= 10 && 20  > $row['probability']){		$revenue_at_10_to_20_percent += $row['price'];}
	if($row['probability'] >= 0  && 10  > $row['probability']){		$revenue_at_0_to_10_percent += $row['price'];}

	$funnel_value 	 += $row['price'];
	$weighted_funnel += $row['probability'] /100 * $row['price'];
}
