 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.1";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*
1.1
includes the dot dot dot element in the primary folders function

1.0
is pre the dot dot dot divider and the addition of the Dreamboat management control too

*/
