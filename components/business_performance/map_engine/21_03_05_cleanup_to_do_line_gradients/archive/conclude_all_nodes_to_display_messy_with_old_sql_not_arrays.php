<?php
if(!isset($_SESSION)){session_start();}




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
