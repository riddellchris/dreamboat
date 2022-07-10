<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_start('yes', 10, 9, 9, "Such that Dreamboat can function with Xero and users can understand it we have created the following diagram such that everyone can understand how your Xero account 'maps' to Dreamboat's database and ultimately charting.");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/data_mapping.png', '85%', '65vh');
echo "<br><br><br>";
paragraph_start('no', 10, 9, 9, "To discuss this at any point in time please contact your advisor or use the form below.");

	
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";