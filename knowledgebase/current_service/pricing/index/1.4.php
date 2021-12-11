<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";

if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}




paragraph_detailed('no', 8,8,8,"As per the input points and the feedback access points we charge the following*:");

	list_start();
		point_detailed_start('yes',8,8,8,"$0 to contribute your SaaS application data via APIs.");


		point_detailed_start('yes',8,8,8,"&nbsp;&nbsp;$50 per user per month for insights and optimisations based on your business data.");
            list_start();
 		        point_detailed_start('no',8,8,4,"Requires <a href='/knowledgebase/current_service/phases_of_engagement/'>Secondary API data implementations</a> to be underway prior to access.");           
            list_end();





		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;$50 per user per month for optimisations via APIs to your applications.");
            list_start();
 		        point_detailed_start('no',8,8,4,"Requires <a href='/knowledgebase/current_service/phases_of_engagement/'>Secondary API data implementations</a> to be underway prior to access.");           
            list_end();
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;$50 per user per month for access to our platform.");
            list_start();
 		        point_detailed_start('no',8,8,4,"Typically not enabled until <a href='/knowledgebase/current_service/phases_of_engagement/'>connected mapping</a> underway.");           
            list_end();
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;$75 per user per month for ongoing digital pilot communication.");
//additional consulting - hourly.
            list_start();
 		        point_detailed_start('no',8,8,4,"Typically not enabled until <a href='/knowledgebase/current_service/phases_of_engagement/'>connected mapping</a> underway.");           
            list_end();
		point_detailed_start('no',8,8,8,"$70 per user per month + GST for monthly 30 minute phone consultations**.");	
		
		
		//this is the first thing to add from a perspective of consulting
		point_detailed_start('no',8,8,8,"$130 per user per month + GST for fortnightly 30 minute phone consultations**.");	point_end_only();	
		    list_start();
 		        point_detailed_start('no',8,8,4,"Most common starting point for all users.");           
            list_end();
		point_detailed_start('no',8,8,8,"$250 per user per month + GST for weekly 30 minute phone consultations**.");	point_end_only();	
			list_start();
 		        point_detailed_start('no',8,8,4,"Very common frequency for managers and owners.");           
            list_end();
		point_detailed_start('no',8,8,8,"$450 per user per month  + GST for weekly hour long phone consultations**.");	point_end_only();	
			list_start();
 		        point_detailed_start('no',8,8,4,"Common frequency for owners.");           
            list_end();    		
	list_end();


paragraph_detailed('no',8,8,8,"*Additional setup, data processing & consulting charges may apply depending on each business' scenario & requirements.");	
paragraph_detailed('no',8,8,8,"**Phone consultations are used to collect <a href='https://en.wikipedia.org/wiki/Qualitative_research' target='_blank'>qualitative</a> & <a href='https://en.wikipedia.org/wiki/Quantitative_research' target='_blank'>quantitative</a> data, communicate <a href='/knowledgebase/our_model/optimisations/' target='_blank'>optimisations</a> and <a href='/knowledgebase/our_model/issue_removal/' target='_blank'>remove issues</a> along the way.");	

//fact.php
$copy = "To fully fund this across Australia alone would cost between $1.6 & $2.9 billion dollars a month, which while it would result in a good long term result, only puts more burden on the Federal budget that is focussed on basic service delivery, therefore working against us achieving all of our objectives for the country.";		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
	

if(check_primary_folder('legal') != 1){		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}