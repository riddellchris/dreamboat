<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_benefits'])){$_SESSION['knowledgebase_benefits'] = 'product';}
header("Location: /knowledgebase/benefits/".$_SESSION['knowledgebase_benefits']."/");
exit();