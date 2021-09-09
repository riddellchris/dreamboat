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

//@media screen and (min-height: 800px){.hero_text_no_mobile{top:25vh;}}
//@media screen and (max-height: 800px){.hero_text_no_mobile{top:14vh;}}

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


@media screen and (min-width: 1000px){.features_left{width:45%; }.features_right{width:55%;}	.hero-image{height:60vh;padding-top:22vh;}.hero-text{text-align:left;}}
@media screen and (max-width: 1000px){.features_left{width:100%;}.features_right{width:100%;}  .hero-image{height:25vh;padding-top:11vh;}.hero-text{text-align:center;}}}



</style>

<?php
if(!isset($_SESSION)){session_start();}

if(!isset($hero_text_no_mobile)){$hero_text_no_mobile = 'hero_text_no_mobile';}
else{$hero_text_no_mobile = '';}

echo "
<div style='width:100%;padding:0px;display:block;height:50vh;'>
	<div class='features_left' style='float:left;padding:0px;'>
		<div class='hero-image'>
			<div class='hero-text ".$hero_text_no_mobile."' id='main_text'>
				<p class='center-text' style='margin:0px;width:100%;'>
					<span style='font-size:larger;text-transform:none;'>
						Unlimited access		
					</span>
				</p>
			</div>	  
		</div>
	</div>
	
	<div class='features_right' style='float:left;padding:0px;'>
	


	<div style='height:20px;font-family: helvetica;    font-size: 20px;font-weight: 800;    color: rgb(23, 110, 29);padding:8%;'>";
	
		echo "<div style='margin-left:2%;margin-right:2%;margin-bottom:4vh;'>";
			echo "Introductory text - title";
			echo "<br>";
			echo "<span style='font-weight:400; font-size:16px;'>Detailed text</span>";
		echo "</div>";
		echo "<button class='day_collapsible' style='border-radius: 0px 25px 0px 0px;color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #58ef66 100%);'>Benefits</button>";
			echo "<div class='day_content' style='background-color:#58ef66;color:#176e1d;'>";
				echo "<div class='question' style='font-size:5em;width:100%;text-align:center;'>".$row['rate_out_of_10']." / 10</div>";
	 			echo "informative text";
			echo "</div>";
		echo "<div style='height:20px;'></div>";
	
	
		echo "<button class='day_collapsible' style='border-radius: 0px 25px 0px 0px;color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #58ef66 100%);'>Benefits</button>";
			echo "<div class='day_content' style='background-color:#58ef66;color:#176e1d;'>";
				echo "<div class='question' style='font-size:5em;width:100%;text-align:center;'>".$row['rate_out_of_10']." / 10</div>";
	 			echo "informative text";
			echo "</div>";
	echo "</div>";

	?>
	</div>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/accordian_scripts.php";
?>

