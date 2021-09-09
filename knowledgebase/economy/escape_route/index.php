<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',8,8,8,"To learn about the escape route for the economy please see our <a href='/knowledgebase/immediate_plan/' target='_blank'>immediate plan</a>.");
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
