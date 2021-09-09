<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_productivity_network_productivity'])){$_SESSION['knowledgebase_productivity_network_productivity'] = 'summary';}
header("Location: /knowledgebase/productivity/network_productivity/".$_SESSION['knowledgebase_productivity_network_productivity']."/");
exit();
