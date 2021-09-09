<?php
if(!isset($_SESSION)){session_start();}


require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

	paragraph_detailed('no',8,8,8,"To ensure the all issues are dicussed and the root of all productivity limitations are discovered, other than very high level discussion with a bill payer about a users general progress all work with each user remains confidential with their Pilot and the Dreamboat system.");

	//future_versions
	$copy = 'As business network displays start to roll out, privacy checks and controls will limit the visibility of critical information for each user.';
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/future_versions.php";


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}