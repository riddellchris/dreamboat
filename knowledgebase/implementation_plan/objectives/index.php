<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,8,8,"Get 10 staff, then 20, then keep going");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";