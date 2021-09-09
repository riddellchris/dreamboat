 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.3";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*
1.3
No abstract after /slideshow/ implemented

1.1 
includes abstract

*/
