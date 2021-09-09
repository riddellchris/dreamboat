<?php
if(!isset($_SESSION)){session_start();}

//Stolen from:
///components/optimisation_engine/tracking/what_is_productivity.php
$sql = "SELECT * FROM tracking_kpi_settings 
	WHERE client_id = '".$_SESSION['viewing_client_id']."' 
	ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row['kpi_1_title'] != ''){$kpi_1_title = "KPI #1 ".$row['kpi_1_title'];}else{$kpi_1_title = 'KPI #1';}
if($row['kpi_2_title'] != ''){$kpi_2_title = "KPI #2 ".$row['kpi_2_title'];}else{$kpi_2_title = 'KPI #2';}
if($row['kpi_3_title'] != ''){$kpi_3_title = "KPI #3 ".$row['kpi_3_title'];}else{$kpi_3_title = 'KPI #3';}
if($row['kpi_4_title'] != ''){$kpi_4_title = "KPI #4 ".$row['kpi_4_title'];}else{$kpi_4_title = 'KPI #4';}

?>