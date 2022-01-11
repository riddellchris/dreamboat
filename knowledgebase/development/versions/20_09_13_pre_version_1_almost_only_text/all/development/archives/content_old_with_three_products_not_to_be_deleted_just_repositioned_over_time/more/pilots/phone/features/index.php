<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<style>
.center-text{  

<?php
if($_GET['primary_folder'] == 'text'){$hex_1 = '#006aff'; $hex_2 = '#00ffb7';}
if($_GET['primary_folder'] == 'crm'){$hex_1 = '#00FFB7'; $hex_2 = '#02e355';}


echo "background: -webkit-linear-gradient(180deg, ".$hex_1.", ".$hex_2.");";?>



  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: HELVETICA;
  font-weight:700;}
@media screen and (min-width: 800px) and (min-height: 1050px){.center-text{font-size:70px;}.hero-image{height:52vh;}}
@media screen and (max-width: 800px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (max-height: 1050px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (min-width: 800px){
.hero-text{padding-left:6%;}
}
@media screen and (max-width: 800px){
.hero-text{padding-left:3%;}
}

//@media screen and (min-height: 800px){.hero_text_no_mobile{top:25vh;}}
//@media screen and (max-height: 800px){.hero_text_no_mobile{top:14vh;}}


@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
</style>

<?php 	
require $_SERVER['DOCUMENT_ROOT']."/phone/line_decorations.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/styling.php";



$feature_title = "Single homework tasks";
$introductory_text = "Take simple steps to success";
$detailed_text	= "
Rather than having endless sales and marketing work, weekly sales and marketing meetings conclude with a single task for the week, pushing back all the would, should and could do to improve your sales and marketing into one simple, single task.
<br><br>
We know how much time can be taken up with endless options but each week we help you acheive one thing, once, the most important thing so that you can actually do it.
<br><br>
Save all the time you previously spent planning and assessing your sales and marketing and just take simple steps to success.
<br><br>
That's it.
"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";

echo $divider_lines;


$feature_title = "Optimise your efficiency with easy discussion";
$introductory_text = "Talk your way to more effective sales and marketing";
$detailed_text	= "
Sometimes analysis only leads to paralysis so that's why you just need to talk about what you're doing and our consultants will help you improve right there on the spot.
<br><br>
Spending time writing blogs to nobody or chasing work that will never come through can all be avoided by regular conversation with the right people, and that's what our weekly sales and marketing meetings are exactly for.
"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";

echo $divider_lines;



$feature_title = "Stay consistent";
$introductory_text = "Make steady reliable progress";
$detailed_text	= "
Rather than just hitting sales and marketing when you have the time or frankly need it, working on your sales and marketing with half an hour each and every week allows you to really build consistency in your processes, reliability in your pipeline and consistency in your new business flow.
<br><br>
Giving you a simple and yet achievable way tospend a little time and energy each and every week to steadily improve your sales, marketing and business development strategies.
"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";

echo $divider_lines;



$feature_title = "Plan ahead";
$introductory_text = "Simply update your progress in 10 minutes";
$detailed_text	= "
Sometimes seeing the road ahead isn't easy because you're much better at doing what you do. We see the same things all day every day so we can help you see the road to success ahead of you in your sales and marketing. 
<br><br>
No longer does everything have to be done today, or all your time and money have to go into one specific activity as we'll help you lay out the construction and improvement of your sales and marketing machine over time....
<br><br>So that you can keep working on your business today.


"; 
require $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/display.php";

echo $divider_lines;

?>

<style>
.center-text{  background: -webkit-linear-gradient(#ff0000, #ff0040);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;font-family: HELVETICA;font-weight:700;}
@media screen and (min-width: 800px) and (min-height: 1050px){.center-text{font-size:70px;}.hero-image{height:52vh;}}
@media screen and (max-width: 800px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (max-height: 1050px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (min-width: 800px){
.hero-text{padding-left:6%;}
}
@media screen and (max-width: 800px){
.hero-text{padding-left:3%;}
}

@media screen and (min-height: 800px){.hero_text_no_mobile{top:25vh;}}
@media screen and (max-height: 800px){.hero_text_no_mobile{top:14vh;}}

.hero-text{
left:0%;transform:translate(0%,0%);
}


</style>
<style>
//not just fa to not fuck with the mobile icon
i.fa_for_content{font-size: 4em;padding:4%;}
 @media screen and (max-width: 1200px){.icon-divs{float:center;width:100%;padding-top:6vh;}.fa-funnel-dollar{margin-top:200px;}}
  @media screen and (min-width: 1200px){.icon-divs{float:left;width:25%;}.fa-funnel-dollar{margin-top:0px;}}
</style>


<style>
@media screen and (min-width: 1200px){
.second_hero_image{height:32vh;}
}
@media screen and (max-width: 1200px){
.second_hero_image{height:50vh;}
}
</style>
<div class='hero-image second_hero_image' style='height:45vh;padding-bottom:14vh;padding-top:8vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:4%;width:80%;text-align: left;'>
	
				<span style='font-size:larger;text-transform:none;'>
				Be challenged,<br>Be stretched,<br>Chase more,<br>Move faster..<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;..all with half an hour a week.					
				</span>
		</p>						
	  </div>	  
</div>
<div style='width:100%;text-align:center;display: inline-block;margin-top:35vh;'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-search-dollar"></i><br>
			<span class='prompt-font'>review<br>progress</span>
		</div>

		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-chart-bar"></i><br>
			<span class='prompt-font'>plan<br>ahead</span>
		</div>	
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;' class="fa fa-door-open"></i><br>
			<span class='prompt-font'>close<br>more</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-hand-holding-usd"></i><br>
			<span class='prompt-font'>make<br>more</span>
		</div>

	</div>
</div>


<div class='hero-image' style='padding-top:35vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;text-align:center;'>
	
				<span style='font-size:larger;text-transform:none;'>
	
					Get your sales firing for $200+GST per month
					<br><br><br>
					
					<small>
					or get everything for $225+GST per month
					</small>
					
					
					<!--<br> ...after two weeks free.-->
								
				</span>

		</p>						

	  </div>
	  


</div>
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
