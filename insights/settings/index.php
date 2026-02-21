<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "select a KPI, revenue, profit or income as your the numerator for the productivity equation<br>";
echo "then it productivity will display there as appropriate";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
