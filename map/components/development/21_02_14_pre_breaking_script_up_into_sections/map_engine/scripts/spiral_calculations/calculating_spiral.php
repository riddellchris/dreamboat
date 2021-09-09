<?php
if(!isset($_SESSION)){session_start();}
$points = array();
$points[x] = array();
$points[y] = array();
$point_number = 1;
$layer = 1;
$ring_number = 1; //always excluding the central element

$required_point_number = 4;



//if doing a mini-map then we include the central point number
if($_GET['primary_folder'] != 'map'){
	$points[x][$point_number] = 250;
	$points[y][$point_number] = 250;
	$point_number ++;
	$layer ++;
}

//inner circle
//initial offset = 16 degrees - change as needed
$offset = 16;
$radius = 60;
$number_of_points = 6;
for($i = 1; $i <= $number_of_points; $i ++){
	$points[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$points[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$point_number ++;
}



$radius = 120;
$offset = 35;
$number_of_points = 9;
for($i = 1; $i <= $number_of_points; $i ++){
	$points[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$points[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$point_number ++;
}



$radius = 180;
$offset = 360/16;
$number_of_points = 16;
for($i = 1; $i <= $number_of_points; $i ++){
	$points[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$points[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_points));
	$point_number ++;
}



$string_of_points = "";
for($i = 1; $i <= $required_point_number; $i ++){

	$string_of_points .= "[".$points[x][$i].",".$points[y][$i]."]";
	if($i <> $required_point_number){$string_of_points .= ",";} 


}

echo $string_of_points;