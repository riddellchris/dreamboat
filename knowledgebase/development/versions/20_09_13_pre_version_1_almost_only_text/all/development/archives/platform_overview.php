<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{  background: -webkit-linear-gradient(180deg, #00FFB7, #02e355);
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
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}

</style>
<div class='hero-image' style='height: 72vh;';>
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align: center;padding-left:0px;width:100%;margin-top:17vh;'>
		<p class='center-text' style='margin:0px;width:100%;'>
			<span style='font-size:larger;text-transform:none;'>
				The best productivity improvement platform on the planet.				
			</span>
		</p>
	  </div>	  
</div>
<div class='top-right' >
<?php 	require $_SERVER['DOCUMENT_ROOT']."/content/platform/earth_divs.php";
	echo $full_earth;
?>
</div> 

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
<div class='hero-image second_hero_image' style='height:60vh;padding-bottom:14vh;padding-top:14vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
		<p class='center-text' style='margin:4% 0%;width:100%;text-align: center;'>
			<span style='font-size:larger;text-transform:none;background: -webkit-linear-gradient(90deg, #00FFB7, #02e355);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;'>
				Manage everything impacting your productivity in one place.
			</span>
		</p>						
	</div>	  
</div>
<div style='width:100%;text-align:center;display: inline-block;margin-top:15vh;'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;' class="fa fa-business-time"></i><br>
			<span class='prompt-font'>improve<br>control</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-chart-line"></i><br>
			<span class='prompt-font'>plan<br>ahead</span>
		</div>

		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-bullhorn"></i><br>
			<span class='prompt-font'>communicate<br>better</span>
		</div>

		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-trophy"></i><br>
			<span class='prompt-font'>achieve<br>more</span>
		</div>
	</div>
</div>





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
		<p class='center-text' style='margin:4%;width:100%;text-align: left;'>
	
				<span style='font-size:larger;text-transform:none;'>
					Track, manage and improve<br> everything that matters,<br>all in one place.<br><br>
					<small> 
						Sales, marketing & BD<br>
						People, products & processes<br>
						Profits, predictions and more<br>						
						</small>			
				</span>
		</p>						
	  </div>	  
</div>


<style>
//not just fa to not fuck with the mobile icon
i.fa_for_content{font-size: 4em;padding:4%;}
 @media screen and (max-width: 1200px){.icon-divs{float:center;width:100%;padding-top:6vh;}.fa-funnel-dollar{margin-top:200px;}}
  @media screen and (min-width: 1200px){.icon-divs{float:left;width:25%;}.fa-funnel-dollar{margin-top:0px;}}
</style>
<div style='width:100%;text-align:center;display: inline-block;margin-top:45vh;'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;' class="fa fa-umbrella-beach"></i><br>
			<span class='prompt-font'>stress<br>less</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-chess"></i><br>
			<span class='prompt-font'>think<br>clearer</span>
		</div>

		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-crosshairs"></i><br>
			<span class='prompt-font'>be<br>sharper</span>
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
			request a walkthrough here //
		</a>
	</div>

</div>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
