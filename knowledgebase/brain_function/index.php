<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_brain_function'])){$_SESSION['knowledgebase_brain_function'] = 'overview';}
header("Location: /knowledgebase/brain_function/".$_SESSION['knowledgebase_brain_function']."/");
exit();