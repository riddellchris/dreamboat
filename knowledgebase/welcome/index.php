<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

if($_SESSION['HTTP_HOST'] == "dreamboat.com.au"){require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/welcome/content_per_domain/dreamboat.php"}
if($_SESSION['HTTP_HOST'] == "irrth.com"){require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/welcome/content_per_domain/irrth.php"}
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
