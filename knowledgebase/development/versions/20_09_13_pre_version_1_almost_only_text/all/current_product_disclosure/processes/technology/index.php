<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";

title_block('technology');
//we use technology to keep you on track
//monitor performance
//keep you on the right track
//minimal impact


$padding_top	=	'20vh';
$url		=	'/content/platform/';
$copy 		=	'learn about our platform here //';
require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
