<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('no',8,9,8, "Network productivity applies very clearly across three domains, those being:");
		list_start();
//			point_detailed_start('no',8,8,8,"<a href='/knowledgebase/network_productivity/domains/individual/' 	target='_blank'>Individual</a> productivity networks");	
//			point_detailed_start('no',8,8,8,"<a href='/knowledgebase/network_productivity/domains/business/' 	target='_blank'>Business</a> productivity networks");				
//			point_detailed_start('no',8,8,8,"<a href='/knowledgebase/network_productivity/domains/economic/' 	target='_blank'>Economic</a> productivity networks");						

			point_detailed_start('no',8,8,8,"Individual productivity networks");	
			point_detailed_start('no',8,8,8,"Business productivity networks");				
			point_detailed_start('no',8,8,8,"Economic productivity networks");	
		list_end();

	paragraph_detailed('no',8,9,8, "Each of these domains have unique sets of issues, improvements and opportunities that can be updated to improve them.<br>
					<span style='color:grey;'>For the time being our focus is on improving individual and business networks only.</span>");
					

	paragraph_detailed('yes',8,9,8, "Individual networks exist independent of organisational boundaries and therefore can include multiple organisations and economies.");			
	include_knowledgebase_image('/knowledgebase/productivity/network_productivity/domains/diagrams/individual_networks.svg', 'default', '65vh');					
					

	paragraph_detailed('yes',8,9,8, "Organisations, typically businesses, obviously have internal interactions and external ones as described diagramatically below.");			
	include_knowledgebase_image('/knowledgebase/productivity/network_productivity/domains/diagrams/organisational_boundaries.svg', 'default', '65vh');	


	paragraph_detailed('yes',8,9,8, "Economic networks are dominated by organisational boundaries and include individuals through to large industries.");			
	include_knowledgebase_image('/knowledgebase/productivity/network_productivity/domains/diagrams/economic_network.svg', 'default', '65vh');	




require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";