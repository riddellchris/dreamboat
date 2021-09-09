<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,10,10,"Our plan is to map, monitor and optimise the <a href='/knowledgebase/productivity/network_productivity/symbology/' target='_blank'>productivity networks</a> of Australia to help:");
	list_start();
		point_detailed_start('no',8,8,8,"Individuals achieve more and earn more.");	
		point_detailed_start('no',8,8,8,"Businesses profit, grow and innovate.");echo "<a class='faq' href='/knowledgebase/our_plan/overview/faqs/businesses_profit_grow_and_innovate.php'>?</a>";
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Economies find non-debt based, per-capita GDP improvements and avoid endless <a href='/knowledgebase/economy/disaster/downside_risks/' target='_blank'>downside risks</a>.");
			list_start();		
				point_detailed_start('no',8,8,8,"Foster innovation and employment as result.");	
			list_end();			
	list_end();



paragraph_detailed('yes',10,10,8,"By focusing on upgrading the productivity networks of Australia we also:");
	list_start();
		point_detailed_start('no',8,8,8,"Ensure creativity is prioritised and enabled.");	
		point_detailed_start('no',8,8,8,"Help every individual and business move more rapidly towards their <a href='https://www.investopedia.com/terms/c/comparativeadvantage.asp' target='_blank'>comparative and absolute advantages</a>.");			
	list_end();
	
	
	
paragraph_detailed('yes',10,8,8,"Our principle objectives are as follows:");
	list_start();
		point_detailed_start('no',8,8,8, "Ensure that we create & target a statistically significant productivity improvement delta of <span style='color:red;'>10% p.a.</span> across all networks, thereby ensuring productivity improvement above and beyond current 'economic progression of a typical individual'.");point_end_only();
			
		$copy = "This exactness in productivity measurement 'delta' is not currently statistically reliable with our existing data to the standards we would like but in future versions & as our database continues to grow we anticipate it will be.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";	
		
		point_detailed_start('no',6,8,8, "At present a straight 10% improvement target is being met on an annual basis, with an additional boost within the first 6 months at roughly 10% improvement within that period alone.");point_end_only();	
			
		//economic/Objective
		include_knowledgebase_image('/knowledgebase/components/diagrams/Productivity_curves.svg', 'default', '65vh');		
			
		point_detailed_start('no',8,8,8, "Enable some propotionality of wage and productivity growth across our users.");point_end_only();
			
		//economic/Objective
		include_knowledgebase_image('/solutions/economic_normalisation/diagrams/productivity_and_wage_growth.svg', 'default', '65vh');		
			
		point_detailed_start('no',8,8,8, "Create real wage growth above the CPI.");point_end_only();		
		include_knowledgebase_image('/knowledgebase/components/diagrams/wages_above_cpi.svg', 'default', '65vh');	
	list_end();
	
	
	
paragraph_detailed('yes',8,8,8, "Enable total economic growth by:");point_end_only();	
	list_start();		
		point_detailed_start('no',8,8,8,"Limiting productivity losses.");	
		point_detailed_start('no',8,8,8,"Collective optimisation that was previously thought impossible.");
		point_detailed_start('no',8,8,8,"Individual assistance resulting in macroeconomic change.");							
	list_end();



paragraph_detailed('yes',10,8,8,"Our minimum standard objectives are:");
	list_start();
		point_detailed_start('no',8,8,8, "Help the people we work with to improve their productivity by any amount on a consistent basis.");point_end_only();
		point_detailed_start('no',8,8,8, "Do less harm than good on a consistent basis.");point_end_only();
	list_end();



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";