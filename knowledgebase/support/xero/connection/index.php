<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

//paragraph_start('yes', 10, 9, 9, "Welcome to Dreamboat's knowledgebase.");



echo "<br><br><br>";
// removing issues that limit productivity from Australia's .");
include_knowledgebase_image('/knowledgebase/components/diagrams/network_issues_101.svg', 'default', '65vh');

echo "<br><br><br>";
	
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";