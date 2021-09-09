<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{  background: -webkit-linear-gradient(#ff0026, #ff3700);
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
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;padding-top:13vh;background: -webkit-linear-gradient(#ff0026, #ff3700);-webkit-background-clip: text;'>
			<span style='color:yellow;'>
				<span style='font-size:larger;text-transform:none;font-style:italic;padding-right:2%;'>
					Driving your sales & marketing  productivity
				</span>
			</span>
		</p>
	  </div>	  
</div>
<div class='top-right' >
	<?php 
		$color = 'red';
		require $_SERVER['DOCUMENT_ROOT']."/components/content/google_line_chart_script.php"; 
	?>
  	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<div id="chart_div" style='height:100%;width:100%;overflow:hidden;'></div>
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
<div class='hero-image second_hero_image' style='padding-top:18vh;height:70vh;padding-bottom:25vh;'>
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
		<p class='center-text' style='width:100%;text-align: center;
		
	
		
		
		'>
			<span style='font-size:larger;text-transform:none;'>
				..with our three seamlessly integrated services<br><br><br><br><br>
				<div class='prompt-font link_font' style='width:100%;text-align:center;padding-top:8vh;'>
					<a href='/components/sub_menus/change.php?page=services&to=crm'  class='prompt-font link_font' >
						your Personal business CRM
					</a>
				</div>
				<div class='prompt-font link_font' style='width:100%;text-align:center;padding-top:8vh;'>
					<a href='/components/sub_menus/change.php?page=services&to=text'  class='prompt-font link_font' >
						Text-based advisory
					</a>
				</div>
				<div style='width:100%;text-align:center;padding-top:8vh;'>
					<a href='/components/sub_menus/change.php?page=services&to=phone' class='prompt-font link_font' >
						Weekly sales & marketing meetings
					</a>
				</div>
			</span>
		</p>						
	  </div>	  
</div>


<div style='width:100%;text-align:center;display: inline-block;margin-top:35vh;



'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;' class="fa fa-users"></i><br>
			<a class='prompt-font' >sell more </a>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-coffee"></i><br>
			<span class='prompt-font'>sell<br>easier</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-chart-line"></i><br>
			<span class='prompt-font'>increase<br>average<br>margins</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-hand-holding-usd"></i><br>
			<span class='prompt-font'>make<br>more</span>
		</div>
	</div>
</div>














<?php
$url	= '/components/sub_menus/change.php?page=services&to=crm';
$copy = 'learn about our crm here';
require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
