<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,8,8, "While it seems helping an individual improve their productivity 10% every year seems possible based on our initial users and a simple waste minimisation strategy, our principle concerns moving forward are:");
	list_start();
		point_detailed_start('no',8,8,8,"How universal is this improvement potential across all roles and industries.");
		point_detailed_start('no',8,8,8,"Exactly how this improvement moves and transfers across all productivity networks.");		
		point_detailed_start('no',8,8,8,"How productivity improvements across the entire economy actually play out and therefore impact total productivity and wages.");		
		point_detailed_start('no',8,8,8,"How many periods of 10% improvement are possible, especially if others around you aren't changing too.");		
	list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";