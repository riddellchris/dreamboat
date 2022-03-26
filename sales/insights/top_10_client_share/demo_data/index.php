<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/sales/insights/top_10_client_share/demo_data/div.php";

//require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";