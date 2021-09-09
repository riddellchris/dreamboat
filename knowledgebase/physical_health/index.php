<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_physical_health'])){$_SESSION['knowledgebase_physical_health'] = 'overview';}
header("Location: /knowledgebase/physical_health/".$_SESSION['knowledgebase_physical_health']."/");
exit();