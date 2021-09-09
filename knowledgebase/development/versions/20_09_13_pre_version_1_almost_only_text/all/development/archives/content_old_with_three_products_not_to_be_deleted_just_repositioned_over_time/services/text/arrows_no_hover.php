<style>
	.arrow {
	  border: solid #94efff;
	  border-width: 0 0.5vw 0.5vw 0;
	  display: inline-block;
	  padding: 2vw;

	}
	
	.right {
	  transform: rotate(-45deg);
	  -webkit-transform: rotate(-45deg);
	}

</style>

<?php

$color[1] 	= '#94efff';
$color[2] 	= '#94daff';
$color[3] 	= '#94ffff';
$color[4] 	= '#6bf2d0';
$color[5] 	= '#6bc7f2';
$color[6] 	= '#94daff';
$color[7] 	= '#94efff';
$color[8] 	= '#94daff';
$color[9] 	= '#94efff';
$color[10] 	= '#94daff';
$color[11] 	= '#94efff';
$color[12] 	= '#94daff';
$color[13] 	= '#94efff';
$color[14] 	= '#94daff';

for($i = 0; $i < 204; $i ++){
	$full_fish .= "<i class='arrow right' style='border: solid ".$color[array_rand($color)].";border-width: 0 0.5vw 0.5vw 0;'></i>";


}

for($i = 0; $i < 115; $i ++){
	$fish_divider .= "<i class='arrow right' style='border: solid ".$color[array_rand($color)].";border-width: 0 0.5vw 0.5vw 0;'></i>";


}


?>

