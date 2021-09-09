<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/disaster/part_1.php";
echo "<br><br>";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/disaster/part_2.php";	

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";