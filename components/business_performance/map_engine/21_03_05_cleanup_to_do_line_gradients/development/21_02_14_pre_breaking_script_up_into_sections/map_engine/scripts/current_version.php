<?php
if(!isset($_SESSION)){session_start();}

//first let's set the defaults just incase they are not set
//these will be reflected within the selects in display.php too obviously
if(!isset($_SESSION['current_map_view'])){		$_SESSION['current_map_view'] 	 	= 'all';}
if(!isset($_SESSION['current_issues_setting'])){	$_SESSION['current_issues_setting'] 	= 'issues_on';}
if(!isset($_SESSION['current_connection_control'])){	$_SESSION['current_connection_control'] = 'show_all';}
if(!isset($_SESSION['current_map_display'])){		$_SESSION['current_map_display'] 	= 'relationship_centric';}
if(!isset($_SESSION['current_edge_display'])){		$_SESSION['current_edge_display'] 	= 'non_descript';} //this should probably ultimately be adjusted depening on the phase the user is up to 



//now let's see what/which of the items currently within the system are required to be displayed by querying items_all appropriately for the first time
	//if there are relationships with other items (mostly issues) then we will need to add them to the list later of course
	//so
	
$sql = "SELECT * FROM items_all 
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND deleted_or_not = 'no'
	AND current_status = 'active'";
//now we add in some conditions
if($_SESSION['current_map_view'] == 'all'){			$sql .= "";}		
if($_SESSION['current_map_view'] == 'activities'){		$sql .= " AND found_in_database  = 'activities' ";}	
if($_SESSION['current_map_view'] == 'people_and_organisations'){$sql .= " AND (found_in_database = 'people' OR found_in_database = 'organisations')";}	
if($_SESSION['current_map_view'] == 'sales_and_marketing'){	$sql .= " AND (found_in_database = 'sales'  OR found_in_database = 'marketing')";}
if($_SESSION['current_map_view'] == 'wheelhouse'){		$sql .= " AND found_in_database  = 'wheelhouse' ";}
if($_SESSION['current_map_view'] == 'products_and_services'){	$sql .= " AND found_in_database  = 'products_and_services' ";}

$result = mysqli_query($conn, $sql);

//so at this point we will have defined the CRITICAL nodes to display from the current items list.
//so let's roll with that then
$critical_results_array = array();
$critical_results_array[number] = array();
$critical_results_array['database'] = array();
$critical_results_array['id'] = array();
$critical_results_array['primary_folder'] = array();
$critical_results_array['secondary_folder'] = array();
$critical_results_array['title'] = array();
$critical_results_array[number_of_relationships_linked_to_this_array] = array();

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$critical_results_array[number][$i] 		= count($critical_results_array[number]);
	$critical_results_array['database'][$i]		= $row['found_in_database'];
	$critical_results_array['id'][$i] 		= $row['item_id'];
	$critical_results_array['primary_folder'][$i] 	= $row['found_in_primary_folder'];
	$critical_results_array['secondary_folder'][$i] 	= $row['found_in_secondary_folder'];
	$critical_results_array['title'][$i] 		= $row['title'];	
	$i ++;
}

$total_number_of_critical_results = $i;

//so now...
//if connected only - we test to see which of these items have relationships by pulling out the relationships and comparing arrays
//if not connected only we test to see which of these items don't have relationships and put out those arrays
//if showing all then nothing else needs to happen at this point

if(	$_SESSION['current_connection_control'] == 'connected_only' OR
	$_SESSION['current_connection_control'] == 'unconnected_only'){
	//we will test for the number of relationships to display in this view later down the road
	
	//so first let's pull out all the relationships that currently exist that include in some way an element of the critical results array
		//this will require a pretty long $sql query for the WHERE clause but that's fine.
		$sql = "SELECT * FROM item_relationships 
			WHERE 	item_a_user_id = '".$_SESSION['viewing_client_id']."' 
			AND 	item_b_user_id = '".$_SESSION['viewing_client_id']."' 
		
			AND 	item_a_current_status = 'active' 
			AND 	item_b_current_status = 'active' 
			AND 	item_a_deleted_or_not = 'no' 
			AND 	item_b_deleted_or_not = 'no' 
			
			AND total_relationship_status = 'active' 
			
			AND (";
	
				$first = 'yes';			
				for($i = 0; $i < $total_number_of_critical_results; $i ++){
					if($first == 'no'){$sql .= " OR ";}
					//because items are duplicated a & b we just simplify by seaching for when they are a, therefore removing the need to cut that out later
					$sql  .= "(item_a_database = '".$critical_results_array['database'][$i]."' AND item_a_id = '".$critical_results_array['id'][$i]."' ) ";
					$first = 'no';
				}
		
		$sql .= ")";

		//this just collects 
		$relationship_connections_array[number][$i] 		= count($critical_results_array[number]);
		$relationship_connections_array['database'][$i]		= $row['found_in_database'];
		$relationship_connections_array['id'][$i] 		= $row['item_id'];
		
		
		//the desired result here is to see if there are linked relationships or not
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


			
		
		
				
		}
	
		//then build the array $number of relationships
		//then we can move on from there
		//at this point essentially we go to display point application and then	

		
		
		
}

