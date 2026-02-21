<?php
if(!isset($_SESSION)){session_start();}

$coordinates = array();
$coordinates[x] = array();
$coordinates[y] = array();
$point_number = 0; /// this has to be 0 such that the output code works in the map_engine/scripts/current_version.php
$layer = 1;
$ring_number = 1; //always excluding the central element

$required_point_number = 4;

//if doing a mini-map then we include the central point number
if($_GET['primary_folder'] != 'map'){
	$coordinates[x][$point_number] = 250;
	$coordinates[y][$point_number] = 250;
	$point_number ++;
	$layer ++;
}

//inner circle
//initial offset = 16 degrees - change as needed
$offset = 16;
$radius = 60;
$number_of_coordinates = 6;
for($i = 1; $i <= $number_of_coordinates; $i ++){
	$coordinates[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$coordinates[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$point_number ++;
}

$radius = 120;
$offset = 35;
$number_of_coordinates = 9;
for($i = 1; $i <= $number_of_coordinates; $i ++){
	$coordinates[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$coordinates[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$point_number ++;
}

$radius = 180;
$offset = 360/16;
$number_of_coordinates = 16;
for($i = 1; $i <= $number_of_coordinates; $i ++){
	$coordinates[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$coordinates[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$point_number ++;
}

$radius = 220;
$offset = 360/30;
$number_of_coordinates = 30;
for($i = 1; $i <= $number_of_coordinates; $i ++){
	$coordinates[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$coordinates[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI*(2/$number_of_coordinates));
	$point_number ++;
}