<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";

$user_to_display = $_SESSION['viewing_client_id'];

$last_year_of_start_year = $startYear - 1;
$last_year_of_end_year = $endYear - 1;
$endMonth = str_pad($endMonth,'2','0',STR_PAD_LEFT);
$startMonth = str_pad($startMonth,'2','0',STR_PAD_LEFT);

//Return data
$sql_last_year_date_end = "{$last_year_of_end_year}-{$endMonth}-01";
$sql_last_year_date_start = "{$last_year_of_start_year}-{$startMonth}-01";
?>