<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('no',10,10,10,"At Dreamboat we define issues as anything that limits an entity from operating at gold standard productivity.");
		
		paragraph_detailed('no',10,8,8,"Some examples of these issues are:");
		list_start();
			point_detailed_start('no',6,8,8,"Poor internal <span style='color:red;'>communication</span> slowing down workflows.");
			//	list_start();			
			//		 point_detailed_start('no',6,8,8,"from too much reliance on technology to communicate, as opposed to just talking, can lead to a lack of trust in each other and cause bottle necks in all sorts of workflows.");
			//	list_end();
			point_detailed_start('no',6,8,8,"<span style='color:red;'>Attention</span> deficits or distractions due to stress, fear or lack of motivation.");														point_end_only();
			point_detailed_start('no',6,8,8,"<span style='color:red;'>Wasted</span> time of contractors/other staff due to poor briefing procedures.");																point_end_only();
			point_detailed_start('no',6,8,8,"Poor task <span style='color:red;'>allocations</span> due to poor upward communication of <span style='color:red;'>skills.</span>");									point_end_only();
			point_detailed_start('no',6,8,8,"Lack of <span style='color:red;'>value</span> extraction due to a lack of <span style='color:red;'>skills</span> and/or <span style='color:red;'>attention.</span>");	point_end_only();	
		list_end();		
		
		paragraph_detailed('no',10,8,8,"In <a href='/knowledgebase/productivity/linear_productivity/'>linear productivity</a> we represent this diagramatically as the dot below. <br>
										The sum of these issues we define as <a href='/knowledgebase/productivity/linear_productivity/resistance/' target='_blank'>productivity resistance</a>.	
										<br>");
			include_knowledgebase_image('/knowledgebase/productivity/issues/diagrams/issue_dot.svg', 'default', '65vh');

		paragraph_detailed('yes',10,10,10,"The issues that impact productivity often involve numerous <a href='/knowledgebase/productivity/factors/' target='_blank'>factors</a>.");
	
		paragraph_detailed('no',10,8,8,"To understand why these issues exist <a href='/knowledgebase/productivity/issues/why_issues_exist/'>click here</a>.");	



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";