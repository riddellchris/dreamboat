<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/kpi_settings/functions.php";

//time spent by user
//total money through link+/- left to right
//related KPIa
//related KPIb


$variable_name = 'time_spent_by_user';			require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';
$variable_name = 'financial_flow';		require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';






$number = 'related_kpi_a'; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
$variable_name = 'related_kpi_a';			require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';


$number = 'related_kpi_b'; kpi_settings_row($number, $row['kpi_'.$number.'_title'], $row['kpi_'.$number.'_units'], $row['kpi_'.$number.'_max'], $row['kpi_'.$number.'_min']);
$variable_name = 'related_kpi_b';			require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/generic.php';
