<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/set.php";

//so to build the relationships array
$sql = "SELECT * FROM `item_relationships` 
	WHERE 	item_a_user_id = '".$_SESSION['viewing_client_id']."' 
	AND 	item_b_user_id = '".$_SESSION['viewing_client_id']."' 

	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 
	
	AND total_relationship_status = 'active'

	AND (	";
	
		for($i = 0; $i < count($nodes['database']); $i++){
			$sql .= " (item_a_database = '".$nodes['database'][$i]."' AND item_a_id = '".$nodes['id'][$i]."') ";
			if($i <> (count($nodes['database']) - 1)){$sql .= " OR ";}		
		}
		
	$sql .= "	
		
		)
	AND (	";
	
	for($i = 0; $i < count($nodes['database']); $i++){
		$sql .= " (item_b_database = '".$nodes['database'][$i]."' AND item_b_id = '".$nodes['id'][$i]."') ";
		if($i <> (count($nodes['database']) - 1)){$sql .= " OR ";}		
	}	

		
	$sql .= ")";


$diagnostics['relationship_search_sql']    = $sql;

	$debugging = 'off';
	if($debugging == 'on'){	
        echo $sql;
        exit();	
    }
$result = mysqli_query($conn, $sql);
$alternator = 'a';
$number_of_active_relationships = mysqli_num_rows($result) / 2;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	$edges_key = 0;
	//build the count of relationships per item based on appearances as item_a
	//just go through the points array and add one or if unset store as 1
	for($i = 0; $i < count($nodes['database']); $i ++){
		if(	$nodes['database'][$i] 	== $row['item_a_database'] &&
			$nodes['id'][$i] 		== $row['item_a_id']){
	
				if(!isset($nodes['number_of_relationships_to_display'][$i])){
					$nodes['number_of_relationships_to_display'][$i] = 1;
					}
				else{
					$nodes['number_of_relationships_to_display'][$i] ++;
					}
			}
	}

	//but first let's just get rid of the duplication here
	if($alternator == 'a'){
		

	$key = count($edges['item_a_database']);

		//then in here we can just build the relationships array
		//most importantly by doing it this way we can test simply via the sql query to see if we are getting the right inputs & outputs for now
		$edges['item_a_database'][$key] 	= $row['item_a_database'];
		$edges['item_a_id'][$key] 			= $row['item_a_id'];
		$edges['item_b_database'][$key] 	= $row['item_b_database'];
		$edges['item_b_id'][$key] 			= $row['item_b_id'];
		$edges['relationship_id'][$key] 	= $row['relationship_id'];       
	//exit();	
		$alternator = 'b';
	}
	if($alternator == 'b'){
		$alternator = 'a';
	}	
}



$debugging = 'off';
if($debugging == 'on'){	
    echo '<pre>' , var_dump($nodes) , '</pre>';
    echo "<BR>";
    echo $sql;
    echo "<BR>";
    echo '<pre>' , var_dump($edges) , '</pre>';      
    exit();	
}
	//10:56 03.06.21
	//WHat's interesting out of this debugging is that there are duplicated "back and forth" relationships still stored in the relationships display
	//Frankly - this makes no sense to keep and only makes it messy at this point.
	//Even in the future when directional (probably monetary flows) are used this seems like a messy thing to keep at this point as that should occur down where the data is 
	//For that reason we make the array $edges to display
		//probably should & could be just editing relationships but unsure how that fully impacts everything down the page/process right now
	//so:


//for each element of relationships item_a_database
$count = count($edges['item_a_database']);
//echo $count;
//exit();


//now we simply find the duplicated ones
//I think the simplest way to do this is just cut out every second one actually.
$counter = 0;
for($i = 0; $i < count($edges['item_a_database']); $i ++){
	if($i % 2 == 0){
		$key = $i / 2;
		$edges_to_check_for_display['item_a_database'][$key] 	= $edges['item_a_database'][$i];
		$edges_to_check_for_display['item_a_id'][$key] 			= $edges['item_a_id'][$i];
		$edges_to_check_for_display['item_b_database'][$key] 	= $edges['item_b_database'][$i];
		$edges_to_check_for_display['item_b_id'][$key] 			= $edges['item_b_id'][$i];
		$edges_to_check_for_display['relationship_id'][$key] 	= $edges['relationship_id'][$i];        
		$counter ++;
	}
}

