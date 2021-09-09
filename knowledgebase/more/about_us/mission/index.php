<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,8,"Our ultimate mission is to optimse productivity and mental healthiness of individuals, businesses and economies as they are all but one and the same.");


paragraph_detailed('no',10,8,8,"With our focus on using technology, data and mathematics to ask the perfect question to the right person at the perfect time we believe this is more than possible.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";