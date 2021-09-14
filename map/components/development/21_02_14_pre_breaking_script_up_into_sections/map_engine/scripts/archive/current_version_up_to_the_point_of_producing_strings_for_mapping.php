<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['current_map_view'])){	$_SESSION['current_map_view'] 	 = 'all';}
if(!isset($_SESSION['current_map_display'])){	$_SESSION['current_map_display'] = 'central_issues';}



//require $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM `item_relationships` 
	WHERE 	item_a_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	AND 	item_b_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 

	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 
	
	AND total_relationship_status = 'active'";
	
	

	
if($_SESSION['current_map_view'] == 'all'){				$sql .= "";}
if($_SESSION['current_map_view'] == 'activities'){			$sql .= " AND (item_a_database = 'activities' OR item_b_database = 'activities')";}
if($_SESSION['current_map_view'] == 'people_and_organisations'){	$sql .= " AND (item_b_database = 'people' OR item_b_database = 'people' OR item_b_database = 'organisations' OR item_b_database = 'organisations')";}
if($_SESSION['current_map_view'] == 'sales_and_marketing'){		$sql .= " AND (item_b_database = 'sales' OR item_b_database = 'sales' OR item_b_database = 'marketing' OR item_b_database = 'marketing')";}


if($_SESSION['current_map_display'] == 'critical_issues'){		$sql .= " AND (item_b_database = 'issues' OR item_b_database = 'issues' ";}


if($_SESSION['current_map_display'] == 'time_flow'){			$sql .= "";}
if($_SESSION['current_map_display'] == 'money_flow'){			$sql .= "";}
if($_SESSION['current_map_display'] == 'future_planning'){		$sql .= "";}
	
//echo $sql;
//exit();	

$result = mysqli_query($conn, $sql);
$number_of_active_relationships = mysqli_num_rows($result) / 2; 	//while on this page in particular this may not look like it's used, it is used on /components/map_engine/display.php so don't delete it just yet
									//divided by two to account for the duplication of relationships as per SOP



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
			if(	$row['item_'.$item_to_test_for.'_database'] 	== $intial_results_array['database'][$j] &&
				$row['item_'.$item_to_test_for.'_id']  		== $intial_results_array['id'][$j]		){
				
					$node_already_in_initial_results_array = 'yes';
					
					//probably do some ranking changes within this element of the page
					$intial_results_array[number_of_relationships_linked_to_this_array][$j] += 1/2;										
			}
		}

		//if after checking that	
		if($node_already_in_initial_results_array == 'no'){			
			//then we add all of those datapoints
			//if not within that we add to all the arrays
			$intial_results_array['database'][$current_number_of_unique_nodes] 					= 			     $row['item_'.$item_to_test_for.'_database'];
			$intial_results_array['id'][$current_number_of_unique_nodes] 						= 			     $row['item_'.$item_to_test_for.'_id'];	
			$intial_results_array['primary_folder'][$current_number_of_unique_nodes] 					= 			     $row['item_'.$item_to_test_for.'_primary_folder'];	
			$intial_results_array['secondary_folder'][$current_number_of_unique_nodes] 				= 			     $row['item_'.$item_to_test_for.'_secondary_folder'];	
			$intial_results_array['title'][$current_number_of_unique_nodes] 						= safely_remove_apostrophies($row['item_'.$item_to_test_for.'_title']);		
			$intial_results_array[number_of_relationships_linked_to_this_array][$current_number_of_unique_nodes] 	= 			     1/2;
			
			//if at this point as well we also add in the point locations
				//but still do the ranking changes in the iff above					

			$current_number_of_unique_nodes	++;
		}
	}

	$total_number_of_nodes_required = $current_number_of_unique_nodes;	
	$unique_nodes_required ++;
}




//echo '<pre>' , var_dump($intial_results_array) , '</pre>';



//var_dump($_SESSION);exit();
if($_SESSION['current_map_display'] == 'central_issues'){
	//get out position locations//display appropriately
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/displays/central_issues_display/point_locations_calculations.php";
//	echo '<pre>' , var_dump($points) , '</pre>';
	
	//reorder based on pulling out highest number of connections backwards
	
//	var_dump($intial_results_array[number_of_relationships_linked_to_this_array]);
	
	
	//get out
	$numbers_of_relationships = array_unique($intial_results_array[number_of_relationships_linked_to_this_array]);
//	echo "<br>";
//	var_dump($numbers_of_relationships);
	$numbers_of_relationships = array_values($numbers_of_relationships);
//	echo "<br>";
//	var_dump($numbers_of_relationships);
	
	rsort($numbers_of_relationships); // this just does it - we don't need to make it $x = rsort($x); if that makes sense
//	echo "<br>";
//	echo $numbers_of_relationships[1];	
//	exit();
	
	
	for($i = 0; $i <= count($number_of_relationships); $i++){	
		//go through the $initial_results_array
		for($key = 0; $key <= count($initial_results_array) + 1; $key ++){
			
			if($intial_results_array[number_of_relationships_linked_to_this_array][$key] == $numbers_of_relationships[$i]){
				//then we store the data appropriately too.	
				$ordered_results_array['database'][$key]						= $intial_results_array['database'][$key]; 
				$ordered_results_array['id'][$key]						= $intial_results_array['id'][$key]; 
				$ordered_results_array['primary_folder'][$key]					= $intial_results_array['primary_folder'][$key]; 
				$ordered_results_array['secondary_folder'][$key]					= $intial_results_array['secondary_folder'][$key]; 
				$ordered_results_array['title'][$key]						= $intial_results_array['title'][$key]; 
				$ordered_results_array[number_of_relationships_linked_to_this_array][$key]	= $intial_results_array[number_of_relationships_linked_to_this_array][$key]; 
				//at the same time we add in the points to display them at as well.
		
				$ordered_results_array[x_coordinate][$key]					= $points[x][$key];			
				$ordered_results_array[y_coordinate][$key]					= $points[y][$key];					
			}
		}
	}
}



