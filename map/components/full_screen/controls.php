<style>

#body:fullscreen 		#go_big{  			display:none;}
#body:not(:fullscreen) 	#go_small  {  		display:block;}

#body:not(:fullscreen) 	#go_small  {  		display:none;}
#body:fullscreen 		#go_small  {  		display:block;}

.fullscreen_icons{
	position: fixed;
	right: 13;
	top: 110;
	font-size: larger;
	z-index: 2000;
}
#body:fullscreen 		.fullscreen_icons  {  		top: 10; right: 30;}

.fullscreen_icons:hover{color:#4332ff;font-size: x-large;}
</style>


<a id='go_big' 	 onclick='openFullscreen();' class='fullscreen_icons'>
	<i class='fas fa-expand'>
	</i>
</a>
<a id='go_small'  onclick='closeFullscreen();'  class='fullscreen_icons'>
	<i class='fas fa-compress'>
	</i>
</a>

<?php
require $_SERVER['DOCUMENT_ROOT']."/map/components/full_screen/javascript.php";
?>
	
<style>
.zoom.in{	
	position: fixed;
	right: 10;
	top: 135;
		font-size: larger;
	}
#body:fullscreen 		.zoom.in  {  		top: 35;}
.zoom.out{
	position: fixed;
	right: 10;
	top: 157;
		font-size: larger;

}
#body:fullscreen 		.zoom.out  {  		top: 57;}
.zoom.in:hover{color: #4332ff;font-size: x-large;}
.zoom.out:hover{color: #4332ff;font-size: x-large;}
</style>

<?php
if(!isset($_SESSION)){session_start();}
/*
<a class='zoom in'>
	<i class='fas fa-search-plus'>
	</i>
</a>
<a class='zoom out'>
	<i class='fas fa-search-minus'>
	</i>
</a>
*/
?>