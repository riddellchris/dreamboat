<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_immediate_plan'])){$_SESSION['knowledgebase_immediate_plan'] = 'summary';}
header("Location: /knowledgebase/immediate_plan/".$_SESSION['knowledgebase_immediate_plan']."/");
exit();
