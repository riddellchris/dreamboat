<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'on' ){$_SESSION['display_map_diagnostics'] = 'on';}
if($_GET['to'] == 'off'){$_SESSION['display_map_diagnostics'] = 'off';}

header("Location: /map/".$_GET['from']."/");
exit();