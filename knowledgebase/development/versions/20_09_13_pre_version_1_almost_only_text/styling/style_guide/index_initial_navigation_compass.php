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
  border-left: ".$height_dimension."vw solid transparent;
  border-right: ".$height_dimension."vw solid transparent;
  border-bottom: ".$base_dimension."vh solid red;
}

.south{
  width: 0; 
  height: 0; 
  border-left: ".$height_dimension."vw solid transparent;
  border-right: ".$height_dimension."vw solid transparent;
  border-top: ".$base_dimension."vh solid #4332ff;
}

.east{
  width: 0; 
  height: 0; 
  border-top: ".$height_dimension."vh solid transparent;
  border-bottom: ".$height_dimension."vh solid transparent;
  border-right: ".$base_dimension."vw solid yellow;
}

.west{
  width: 0; 
  height: 0; 
  border-top: ".$height_dimension."vh solid transparent;
  border-bottom: ".$height_dimension."vh solid transparent;
  border-left: ".$base_dimension."vw solid #00ff00;
}

.north:hover{  border-bottom: ".$base_dimension."vh solid 	#cc0000;}
.south:hover{  border-top: ".$base_dimension."vh solid 		#281e96;}
.east:hover{  border-right: ".$base_dimension."vw solid 	orange;}
.west:hover{  border-left: ".$base_dimension."vw solid 		green;}


.north{	top: calc(45vh - ".$half_middle_box_size."vh - ".$base_dimension."vh); 	right: calc(50vw - ".$half_middle_box_size."vw);}
.south{	top: calc(45vh - ".$half_middle_box_size."vh + ".$base_dimension."vh); 	right: calc(50vw - ".$half_middle_box_size."vw);}
.east{	top: calc(45vh - ".$half_middle_box_size."vh); 	right: calc(50vw  + ".$half_middle_box_size."vw);}
.west{	top: calc(45vh - ".$half_middle_box_size."vh); 	left: calc( 50vw  + ".$half_middle_box_size."vw);}








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
