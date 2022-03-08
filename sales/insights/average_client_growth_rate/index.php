<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
echo "<div class='prompt-font' style='text-align:center; width: 100%; '>Based on data from the last 24 months</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";