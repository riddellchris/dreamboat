<?php
if(!isset($_SESSION)){session_start();}

$main_admin_section = 'knowledge';
require $_SERVER['DOCUMENT_ROOT']."/admin/components/sub_menus/display.php";