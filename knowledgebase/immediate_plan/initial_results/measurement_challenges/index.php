<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',10,8,8,"Measuring the impact of productivity improvement to a scientific standard above and beyond all other factors is notoriously difficult due to:");

list_start();
	point_detailed_start('yes',8,8,8, "Economic, business and other personal change.");point_end_only();
	point_detailed_start('yes',8,8,8, "What is to be expected as part of normal economic progressions of individuals within the economy.");point_end_only();	
	point_detailed_start('no',8,8,8, "Difficulty in truly finding and managing a control set or conducting any form of double blind comparison.");point_end_only();
	point_detailed_start('no',8,8,8, "Difficulty in truly defining total productivity further to that of simple, instantaneous financial calculations. <BR><small>i.e. neglecting the value of IP created, reaping investment rewards in the future and the varying perspectives of what critical variables indicate productivity.</small>");point_end_only();		
	
list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";