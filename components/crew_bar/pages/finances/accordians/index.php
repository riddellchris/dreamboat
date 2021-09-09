<?php
if(!isset($_SESSION)){session_start();}

$main_admin_section = 'finances';
require $_SERVER['DOCUMENT_ROOT']."/admin/components/sub_menus/display.php";




require $_SERVER['DOCUMENT_ROOT']."/admin/finances/display/home.php";