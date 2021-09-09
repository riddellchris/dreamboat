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
<?php
//require $_SERVER['DOCUMENT_ROOT']."/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
