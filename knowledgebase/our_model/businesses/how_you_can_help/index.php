<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_how_you_can_help'])){$_SESSION['knowledgebase_how_you_can_help'] = 'initial_trial';}
header("Location: /knowledgebase/how_you_can_help/".$_SESSION['knowledgebase_how_you_can_help']."/");
exit();
