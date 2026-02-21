<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

		echo "<div class='prompt-font' style='width:100%;text-align:center;height:50vh;bottom: 0;position: absolute;'>You don't have any acheivements on your Dreamboat as yet.";
		

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>