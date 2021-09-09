<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



		paragraph_detailed('no',10,8,8,"Given the obvious link between productivity at work and workplace mental health our objective is to provide an integrated solution to optimise workplace mental health & productivity concurrently. This includes investment and refinement of our:");
		list_start();	
			point_detailed_start('no',10,8,8,"'Autocoach' support systems to prompt and guide people to return to productivity ASAP.");point_end_only();
			point_detailed_start('no',10,8,8,"Ongoing integrated risk assessments and predictive issues alerts.");point_end_only();
			point_detailed_start('no',10,8,8,"Continuous platform improvement to increase engagement that improves productivity and reliability.");	point_end_only();	
		list_end();
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";	