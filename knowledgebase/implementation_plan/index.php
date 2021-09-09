<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['knowledgebase_implementation_plan'] = 'objectives';

if(!isset($_SESSION['knowledgebase_implementation_plan'])){$_SESSION['knowledgebase_implementation_plan'] = 'market_penetration';}
header("Location: /knowledgebase/implementation_plan/".$_SESSION['knowledgebase_implementation_plan']."/");
exit();
