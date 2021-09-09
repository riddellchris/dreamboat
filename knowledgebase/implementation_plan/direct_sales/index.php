<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes', 8,8,8, "Service businesses where they sell time");


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";