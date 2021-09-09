 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.3";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";
//require $_SERVER['DOCUMENT_ROOT']."/components/version_control/string.php";


/*

1.3 adjusting for tertiary folders being empty

1.2
Adding sales to the LHS & cleaning up much of the other mess for far more control


1.1
This was prior to a big cleanup of all the systems to add even more control as sales begin

1.0
The most original version


*/