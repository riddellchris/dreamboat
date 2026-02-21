<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='prompt-font' style='width:100%;text-align:center;height:65vh;bottom: 0;position: absolute;'>
	Call <span style='color:red;'>".$_SESSION['pilots_first_name']."</span> any time you need<br><span style='color:red;'>".$_SESSION['pilots_number']."</span>";
	//<br><br>Or just <a style='color:red;' href='/messages/'>message them></a> <br>and they'll get back to you 

require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";