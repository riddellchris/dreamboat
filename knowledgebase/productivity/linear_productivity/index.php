<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_productivity_linear_productivity'])){$_SESSION['knowledgebase_productivity_linear_productivity'] = 'definition';}
header("Location: /knowledgebase/productivity/linear_productivity/".$_SESSION['knowledgebase_productivity_linear_productivity']."/");
exit();
