<?php
if(!isset($_SESSION)){session_start();}

//just here for reference to make it work
$current_version = "1.2";

//this must be copied because of how __FILE__ works
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

//CR 21.06.13
//unfortunately as this version control gets far more complex as layers uppon layers become versions a better system will probably be required but for now it's fine.
