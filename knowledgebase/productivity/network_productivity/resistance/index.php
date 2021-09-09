<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



		paragraph_detailed('no',10,8,8,"We define productivity resistance as the additional resources required to achieve a task with perfect / gold standard efficiency. For any individual, the issues that make up their productivity resistance are pictured below.");
		
	echo "<img src='/knowledgebase/productivity/resistance/diagrams/individual_productivity_resistance.svg' style='width:100%;'>";	
	
		paragraph_detailed('no',8,8,8,"Please note some of these issues will almost certainly be duplicated amongst many users within an organisation, however we focus on what surround each individual and solve from there.");
	
		paragraph_detailed('no',8,8,8,"As resistance is the gap between current productivity and gold standard productivity, resistance of 0 is almost impossible all day every day, however minimising productivity resistance is obviously of great value to employees and businesses alike. If we assume that productivity resistance is therefore a collection of the productivity issues that decrease productivity of each and every employee as seen below:");
		echo "<img src='/knowledgebase/productivity/resistance/diagrams/higher_resistance.svg' style='width:100%;'>";	


		paragraph_detailed('no',8,8,8,"By removing issues that create productivity resistance we improve productivity such that more resources are left over as the tasks are completed.");
		echo "<img src='/knowledgebase/productivity/resistance/diagrams/lower_resistance.svg' style='width:100%;'>";	

		paragraph_detailed('no',8,8,8,"This holds true for businesses and economies just as much as individuals themselves.");


	
		bigger_gap();bigger_gap();
		//the productivity that a person acheives is dependent on the issues that surrond them in the work enviornment (issues are the blue dots)
	
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";