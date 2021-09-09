<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


echo "<br><br>";
paragraph_start('no', 10, 9, 9, "Start here: <a href='https://en.wikipedia.org/wiki/Network_theory' target='_blank'>Network theory</a>");








require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";