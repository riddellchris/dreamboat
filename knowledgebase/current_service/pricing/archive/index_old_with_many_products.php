<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}


paragraph_detailed('yes', 8,8,8,"In order to be financially sustainable without government assistance we charge the following amounts for each service:");

echo "
	<style>
		.pricing_cell{padding: 0px;vertical-align:top;}
	</style>

	<table style='color:#281e96;padding: 0px;margin-top: 25px;margin-left:auto;margin-right:auto;max-width:600px;vertical-align:top;'>
		<tr><td style=''>&nbsp;</td><td style='text-align:right;'></td></tr>
		<tr><td class='pricing_cell'>DIGITIAL WORKPLACE MENTAL HEALTH SUPPORT		</td><td style='text-align:right;'>FREE</td></tr>
		<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>
		<tr><td class='pricing_cell'>PLATFORM ACCESS	</td><td style='text-align:right;'>$20 +GST per user per month</td></tr>
		<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
		<tr><td class='pricing_cell'>UNLIMITED TEXT CONSULTING<br>Includes platform access		</td><td style='text-align:right;'>$50 +GST per user per month*</td></tr>		

		
		<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
		<tr><td class='pricing_cell'>AUDIO CONSULTING</td><td style='text-align:right;'></td></tr>		
		<tr><td class='pricing_cell'>Monthly, half hour phone consultations </td><td style='text-align:right;'>$50+GST per user per month*</td></tr>
		<tr><td class='pricing_cell'>Fortnightly, half hour phone consultations</td><td style='text-align:right;'>$100+GST per user per month*</td></tr>
		<tr><td class='pricing_cell'>Weekly, half hour phone consultations </td><td style='text-align:right;'>$200+GST per user per month*</td></tr>
		<tr><td class='pricing_cell'>Weekly, hour long phone consultations</td><td style='text-align:right;'>$400+GST per user per month*</td></tr>
		<tr><td class='pricing_cell' colspan='2'>All audio consulting includes text consulting, platform access and digital workplace mental health support.</td></tr>		
		<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
		<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>	
		<tr><td class='pricing_cell' colspan='2'>
		*Our staffing tiers further to this Junior Pilot pricing do increase $25AUD + GST for weekly meetings and pro-rata for other services that require consultants.<br><br>
		Weekly & Fortnightly sessions are held barring illness, injury or typical holiday allowances of each user’s Pilot, therefore allowing maximum continuity.<br><br>
		
		</td></tr>		
	</table>";
		
if(check_primary_folder('legal') != 1){		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}