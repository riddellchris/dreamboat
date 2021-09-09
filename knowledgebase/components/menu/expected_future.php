 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.1";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";


/*
1.1
unique products and services - made to be pilot only ----- really it should be management only


*/