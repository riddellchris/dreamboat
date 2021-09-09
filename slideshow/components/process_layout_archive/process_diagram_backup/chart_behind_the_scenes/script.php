 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.3";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*

1.3
multi coloured triangles

1.2
triangle lines attempt 1

1.1
grey lines

1.0
red lines
*/