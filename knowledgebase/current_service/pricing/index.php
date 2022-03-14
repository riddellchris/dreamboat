<?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.6";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

//1.6
//has hidden unless logged in
// and if masked then not displayed on pricing


//1.5
//has all time is tracked and billed accordingly

//1.4
//HAS conditions for launch

//1.3
//HAS * FOR PHONE CONSULTATION

//1.2
//is back to the correct pricing structure for 30 minute conversations

//1.0
//While it may seem absolutely, completely and utterly ridiculous 1.0 includes 45 minute sessions and relevant pricing