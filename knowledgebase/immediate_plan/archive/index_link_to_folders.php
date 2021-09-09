<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_our_plan'])){$_SESSION['knowledgebase_our_plan'] = 'overview';}
header("Location: /knowledgebase/our_plan/".$_SESSION['knowledgebase_our_plan']."/");
exit();
