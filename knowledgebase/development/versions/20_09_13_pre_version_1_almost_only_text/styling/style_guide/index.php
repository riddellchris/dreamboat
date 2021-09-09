<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";




$base_dimension = 65;
$height_dimension = $base_dimension / 2;

$middle_box_size = $base_dimension;
$half_middle_box_size = $middle_box_size / 2;

echo "
<style>
.top_left{
 position: fixed;
  width: 0; 
  height: 0; 
  border-bottom: ".$height_dimension."vmin solid transparent;
  border-left: ".$base_dimension."vmin solid red;
}

.top_right{
 position: fixed;
  width: 0; 
  height: 0; 
  border-bottom: ".$height_dimension."vmin solid transparent;
  border-right: ".$base_dimension."vmin solid #00ff00;
}

.bottom_left{
 position: fixed;
  width: 0; 
  height: 0; 
  border-right: ".$base_dimension."vmin solid transparent;
  border-bottom: ".$height_dimension."vmin solid yellow;
}

.bottom_right{
 position: fixed;
  width: 0; 
  height: 0; 
  border-left: ".$base_dimension."vmin solid transparent;
  border-bottom: ".$height_dimension."vmin solid #4332ff;
}

	.top_left{	top: 50; 	left: 0;}
	.top_right{	top: 50; 	right: 0;}
	.bottom_left{	bottom: 50; 	left: 0;}
	.bottom_right{	bottom: 50; 	right: 0;}








</style>
<div style='position: relative; max-height:100vh; ' >
	<div class='top_left' onclick=location.href='newurl.html';> </div>
	<div class='top_right'> </div>
	<div class='bottom_left'> </div>
	<div class='bottom_right'> </div>
	
	
</div>
";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
