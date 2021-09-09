<style <?php if($_SESSION['dreamboat_crew'] == 'yes'){echo "name = '".$_SERVER['REQUEST_URI']."'";}?>


.link_font{ color: #281e96;	text-decoration: underline double red;}
.link_font:hover{color:red;	text-decoration: underline double #281e96;}



.hero-image {
height: 63%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 background-attachment: fixed;

}
@media only screen and (max-device-width: 1366px) {
  .hero-image {
    background-attachment: scroll;
  }
}


.hero-text {
  text-align: center;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family:Righteous;
  text-transform: uppercase;
  padding-bottom:45px;
}

.hero_text_no_mobile{
  top: 50%;
}
.hero_text_mobile{
  top: 200%;
  }
  
  
@media screen and (min-width: 600px){.hero-text{font-size:90px;}.hero-subtext{font-size:26px;font-family: Helvetica;text-transform:uppercase;}}
@media screen and (max-width: 600px){.hero-text{font-size:50px;}.hero-subtext{font-size:14px;font-family: Helvetica;text-transform:uppercase;}}



.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

.big-web-copy{	
color: #281e96;
font-family: Comfortaa;
margin:0px;padding-top:180px;padding-bottom:180px; 
<?php
/*
if(!isset($_SESSION['background_rotation_degrees'])){$_SESSION['background_rotation_degrees'] = rand(0,360);}
else{$_SESSION['background_rotation_degrees'] = $_SESSION['background_rotation_degrees'] + rand(25,40);
	if($_SESSION['background_rotation_degrees'] > 360){$_SESSION['background_rotation_degrees'] = $_SESSION['background_rotation_degrees'] - 360;}
}
echo "background-image: linear-gradient(".$_SESSION['background_rotation_degrees']."deg, #c5ffbf,#bfe2ff );";
*/
?>

}

@media screen and (max-width: 600px){.big-web-copy {padding: 10% 2% 16%;font-size: 32px;}}  
@media screen and (min-width: 600px) and (max-width: 1100px){.big-web-copy {padding: 14% 8% 22%;font-size: 60px;}}  
@media screen and (min-width: 1100px){.big-web-copy {padding: 9% 12% 18%;font-size: 60px;}}  


.center-text{color:white;font-family: HELVETICA;font-weight:700;}
@media screen and (min-width: 600px) and (min-height: 850px){.center-text{font-size:70px;}}
@media screen and (max-width: 600px){.center-text{font-size:60px;}}
@media screen and (max-height: 850px){.center-text{font-size:60px;}}


	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:35px;}.hero-subtext{font-size:24px;}}
	

small{
color:red;
line-height: 1.6;
}


</style>

<?php

function title_block($title){
echo 
"<div class='hero-image' style='height:85vh;'>
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align:center;'>
		<p class='center-text' style='margin:0px;'>
			<span style='color: red;'>
				".$title."
				<br>
			</span>
		</p>
	  </div>
</div>";


}
?>