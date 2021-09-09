<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_more_about_us'])){$_SESSION['knowledgebase_more_about_us'] = 'why';}
header("Location: /knowledgebase/more/about_us/".$_SESSION['knowledgebase_more_about_us']."/");
exit();
