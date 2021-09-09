<?php
if(!isset($_SESSION)){session_start();}


//go to knowledgebase last page
//if not set then set it.

if(!isset($_SESSION['knowledgebase_last_page'])){$_SESSION['knowledgebase_last_page'] = 'welcome';}

header("Location: /knowledgebase/".$_SESSION['knowledgebase_last_page']."/");
exit();