<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_economy'])){$_SESSION['knowledgebase_economy'] = 'problem';}
header("Location: /knowledgebase/economy/".$_SESSION['knowledgebase_economy']."/");
exit();
