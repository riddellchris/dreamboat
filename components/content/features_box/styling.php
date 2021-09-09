<style>
.title_text{ 
	<?php
	if($_SESSION['secondary_folder'] == 'text'){	$hex_1 = '#006aff'; $hex_2 = '#00ffb7';}
	if($_SESSION['secondary_folder'] == 'platform'){$hex_1 = '#00FFB7'; $hex_2 = '#02e355';}
	if($_SESSION['secondary_folder'] == 'phone'){	$hex_1 = '#ff0000'; $hex_2 = '#ff0040';}
	echo "background: -webkit-linear-gradient(180deg, ".$hex_1.", ".$hex_2.");";
	?>
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font-family: HELVETICA;
	font-weight:700;
	font-size:larger;
	text-transform:none;
  	}
    		
@media screen and (min-width: 800px) and (min-height: 1050px){.center-text{font-size:70px;}}
@media screen and (max-width: 800px){.center-text{font-size:40px;}}
@media screen and (max-height: 1050px){.center-text{font-size:40px;}}

@media screen and (min-width: 800px){.title_text{padding-left:6%;}}
@media screen and (max-width: 800px){.title_text{padding-left:3%;}}

@media screen and (min-width: 600px){.title_text{font-size:60px;}}
@media screen and (max-width: 600px){.title_text{font-size:25px;}}

@media screen and (min-width: 1000px){
	.features_left{width:45%; }
	.features_right{width:55%;}	
	.hero-image{height:60vh;padding-top:22vh;}
	.title_text{text-align:left;}
	}
	
@media screen and (max-width: 1000px){
	.features_left{width:100%;}
	.features_right{width:100%;}  
	.hero-image{height:25vh;padding-top:11vh;}
	.title_text{text-align:center;}
	}



</style>