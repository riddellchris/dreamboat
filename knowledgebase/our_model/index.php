<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_our_model'])){$_SESSION['knowledgebase_our_model'] = 'overview';}
header("Location: /knowledgebase/our_model/".$_SESSION['knowledgebase_our_model']."/");
exit();