<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['knowledgebase_the_planet'])){$_SESSION['knowledgebase_the_planet'] = 'disaster';}
header("Location: /knowledgebase/the_planet/".$_SESSION['knowledgebase_the_planet']."/");
exit();
