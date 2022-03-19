<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/finances/holding_page.php";

/*
simple - very simple plots and then a data table of revenue and expenses over the past 24 months
potentially go to all time as a seperate sub menu to copy it out / view it properly





require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
*/