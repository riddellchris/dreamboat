<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('no',8,8,8,"Our pilots guide each and every one of our users with a combination of our bespoke platform, data & insights as well as their own skills, knowledge and intuition. As with any pilot of any form, the more robust the technology they manage the better they can perform their role. In order to best support our pilots our focus is on:");
		list_start();	
			point_detailed_start('no',8,8,8,"Integrated knowledgebase development and optimisation to identify and resolve issues ASAP. <br> (A.K.A. Have the intel they need on hand when they need it.)");point_end_only();
			point_detailed_start('no',8,8,8,"Pilot to pilot communication systems to ensure optimal support and continuous improvement.");point_end_only();
			point_detailed_start('no',8,8,8,"Appropriate user segmentations to ensure optimal focus on a specific set of problems of an industry, role or business size.");point_end_only();		
		list_end();	
		paragraph_detailed('no',8,8,8,"All while obviously optimising and improving their productivity and workplace mental health at the same time too.");	
		
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";