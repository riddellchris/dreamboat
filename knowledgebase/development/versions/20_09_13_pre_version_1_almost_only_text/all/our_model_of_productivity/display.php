<?php
if(!isset($_SESSION)){session_start();}

copy_big_title_open('Our model of productivity','our_model_of_productivity');
	copy_title_open('Assumptions','assumptions','not_open');
		list_start();
			point("All productivity is driven by humans, led primarily by their brain. This includes their personal productivity and the resources they consume.");
			point("No one person is totally in control of their productivity, without at least one other person&#39;s involvement somewhere.");	
			point("The world, the economy, markets, business and people are always changing.");
			point("No one person has total control of a company of two or more people to have perfectly maximised productivity always.");
			point("Every individual is part of at least one productivity network that may be a business, a market, an industry or economy as a whole.");
			point("No one person has permanently, perfectly optimised productivity.");
			point("Most people are trying to do a good job, even a better job and as such are looking how to achieve that.");	
			point("Not all productivity issues are realised by an individual or communicated to others, especially managers."); 
			point("Ultimately all productivity is driven by humans.");
			point("Of the productivity created by a person y, they will receive some portion of that x as financial reward, where x is less than y.");
			point("Of the productivity created by a business y, it will receive some portion of that x as financial reward, where x is less than y.");
			point("It&#39;s in the best interests of any business to share some portion of all productivity improvements with those who create them.");	
					
		list_end();
	copy_title_close();
	
	
	copy_title_open('What is productivity','what_is_productivity','not_open');
	
	
	
		paragraph("We define productivity as the ratio of the output volume compared with the input volume where outputs create and/or preserve value.");
		paragraph("In simple terms, it's doing things that create or preseve value divided by the inputs required (typically: time, money and resources of others).");
		//person with green & grey ticks going past them
		echo "<img src='/knowledgebase/all/our_model_of_productivity/diagrams/productivity_ticks.svg' style='width:100%;'>";
	
		paragraph("Productivity is always a function of an individual and their working environment, which may be good or great but due to our assumptions above we conclude is never perfect. The extent of our working environments imperfection impacts an individuals productivity as represented below:");	
	
	
	
		/*
		copy_title_open('Collective Productivity','collective_productivity');
		//cover the network effects and diagrams here
	
	
	
		paragraph("Ultimately a business' or organisation's productivity is a function of the combined outputs of those within the organisation as below");
		//triangle chart with ticks everywhere and dots around the place
		
		paragraph("Obviously then the less productivity limiting issues that exist within a business, the better the productivity, so long as it holds true that the cost of removal of any issues is less than the lifetime cost of that issue remaining.");
		
	copy_title_close();
		*/
	copy_title_close();
	
	
	
	
	
	
	copy_title_open('General Factors of Productivity','factors','not_open');
		paragraph("The factors that contribute to individual productivity are as follows:");
		list_start();
			$span_start 	= "<span style='color:red;'>";
			$span_end	= "</span>";
			point($span_start."Skills".$span_end." - lack of, optimal use of, underutilisation of");
			point($span_start."Value".$span_end." - creation of, communication of, financial reward from");
			point($span_start."Efficiency".$span_end." - of actions, of workflows, of processes, of technology");
			point($span_start."Attention".$span_end." - capacity, application, requirements, duration of application");
			point($span_start."Allocation".$span_end." - of tasks, of time, of resources");
			point($span_start."Motivation".$span_end." - of people, businesses and alignement of both");		
			point($span_start."Trust".$span_end." - between people, with markets, with businesses");
			point($span_start."Risks".$span_end." - legal, financial, HSE, strategic, economic");
			point($span_start."Communication".$span_end." - clarity, certainty, recurrance");
			point($span_start."Waste".$span_end." - of assets, of finances, of people, of resources");
		list_end();	
	copy_title_close();	
	
	
	
	copy_title_open('Productivity Resistance','productivity_resistance','not_open');
		paragraph("We define productivity resistance as the additional resources required to achieve a task with perfect / gold standard efficiency. For any individual, the issues that make up their productivity resistance are pictured below.");
		
	echo "<img src='/knowledgebase/all/our_model_of_productivity/diagrams/individual_productivity_resistance.svg' style='width:100%;'>";	
	
		paragraph("Please note some of these issues will almost certainly go beyond just a single user, however we focus on what surround each individual and solve from there.");
	
		paragraph("While obviously a resistance of 0 isn't possible, minimising productivity resistance is obviously of great value to employees and businesses alike. If we assume that productivity resistance is therefore a collection of the productivity issues that decrease productivity of an employee, we can think of productivity as follows.");
	
		//issues examples
		paragraph("These issues are typically associated with either one or many of the factors above for example:");
		list_start();
			point("Poor internal <span style='color:red;'>communication</span> from too much reliance on technology to communicate can lead to a lack of trust in each other and cause bottle necks impacting efficiency even sales and market communication");
			point("<span style='color:red;'>Attention</span> deficits or distractions due to stress, fear or lack of motivation");
			point("<span style='color:red;'>Wasted</span> time of contractors/other staff due to poor briefing procedures");
			point("Poor task <span style='color:red;'>allocations</span> due to poor upward communication of <span style='color:red;'>skills</span>");	
			point("Lack of <span style='color:red;'>value</span> extraction from each client due to a lack of <span style='color:red;'>skills</span> and or <span style='color:red;'>attention</span>");		
		list_end();
		echo "<img src='/knowledgebase/all/our_model_of_productivity/diagrams/higher_resistance.svg' style='width:100%;'>";	
		echo "<img src='/knowledgebase/all/our_model_of_productivity/diagrams/lower_resistance.svg' style='width:100%;'>";
	
		bigger_gap();bigger_gap();
		//the productivity that a person acheives is dependent on the issues that surrond them in the work enviornment (issues are the blue dots)
	
	
	copy_title_close();
	
	
		
	
	
	
	
	copy_title_open('Measurement & Observation','observation','not_open');
		paragraph("Productivity observation and measurement can be achieved by and combination of:");
		list_start();
			point("Financial metrics.");	
			point("Task completion metrics.");
			point("KPIs.");	
			point("Subjective owner/manager/director observations.");			
			point("Personal observation.");	
			point("Other staff observations.");	
			point("3rd party observations.");									
		list_end();
		paragraph("As observation occurs, achieved productivity, productivity issues and limitations are typically observed by every type of observer and vary depending on their perspective.");
	copy_title_close();	
	

copy_big_title_close();




