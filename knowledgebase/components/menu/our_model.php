 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.1";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";


/*
1.1
less 'pilot only'
rollout plan - begun but not visible yet - probably should be visible in time

1.0
standard - most of it's pilots

*/
