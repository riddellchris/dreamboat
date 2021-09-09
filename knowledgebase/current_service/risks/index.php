<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}


	paragraph_detailed('no',8,8,8,"While trying to achieve these productivity improvements there are two principal risks listed below that impact our ability to deliver these returns that it is important to be aware of:");
	
	paragraph_detailed('yes',8,8,8,"Market downturn risk");
	
	paragraph_detailed('no',8,8,8,"Sometimes there is a real market downturn, within a company or within the economy for the skills and services you provide, for example as bar-keep at the end of any gold rush, however other than structural market-place adjustments or severe economic downturns in any established economy these risks remain minimal so long as your business, or business pursuit is not chasing short term market opportunities, as such we only encourage the construction and improvement of businesses for the longer term.");
	
	paragraph_detailed('yes',8,8,8,"Unforeseen personal issues");
	paragraph_detailed('no',8,8,8,"Unfortunately people do get sick and things happen that require substantial mental energy above and beyond the abilities of the users ability in the short term to take great or any steps forward in their productivity because they are so consumed by these external circumstances. In such instances Dreamboat may provide a consistent supportive and encouraging perspective but we are not always able to maintain or improve performance with those users.");




if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}