//echo '<pre>' , var_dump($ordered_results_array) , '</pre>';

//exit();

function create_go_to_link($db, $item_id){echo "'/components/items/go_to.php?db=".$db."&item_id=".$item_id."'";}

//then finally we get down to the real nitty gritty stuff down here.
//SNAP

$string_to_echo = '';

//note this goes backwards as we push the ranking in and around all this
//then it's simply a question of use a for loop down here
//for all the points
//for($k = count($initial_results_display); $k = 0; $k --){
	//probably just change things over to make it slightly less messy
	$title = $intial_results_array['title'][$k];




	//spit out those that aren't issues
//	if($initial_results_array['database'][$k] != 'issues'){
		// 	[250, 			 ".create_go_to_link($database,$item_id).", 	250, 	createCustomHTMLContent('".$title."'),		null, 		null,		null],	
		// 	[250, 			 ".create_go_to_link('people','1322').", 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],		
//	}


	//spit out those that are issues
//	if($initial_results_array['database'][$k] == 'issues'){
		//	[235.67746285783,	'/dds/', 				null, 			'',							null, 		260,		createCustomHTMLContent('Issue3 title')],     
		
//	}

	//spit out the lines that match/join the two links together



//}

//then for the relationships
//we almost need to go back to the original query at the top of this page and run that again

	//extract the datapoints
	//and print out the apppropriate rows
	
	/*
 	[250, 			'/dds/', 				null, 			'',							250, 		null,		null], 	   
  	[235.67746285783,	'/dds/', 				null, 			'',							260, 		null,		null],     
 	[null, 			'/dds/',				null, 			'',							null, 		null,		null], 
 	*/



		

		
?>        
        
        
    <script name="primary_map_engine_script" type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable

           ([
           
           
           ['X', 	{ role: 'link' },'nodes',{type:'string', role:'tooltip','p': {'html': true}},'','',{type:'string', role:'tooltip','p': {'html': true}}],
           
           
           
           
<?php

//now we just echo the string that we have built up earlier and we're done - boom 
//echo $string_to_echo;
?>   
       
<?php     //non-issue nodes	
?>
 	[250, 			<?php create_go_to_link('people','1322')  ?>, 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],
	[264.51531373598, 	<?php create_go_to_link('people','1322')  ?>, 	308.21774357656, 	createCustomHTMLContent('Staffing issues'),		null, 		null,		null],
	[206.83961197968, 	<?php create_go_to_link('people','1322')  ?>, 	291.67950222754, 	createCustomHTMLContent('Development concern'),		null, 		null,		null],
	[192.3242982437, 	<?php create_go_to_link('people','1322')  ?>, 	233.46175865098, 	createCustomHTMLContent('Financial management'),	null, 		null,		null],
	    
       
       
<?php    //issues		
?>
 	[235.67746285783,	'/dds/', 				null, 			'',							null, 		260,		createCustomHTMLContent('Issue3 title')],     
 
       
<?php     
     //lines that hold issues -->
     //run from point to point
     //soonce the points are known we can just collect them up   
?>
 	[250, 			'/dds/', 				null, 			'',							250, 		null,		null], 	   
  	[235.67746285783,	'/dds/', 				null, 			'',							260, 		null,		null],     
 	[null, 			'/dds/',				null, 			'',							null, 		null,		null],  
 	      
 	[264.51531373598, 	'/dds/', 				null, 			'',							308.21774357656,null,		null],
	[206.83961197968, 	'/dds/', 				null, 			'',							291.67950222754,null,		null],      
	[null, 			'/dds/', 				null, 			'',							null, 		null,		null],  
	
	
 	[192.3242982437, 	'/dds/', 				null, 			'',							233.46175865098,null,		null],
	[264.51531373598, 	'/dds/', 				null, 			'',							308.21774357656,null,		null]
 	
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
	                2: { pointShape: 'circle', pointSize:10, lineWidth: 0}
                       
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