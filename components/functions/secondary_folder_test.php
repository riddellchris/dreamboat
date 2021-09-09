<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";
//pos1 one is known to be 1 therefore it's redundant but informative in this function
//$pos1 = strpos($haystack, $needle);
//$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
//$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2);

//$folders_url = substr($_SERVER['REQUEST_URI'], $pos2, $pos3);

//echo $folders_url;


//pos1 one is known to be 1 therefore it's redundant but informative in this function
//$pos1 = strpos($haystack, $needle);
$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2);

$folders_url = substr($_SERVER['REQUEST_URI'], $pos2+1, $pos3-2);

echo $folders_url;