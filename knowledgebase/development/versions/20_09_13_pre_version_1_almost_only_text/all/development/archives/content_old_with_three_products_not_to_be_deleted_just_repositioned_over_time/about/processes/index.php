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
<div class='hero-image' style='height:85vh;background-color: black;'>
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
			<span style='color:yellow;'>
				the special sauces
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
		What are they?	
	</span>
	<br><br><br>
	<span style='font-size: 24px;'>
		As you know by now At Dreamboat we work with our clients to help them hedge their growth at between 10 and 20% on a 6 monthly basis.<br><br>
		As a result all our processes behind the scenes and within our products and services exist to create greater reliability, surity and overall increase the probability of getting everyone into that range.<br><br>
		For some more basic examples of what this means in terms of standard pilot alerts are...<br>
		If for example someones goals are outside of this range then their pilot will be alerted.
		If someone doesn't have sufficient pipeline to stay on track for this goal then their pilot will be alerted.
		<br><br>
		
		Further to that we use extensive pattern matching technology to help our pilots and you keep you on track and know what's next.
		In short this means we use out data to compare and contrast you with similar people around you to help guide you as best as possible.
		<br><br>
		
		Finally and probably most importantly our the processes our Pilots follow are not to pump you up endlessly, not to push you excessively but simply to keep you on track and clear the path ahead of you to keep improving at a good rate. It really is that simple at Dreamboat.
		
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
