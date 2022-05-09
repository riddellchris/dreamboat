<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div id='".$location_string."_div' style='height:75vh;'></div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>