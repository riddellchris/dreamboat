<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";
?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{color:white;font-family: HELVETICA;font-weight:700;}
@media screen and (min-width: 600px) and (min-height: 850px){.center-text{font-size:70px;}}
@media screen and (max-width: 600px){.center-text{font-size:60px;}}
@media screen and (max-height: 850px){.center-text{font-size:60px;}}

</style>
<div class='hero-image' style='height:85vh;background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(/components/design/images/shutterstock_127205021.jpg);'>
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align:center;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:35px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;'>
			<span style='color: #00ffaa;'>
				our pilots &#10;are everything
				<br>
			</span>
		</p>
	  </div>
</div>


<div class='hero-text' id='main_text' style='text-align:center;'>
	<style>
	
.hero-subtext{
	font-style:italic;
	font-family:Quicksand;
	text-transform: none;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:35px;}.hero-subtext{font-size:24px;}}
	</style>
</div>







<div class='big-web-copy'>
	<span style='font-size:larger;color: #281e96l;font-weight:700;'>
		How do they help you?	
	</span>
	
	
	<span style='font-size: 24px;'>
	<br><br><br>
	At Dreamboat our Pilots are always busy helping their clients navigate the waters of productivity and income improvement.<br><br>
	Online through our platform,<br>
	Working with them through issues,<br>
	Helping optimise their products and services,<br>
	Optimising their personal business plans,<br>
	And just with straight messages, <br>
	Our Pilots are there to keep you on track as best as humanly possible to achieve your goals.<br><br>
	
	When required.... because we know it happens you can just bloody call them at your leisure. And sometimes they&#39;ll just call you... because sometimes things just need to be said and worked through.<br><br><br>
	

	

	</span>
</div>






<div class='hero-image' style='height:120vh;background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(/components/design/images/shutterstock_89601310.jpg);'>
	<div class='hero-text' style='text-align:left;'>
		<p style='margin:0px;padding-top:40px;'></p>
	  </div>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
