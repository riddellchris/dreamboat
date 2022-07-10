<?php
if(!isset($_SESSION)){session_start();}


function include_knowledgebase_image($src, $width, $height){

	if($width == 'default'){$width = 'unset';}
	if($height == 'default'){$height = '35vh';}
	echo "<BR><BR><BR>";
	echo "<div class='knowlegebase_image_div'>";
		echo "<img class='knowledge_image' src='".$src."' style='max-height:".$height.";max-width:".$width.";border-top: 4px solid grey; border-bottom: 4px solid grey;'>";
	
	echo "</div>";
	echo "<BR><BR><BR>";
}