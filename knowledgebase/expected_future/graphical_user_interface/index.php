<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



		paragraph_detailed('no',10,8,8,"At present our system runs mostly on what looks like a 1990's interface full of words, links and critical information boxes however our objective in the near term is to be able to operate on a more useful and interesting graphic user interface that displays relevant network elements and critical related information at the same time.");
		paragraph_detailed('no',10,8,8,"The ultimate objective being to turn all the complicated data systems into that of (ironically) the <a target='_blank' href='https://www.youtube.com/watch?v=Ay6g66FbkmQ'>Heads Up Display</a> (HUD) of a fighter pilot.");		
		
		paragraph_detailed('no',10,8,8,"Examples of these will be clickable:");		
		list_start();
			point_detailed_start('no',8,8,8,"Mini-maps for each critical point of the network.");	
			point_detailed_start('no',8,8,8,"Personal network map - showing critical data and insights for the user and extended data for the pilot.");
			point_detailed_start('no',8,8,8,"Business network / divisional network map views for owners and managers showing critical network elements without breaching the privacy of individual members.");
		list_end();	
		
		paragraph_detailed('no',10,8,8,"This GUI will focus on the central network element seen below, and will ultimately display far more data and 3 dimensional intelligence as our systems improve for everyone.");		
		include_knowledgebase_image('/knowledgebase/expected_future/graphical_user_interface/diagrams/central_network_element.svg', 'default', '65vh');


					
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";	