<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}


//should you wish to join in the future we are building
paragraph_detailed('no',10,10,10,"Having reviewed the information you require, the key criteria to make any future decisions upon are:");
list_start();
	point_detailed_start('yes',8,8,8,"The current cost of productivity issues you know of but just haven't dealt with.");				point_end_only();
	point_detailed_start('no',8,8,8,"The number impact of productivity imperfections in your organisation.");							point_end_only();
	point_detailed_start('no',8,8,8,"If there is/are any potential downside(s).");														point_end_only();
	point_detailed_start('no',8,8,8,"The upside of cleaning out more productivity issues faster.");										point_end_only();
	point_detailed_start('no',8,8,8,"The upside of engaging your employees in a process of continuous productivity improvement.");		point_end_only();		
	point_detailed_start('no',8,8,8,"The actual cost and time taken up by the process of productivity improvement.");					point_end_only();	
	point_detailed_start('no',8,8,8,"How long, how, and if at all you should trial the system to test it's impact on your business.");	point_end_only();
list_end();	
paragraph_detailed('no',10,10,10,"We hope you can see the benefits of what Dreamboat provides and the future it's building.<br><br>Should you have further questions, please contact us using the information in the contact us section below.");


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}