<?php
if(!isset($_SESSION)){session_start();}

//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<style>
#container {
  position: relative;
  height: 45vw;
  
}

body{margin: 0px;}
.technology_base{
	position: absolute;
//	top: 10vw;
bottom: 0px;
	left: 10vw;
	z-index: 200;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 22vw 22vw 22vw;
	border-color: transparent transparent #007bff transparent;

}

.platform_access{
	position: absolute;
	left: 0;
bottom: 0px;
	z-index: 150;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 40vw 40vw;
	border-color: transparent transparent #ff0000 transparent;
}
.pilot_access{
	position: absolute;
	right: 0px;
	bottom: 0px;
	z-index: 150;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 40vw 0 0 40vw;
	border-color: transparent transparent transparent orange;
}
.pilot_access_text{
	font-family: 	Comfortaa;
	color: 		orange;	
	font-size: 	3em;
	position: 	absolute;
	right: 		10vw;
	top: 		10vw;
}
.platform_access_text{
	font-family: 	Comfortaa;
	color: 		red;
	font-size: 	3em;
	position: 	absolute;
	left: 		10vw;
	top: 		10vw;
	color:		red;
}
.technology_text{
	font-family: 	Comfortaa;
	color: 		white;
	font-size: 	3vw;
	position: 	absolute;
	left: 		27vw;
	top: 		38vw;
	z-index: 225;
}



</style>

<br><br><br><br>

<div id='container'>
	<div class='technology_base'></div>
	<div class='platform_access'></div><div class='pilot_access'></div>
	
	<div class='pilot_access_text'>Pilots</div>
	<div class='platform_access_text'>User<br> accessible<br> platform</div>
	<div class='technology_text'>Behind the scenes technology</div>
</div>