//this gives us the//critical nodes to display
//however if $_SESSION['current_connection_control'] == 'connected_only'
//we need to go back and recheck any for any related issues to add back into the mix


unset($initial_results_array);
$initial_results_array = array();
$initial_results_array['database'] = array();
$initial_results_array['id'] = array();
$initial_results_array['primary_folder'] = array();
$initial_results_array['secondary_folder'] = array();
$initial_results_array['title'] = array();
$initial_results_array[number_of_relationships_linked_to_this_array] = array();

unset($ordered_results_array);
$ordered_results_array = array();
$ordered_results_array['database'] = array();
$ordered_results_array['id'] = array();
$ordered_results_array['primary_folder'] = array();
$ordered_results_array['secondary_folder'] = array();
$ordered_results_array['title'] = array();
$ordered_results_array[number_of_relationships_linked_to_this_array] = array();




	
//before anything else we actually need to see / know if there are any issues to display or not at all because without them we need to change the string that we build
//so today 21.02.02 let's do it crudely
$any_issues_to_display = 'no';
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){



	if($row['item_a_database'] == 'issues' OR $row['item_b_database'] == 'issues'){$any_issues_to_display = 'yes';}
}	
	
	
	
	

$original_sql = $sql; //We store this SQL now so that we may use it later in the preparation phase when preparing the lines between nodes

$result = mysqli_query($conn, $sql);
$number_of_active_relationships = mysqli_num_rows($result) / 2; 	//while on this page in particular this may not look like it's used, it is used on /components/map_engine/display.php so don't delete it just yet
									//divided by two to account for the duplication of relationships as per SOP
//echo $number_of_active_relationships;
//exit();

$current_number_of_unique_nodes = 0;	
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


	//we do this for both item_a and for item_b	
	for($i = 0; $i <= 1; $i ++){
		if($i == '0'){$item_to_test_for = 'a';}
		if($i == '1'){$item_to_test_for = 'b';}			
	
		$node_already_in_initial_results_array = 'no';
		for($j = 0; $j <= $number_of_active_relationships; $j ++){
		

			//first we see if this node has already been added or not yet
			//to do this we use a for loop and go through all the existing database and id combinations
			if(	$row['item_'.$item_to_test_for.'_database'] 	== $initial_results_array['database'][$j] &&
				$row['item_'.$item_to_test_for.'_id']  		== $initial_results_array['id'][$j]		){
				
					$node_already_in_initial_results_array = 'yes';
					
					//probably do some ranking changes within this element of the page
					$initial_results_array[number_of_relationships_linked_to_this_array][$j] += 1/2;										
			}
		}

		//if after checking that	
		if($node_already_in_initial_results_array == 'no'){			
			//then we add all of those datapoints
			//if not within that we add to all the arrays
			$initial_results_array['database'][$current_number_of_unique_nodes] 					= 			     $row['item_'.$item_to_test_for.'_database'];
			$initial_results_array['id'][$current_number_of_unique_nodes] 						= 			     $row['item_'.$item_to_test_for.'_id'];	
			$initial_results_array['primary_folder'][$current_number_of_unique_nodes] 					= 			     $row['item_'.$item_to_test_for.'_primary_folder'];	
			$initial_results_array['secondary_folder'][$current_number_of_unique_nodes] 				= 			     $row['item_'.$item_to_test_for.'_secondary_folder'];	
			$initial_results_array['title'][$current_number_of_unique_nodes] 						= safely_remove_apostrophies($row['item_'.$item_to_test_for.'_title']);		
			$initial_results_array[number_of_relationships_linked_to_this_array][$current_number_of_unique_nodes] 	= 			     1/2;
			
			//if at this point as well we also add in the point locations
				//but still do the ranking changes in the iff above					

			$current_number_of_unique_nodes	++;
		}
	}

	$total_number_of_nodes_required = $current_number_of_unique_nodes;	
	$unique_nodes_required ++;
}



//echo "initial_results_array<br>";
//echo '<pre>' , var_dump($initial_results_array) , '</pre>';
//echo count($initial_results_array);
//exit();


