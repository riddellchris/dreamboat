<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

paragraph_detailed('yes',8,8,8,"Built to solve the <a href='/knowledgebase/productivity/contention/' target='_blank'>productivity contention</a>, our product solves the critical issues required for inidividual productivity improvement in one, simple fortnightly conversation of between 20 and 30 minutes.");

paragraph_detailed('no',8,8,8,"Our process is all about the identification, prioritisation and resolution of issues impacting productivity with each and every employee in an organisation in such a way that over time, less productivity sapping issues exist and therefore productivity improves.");

		
		/*	rubbish diagram	*/

paragraph_detailed('no',8,8,8,"We begin each engagement by selecting appropriate measures of productivity for each individual, be that financial or other KPIs. These may be predefined by the business or if they are not presently defined our Pilots will assist with each user to define set these objectives based on comparative examples and the specific business environment.");
paragraph_detailed('no',8,8,8,"Following the selection of a key productivity indicator we actively work with each client to work in the direction of improved productivity by removing the issues that are occurring and defining simple improvements that can be undertaken to rectify and/or remove these issues as required.");
		
		/*	activities charts
			issues removal charts	*/	

//paragraph_detailed('no',6,8,10,"<span style='color:grey'>For more information</span>");


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}