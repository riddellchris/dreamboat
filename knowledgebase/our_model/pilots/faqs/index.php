<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

echo "<br><br>";
faq_title("Why are they needed above and beyond data collection?");
list_start();
	point_detailed_start('no',9,8,8,"Discussion around and feedback about each individuals productivity is critical to the systems success. As a result some human to human interaction is critical.");
list_end();


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";