<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_current_service'])){$_SESSION['knowledgebase_current_service'] = 'how_it_works';}
header("Location: /knowledgebase/current_service/".$_SESSION['knowledgebase_current_service']."/");
exit();


/*
The default was pricing until 
how it works &
Phases of engagement


*/
