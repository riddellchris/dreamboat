<?php
if(!isset($_SESSION)){session_start();}



if($_GET['type'] == 'link'){$go_to_secondary_folder = 'links';}
if($_GET['type'] == 'edge'){$go_to_secondary_folder = 'edges';}
//first actually see what has come through
//echo "POST<BR>";
//echo '<pre>' , var_dump($_POST) , '</pre>';
//exit();
//echo "<br>";


function update_link_selection($node_number, $extracted_to_build_upon){
	if(isset($_POST['link_node_selection_'.$node_number]) && $_POST['link_node_selection_'.$node_number] != 'unselectable'){
		//split and submit them into the table 'links' selected therefore avoiding the use of clumsy $_SESSION variables
		//db=people&item_id=1246
		//get the people out from between the first = sign and the & sign
		//so let's find the position of each of the = signs
		$pos_of_first_equals 	= strpos($_POST['link_node_selection_'.$node_number] , '=' , 0 ); 
		$pos_of_second_equals 	= strpos($_POST['link_node_selection_'.$node_number] , '=' , $pos_of_first_equals + 1);		
		$pos_of_and_sign 	= strpos($_POST['link_node_selection_'.$node_number] , '&' , 0 );	

/*
		echo $pos_of_first_equals;					
		echo "<br>";
		echo $pos_of_second_equals;		
		echo "<br>";	
		echo $pos_of_and_sign;			
		echo "<br>";
*/
		
		$db 		= substr($_POST['link_node_selection_'.$node_number], $pos_of_first_equals + 1, $pos_of_and_sign - 1 - $pos_of_first_equals);
		$item_number 	= substr($_POST['link_node_selection_'.$node_number], $pos_of_second_equals + 1);
		
/*				
		echo "db = ".$db;
		echo "<br>";	
		echo "item_number = ".$item_number;
*/	
	
		$extracted_to_build_upon[$node_number]['database'] = $db;
		$extracted_to_build_upon[$node_number][item_number] = $item_number;
		$extracted_to_build_upon[$node_number][unselectable] = 'no';
	}
	else{	
		$extracted_to_build_upon[$node_number][unselectable] = 'yes';
	}
		return $extracted_to_build_upon;		
		//exit();
}
	
//echo "extracted<BR>";
	//we also do this also for 	
	//link_node_selection_2
	//link_node_selection_3	
	//link_node_selection_4
	$extracted = array();
	$extracted = update_link_selection(1, $extracted);
	$extracted = update_link_selection(2, $extracted);	
	$extracted = update_link_selection(3, $extracted);
	$extracted = update_link_selection(4, $extracted);	
//echo '<pre>' , var_dump($extracted) , '</pre>';
//exit();	
	


	//then we can just collapse it all down to remove any gaps
	//if there is something here but not at 1 then we push them down 
	//if there is something here but not at 2 then we push them down 	
	//if there is something here but not at 2 then we push them down 		
	$condensed = array();
	//I think because of the 'conditional' appearance of the form we don't need to check any deeper than 1 level of unselectable
	//the only issue is just the "end case" of an unselectable and then something when showing either 2,3 or 4 nodes
	if($extracted[4][unselectable] == 'no' && $extracted[3][unselectable] == 'yes'){		
		$extracted[3]['database'] 	= $extracted[4]['database'];
		$extracted[3][item_number] 	= $extracted[4][item_number];	
	}
	if($extracted[3][unselectable] == 'no' && $extracted[2][unselectable] == 'yes'){		
		$extracted[2]['database'] 	= $extracted[3]['database'];
		$extracted[2][item_number] 	= $extracted[3][item_number];	
	}		
	if($extracted[2][unselectable] == 'no' && $extracted[1][unselectable] == 'yes'){		
		$extracted[1]['database'] 	= $extracted[2]['database'];
		$extracted[1][item_number] 	= $extracted[2][item_number];	
	}
	
