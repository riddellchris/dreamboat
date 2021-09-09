<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{  background: -webkit-linear-gradient(#73ff96, #31e300);
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
<div class='hero-image'>
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align: center;width:100%;padding:0%;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;padding-top:13vh;background: -webkit-linear-gradient(#73ff96, #31e300);-webkit-background-clip: text;'>
			<span style='color:yellow;'>
				<span style='font-size:larger;text-transform:none;'>
					<!--Driving your sales & marketing productivity!-->
					Get started with<br> a free two week trial*
					
				</span>
			</span>
		</p>
	  </div>	  
</div>
<div class='top-right' >
	<?php 
		$color = '#31e300';
		require $_SERVER['DOCUMENT_ROOT']."/components/content/google_candlestick_chart_script.php"; 
		
		?>
  	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<div id="chart_div" style='height:100%;width:100%;overflow:hidden;'></div>
</div> 

<!--fa icons 
funnel-dollar - optimise pipelines
hand-holding-usd - make more
search-dollar - focus 
bullhorn - communicate better
-->

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


<div class='hero-image second_hero_image' style='padding-top:35vh;height:30vh;padding-bottom:14vh;'>
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
		<p class='center-text' style='width:100%;text-align: center;'>
			<span style='font-size:larger;text-transform:none;'>
				..and start your business moving today<br><br>
			
			</span>
		</p>						
	  </div>	  
</div>

















<?php
$padding_bottom = '10vh';
require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
?>


<div style='width:100%;text-align:center;display: inline-block;height:35vh;padding-top:30vh;'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		*offer not valid for any multi-level marketing businesses or entities.
	</div>
</div>



<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