if($counter != 0){
	$diagnostics['edges_to_check_for_display'] = $edges_to_check_for_display;

	//echo '<pre>' , var_dump($edges_to_check_for_display) , '</pre>'; exit();	

	//as there are no all_items_id data here
	//the crudest way to achieve this is:
	//see what nodes are within the edges array
	//get out the all_items_id_for_each
	//then compare with the positioned array

	//for each edge - then we can test both

	//the other way to do this is to transition everything to all_items_id
	//i'm not entirely sure which is the fastest or best way to do this right now

	//or the simplest way to do this is just filter 
	//take the positioned ids get the 

	//create a simple system here 
	//$positioned_nodes['database'][$i]     
	//$positioned_nodes['id'][$i]      

	//echo "<br><br><br><br><br><br><br><br><br>";

	$edges_to_finally_display = array();
	//exit();

	$number_of_edges_to_display = 0;
	//fuck it at this point i'm going to be ugly about it.
	for($i = 0; $i < count($edges_to_check_for_display['item_a_database']); $i ++){
		$a_positioned = 'no';
		$b_positioned = 'no';

	//	echo "A check<br>";
		if(isset($positioned_nodes['database'])){
			for($j = 0; $j < count($positioned_nodes['database']); $j ++){

				//echo $edges_to_check_for_display['item_a_database'][$i]." ".$edges_to_check_for_display['item_a_id][$i];		echo "<br>";
				//echo $positioned_nodes['database'][$j]." ".$positioned_nodes['id'][$j];		echo "<br>";
				if($edges_to_check_for_display['item_a_database'][$i] == $positioned_nodes['database'][$j] AND $edges_to_check_for_display['item_a_id'][$i] == $positioned_nodes['id'][$j]){$a_positioned = 'yes'; $a_node_key = $j;}
				//echo $a_positioned."<br>";
			}
		
		//	echo "B check<br>";

			for($j = 0; $j < count($positioned_nodes['database']); $j ++){
		//		echo $edges_to_check_for_display['item_b_database'][$i]." ".$edges_to_check_for_display['item_b_id'][$i];		echo "<br>";
		//		echo $positioned_nodes['database'][$j]." ".$positioned_nodes['id'][$j];		echo "<br>";
				if($edges_to_check_for_display['item_b_database'][$i] == $positioned_nodes['database'][$j] AND $edges_to_check_for_display['item_b_id'][$i] == $positioned_nodes['id'][$j]){$b_positioned = 'yes'; $b_node_key = $j;}
				
		//	echo $b_positioned."<br>";
			}

			if($a_positioned == 'yes' && $b_positioned == 'yes'){
				$edges_to_finally_display['item_a_database'][$number_of_edges_to_display] 	    = $edges_to_check_for_display['item_a_database'][$i];
				$edges_to_finally_display['item_a_id'][$number_of_edges_to_display] 		 	= $edges_to_check_for_display['item_a_id'][$i];
				$edges_to_finally_display['item_a_all_items_id'][$number_of_edges_to_display] 	= $positioned_nodes['all_items_id'][$a_node_key];
				$edges_to_finally_display['item_b_database'][$number_of_edges_to_display] 	    = $edges_to_check_for_display['item_b_database'][$i];
				$edges_to_finally_display['item_b_id'][$number_of_edges_to_display] 		    = $edges_to_check_for_display['item_b_id'][$i];
				$edges_to_finally_display['item_b_all_items_id'][$number_of_edges_to_display]   = $positioned_nodes['all_items_id'][$b_node_key];
				$edges_to_finally_display['relationship_id'][$number_of_edges_to_display] 	    = $edges_to_check_for_display['relationship_id'][$i];          
				
				$number_of_edges_to_display ++;
			}
		}
	}

	//echo '<pre>' , var_dump($edges_to_finally_display) , '</pre>';exit();
	$diagnostics['edges_to_finally_display'] = $edges_to_finally_display;





	$debugging = 'off';
	if($debugging == 'on'){	
		echo '<pre>' , var_dump($nodes) , '</pre>';
		echo "<BR>";
		echo $sql;
		echo "<BR>";
		echo '<pre>' , var_dump($edges) , '</pre>';     
		echo "<BR>";
		echo '<pre>' , var_dump($edges_to_display) , '</pre>';     	

		exit();	
	}





	///before we get into the next big for loop let's just pull out the critical edge data
	//this means we can then calculate the high and low number for thickness and color
	//
	//go through all edges to get out the relationship id's 
	//then we update 
		//a_to_b_thickness_score
		//a_to_b_color_score
	//in the edges array
	//if nothing then we set at unset and just leave as grey and 5px thickness

		//before we do this we need to make sure that each relationship_id has an initial entry
		for($i = 0; $i < count($edges['relationship_id']); $i++){
			//check if there is somethiing there or not
			$sql = "SELECT * FROM edge_data 
					WHERE user_id = '".$_SESSION['viewing_client_id']."'
					AND relationship_id = '".$edges['relationship_id'][$i]."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) == 0){
				$sql = "INSERT INTO edge_data (user_id, relationship_id )
						VALUES ('".$_SESSION['viewing_client_id']."', '".$edges['relationship_id'][$i]."') ";

	echo $sql."<br>";

						mysqli_query($conn, $sql);
			}


			//if not then add one


		}



	$sql = "SELECT * FROM edge_data 
			WHERE user_id = '".$_SESSION['viewing_client_id']."'
			AND		latest_data_for_this_edge = 'yes'
			AND ( ";
	//then we can also put the title in
	if(isset($edges_to_finally_display['item_a_database'])){
		for($i = 0; $i < count($edges_to_finally_display['item_a_database']); $i ++){
			$sql .= "  relationship_id = '".$edges_to_finally_display['relationship_id'][$i]."' ";
			if( $i != (count($edges_to_finally_display['item_a_database']) - 1)){$sql .= " OR ";}

		}
	}
	$sql .= " ) ";

	//echo $sql; exit();
	$count = 0;
	$result = mysqli_query($conn, $sql);

		//FIX ME:::: DIRTY VERY DIRTY BUT users time and financial flow don't fit here
		$hits_the_issue = 'no';
		if($_SESSION['map_edge_thickness'] 	== 'users_time'	){$thickness_key 	= 'time';			$hits_the_issue = 'yes';}
		if($_SESSION['map_edge_thickness'] 	== 'financial'	){$thickness_key 	= 'financial_flow';	$hits_the_issue = 'yes';}	
		if($hits_the_issue == 'no'){	$thickness_key  = $_SESSION['map_edge_thickness'];}	else{	$hits_the_issue = 'no';}

		if($_SESSION['map_edge_color'] 	== 'users_time'	){$color_key 		= 'time';			$hits_the_issue = 'yes';}
		if($_SESSION['map_edge_color'] 	== 'financial'	){$color_key 		= 'financial_flow';	$hits_the_issue = 'yes';}	
		if($hits_the_issue == 'no'){	$color_key  = $_SESSION['map_edge_color'];}	else{	$hits_the_issue = 'no';}


	if(mysqli_num_rows($result) != 0){
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			if($thickness_key 	!= 'non_descript'){	$thickness_score[$count] 	= $row[$thickness_key];	}else{	$thickness_score[$count] 	= '0';	}
			if($color_key 		!= 'non_descript'){	$color_score[$count] 		= $row[$color_key];		}else{	$color_score[$count] 		= '0';	}
			$count ++;
		}



		//get out max and min of each/// then can use in the calculations within the enxt step
		if(count($thickness_score) 		!= 0){ 	$thickness_max = max($thickness_score); 	$thickness_min = min($thickness_score);}		
										else{ 	$thickness_max = $thickness_score[0];		$thickness_min = $thickness_score[0];}						
		$thickness_gap  	= $thickness_max - $thickness_min;
		//echo "THICKNESS GAP: ".$thickness_gap."<BR>";

		if(count($color_score) 		!= 0){ 	$color_max = max($color_score); 	$color_min = min($color_score);}		
									else{ 	$color_max = $color_score[0];		$color_min = $color_score[0];}						
		$color_gap  	= $color_max - $color_min;

	}
}
/*
echo "COLOR max: ".$color_max."<BR>";
echo "COLOR min: ".$color_min."<BR>";
echo "COLOR GAP: ".$color_gap."<BR>";
*/


