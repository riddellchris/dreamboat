<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{  
	//background: -webkit-linear-gradient(#006aff, #00ffb7);



font-family: HELVETICA;
font-weight:700;}
@media screen and (min-width: 800px) and (min-height: 1050px){.center-text{font-size:70px;}.hero-image{height:62vh;}}
@media screen and (max-width: 800px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (max-height: 1050px){.center-text{font-size:40px;}.hero-image{height:42vh;}}

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
<div class='hero-image' >
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align: center;MARGIN:0PX;PADDING:0%;WIDTH:100%;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;padding-top:13vh;background: -webkit-linear-gradient(#ffbf00, #e61062);  	-webkit-background-clip: text;
  	-webkit-text-fill-color: transparent;'>
			<span style='font-size: 7vw;text-transform:none;'>
					WELCOME TO DREAMBOAT
					
			</span>
		</p>
	  </div>	  
</div>
<div class='top-right' >
	<?php 
		$color = '#e61062';
		require $_SERVER['DOCUMENT_ROOT']."/components/content/google_scatter_chart.php"; 
	
	
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
<div class='hero-image second_hero_image' style='padding-top:23vh;height:260vh;padding-bottom:54vh;'>
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
			<span style='margin:4%;text-transform:none;'>
				
					Changing the game..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				<small>	
					..in sales, marketing<br>
					 & business development<br> 
					for small & very small business.
					<br><br><br><br>
					<span style='font-size:23vh;'>1</span>
					<br>
					integrated solution
					<br><br><br><br><br><br>
					<a href='/components/sub_menus/change.php?page=services&to=crm'  class='prompt-font link_font' >
						<i style='font-size: 2.5em;display:inline-block;-webkit-background-clip: unset;color: #02e355;'  class="fa fa-mouse-pointer"></i><br><br>
					<span style='color: #02e355;'>click</span>
					</a>
					<br><br><br><br><br><br>
					<a href='/components/sub_menus/change.php?page=services&to=text'  class='prompt-font link_font' >
						<i style='font-size: 2.5em;display:inline-block;color:#006aff;'  class="fa fa-keyboard"></i><br><br>
					<span style='color:#006aff;'>type</span>
					</a>
					<br><br><br><br>
					&
					<br><br><br><br>
					<a href='/components/sub_menus/change.php?page=services&to=phone'  class='prompt-font link_font' >
						<i style='font-size: 2.5em;display:inline-block;color:red;'  class="fas fa-phone"></i><br><br>
					<span style='color:red;'>talk</span>
					</a>
					<br><br><br><br>					
					

					<br><br><br><br>
					..to simplify and improve your sales, marketing & business development.
					<br><br><br><br>		
				<br><br><br><br>	
					<small>Our goal is to help you make 10-20% more<br> within the next 3-6 months.</small>
				
			</small>
			<br><br>

				<div class='prompt-font link_font' style='width:100%;text-align:center;padding-top:8vh;'>
					<a href='/components/sub_menus/change.php?page=home&to=overview'  class='prompt-font link_font' >
						learn more here
					</a>
	<br><br><br><br><br><br><br><br>
				<!--	<a href='/components/sub_menus/change.php?page=home&to=free_trial' class='prompt-font link_font' >
						...or take a free trial
					</a> -->
				</div>
			</span>
		</p>						
	  </div>	  
</div>
<?php
//require $_SERVER['DOCUMENT_ROOT']."/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
