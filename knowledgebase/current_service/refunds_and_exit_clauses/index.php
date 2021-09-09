<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

	paragraph_detailed('no',8,8,8,"If at any point you are unhappy with the service provided by Dreamboat please write to us at <a href='mailto:complaints@dreamboat.co'>complaints@dreamboat.co</a> or tell your Productivity Pilot and we will deal with your issues as fast as possible.");
	

	paragraph_detailed('no',8,8,8,"Our process for dealing with complaints includes a complete review of all data points relevant to your account, the specific user(s) of the service, comparative data for users and industries that we have on our service and any other notes that we have on your file. If it is deemed that we have failed to provide sufficient service, then a refund is due, however where it is deemed you are clearly and definitively suffering from one of the key risk factors in purchasing this product further discussion is required to either address the associated risk factor or release you from your contract in order to achieve the best outcome for both parties.");



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}