 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.5";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";


/*
1.5
phases of engagement made NOT pilot only


1.4
phases of engagement made pilot only

1.3
Adds some pilot only content back into the menu

1.2
Behind the scenes added as well

1.1
inlcudes
phases of engagement &
how it works

1.0
Just the basic standard stuff
But it does include access points as part of the equation in pricing

*/
