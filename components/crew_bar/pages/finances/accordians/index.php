<?php
if(!isset($_SESSION)){session_start();}

$main_admin_section = 'financials';
require $_SERVER['DOCUMENT_ROOT']."/admin/components/sub_menus/display.php";




require $_SERVER['DOCUMENT_ROOT']."/admin/financials/display/home.php";