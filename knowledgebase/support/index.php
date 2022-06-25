<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_support'])){$_SESSION['knowledgebase_support'] = 'xero';}
header("Location: /knowledgebase/support/".$_SESSION['knowledgebase_support']."/");
exit();