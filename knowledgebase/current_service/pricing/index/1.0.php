<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";

if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

//fact.php
//$copy = "To fully fund this across Australia alone would cost between $1.6 & $2.9 billion dollars a month, which while it would result in a good long term result, only puts more burden on the Federal budget that is focussed on basic service delivery, therefore working against us achieving all of our objectives for the country.";		
//equire $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
//n order to be financially sustainable without government assistance we charge**:");


paragraph_detailed('no', 8,8,8,"As per the input points and the feedback access points we charge the following:");

	list_start();
		point_detailed_start('yes',8,8,8,"Nothing to contribute your Application data via APIs.");

		point_detailed_start('yes',8,8,8,"$50 per user per month for optimisations via APIs to your applications.");
		point_detailed_start('yes',8,8,8,"$50 per user per month for access to our platform.");
		point_detailed_start('yes',8,8,8,"$75 per user per month for ongoing digital pilot communication.");
//additional consulting - hourly.
		point_detailed_start('no',8,8,8,"$105 per user per month + GST for monthly 45 minute phone consultations.");		
		point_detailed_start('yes',8,8,8,"$195 per user per month + GST  for fortnightly 45 minute phone consultations.");		
		point_detailed_start('no',8,8,8,"$375 per user per month + GST for weekly 45 minute phone consultations.");	
		point_detailed_start('no',8,8,8,"$531.25 per user per month  + GST for weekly hour-fifteen minute long phone consultations.");			
	list_end();


paragraph_detailed('no',8,8,8,"**Additional setup, data processing & consulting charges may apply depending on each businesses scenario & requirements.");	
		
if(check_primary_folder('legal') != 1){		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}