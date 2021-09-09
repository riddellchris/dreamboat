<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,7,"Critical mapping");point_end_only();
list_start();
	point_detailed_start('no',8,8,8,"Critical mapping for today");								point_end_only();
//	point_detailed_start('no',8,8,8,"typcial benefits");										point_end_only();
	point_detailed_start('no',8,8,8,"Issue removal");											point_end_only();
	echo "<span class='gold'>";
	point_detailed_start('no',8,8,8,"<span class='gold'>BENEFIT:</span> Clarity of what really matters");					point_end_only();
	point_detailed_start('no',8,8,8,"<span class='gold'>BENEFIT:</span> Issue removal");									point_end_only();	
	point_detailed_start('no',8,8,8,"<span class='gold'>BENEFIT:</span> Qualitative adivce based on Pilot recognition");	point_end_only();
list_end();

paragraph_detailed('yes',10,8,7,"Secondary mapping");point_end_only();
list_start();
	point_detailed_start('no',8,8,8,"Beyond the critical issues 'of the day' secondary mapping includes more detailed assessments and integration of the assets and processes currently in use further to planned for the future use");point_end_only();
	point_detailed_start('no',8,8,8,"Quantitative investigations across all productivity areas");	point_end_only();
	list_start();
		point_detailed_start('no',8,8,8,"Based on critical area assessments and optimisation engine requests");point_end_only();
		point_detailed_start('no',8,8,8,"Typically: Time spend, task requirements, financial flows & KPIs");point_end_only();		
	list_end();
	echo "<span class='gold'>";
	point_detailed_start('no',8,8,8,"<span class='gold'>BENEFIT:</span> Comparative optimisation begins");				point_end_only();
	point_detailed_start('no',8,8,8,"<span class='gold'>BENEFIT:</span> Progress to gold standard productivity begins");	point_end_only();	
list_end();

paragraph_detailed('yes',10,8,7,"Connected mapping");point_end_only();
list_start();
//hidden until behind the scenes is made public - if ever?
//CR 21.07.06
//	point_detailed_start('no',8,8,8,"nobody works alone so <a target='_blank' href='/knowledgebase/behind_the_scenes/'>behind the scenes</a> we are putting together the connected maps of you and those you interact with inside and outside your business");point_end_only();

	point_detailed_start('no',8,8,8,"Nobody works alone so behind the scenes we are putting together the connected maps of you and those you interact with inside and outside your business");point_end_only();
	point_detailed_start('no',8,8,8,"This allows us to find even more opportunity for improvement and inegration with the economy and business");point_end_only();
	echo "<span class='gold'>";
	point_detailed_start('no',8,8,8,"BENEFIT:</span> Truely unique optimisations unrivaled by any other solution");				point_end_only();
	point_detailed_start('no',8,8,8,"BENEFIT:</span> Find the fastest paths around previously unknown maps of productivity");	point_end_only();	

list_end();

paragraph_detailed('yes',10,8,7,"Initial API data implementations");point_end_only();
list_start();

	point_detailed_start('no',8,8,8,"Typically financial data, CRM data, project management & customer feedback data.");			point_end_only();
	point_detailed_start('no',8,8,8,"Sometimes preceeeded by simple application exports.");						point_end_only();
	point_detailed_start('no',8,8,8,"This is implemented as ready and required.");								point_end_only();
	point_detailed_start('no',8,8,8,"To 'access' this phase a steady and reliable 'connected map' must be ready such that transposition of each applications APIs data is built upon a steady map and therefore it is useful.");				point_end_only();
	echo "<span class='gold'>";
	point_detailed_start('no',8,8,8,"BENEFIT:</span> Unrivalled optimisation mechanisms unlocked due to complete business histories enabled.");				point_end_only();
	echo "<span class='gold'>";

list_end();

paragraph_detailed('yes',10,8,7,"Secondary API data implementations");point_end_only();
list_start();
	point_detailed_start('no',8,8,8,"Less critical systems are integrated in round this phase.");						point_end_only();
	point_detailed_start('no',8,8,8,"Typically this includes promotion, advertising and other secondary applications that are part of the business performance.");						point_end_only();
	point_detailed_start('no',8,8,8,"SaaS direct feedback loops are possible here - as found in <a href='/knowledgebase/current_service/pricing/'>pricing</a>");point_end_only();
list_end();

/*
paragraph_detailed('yes',10,8,7,"External data implementations");point_end_only();
list_start();
	point_detailed_start('no',8,8,8,"up up and away - economic inputs and feedback");point_end_only();
list_end();
*/
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";