<?php
if(!isset($_SESSION)){session_start();}
?>


<style>
#container {
  position: relative;
}


.technology_base{
	position: absolute;
	top: 100px;
	left: 100px;
	z-index: 200;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 100px 100px 100px;
	border-color: transparent transparent #007bff transparent;

}

.platform_access{
	position: absolute;
	z-index: 150;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 200px 200px;
	border-color: transparent transparent #ff0000 transparent;
}
.pilot_access{
	position: absolute;
	left:200px;
	z-index: 150;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 200px 0 0 200px;
	border-color: transparent transparent transparent orange;
}
</style>



<div id='container'>
	<div class='technology_base'></div>
	<div class='platform_access'></div><div class='pilot_access'></div>

</div>
