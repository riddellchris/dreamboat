<?php
if(!isset($_SESSION)){session_start();}

//var_dump($_SESSION);exit();
if(	$_SESSION['current_map_display'] == 'relationship_centric' OR 
	$_SESSION['current_map_display'] == 'central_issues' 
	){
	//get out position locations//display appropriately
	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/coordinates/central_issues_layout.php";
	
	//get out
	$numbers_of_relationships = array_unique($points[number_of_relationships_to_display]);
	$numbers_of_relationships = array_values($numbers_of_relationships);

	
	rsort($numbers_of_relationships); // this just does it - we don't need to make it $x = rsort($x); if that makes sense


	//if central issues then here we pull out the central issues and display them in the inner most ring so that we can see them most clearly
	//this is a task for tomorrow's brin power


//	echo '<pre>' , var_dump($numbers_of_relationships) , '</pre>';




	//if relationship_central
	for($i = 0; $i <= count($numbers_of_relationships) ; $i++){
		for($key = 0; $key <= count($points['database']) -1; $key ++){
					
			if($points[number_of_relationships_linked_to_this_array][$key] == $numbers_of_relationships[$i]){
				//then we store the data appropriately too.	
				$ordered_results_array['database'][$key]						= $points['database'][$key]; 
				$ordered_results_array['id'][$key]						= $points['id'][$key]; 
				$ordered_results_array['primary_folder'][$key]					= $points['primary_folder'][$key]; 
				$ordered_results_array['secondary_folder'][$key]					= $points['secondary_folder'][$key]; 
				$ordered_results_array['title'][$key]						= $points['title'][$key]; 
				$ordered_results_array[number_of_relationships_to_display][$key]		= $points[number_of_relationships_to_display][$key]; 
				//at the same time we add in the points to display them at as well.
		
				$ordered_results_array[x_coordinate][$key]					= $coordinates[x][$key];			
				$ordered_results_array[y_coordinate][$key]					= $coordinates[y][$key];					
			}
		}
	}
	
}


$points = $ordered_results_array;

//echo '<pre>' , var_dump($points) , '</pre>';
//exit();
//CR 21.02.15
//a start on the fractal/ layout algorithm it will become clearer over the coming days and weeks no doubt.
//potentially here there is something about cleaning up the system to pull in towards the center
//if no relationships to any points with a higher number of relationships than you simply minimise the distance you are from 250,250 using pythag
//if you are related to points that are higher than you should indeed try and find any free points (on the grid?) that put you as close to the point you are related to that has the highest number of points
//if that you have a higher number of points than any of the points closes to that point then you can kick them out of the way.

//there needs to be something recursive here to separate left to right / in a radial perspective as well so there aren't really long straglers going all over the shop where possible too!
//anyway 