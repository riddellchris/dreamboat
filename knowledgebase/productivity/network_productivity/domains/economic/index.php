<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


/*
	paragraph_detailed('no',8,9,8, "Network productivity applies very clearly across three domains, those being:");
		list_start();
			point_detailed_start('no',8,8,8,"Individual productivity networks");	
			point_detailed_start('no',8,8,8,"Business productivity networks");				
			point_detailed_start('no',8,8,8,"Economic productivity networks");						
		list_end();

	paragraph_detailed('no',8,9,8, "Each of these domains have unique sets of issues, improvements and opportunities that can be updated to improve them.<br>
					<span style='color:grey;'>For the time being our focus is on improving individual and business networks only.</span>");
*/


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";