<?php
//there is still something to be done here
///components/layouts/items_with_sidebars/related_items_display.php

//build tooltip
///components/numerical_planning/charts/script.php


//for now let's just have simple straight lines of the same color
//the next step will to be pretty much drawing our own chart which given the complexity of this isn't actually too hard....


//count all nodes
$nodes_count = 2;

//create positions of each node
if($nodes_count == 1){$node[1][x] = 250; $node[1][y] = 500;}

if($nodes_count == 2){	$node[1][x] = 250 - sin(15); $node[1][y] = 250 + 250*cos(15);
			$node[2][x] = 250 - sin(15); $node[2][y] = 250 + 250*cos(15);
			}
//draw lines

//build final array

//print





require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM `item_relationships` WHERE user_id = '".$_SESSION['viewing_client_id']."' AND status = 'active'";

$select = mysqli_query($conn, $sql);

//collect unique list of items
$strings = array();

while($row = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
	//get out the two item id's
	$strings[count($strings)] = $row['item_a_type']."_".$row['item_a_id'];
	$strings[count($strings)] = $row['item_b_type']."_".$row['item_b_id'];	
}	
sort($strings);
//var_dump($strings);

$strings = array_unique($strings);

//echo "<br>";
//var_dump($strings);	

//so this gives us the real number
//check this /components/layouts/items_with_sidebars/related_items_display.php


	$only_active_strings;
	//then check if they are active or not... within each database
	for($i = 0; $i<count($strings); $i++){
	//do this ugly to start with
		//get up to the underscore
		
		
	
		$sql = "SELECT * FROM '".$up_to_the_underscore."' WHERE status = 'active'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows(result) == 1){
			//can probably add the name of the string here too if you want
			//$only_active_strings(count($only_active_strings)) = 
		}
	}

	//status/// active per database
	//this should really be done by altering a table/relevant central table so not to have any other crap on
	
	//then for those remaining ones just put that together


	//then space out and put into the squares
	
	
	//then lay them out on the five by five grid and boom

	//space them out appropriately
	
	//selling can then begin there is nothing left to do from there


//if nothing then need to add and grow from there?
	//there are no actively connected relationships - so please do that
	//there are no nodes so add your first node please
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
	$angle_of_line_in_radians = atan($issue_array[y][count($issue_array[y])] / $issue_array[x][count($issue_array[x])]);
	
	//therefore find next basic shift up 
	$points[x][$point_a_number];
	
	
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


//issus are actually going to be polygons so that we can separate them out i guess as opposed to cirles but i'm not going to fix the symbology just for that right now
//so what if we just let yo




//notes
//the same point may be shown multiple times really 
//. //item/go_to/sends to the right place
?>        
        
        
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', 	'a',{type:'string', role:'tooltip','p': {'html': true}},'','',{type:'string', role:'tooltip','p': {'html': true}}],
       
       
       <!-- nodes -->
       
       
       
       
       <!-- issues -->
       
       
       
       
       <!-- lines that hold issues -->
		[250, 			250, 					"<div>dddissue_title<br>and details<br>Click to open</div>",null, 			null,		"<div>dddissue_title<br>and details<br>Click to open</div>"],
		[264.51531373598, 	308.21774357656, 			"<div>dddissue_title<br>and details<br>Click to open</div>",308.21774357656, 	null,		null],
		[206.83961197968, 	291.67950222754, 			"<div>dddissue_title<br>and details<br>Click to open</div>",291.67950222754, 	null,		null],
		[192.3242982437, 	233.46175865098, 			"<div>dddissue_title<br>and details<br>Click to open</div>",null, 			null,		null],
		[235.67746285783,	null, 					"<div>dddissue_title<br>and details<br>Click to open</div>",299.94862290205, 	299.94862290205	,"<div>issue_title<br>and details<br>Click to open</div>"],
  		[250, 			null, 					"<div>dddissue_title<br>and details<br>Click to open</div>",250, 			null,		"<div>dddissue_title<br>and details<br>Click to open</div>"] 

        ]);

        var options = {
          legend: 'none',
          'chartArea': {'width': '95%', 'height': '95%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          colors: ['#ff0000','#cecece','#4332ff'],
          series: {

<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->
                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
                1: { pointShape: 'circle', pointSize:0, lineWidth: 10},
                2: { pointShape: 'circle', pointSize:10, lineWidth: 0},                
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
 
 
<!-- https://stackoverflow.com/questions/6205621/how-to-add-links-in-google-chart-api -->
    google.visualization.events.addListener(chart, 'select', selectHandler); 

    function selectHandler(e)     {   
        window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
    }
 
        
         $(window).resize(function(){drawChart();});	 
      }
    </script>