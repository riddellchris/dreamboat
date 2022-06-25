<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_support_xero'])){$_SESSION['knowledgebase_support_xero'] = 'data';}
header("Location: /knowledgebase/support/xero/".$_SESSION['knowledgebase_support_xero']."/");
exit();