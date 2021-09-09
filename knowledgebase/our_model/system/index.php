<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_system'])){$_SESSION['knowledgebase_system'] = 'overview';}
header("Location: /knowledgebase/system/".$_SESSION['knowledgebase_system']."/");
exit();