<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

	paragraph_detailed('no',8,8,8,"To provide a complete suite of products in such a way to tackle productivity improvement and workplace mental health at a price and budget to suit all situations our services include:");
	list_start();
		point_detailed_start('no',8,8,8,"Workplace mental health support");point_end_only();
		point_detailed_start('no',8,8,8,"Platform access");point_end_only();
		point_detailed_start('no',8,8,8,"Text consulting &");point_end_only();
		point_detailed_start('no',8,8,8,"Audio consulting");point_end_only();
	list_end();
	
	
	$copy = "Workplace mental health(iness) and productivity are highly correlated";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
	
	
	paragraph_detailed('no',8,8,8,"
	Our workplace mental health support comes in the for of unlimited text based conversations with our Pilots about concentration, stress, confidence and other issues impacting performance. Free for all Australian workplaces we offer this service to ensure that everyone has some access to the support they need.<br>
	<br>
	Platform access is often used by small businesses to manage and improve their own performance by themselves as they track and manage their business. Our CRM, task management, improvement and issue tracking is optimised to improve productivity and manage workplace mental health at the same time providing a unique solution to small business ERP.<br>
	<br>
	Text consulting ensures unlimited ongoing conversations about all the issues currently at place for each user. Rather than ongoing, messy email conversations our platform ensures simple structured communication and progress tracking across everything each user has going on.");
	
	paragraph_detailed('no',8,8,8,"Audio/phone consulting provided in 4 levels:");
	list_start();
		point_detailed_start('no',8,8,8,"Monthly half hour");point_end_only();
		point_detailed_start('no',8,8,8,"Fortnightly half hour");point_end_only();
		point_detailed_start('no',8,8,8,"Weekly half hour &");point_end_only();
		point_detailed_start('no',8,8,8,"Weekly hour");point_end_only();
	list_end();
	paragraph_detailed('no',8,8,8,"
	Consultations ensure that no matter the current level of challenge and desired productivity improvement there is a solution that fits each user’s situation.<br>
	<br>
	Most popular for staff are fortnightly half hour consultations such that some productivity improvement can be made while output is not impacted.<br>
	<br>
	Most popular for Owners, Directors and Managers is weekly half hour consultations such that stress is reduced and optimal productivity is ensured.<br>
	<br>
	Where productivity maintenance or a sense of workforce inclusion is required, monthly half hour sessions are possible and in extreme cases hour long sessions may be required for short period but not recommended for any longer than 2-3 months.<br>
	<br>
	Most consultations are limited to half-an-hour to ensure that they are effective & proactive while not taking up endless time and attention. Typically these conversations are completed at a regular “down time” the user has in the office, on the road or within their weekly workload.");



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}