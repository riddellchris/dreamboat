<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//driving
//serving
//BD
//sales
//admin

//stacked per activity within that
//then just varied hours between those

require $_SERVER['DOCUMENT_ROOT']."/time/components/div.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";