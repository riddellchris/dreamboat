<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_start('yes', 10, 9, 9, "Welcome to Dreamboat's knowledgebase.");



	
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";