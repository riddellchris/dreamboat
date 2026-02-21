<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['upgrades_page'])){$_SESSION['upgrades_page'] = 'underway';}

header("Location: /upgrades/".$_SESSION['upgrades_page']."/");
exit();
?>