<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/add_column.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/add_data.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/script_starts.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/script_ends.php";


require $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/div_display.php";
