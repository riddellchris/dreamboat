<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_more'])){$_SESSION['knowledgebase_more'] = 'about_us';}
header("Location: /knowledgebase/more/".$_SESSION['knowledgebase_more']."/");
exit();
