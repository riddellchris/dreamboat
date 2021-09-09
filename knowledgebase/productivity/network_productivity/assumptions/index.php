<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',10,10,10,"The critical assumptions included in our model of productivity are as follows:");

		list_start();
		paragraph_detailed('yes',10,10,10,"Productivity control");
			point_detailed_start('no',8,8,8,"Ultimately all productivity is driven by humans.");	
			point_detailed_start('no',8,8,8,"All productivity is driven by humans, led primarily by their brain. This includes their personal productivity and the resources they consume to do their work.");	point_end_only();
			echo "<br>";
			
		paragraph_detailed('yes',10,10,10,"Productivity networks");			
			point_detailed_start('no',8,8,8,"Every individual, not living isolated in the wilderness, is part of at least one productivity network that may be a business, a market, an industry or economy as a whole.");			point_end_only();
			point_detailed_start('no',8,8,8,"No one person is totally in control of their productivity, without at least one other person&#39;s involvement somewhere.");				point_end_only();
			point_detailed_start('no',8,8,8,"No one person has total control of a company of two or more people to always have perfectly maximised productivity.");					point_end_only();
			echo "<br>";

		paragraph_detailed('yes',10,10,10,"<a href='/knowledgebase/productivity/issues/why_issues_exist/' target='_blank'>Constant change</a>");	
			point_detailed_start('no',8,8,8,"The world, the economy, markets, business and people are always changing.");										point_end_only();
			point_detailed_start('no',8,8,8,"No one person has permanently, perfectly optimised productivity.");											point_end_only();
			echo "<br>";

		paragraph_detailed('yes',10,10,10,"Improvement desire");	
			point_detailed_start('no',8,8,8,"Most people are trying to do a good job, even a better job and as such are looking how to achieve that. This is especially true if it improves their way of life.");						point_end_only();
			echo "<br>";			
			
		paragraph_detailed('yes',10,10,10,"Observation & communication");			
			point_detailed_start('no',8,8,8,"Not all productivity issues are realised by an individual or communicated to others."); 						point_end_only();
			echo "<br>";			

		paragraph_detailed('yes',10,10,10,"Value transfer");							
			point_detailed_start('no',8,8,8,"Of the productivity created by a person y, they will gain some portion of that y as financial reward x, where x is less than y.");			point_end_only();
			point_detailed_start('no',8,8,8,"Of the productivity created by a business y, it will receive some portion of that y as financial reward x, where x is less than y.");			point_end_only();
		list_start();
			point_detailed_start('yes',8,8,8,"It is in the best interests of any business to share some portion of all productivity improvements with those who create them, to continue incentivising more improvement.");			point_end_only();
		list_end();
			point_detailed_start('no',8,8,8,"Of the productivity created by an economy y, it will receive some portion of that y as financial reward x, where x is less than y.");			point_end_only();					
		list_end();
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";