//var_dump($_SESSION);exit();
if($_SESSION['current_map_display'] == 'central_issues'){
	//get out position locations//display appropriately
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/displays/central_issues_display/point_locations_calculations.php";
//	echo '<pre>' , var_dump($points) , '</pre>';
	
	//reorder based on pulling out highest number of connections backwards
	
//	var_dump($initial_results_array[number_of_relationships_linked_to_this_array]);
	
	
	//get out
	$numbers_of_relationships = array_unique($initial_results_array[number_of_relationships_linked_to_this_array]);
//	echo "<br>";
//	var_dump($numbers_of_relationships);
	$numbers_of_relationships = array_values($numbers_of_relationships);
//	echo "<br>";
//	var_dump($numbers_of_relationships);
	
	rsort($numbers_of_relationships); // this just does it - we don't need to make it $x = rsort($x); if that makes sense

//	var_dump($numbers_of_relationships);
//echo	count($numbers_of_relationships);
//	echo "<br>";
//	echo $numbers_of_relationships[1];	
//	exit();

//echo "initial_results_array_database<br>";
//echo count($initial_results_array['database']);	
//var_dump	($initial_results_array['database']);	

	//go through the $initial_results_array
	for($i = 0; $i <= count($numbers_of_relationships) ; $i++){
		for($key = 0; $key <= count($initial_results_array['database']) -1; $key ++){
			
		//	echo "<br>initial_results_array_number_of_relationships";
		//	echo $initial_results_array[number_of_relationships_linked_to_this_array][$key];
		//	echo "<br>number_of_relationships";			
		//	echo $numbers_of_relationships[$i];
			
			
			if($initial_results_array[number_of_relationships_linked_to_this_array][$key] == $numbers_of_relationships[$i]){
			
		//		echo "hi<br><BR><BR>";
					//then we store the data appropriately too.	
					$ordered_results_array['database'][$key]						= $initial_results_array['database'][$key]; 
					$ordered_results_array['id'][$key]						= $initial_results_array['id'][$key]; 
					$ordered_results_array['primary_folder'][$key]					= $initial_results_array['primary_folder'][$key]; 
					$ordered_results_array['secondary_folder'][$key]					= $initial_results_array['secondary_folder'][$key]; 
					$ordered_results_array['title'][$key]						= $initial_results_array['title'][$key]; 
					$ordered_results_array[number_of_relationships_linked_to_this_array][$key]	= $initial_results_array[number_of_relationships_linked_to_this_array][$key]; 
					//at the same time we add in the points to display them at as well.
			
					$ordered_results_array[x_coordinate][$key]					= $points[x][$key];			
					$ordered_results_array[y_coordinate][$key]					= $points[y][$key];					
			}
		}
	}
	
}
//echo "ordered_results_array<br>";
//echo '<pre>' , var_dump($ordered_results_array) , '</pre>';
//exit();

function create_go_to_link($db, $item_id){return " '/components/items/go_to.php?db=".$db."&item_id=".$item_id."' ";}

//then finally we get down to the real nitty gritty stuff down here.
//SNAP

$string_to_echo = '';

//note this goes backwards as we push the ranking in and around all this
//then it's simply a question of use a for loop down here
//for all the points
for($k = 0; $k <= count($ordered_results_array['database']) ; $k ++){		//need to specify ['database'] to ensure we just get out the number of results
	//probably just change things over to make it slightly less messy
	$title 		= $ordered_results_array['title'][$k];
	$database 	= $ordered_results_array['database'][$k];
	$item_id 	= $ordered_results_array['id'][$k];

	//spit out those that aren't issues
	if($ordered_results_array['database'][$k] != 'issues'){
		$string_to_echo .= "[".$ordered_results_array[x_coordinate][$k].",".create_go_to_link($database,$item_id).",".$ordered_results_array[y_coordinate][$k].", createCustomHTMLContent('".$title."'),		null";
		if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
		$string_to_echo .= "], 	 ";
		
		
	
		// 	[250, 			 ".create_go_to_link('people','1322').", 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],		
	}


	//spit out those that are issues
	if($ordered_results_array['database'][$k] == 'issues'){
		$string_to_echo .= "[".$ordered_results_array[x_coordinate][$k].",".create_go_to_link($database,$item_id)."	,	null, 	'',	null, ".$ordered_results_array[y_coordinate][$k]." ,	createCustomHTMLContent('".$title."')],";
		//	[235.67746285783			   ,'/dds/'					, 	null, 	'',	null,						260,	createCustomHTMLContent('Issue3 title')],     		
	}
	//spit out the lines that match/join the two links together

//echo $string_to_echo."<br>";

}

