<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['admin_open_or_closed'])){$_SESSION['admin_open_or_closed'] = 'closed';}

//echo "<div id='admin_container'>";
require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/menu_system/container_calculations.php";
//echo "</div>";