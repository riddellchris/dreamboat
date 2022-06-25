 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.4";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*

1.4 Support added


1.3
No abstract after /slideshows/ implemented

1.1 
includes abstract

*/
