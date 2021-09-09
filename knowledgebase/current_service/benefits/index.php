<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";




if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}
		
		
		paragraph_detailed('yes',10,8,8,"In general:");
		list_start();
			point_detailed_start('no',8,8,8,"A regular dedicated time for each employee to think, plan and work towards improving their productivity.");point_end_only();
			point_detailed_start('no',8,8,8,"Complete identification of all issues limiting an individual's productivity.");point_end_only();
			point_detailed_start('no',8,8,8,"Systematic support, advice and encouragement to remove issues limiting productivity.");point_end_only();
			point_detailed_start('no',8,8,8,"A consistent focus & reminders about productivity improvement.");point_end_only();
			point_detailed_start('no',8,8,8,"Optimisation of, and drawing forward of internal productivity improvements.");	point_end_only();	
			point_detailed_start('no',8,8,8,"Overall improved productivity & financial reward.");point_end_only();
		list_end();
	
	echo "<br>";	
		paragraph_detailed('yes',10,8,8,"For you:");
		paragraph_detailed('no',8,8,8,"Beyond the obvious financial incentive and productivity improvement, other benefits primarily include:");
		list_start();
			point_detailed_start('no',8,8,8,"Less stress as the path towards improvement becomes simpler and more reliable.");point_end_only();
			point_detailed_start('no',8,8,8,"Greater simplicity and reliability in your daily workloads.");point_end_only();
			point_detailed_start('no',8,8,8,"An improved ability to switch off at the end of every day.");point_end_only();
		list_end();
	
	echo "<br>";
	
		paragraph_detailed('yes',10,8,8,"For the business:");
		paragraph_detailed('no',8,8,8,"Further to simply reducing costs and improving productivity there are other business benefits:");
		list_start();
			point_detailed_start('no',8,8,8,"Simplified processes and more employee engagement.");point_end_only();
			point_detailed_start('no',8,8,8,"Steady consistent progress towards better productivity across the entire company.");point_end_only();
			point_detailed_start('no',8,8,8,"More internal motivation from employees.");point_end_only();
			point_detailed_start('no',8,8,8,"Better marketing efficiency due to improved message clarity.");point_end_only();		
		list_end();
		
	echo "<br>";		
		paragraph_detailed('yes',10,8,8,"For the economy:");
		list_start();
			point_detailed_start('no',8,8,8,"Sustained wage growth is somewhat proportional to productivity improvements.");point_end_only();		
			point_detailed_start('no',8,8,8,"New technological advancements and opportunities that fall out from the search for additional productivity.");point_end_only();
			point_detailed_start('no',8,8,8,"A new direction and national identity of being market leaders across numerous industries thanks to innovations found in the search for more productivity.");point_end_only();									
			point_detailed_start('no',8,8,8,"Increased non-mining exports and improved international competitiveness.");point_end_only();	
			point_detailed_start('yes',8,8,8,"Greater economic stability and an improved standard of living.");point_end_only();			
			
				
		list_end();


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}