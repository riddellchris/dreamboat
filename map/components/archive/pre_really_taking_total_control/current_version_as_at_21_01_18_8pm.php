<?php
if(!isset($_SESSION)){session_start();}

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
$strings = array_unique($strings);
$strings = array_values($strings); //without this you get some really shitty stuff as they keys are all chopped up from earlier repetition
//echo '<pre>' , var_dump($strings) , '</pre>';



//so this gives us the real number
//check this /components/layouts/items_with_sidebars/related_items_display.php
$only_active_strings;

$final_results = array();
$final_results['database'] = array();
$final_results['item_number'] = array();
$final_results['title'] = array();
$final_results['number_of_active_relationships'] = array();
$number_for_final_array = 0;	


//then check if they are active or not... within each database
for($i = 0; $i<count($strings); $i++){
//do this ugly to start with
	$position_of_the_underscore = strrpos($strings[$i] , "_");

	$up_to_the_underscore = substr($strings[$i], 0, $position_of_the_underscore);
	$after_the_underscore = substr($strings[$i], $position_of_the_underscore + 1);
	
	if($up_to_the_underscore == 'activities'){	$database = 'activities';}
	if($up_to_the_underscore == 'all'){		$database = 'activities';}		
	if($up_to_the_underscore == 'angles'){		$database = 'marketing_angles';}		
	if($up_to_the_underscore == 'businesses'){	$database = 'organisations';}		
	if($up_to_the_underscore == 'channels'){	$database = 'channels';}	
	if($up_to_the_underscore == 'clients'){		$database = 'people';}	
	if($up_to_the_underscore == 'doing'){		$database = 'activities';}	
	if($up_to_the_underscore == 'dreams'){		$database = 'wheelhouse';}	
	if($up_to_the_underscore == 'goals'){		$database = 'wheelhouse';}		
	if($up_to_the_underscore == 'groups'){		$database = 'organisations';}		
	if($up_to_the_underscore == 'improvements'){	$database = 'improvements';}		
	if($up_to_the_underscore == 'issues'){		$database = 'issues';}		
	if($up_to_the_underscore == 'marketing'){	$database = 'marketing_angles';}	
	if($up_to_the_underscore == 'milestones'){	$database = 'wheelhouse';}	
	if($up_to_the_underscore == 'new_potentials'){	$database = 'sales';}	
	if($up_to_the_underscore == 'organisations'){	$database = 'organisations';}	
	if($up_to_the_underscore == 'people'){		$database = 'people';}	
	if($up_to_the_underscore == 'products'){	$database = 'products_and_services';}	
	if($up_to_the_underscore == 'promotions'){	$database = 'promotions';}		
	if($up_to_the_underscore == 'recurring_sales'){	$database = 'recurring_sales';}
	if($up_to_the_underscore == 'referrers'){	$database = 'people';}
	if($up_to_the_underscore == 'sales'){		$database = 'sales';}	
	if($up_to_the_underscore == 'services'){	$database = 'products_and_services';}	
	if($up_to_the_underscore == 'staff'){		$database = 'people';}		
	if($up_to_the_underscore == 'target_markets'){	$database = 'target_markets';}		
	if($up_to_the_underscore == 'tasks'){		$database = 'wheelhouse';}		
			
	//get up to the underscore	
	$sql = "SELECT * FROM ".$database." WHERE status = 'active' AND item_id = '".$after_the_underscore."'";
	//echo $sql; echo "<br>";
	$result = mysqli_query($conn, $sql);

	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//can probably add the name of the string here too if you want
	//$only_active_strings(count($only_active_strings)) = 
	
	
	if($row['status'] == 'active'){
		$final_results['database'][$number_for_final_array]	=	$database;
		$final_results['item_number'][$number_for_final_array]	=	$after_the_underscore;
		$final_results['title'][$number_for_final_array]	=	$row['title'];
		$number_for_final_array ++;
		//echo $number_for_final_array;
	}	
	
//	echo '<pre>' , var_dump($final_results) , '</pre>';
}



for($i = 0; $i <= (count($final_results)/3); $i ++){
//then order based on the highest number of relationships with active numbers
	//$final_results['number_of_active_relationships'][$i] = ;


	//get out of item_relationships the ones that match this for this user
	//then check against what is still active and go from there
}

//these won't include issues for now as we will add them in a moment
//Then we can order these points and focus on the most important 6+9+16+30 = 61 nodes

//place appropriately and bob's your uncle



	

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

$radius = 220;
$offset = 360/30;
$number_of_points = 30;
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
	//selling can then begin there is nothing left to do from there


//create issues between points
//point 2 & 3 for example.

$point_a_number = 2;
$point_b_number = 3;

//issue
$issue_array = array();
//find midpoint
$issue_array[x][count($issue_array[x])] = ($points[x][$point_a_number] + $points[x][$point_b_number]) / 2;
$issue_array[y][count($issue_array[y])] = ($points[y][$point_a_number] + $points[y][$point_b_number]) / 2;



//leave out midpoint issues for now
/*
//connect two lines with new row
//add midpoint
//var_dump($issue_array[x]); echo "<br>";
//var_dump($issue_array[y]);

//need to calculate number off issues related 
// again slightly more trig - 
	//$hypotenuse for multiple issues on one line
	$set_hypotense = 20; // therefore constant spacing of issue dots = 
	
	//calculate angle between two points
	$angle_of_line_in_radians = atan($issue_array[y][count($issue_array[y])] / $issue_array[x][count($issue_array[x])]);
	
	//therefore find next basic shift up 
	$points[x][$point_a_number];
	
	
	//find angle for x-y co-ordinates based on that arrow improvment or not.
*/	
	


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
//needs some testing but I think it's in the right place now
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
		[250, 			250, 					"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;font-size:large;'>dddissue_title<br>and details<br>Click to open</div>",null, 			null,		"<div>dddissue_title<br>and details<br>Click to open</div>"],
		[264.51531373598, 	308.21774357656, 			"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;'>dddissue_title<br>and details<br>Click to open</div>",308.21774357656, 	null,		null],
		[206.83961197968, 	291.67950222754, 			"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;'>dddissue_title<br>and details<br>Click to open</div>",291.67950222754, 	null,		null],
		[192.3242982437, 	233.46175865098, 			"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;'>dddissue_title<br>and details<br>Click to open</div>",null, 			null,		null],
		[235.67746285783,	null, 					"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;'>dddissue_title<br>and details<br>Click to open</div>",299.94862290205, 	299.94862290205	,"<div>issue_title<br>and details<br>Click to open</div>"],
  		[250, 			null, 					"<div style='font-family:Comfortaa;color:#4332ff;font-weight:900;'>dddissue_title<br>and details<br>Click to open</div>",250, 			null,		"<div>dddissue_title<br>and details<br>Click to open</div>"] 

        ]);



       <!-- then finally fill the /components/items/go_to.php?d=i=.      lines that hold issues -->


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