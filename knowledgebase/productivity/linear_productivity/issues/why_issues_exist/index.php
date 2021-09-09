<?php
if(!isset($_SESSION)){session_start();}





require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



//intro

		
	paragraph_detailed('yes',10,10,10,'Constant change');//spotfires, not reactive
		paragraph_detailed('no',8,8,8,"The world is constantly changing, from the global macroeconomic environment through to the mood at home of each and every employee each and every night.");
		
		paragraph_detailed('no',8,8,8,"As a result, what is was perfect one day is not the next. These cracks arise faster than you can put them out but with the right solution they can be mitigated and eventually removed all together.");
		
	echo "<br><br>";

	
	
	paragraph_detailed('yes',10,10,10,'Humans are human');
		paragraph_detailed('no',8,8,8,"There is no single model of productivity optimisation for any one human at any one time.");
		
		paragraph_detailed('no',8,8,8,"Humans are (sadly in the case of business) not possible to be identified or managed as simply a box on an org chart.");
		
		paragraph_detailed('no',8,8,8,"They are far more complex and require appropriate inputs to operate efficiently.");
		
		paragraph_detailed('no',8,8,8,"Furthermore they are not robots, so how they interact with the world around them is never going to be perfect or gold standard.");
		
		//opportunity
		
		$copy = "With the right incentives (including just seeing their work have more impact, not neccesarily purely financial reward), they can and will typically get far closer to this gold standard all day every day.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

	echo "<br><br>";

paragraph_detailed('yes',10,10,10,'Imperfectly aligned objectives');	
paragraph_detailed('no',8,8,8,"From political leaders & voters within a country to life in a household or staff in a business the definition of success and how to achieve it is always a hot topic for debate.");
paragraph_detailed('no',8,8,8,"Especially in a business context, productivity issues occur where different members of the same business deem success to be defined by different measures. While good leadership can overcome this, achieving continuous perfection on this front is always impossible.");
			//thought experiement with the boats facing in different directions.







require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";













