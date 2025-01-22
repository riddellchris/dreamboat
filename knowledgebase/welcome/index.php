<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

if($_SERVER['HTTP_HOST'] == "dreamboat.com.au"){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/welcome/content_per_domain/dreamboat.php";}
if($_SERVER['HTTP_HOST'] == "irrth.com"){		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/welcome/content_per_domain/irrth.php";}
if($_SERVER['HTTP_HOST'] == "nashnewton.com.au"){	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/welcome/content_per_domain/nashnewton.php";}

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
