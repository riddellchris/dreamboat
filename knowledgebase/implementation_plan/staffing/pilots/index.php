<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,8,"Clearly pilots are required to take in more and more information as we go now");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";