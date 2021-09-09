<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


paragraph_detailed('yes',10,10,8,"In one simple fortnightly 20-30 minute phone conversation we address the issues currently impacting productivity of each individual, optimise their activities, identify opportunities to maximise their productivity and plan a simple path forward to improve.");

paragraph_detailed('no', 10,8,8, "Our simple confidential process provides the easiest, most cost effective and most reliable system to improve the productivity of everyone within your business to make more money and simplify the path forward each and every day.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
