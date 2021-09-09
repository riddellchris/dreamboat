<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";




$base_dimension = 25;
$height_dimension = $base_dimension / 2;

$middle_box_size = $base_dimension;
$half_middle_box_size = $middle_box_size / 2;

echo "
<style>
.test_box{  position: absolute;}

.north{
  width: 0; 
  height: 0; 
  border-left: ".$height_dimension."vmin solid transparent;
  border-right: ".$height_dimension."vmin solid transparent;
  border-bottom: ".$base_dimension."vmin solid red;
}

.south{
  width: 0; 
  height: 0; 
  border-left: ".$height_dimension."vmin solid transparent;
  border-right: ".$height_dimension."vmin solid transparent;
  border-top: ".$base_dimension."vmin solid #4332ff;
}

.east{
  width: 0; 
  height: 0; 
  border-top: ".$height_dimension."vmin solid transparent;
  border-bottom: ".$height_dimension."vmin solid transparent;
  border-right: ".$base_dimension."vmin solid yellow;
}

.west{
  width: 0; 
  height: 0; 
  border-top: ".$height_dimension."vmin solid transparent;
  border-bottom: ".$height_dimension."vmin solid transparent;
  border-left: ".$base_dimension."vmin solid #00ff00;
}

	.north{	top: calc(45vh - ".$half_middle_box_size."vh - ".$base_dimension."vmin); 	right: calc(50vw - ".$half_middle_box_size."vmin);}
	.south{	top: calc(45vh - ".$half_middle_box_size."vh + ".$base_dimension."vmin); 	right: calc(50vw - ".$half_middle_box_size."vmin);}
	.east{	top: calc(45vh - ".$half_middle_box_size."vh); 	right: calc(50vw  + ".$half_middle_box_size."vmin);}
	.west{	top: calc(45vh - ".$half_middle_box_size."vh); 	left: calc( 50vw  + ".$half_middle_box_size."vmin);}








</style>
<div style='position: relative; max-height:100vh; ' >
	<div class='test_box	north' onclick=location.href='newurl.html';> </div>
	<div class='test_box	south'> </div>
	<div class='test_box	east'> </div>
	<div class='test_box	west'> </div>
	
	
</div>
";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
