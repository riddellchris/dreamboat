<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_our_model_of_productivity_improvement'])){$_SESSION['knowledgebase_our_model_of_productivity_improvement'] = 'awareness';}
header("Location: /knowledgebase/our_model_of_productivity_improvement/".$_SESSION['knowledgebase_our_model_of_productivity_improvement']."/");
exit();