<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_productivity'])){$_SESSION['knowledgebase_productivity'] = 'issues';}
header("Location: /knowledgebase/productivity/".$_SESSION['knowledgebase_productivity']."/");
exit();
