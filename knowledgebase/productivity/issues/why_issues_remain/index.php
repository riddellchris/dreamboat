<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

//see how much this explodes it might need to be split out into separate folders with an intro again



	paragraph_detailed('yes',10,10,10,'Lack of allocated time');	
	paragraph_detailed('no', 10, 8, 9, "If no time is allocated to productivity improvement then it simply will not happen, thus issues remain.");
		
		echo "<br><br>";
		
	paragraph_detailed('yes',10,10,10,'Lack of positive reinforcement');	
paragraph_detailed('no', 10, 8, 9, "While typically associated with childhood behaviour, positive re-inforcement in productivity improvement is just as much about encouragement as it is enabling some sense of progress such that attempts to improve productivity are not deemed futile by each and every individual.");

paragraph_detailed('no', 8, 8, 9, "When productivity improvements are not positively reinforced by any number of actions then productivity improvement like any behaviour grinds to a halt.");

paragraph_detailed('yes', 8, 8, 9, "However when simple progress is made, feedback is given and ultimately a person's life improves as a result of this improved productivity it will continue to occur.");		
		

		echo "<br><br>";
	
	paragraph_detailed('yes',10,10,10,'Limited focal capacity');
paragraph_detailed('no',8,8,8,"Small productivity limitations are everywhere but not always observed and or dealt with due to a lack of spare mental capacity. Everyone in a business 'smells' productivity issues as they go throughout their days but how many get dealt with an acted upon typically remain at a low percentage. Most people, and quite rightly are focussed on doing the work that they need to get done today rather than how they are doing it or what they are actually doing. This limited capacity for focus on productivity improvements means many issues are just missed or dismissed because of lack of time or energy.");
	
		echo "<br><br>";
		
		

	paragraph_detailed('yes',10,10,10,'Lack of active search');
		paragraph_detailed('no',8,8,8,"Most people are busy as it is just doing the work, so their ability to and or continuous attempts to improve their productivity are often limited. This also occurs because of their limited ability to actually make the appropriate changes to productivity themselves, so eventually they stop looking as hard, as often for ways to improve their productivity.");
		
		paragraph_detailed('no',8,8,8,"Without a continuous process to actually implement productivity improvements an active search for those improvements dies off.");
		
		
		//fact 
		$copy = "With appropriate implementation of such a continuous process though, active search often resumes and starts to drive significant change.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

		echo "<br><br>";
		

	paragraph_detailed('yes',10,10,10,'Overwhelming improvement backlog');	
		paragraph_detailed('no',8,8,8,"Where too many potential improvements are observed, few improvements are often actually implemented due to a type of decision/prioritisation fatigue from the number of potential improvements to be made.");
		
		paragraph_detailed('no',8,8,8,"Without a clear, simple and very easy to use decision framework / priortisation matrix little will ever be achieved, leaving too many unresolved issues on the table.");
		paragraph_detailed('no',8,8,8,"Worse still in this scenario, a compounding snowball effect can take place where issues pile up and little improvement occurs, sometimes to the extent that negative progress is ensured.");
		
		echo "<br><br>";	
	
	
	paragraph_detailed('yes',10,10,10,'Limited communication');	
		paragraph_detailed('no',8,8,8,"Productivity on some level always requires other humans to be effective, but all too often communication barriers and/or insufficent communication hamper overall productivity.");
		paragraph_detailed('no',8,8,8,"All too often technology is assumed to be a complete replacement for communication, leaving gaps in trust and knowledge between team members, management, clients and suppliers alike.");
		paragraph_detailed('no',8,8,8,"While this is often a productivity issue itself, it is equally a reason that productivity imperfections remain, where post 'identification' a simple discussion and/or better ongoing communication always yeilds great benefits."); 

		echo "<br><br>";
	
	
	paragraph_detailed('yes',10,10,10,'Barriers to change');
		paragraph_detailed('no',8,8,8,"To make any change to any business or operation for that matter some investment is required. This investment can vary from minutes to week and significant expenditure.<br>Typically productivity improvements are only made within a standard range of payoff potential which takes into account all the resources required to implement the change itself.");
		
		//chart
		
		paragraph_detailed('no',8,8,8,"When taking into account issues surrounding HR costs and attention capacity to solve issues impacting productivity, clearly many issues are left unresolved based on the traditional productivity improvement processes.");
		
		$copy = "If all staff are enabled as agents of productivity improvement the number of improvements left unresolved dramatically decreases.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/potential_solution.php";
		echo "<br><br>";		

	paragraph_detailed('yes',10,10,10,'Inconsistent application');	
	paragraph_detailed('no',10,10,10, "Without a consistent application of the productivity improvement process, including actioning that improvement, the process itself typically dies off. All too often this means that when management gets too busy the process dies away to never return. Obviously this impacts productivity improvement over the longer term for the business, the employees and the economy itself.");
//as soon as drop out / drop off fucked
//positive reinforcement stops and it's hard to implement again
		echo "<br><br>";

			
	paragraph_detailed('yes',10,10,10,'Lack of internal expertise');
		paragraph_detailed('no',8,8,8,"Obviously most people in most industries are pretty good at what they do and productive enough to be of value sufficient to support a wage.");
		paragraph_detailed('no',8,8,8,"That said, making consistent productivity improvements does require a skillset additional to the doing of work and simple optimisation against the 'way we have always done it'.");
		paragraph_detailed('no',8,8,8,"Without those skills internally it is often very difficult to make productivity improvements stick as awareness and the skills to make that change are often lacking.");
		echo "<br><br>";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";