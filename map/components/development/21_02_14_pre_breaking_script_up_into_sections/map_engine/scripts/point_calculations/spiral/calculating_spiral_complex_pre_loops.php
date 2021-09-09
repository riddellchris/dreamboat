<?php
if(!isset($_SESSION)){session_start();}
$points = array();
$points[x] = array();
$points[y] = array();
$point_number = 1;
$layer = 1;
$ring_number = 1; //always excluding the central element

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
$number_of_points = 4;


//first full ring
echo "mixed cos and sin<br>";
//point 1
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 2
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 3
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 4
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "<br><br><br><br>";


echo "radians only<br>";
//point 1
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180 + 4*M_PI/2)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180 + 4*M_PI/2)); echo "<br>";

//point 2
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180 + M_PI/2)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180 + M_PI/2)); echo "<br>";

//point 3
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180 + 2*M_PI/2)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180 + 2*M_PI/2)); echo "<br>";

//point 4
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180 + 3*M_PI/2)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180 + 3*M_PI/2)); echo "<br>";


for($i = 1; $i <= $number_of_points; $i ++){
	$points[x][$point_number] = 250 + $radius*cos($offset* M_PI / 180 + $i*M_PI/2);
	$points[y][$point_number] = 250 + $radius*sin($offset* M_PI / 180 + $i*M_PI/2);
	$point_number ++;
}

var_dump($points[x]);
var_dump($points[y]);





//inner circle
//initial offset = 16 degrees - change as needed

$radius = 120;
$offset = 35;

//point 1
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 1a
$offset = $offset + 45;
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
$offset = 35;

//point 2
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 2a
$offset = $offset + 45;
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
$offset = 35;

//point 3
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 3a
$offset = $offset + 45;
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
$offset = 35;

//point 4
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 4a
$offset = $offset + 45;
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
$offset = 35;





//inner circle
//initial offset = 16 degrees - change as needed

$radius = 120;
$original_offset = 35;
$incremental_increase = 360 / 16;

$offset = $original_offset;
//point 1
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 1a
$offset = $offset + $incremental_increase;
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 1b
$offset = $offset + $incremental_increase;
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 1c
$offset = $offset + $incremental_increase;
echo "point 1<br>";
echo "x co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
$offset = $original_offset;



//point 2
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 2a
$offset = $offset + $incremental_increase;
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 2b
$offset = $offset + $incremental_increase;
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 2c
$offset = $offset + $incremental_increase;
echo "<br>point 2<br>";
echo "x co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 + $radius*cos($offset* M_PI / 180)); echo "<br>";
$offset = $original_offset;



//point 3
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 3a
$offset = $offset + $incremental_increase;
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 3b
$offset = $offset + $incremental_increase;
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";

//point 3c
$offset = $offset + $incremental_increase;
echo "<br>point 3<br>";
echo "x co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*sin($offset* M_PI / 180)); echo "<br>";
$offset = $original_offset;




//point 4
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 4b
$offset = $offset + $incremental_increase;
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 4b
$offset = $offset + $incremental_increase;
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";

//point 4c
$offset = $offset + $incremental_increase;
echo "<br>point 4<br>";
echo "x co-ordinate: "; echo (250 + $radius*sin($offset* M_PI / 180)); echo "<br>";
echo "y co-ordinate: "; echo (250 - $radius*cos($offset* M_PI / 180)); echo "<br>";
$offset = $original_offset;