//echo '<pre>' , var_dump($extracted) , '</pre>';
//exit();	
	
	$cols = array();
	$vals = array();
	array_push($cols, 'user_id', 'session_id');
	array_push($vals, $_SESSION['viewing_client_id'], $_SESSION['this_users_session_id']);	
		
	array_push($cols, 'link_1_unselectable');
	array_push($vals, $extracted[1][unselectable]);	
	if($extracted[1][unselectable] == 'no'){	
					//echo "hi";
					//exit();
							array_push($cols, 'link_1_database', 	  'link_1_item_id');
							array_push($vals, $extracted[1]['database'], $extracted[1][item_number]);	}
	array_push($cols, 'link_2_unselectable');
	array_push($vals, $extracted[2][unselectable]);	
	if($extracted[2][unselectable] == 'no'){	array_push($cols, 'link_2_database', 	  'link_2_item_id');
							array_push($vals, $extracted[2]['database'], $extracted[2][item_number]);	}
	array_push($cols, 'link_3_unselectable');
	array_push($vals, $extracted[3][unselectable]);	
	if($extracted[3][unselectable] == 'no'){	array_push($cols, 'link_3_database', 	  'link_3_item_id');
							array_push($vals, $extracted[3]['database'], $extracted[3][item_number]);	}
	array_push($cols, 'link_4_unselectable');
	array_push($vals, $extracted[4][unselectable]);	
	if($extracted[4][unselectable] == 'no'){	array_push($cols, 'link_4_database', 	  'link_4_item_id');
							array_push($vals, $extracted[4]['database'], $extracted[4][item_number]);	}
							
													
	//and finally submit them into links_selected_database
	//then we can add them back into 
		// -- this session id comes from ///account/security/login_register_login.php	
	require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/compile_insert_query_values.php";
	$sql = produce_insert_query('links_selected', print_column_list($cols), print_value_list($vals));
	
//	echo $sql;
//	exit();
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	mysqli_query($conn, $sql);
	
	
	
	
	
	
	
	

	$cols = array();
	$vals = array();
	array_push($cols, 'user_id', 'session_id');
	array_push($vals, $_SESSION['viewing_client_id'], $_SESSION['this_users_session_id']);	

	//once we have the collapsed list we can see if any links exist in the link collections database that match this system
	//if not then we add in
	//if it does then do nothing BUT update the link_id as this can be used for the tracking data
	$sql = "SELECT * FROM link_collections 
		WHERE user_id 	= '".$_SESSION['viewing_client_id']."' ";
		
	if($extracted[1][unselectable] == 'no'){	$sql .= " AND link_1_database 	= '".$extracted[1]['database']."' ";	
							$sql .= " AND link_1_id 	= '".$extracted[1][item_number]."' ";}
	if($extracted[2][unselectable] == 'no'){	$sql .= " AND link_2_database 	= '".$extracted[2]['database']."' ";	
							$sql .= " AND link_2_id 	= '".$extracted[2][item_number]."' ";}	
	if($extracted[3][unselectable] == 'no'){	$sql .= " AND link_3_database 	= '".$extracted[3]['database']."' ";	
							$sql .= " AND link_3_id 	= '".$extracted[3][item_number]."' ";}	
	if($extracted[4][unselectable] == 'no'){	$sql .= " AND link_4_database 	= '".$extracted[4]['database']."' ";	
							$sql .= " AND link_4_id 	= '".$extracted[4][item_number]."' ";}
//	echo $sql;
//	exit();
							
	$result = mysqli_query($conn, $sql);	
	//then if mysqli_num_rows != 1
	if(mysqli_num_rows($result) != 1){
		//insert it	
		$cols = array();
		$vals = array();
		array_push($cols, 'user_id');
		array_push($vals, $_SESSION['viewing_client_id']);		
			if($extracted[1][unselectable] == 'no'){	array_push($cols, 'link_1_database', 	  'link_1_item_id');
									array_push($vals, $extracted[1]['database'], $extracted[1][item_number]);	}	
			if($extracted[2][unselectable] == 'no'){	array_push($cols, 'link_2_database', 	  'link_2_item_id');
									array_push($vals, $extracted[2]['database'], $extracted[2][item_number]);	}	
			if($extracted[3][unselectable] == 'no'){	array_push($cols, 'link_3_database', 	  'link_3_item_id');
									array_push($vals, $extracted[3]['database'], $extracted[3][item_number]);	}
			if($extracted[4][unselectable] == 'no'){	array_push($cols, 'link_4_database', 	  'link_4_item_id');
									array_push($vals, $extracted[4]['database'], $extracted[4][item_number]);	}
									
		$sql = produce_insert_query('link_collections', print_column_list($cols), print_value_list($vals));
	//	echo $sql;
		mysqli_query($conn, $sql);
		//no real need to pull out last_insert_id because we can put that out on the page /map/links/ itself.
	}

header("Location: /map/edges/");
exit();









