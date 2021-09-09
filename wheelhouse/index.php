<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['wheelhouse_page'])){$_SESSION['wheelhouse_page'] = 'tasks';}

header("Location: /wheelhouse/".$_SESSION['wheelhouse_page']."/");
exit();
?>