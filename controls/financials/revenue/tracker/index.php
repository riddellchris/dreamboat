<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php"; // chart script is imported through this, written under financials/revenue/tracker/script.php



echo "<div id='".$location_string."_div' class='financial-page-_chart' style='height:75vh;'></div>";

require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/display.php";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>