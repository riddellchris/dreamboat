<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}


		paragraph_detailed('yes',10,10,10,"While we have numerous services, the best performance improvement typically results from weekly Pilot conversations for managers, owners and directors and fortnightly conversations for staff members.");
		paragraph_detailed('no',10,10,10,"Therefore the suggested investments are:");
		paragraph_detailed('no',10,10,10,"$130+GST per month per staff member and 2x30 minutes of that staff members time a month in such a way that it’s the lowest producing time possible has the least negative impacts on that business possible ever either.");
		paragraph_detailed('no',10,10,10,"$250+GST per month per manager, director or owner and 4x30 minutes of that staff members time a month in such a way that it’s the lowest producing time possible has the least negative impacts on that business possible ever either.");


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}