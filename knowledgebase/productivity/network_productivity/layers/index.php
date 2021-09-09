<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('yes',10,10,10,"While at the moment externally we only talk about a single layer network realistically there are many layers that traverse the entire network - a marketing layer, sales layer etc etc that traveses everything for example. These stack together to create the total network but again this is not yet communicated externally.");


echo "<br><br>";






require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";