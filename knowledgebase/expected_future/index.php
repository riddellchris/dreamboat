<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_expected_future'])){$_SESSION['knowledgebase_expected_future'] = 'introduction';}
header("Location: /knowledgebase/expected_future/".$_SESSION['knowledgebase_expected_future']."/");
exit();