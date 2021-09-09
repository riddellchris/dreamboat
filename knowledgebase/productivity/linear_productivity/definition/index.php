<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('yes',10,8,8,"We define productivity as the ratio of the output volume compared with the input volume of a person, a business and economy.");

		paragraph_detailed('no',10,8,8,"So if the person below is doing things by turning ticks green");
		//person with green & grey ticks going past them
		echo "<img src='/knowledgebase/productivity/linear_productivity/definition/diagrams/productivity_ticks.svg' style='width:100%;'>";
	
		paragraph_detailed('no',10,8,8, " and to turn those ticks green they are using up resources");
		
		echo "<img src='/knowledgebase/productivity/linear_productivity/definition/diagrams/productivity_ticks_with_gold.svg' style='width:100%;'>";
		
		paragraph_detailed('no',10,8,8, " the less resources are used to achieve those ticks the better an individuals productivity.");				
		//then their productivity is equivalent to
	
		
	
	
	
	

		
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";