<?php
if(!isset($_SESSION)){session_start();}


function include_knowledgebase_image($src, $width, $height){

	if($width == 'default'){$width = 'unset';}
	if($height == 'default'){$height = '35vh';}
	
	echo "<div class='knowlegebase_image_div'>";
		echo "<img class='knowledge_image' src='".$src."' style='max-height:".$height.";max-width:".$width.";'>";
	
	echo "</div>";

}