<?php
if(!isset($_SESSION)){session_start();}

$final_points[x] = array();
$final_points[y] = array();



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


/* //just arranging the points for major nodes
$string_of_points = "";
for($i = 1; $i <= $required_point_number; $i ++){
	$string_of_points .= "[".$points[x][$i].",".$points[y][$i]."]";
	if($i <> $required_point_number){$string_of_points .= ",";} 
}
echo $string_of_points;
*/


//create issues between points
//point 2 & 3 for example.

$point_a_number = 2;
$point_b_number = 3;

//issue
$issue_array = array();
//find midpoint
$issue_array[x][count($issue_array[x])] = ($points[x][$point_a_number] + $points[x][$point_b_number]) / 2;
$issue_array[y][count($issue_array[y])] = ($points[y][$point_a_number] + $points[y][$point_b_number]) / 2;

//connect two lines with new row
//add midpoint
var_dump($issue_array[x]); echo "<br>";
var_dump($issue_array[y]);

//need to calculate number off issues related 
// again slightly more trig - 
	//$hypotenuse for multiple issues on one line
	$set_hypotense = 20; // therefore constant spacing of issue dots = 
	
	//calculate angle between two points
	$angle_of_line_in_radians = atan($issue_array[y][count($issue_array[y])] / $issue_array[x][count($issue_array[x])]]);
	
	//therefore find next basic shift up 
	$points[x][$point_a_number]
	
	
	//find angle for x-y co-ordinates based on that arrow improvment or not.
	
	


//build array appropriately
	//must keep lines togheter
		/* //just arranging the points for major nodes
		$string_of_points = "";
		for($i = 1; $i <= $required_point_number; $i ++){
			$string_of_points .= "[".$points[x][$i].",".$points[y][$i]."]";
			if($i <> $required_point_number){$string_of_points .= ",";} 
		}
	//add issue points at the end of the array	
		
		
		
		echo $string_of_points;
*/	
	
	





//This is the real challenge
//step one pull out all relevant items
//then figure out how many nodes are needed
//then put in all the issues at appropriate spaces
//then finally lay down all the lines as required for each of the linked lines

//bump x-coordinates for each of the titles to go in
//Then throw in all the links by simply transposing all the values "over" 1 to fit in the link direction 
//{type:'string', role:'tooltip','p': {'html': true}}
//'/item/go_to.php?database=&id='

//item/go_to is required here as well

//$final_points[x][0]
//$final_points[y][0]


