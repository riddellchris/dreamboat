<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM tracking_kpi_settings 
	WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


$kpi_1_title = $row['kpi_1_title'];
$kpi_2_title = $row['kpi_2_title'];
$kpi_3_title = $row['kpi_3_title'];
$kpi_4_title = $row['kpi_4_title'];

$kpi_1_units = $row['kpi_1_units'];
$kpi_2_units = $row['kpi_2_units'];
$kpi_3_units = $row['kpi_3_units'];
$kpi_4_units = $row['kpi_4_units'];

$kpi_1_max = $row['kpi_1_max'];
$kpi_2_max = $row['kpi_2_max'];
$kpi_3_max = $row['kpi_3_max'];
$kpi_4_max = $row['kpi_4_max'];

$kpi_1_min = $row['kpi_1_min'];
$kpi_2_min = $row['kpi_2_min'];
$kpi_3_min = $row['kpi_3_min'];
$kpi_4_min = $row['kpi_4_min'];

?>
<style>
.max{width:50px;}
.min{width:50px;}
.units{width:100px;text-align:right;}
input{width:100%;}
.kpi_settings{width:160px;}
</style>





<?php

//kpi_settings_row found in /components/tracking/input_table/kpi_settings/functions.php
require_once $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/kpi_settings/functions.php";

if($_GET['primary_folder'] == 'results'){
	$number = 1; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
	$number = 2; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
	$number = 3; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
	$number = 4; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
}
?>