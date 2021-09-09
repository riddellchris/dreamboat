<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



		paragraph_detailed('yes',8,8,10,"As the user base grows the capacity for predictive analysis improves allowing better identification and prioritisation of productivity issues and improvements. As such we continue to:");
		list_start();	
			point_detailed_start('no',8,8,8,"Integrate key client systems such as accounting platforms and CRMs to build a complete picture of productivity across the economy.");point_end_only();
			point_detailed_start('no',8,8,8,"Understand and integrate links between companies, industries and economic trends.");point_end_only();
			point_detailed_start('no',8,8,8,"Build a new, granular economic model as accurate as Facebook's social data must be.");point_end_only();	
		list_end();


		
		
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";