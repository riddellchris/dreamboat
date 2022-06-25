<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_economy'])){$_SESSION['knowledgebase_economy'] = 'disaster';}
header("Location: /knowledgebase/economy/".$_SESSION['knowledgebase_economy']."/");
exit();
