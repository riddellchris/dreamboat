 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.1";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*
1.1
is the earlier process diagram


1.0
Was from the original sketch - but can do much better than that now
*/