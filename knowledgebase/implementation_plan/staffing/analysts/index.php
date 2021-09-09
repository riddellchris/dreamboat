<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

point_detailed_start("yes",10,8,8,"These guys are needed to simply break down all the data into meaningful and actionable insights for us and everyone.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";