<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

		echo "
		via your Productivity Pilot<br>
		<a target='_blank' href='mailto:contactus@dreamboat.co'>contactus@dreamboat.co</a><br>
		<a target='_blank' href='/support/contact_us'>www.dreamboat.com.au\n/support/contact_us/</a><br>
		572 Burwood Road, Hawthorn, Victoria, 3122<br>
		<br><br><br><br><br><br><br><br><br>
	
		<table style='color:#281e96;'>
			<tr><td colspan='2'>Dreamboat Enterprises PTY LTD</td></tr>
			<tr><td style='padding: 0px;'>ABN: </td><td style='text-align:right;'>73 164 346 285</td></tr>
			<tr><td style='padding: 0px;'>ACN: </td><td style='text-align:right;'>   164 346 285</td></tr>
		</table>
		
		<br>
		";
		
		
		
		date_default_timezone_set('Australia/Brisbane');
		echo "
		<table style='color:#281e96;padding: 0px;margin-top: 25px;'>";
		
		if(check_folders_two_deep('knowledgebase','slideshows')){	$detail_level = ucfirst($_GET['secondary_folder']);}
		if(check_folders_two_deep('knowledgebase','standard')){		$detail_level = ucfirst($_GET['secondary_folder']);}		
		if(check_folders_two_deep('knowledgebase','the_works')){	$detail_level = "The Works";}		
		
		if(check_primary_folder('legal')){		$detail_level = "Current Product Disclosure";}		
			
		echo "
			<tr><td style='padding: 0px;'>Detail level:		</td><td style='text-align:right;'>".$detail_level."</td></tr>
			<tr><td style='padding: 0px;'>Viewing Date:		</td><td style='text-align:right;'>".date('j F Y')."</td></tr>
			<tr><td style='padding: 0px;'>Effective Date:		</td><td style='text-align:right;'>8 August 2020</td></tr>
			<tr><td style='padding: 0px;'>Preparation Date:	</td><td style='text-align:right;'>18 July 2020</td></tr>
		</table>";
		
if(check_primary_folder('legal') != 1){		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}