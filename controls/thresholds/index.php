<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['thresholds_page'])){$_SESSION['thresholds_page'] = 'lis';}

header("Location: /thresholds/".$_SESSION['thresholds_page']."/");
exit();
?>