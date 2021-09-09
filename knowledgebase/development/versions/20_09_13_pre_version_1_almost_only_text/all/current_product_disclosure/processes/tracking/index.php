<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";
title_block('tracking');
?>



<?php
$padding_top	=	'20vh';
$url		=	'/components/sub_menus/change.php?page=processes&to=technology';
$copy 		=	'learn about our technology here //';
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>