 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.1";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*

1.1
grey lines

1.0
red lines
*/