//echo '<pre>' , var_dump($color_score) , '</pre>';exit();
//so now we just have to build it
//we have the x and y positions for each so all we need is to pull out the position of each node included in a link
//essentially finally build the $edges array
//then we can finally do / use the calculations to make this stick - jesus  
//echo '<pre>' , var_dump($edges) , '</pre>';     exit();	

//because at this point $edges hasn't been "halved"
//let's just unset that for now
unset($edges);

//now we can start by building it again from the start
if(isset($edges_to_finally_display['item_a_database'])){
	for($i = 0; $i < count($edges_to_finally_display['item_a_database']); $i ++){
		$edges['item_a_database'][$i]       = $edges_to_finally_display['item_a_database'][$i];
		$edges['item_a_id'][$i] 		    = $edges_to_finally_display['item_a_id'][$i];
		$edges['item_a_all_items_id'][$i] 	= $edges_to_finally_display['item_a_all_items_id'][$i];
		$edges['item_b_database'][$i]       = $edges_to_finally_display['item_b_database'][$i];
		$edges['item_b_id'][$i] 		    = $edges_to_finally_display['item_b_id'][$i];
		$edges['item_b_all_items_id'][$i] 	= $edges_to_finally_display['item_b_all_items_id'][$i];
		$edges['relationship_id'][$i] 	    = $edges_to_finally_display['relationship_id'][$i];   

		//now we need to get out the x and y positions of each node to make
		$edges['item_a_x_pos'][$i] = $nodes['x_pos'][array_search($edges['item_a_all_items_id'][$i],   $nodes['items_all_id'])];
		$edges['item_a_y_pos'][$i] = $nodes['y_pos'][array_search($edges['item_a_all_items_id'][$i],   $nodes['items_all_id'])];
		$edges['item_b_x_pos'][$i] = $nodes['x_pos'][array_search($edges['item_b_all_items_id'][$i],   $nodes['items_all_id'])];
		$edges['item_b_y_pos'][$i] = $nodes['y_pos'][array_search($edges['item_b_all_items_id'][$i],   $nodes['items_all_id'])];


		//just be lazy here and pull it out again using SQL 
		//then run the calc adjust the links and done
		$sql = "SELECT * FROM edge_data 
				WHERE user_id = '".$_SESSION['user_id']."' 
				AND relationship_id = '".$edges['relationship_id'][$i]."'
				AND latest_data_for_this_edge = 'yes'
				LIMIT 1
				";
				//echo $sql;// exit();
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

			$hits_the_issue = 'no';			
			if($_SESSION['map_edge_thickness'] 	== 'users_time'	){$thickness_column 	= 'time';			$hits_the_issue = 'yes';}
			if($_SESSION['map_edge_thickness'] 	== 'financial'	){$thickness_column 	= 'financial_flow';	$hits_the_issue = 'yes';}	
			if($hits_the_issue == 'no'){	$thickness_column  = $_SESSION['map_edge_thickness'];}	else{	$hits_the_issue = 'no';}

			if($_SESSION['map_edge_color'] 	== 'users_time'	){$color_column 		= 'time';			$hits_the_issue = 'yes';}
			if($_SESSION['map_edge_color'] 	== 'financial'	){$color_column 		= 'financial_flow';	$hits_the_issue = 'yes';}
			if($hits_the_issue == 'no'){	$color_column  = $_SESSION['map_edge_color'];}	else{	$hits_the_issue = 'no';}

			if($_SESSION['map_edge_thickness'] 	!= 'non_descript'
				&& $thickness_gap != 0){	$edges['a_to_b_thickness_score'][$i] 	= $row[$thickness_column];	
											$thickness_multiplication_factor 	= ( $edges['a_to_b_thickness_score'][$i] - $thickness_min ) / $thickness_gap ;
											}
			else	{						$edges['a_to_b_thickness_score'][$i] = 0;
											$thickness_multiplication_factor = 0;}
			if($_SESSION['map_edge_color'] 	!= 'non_descript'
				&& $color_gap != 0){	$edges['a_to_b_color_score'][$i] 		= $row[$color_column];		
										$color_multiplication_factor 		= ( $edges['a_to_b_color_score'][$i] 		- $color_min		) / $color_gap ;
										}
			else	{					$edges['a_to_b_color_score'][$i] = 0;
										$color_multiplication_factor = 0;}
		}
		//if either of them is nondescript then we just leave at the default color (grey) & default thickness
			//THIS ISN'T POSSIBLE
			//if other edges do have data but this one does not then we also just leave as grey / default thickness

			//so first let's do opacity
				


				//$opacity_of_this_edge = 1;//this should be % from gap to end
				$opacity_of_this_edge = 0.2 + 0.8 * $color_multiplication_factor;
				//gap between high and low * 0.8
				//		$opacity_of_this_edge = 0.2 + this * total;
						
				//other than that we are actually good to go
			
				//set a range of colors or even just opacities to apply for a given RBG (this is the way to go to start with)
				//use this such that we can easily adjust proportionally with numbers
			
				//then for thickness we just need to set a maximum and minum thickness
				//1px ---- 100px max
				//that's how it's done
				//$edges['a_to_b_thickness_in_pts'][$i] = 5;    //for now
				//$edges['a_to_b_thickness_in_pts'][$i] = 1 + 99 * $thickness_multiplication_factor;    //for now
				$edges['a_to_b_thickness_in_pts'][$i] = 5 + 45 * $thickness_multiplication_factor;    //for now


		if($_SESSION['map_edge_color'] == 'non_descript'){							$edge_color = "rgba(206,206,206,$opacity_of_this_edge)";	$hover_color = "rgba(166,166,166,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'financial'){							$edge_color = "rgba(77,77,77,$opacity_of_this_edge)";		$hover_color = "rgba(26,26,26,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'users_time'){							$edge_color = "rgba(255,192,203,$opacity_of_this_edge)";	$hover_color = "rgba(227,136,151,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'productivity'){							$edge_color = "rgba(115,102,255,$opacity_of_this_edge)";	$hover_color = "rgba(59,47,194,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'productivity_improvement_potential'){	$edge_color = "rgba(115,102,255,$opacity_of_this_edge)";	$hover_color = "rgba(59,47,194,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'communication'){						$edge_color = "rgba(206,206,206,$opacity_of_this_edge)";	$hover_color = "rgba(166,166,166,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'trust'){								$edge_color = "rgba(206,206,206,$opacity_of_this_edge)";	$hover_color = "rgba(166,166,166,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'quality'){								$edge_color = "rgba(206,206,206,$opacity_of_this_edge)";	$hover_color = "rgba(166,166,166,$opacity_of_this_edge)";	}		
		if($_SESSION['map_edge_color'] == 'kpi_1'){								$edge_color = "rgba(255,0,0,$opacity_of_this_edge)";		$hover_color = "rgba(173,0,0,$opacity_of_this_edge)";		}
		if($_SESSION['map_edge_color'] == 'kpi_2'){								$edge_color = "rgba(0,0,255,$opacity_of_this_edge)";		$hover_color = "rgba(0,9,179,$opacity_of_this_edge)";		}
		if($_SESSION['map_edge_color'] == 'kpi_3'){								$edge_color = "rgba(255,165,0,$opacity_of_this_edge)";	$hover_color = "rgba(222,144,0,$opacity_of_this_edge)";	}
		if($_SESSION['map_edge_color'] == 'kpi_4'){								$edge_color = "rgba(0,255,0,$opacity_of_this_edge)";		$hover_color = "rgba(0,194,0,$opacity_of_this_edge)";		}


		/* JUST FOR REVERENCE OF THE ORIGINAL HEX CODES
		if($_SESSION['map_edge_color'] == 'non_descript'){							$edge_color = "#cecece";	$hover_color = "#a6a6a6";}
		if($_SESSION['map_edge_color'] == 'financial'){							$edge_color = "#4d4d4d";	$hover_color = "#1a1a1a";}
		if($_SESSION['map_edge_color'] == 'users_time'){							$edge_color = "#ffc0cb";	$hover_color = "#e38897";}
		if($_SESSION['map_edge_color'] == 'productivity'){							$edge_color = "#7366ff";	$hover_color = "#3b2fc2";}
		if($_SESSION['map_edge_color'] == 'productivity_improvement_potential'){	$edge_color = "#7366ff";	$hover_color = "#3b2fc2";}
		if($_SESSION['map_edge_color'] == 'communication'){						$edge_color = "#cecece";	$hover_color = "#a6a6a6";}
		if($_SESSION['map_edge_color'] == 'trust'){								$edge_color = "#cecece";	$hover_color = "#a6a6a6";}
		if($_SESSION['map_edge_color'] == 'kpi_1'){								$edge_color = "red";		$hover_color = "#ad0000";}
		if($_SESSION['map_edge_color'] == 'kpi_2'){								$edge_color = "blue";		$hover_color = "#0009b3";}
		if($_SESSION['map_edge_color'] == 'kpi_3'){								$edge_color = "orange";		$hover_color = "#de9000";}
		if($_SESSION['map_edge_color'] == 'kpi_4'){								$edge_color = "green";		$hover_color = "#00c200";}
		*/
		
		
		$edges['still_color'][$i]             = $edge_color;
		$edges['hover_color'][$i]             = $hover_color;   


		$edges['x_diff'][$i]                  = $edges['item_a_x_pos'][$i] - $edges['item_b_x_pos'][$i];
		$edges['y_diff'][$i]                  = $edges['item_a_y_pos'][$i] - $edges['item_b_y_pos'][$i];    
		$edges['line_length'][$i]             = sqrt( pow($edges['x_diff'][$i], 2) + pow($edges['y_diff'][$i], 2));


		if($edges['item_a_x_pos'][$i] < $edges['item_b_x_pos'][$i]){$edges['smaller_x'][$i] = $edges['item_a_x_pos'][$i];}else{$edges['smaller_x'][$i] = $edges['item_b_x_pos'][$i];}
		if($edges['item_a_y_pos'][$i] < $edges['item_b_y_pos'][$i]){$edges['smaller_y'][$i] = $edges['item_a_y_pos'][$i];}else{$edges['smaller_y'][$i] = $edges['item_b_y_pos'][$i];}

		$edges['midpoint_x'][$i]  =  $edges['smaller_x'][$i] + abs($edges['x_diff'][$i]) * 0.5; //smaller of x or y + half the difference
		$edges['midpoint_y'][$i]  =  $edges['smaller_y'][$i] + abs($edges['y_diff'][$i]) * 0.5; //smaller of x or y + half the difference

		//$edges['rotation'][$i]                = atan($edges['y_diff][$i], $edges['x_diff][$i]);
		//$edges['rotation'][$i]                = rad2deg(atan2(1600, 500));
		//$edges['rotation'][$i]                = rad2deg(atan2($edges['y_diff'][$i], $edges['x_diff'][$i]));   //done much later now



	
	}

	$diagnostics['edges_with_positions']    = $edges;
}
