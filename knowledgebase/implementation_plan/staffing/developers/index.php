<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed("yes",10,8,8,"These guys are needed to improve the ability of the system to function better each and every day.");

paragraph_detailed("yes",10,8,8,"Key priorties:");
list_start();
    point_detailed_start("no",10,8,8,"Security of the website and the platform");point_end_only();
    list_start();  
        point_detailed_start("no",10,8,8,"Digital and non-digital backup systems");point_end_only();
        point_detailed_start("no",10,8,8,"Page access security systems"); point_end_only();      
         point_detailed_start("no",5,5,5,"All sorts of fun");    point_end_only();        
    list_end();
list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";