//echo $string_to_echo."<br>";
//exit();



$alternator = 'odd';
//then for the relationships
//we almost need to go back to the original query at the top of this page and run that again
//extract the datapoints
//and print out the apppropriate rows

//go_back_through the original sql query
//for EVERY SECOND entry punch out the links and position for the related points from the $ordered_results_array
$result = mysqli_query($conn, $sql);
$relationship_number = 1;
while($row = mysqli_fetch_array($result)){

	if($alternator == 'even'){
		for($i = 0; $i <= $number_of_active_relationships; $i ++){	
				if(	$row['item_a_database'] == $ordered_results_array['database'][$i] &&
					$row['item_a_id'] 	== $ordered_results_array['id'][$i] ){

					$title 		= $ordered_results_array['title'][$i];
					$database 	= $ordered_results_array['database'][$i];
					$item_id 	= $ordered_results_array['id'][$i];		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$ordered_results_array[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$ordered_results_array[y_coordinate][$i];
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
				}
	
	
				if(	$row['item_b_database'] == $ordered_results_array['database'][$i] &&
					$row['item_b_id'] 	== $ordered_results_array['id'][$i] ){

					$title 		= $ordered_results_array['title'][$i];
					$database 	= $ordered_results_array['database'][$i];
					$item_id 	= $ordered_results_array['id'][$i];
		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$ordered_results_array[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$ordered_results_array[y_coordinate][$i];
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
				 	
				}
			}
	  	
	  	
	  	
	  	//if it doesn't equal the last one then we must put the blank rows at the end including the extra column
	  	if($relationship_number <> mysqli_num_rows($result)){
	  		$string_to_echo .= "	[null, 			'/map/links/',	null, 		'',							null";
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
		}
		$relationship_number ++;	
	}
	
	
	if($alternator == 'even'){	$alternator = 'odd';}
	if($alternator == 'odd'){	$alternator = 'even';}		
}






		
?>        
        
        
    <script name="primary_map_engine_script" type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable

           ([
           
<?php
echo "[	'X', 	
	{ role: 'link' },
	'nodes',
	{type:'string', role:'tooltip','p': {'html': true}},
	''";
	if($any_issues_to_display == 'yes'){	
		echo "
		,
		'',
		{type:'string', role:'tooltip','p': {'html': true}} ";
	}
echo "	],";
           
           
           
           


//now we just echo the string that we have built up earlier and we're done - boom 
echo $string_to_echo;
?>   
       

        ]);
   

        var options = {
          legend: 'none',
          'chartArea': {'width': '95%', 'height': '95%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          colors: ['#ff0000',

		<?php
				//these will need to expand into 7 by 7 arrays obviously and repeat 7 times to match the thicknesses
				//but that is roughly what is required here/as with everything it's not perfect but improving
		          			
				if($_SESSION['current_edge_display'] == 'non_descript'){	echo "'#cecece',";}
				if($_SESSION['current_edge_display'] == 'productivity'){	echo "'#7366ff',";}
				if($_SESSION['current_edge_display'] == 'financial'){		echo "'#4d4d4d',";}
				if($_SESSION['current_edge_display'] == 'users_time'){		echo "'#ffc0cb',";}
				if($_SESSION['current_edge_display'] == 'communication'){	echo "'#cecece',";}
				if($_SESSION['current_edge_display'] == 'kpi_1'){		echo "'red',";}
				if($_SESSION['current_edge_display'] == 'kpi_2'){		echo "'blue',";}
				if($_SESSION['current_edge_display'] == 'kpi_3'){		echo "'orange',";}
				if($_SESSION['current_edge_display'] == 'kpi_4'){		echo "'green',";}       	
          	
          	?>
          			
          			'#4332ff'],
          series: {
			<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->
	                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
	                1: { pointShape: 'circle', pointSize:0, lineWidth: 10},
	                2: { pointShape: 'circle', pointSize:10, lineWidth: 0}
<?php 
//to fully assess the hours and group into the appropriate quintile we need to adjust appropriately

?>
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
      
      
//https://developers.google.com/chart/interactive/docs/customizing_tooltip_content	
//this should also include a total share of workload
function createCustomHTMLContent(title) {
  return '<div style="padding:5px 5px 5px 5px;">' +
      '<table class="medals_layout" style="font-family:Comfortaa;color:#4332ff;">' + 
      	'<tr>' + '<td style="font-weight:900;color:281e96;">' + title +'</td>' + '</tr>' + 
      	'<tr>' + '<td style="color: #cecece;"><b>click to edit</b></td>' + '</tr>' +      	
      	'</table>' + '</div>';
}          
</script>