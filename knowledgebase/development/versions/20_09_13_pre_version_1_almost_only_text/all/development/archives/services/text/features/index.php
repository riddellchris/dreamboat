<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/services/text/arrows.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/styling.php";



$feature_title = "Weekly reviews";
$introductory_text = "Simply update your progress in 10 minutes";
$detailed_text	= "
Weekly reviews allow you to do just that and review the progress of the week to update your CRM in one simple process.
<br><br>
No longer will your CRM lag behind, or your data be &#39;bits and pieces&#39; now you can simply empty your mind to update your progress and relax knowing you&#39;ve done all you can for the week.
<br><br>
Covering: who you met, what BD you did, how your sales went and other issues as the system suggests, you'll keep your CRM up to date and ensure that you can start to see how consistency always pays off.
<br><br>
With weekly reviews comes weekly progress and once you can measure it you can manage it.
<br><br>
With weekly reviews you'll start to remove the unknowns and see how gaps in BD or sales, cause pipeline issues down the road, and how focus on specific target markets or sales objectives pay dividends.
<br><br>
Thanks to weekly reviews with one simple email on Friday sent to your inbox and 5-10 minutes later you're done, up to date and improving.
"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";
echo $fish_divider; 

$feature_title = "Unlimited access";
$introductory_text = "Online all the time";
$detailed_text	= "
Just like any SaaS platform it's always there for you to check in on your progress, update your performance and repriotise live all the time.<br><br>
No longer will the whiteboard require a clean, some scribbling or that notepad need to be flipped through to work out what's next with the Dreamboat CRM because everything that matters to you can be found within.<br><br>
Especially when working with our team, all their notes and updates are found in the one place too so you'll have all the information you need at your fingertips.<Br><br>
Wake up in the middle of the night and just need to get something out, need to find focus during the day or repriortise your sales and BD activies, your Dreamboat is there for you all day, every day.
"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";
echo $fish_divider; 

$feature_title = "Progress tracking";
$introductory_text = "Engineering your success each and every week";
$detailed_text	= "
Thanks to the progress tracking charts built into your CRM you can not only see the instaneous position of your sales and marketing but see how it has changed over time.<br><br>
Track your sales and BD activities each week, your funnel values, close rates and new additions to the system thanks weekly tracking reports completed by the CRM on your data.<br><br>
Data never lies and good data leads to great success so thanks to Progress Tracking you can 
"; 

?>














<div class='hero-image' style='padding-top:35vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	

@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;text-align:center;'>
	
				<span style='font-size:larger;text-transform:none;'>
	
					Get unlimited assistance for $50+GST per month<!--<br> ...after two weeks free.-->
								
				</span>

		</p>						

	  </div>
	  
<!--	  
	<div class='prompt-font' style='width:100%;text-align:center;color:#281e96;padding-top:8vh;'>
		<a href='/content/sign_up/' style='color:#281e96;'>
			sign up here //
		</a>
	</div>
-->
	<div class='prompt-font' style='width:100%;text-align:center;padding-top:8vh;'>
		<a class='prompt-font link_font'  href='/content/contact_us/'>
			contact us here
		</a>
	</div>

</div>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
