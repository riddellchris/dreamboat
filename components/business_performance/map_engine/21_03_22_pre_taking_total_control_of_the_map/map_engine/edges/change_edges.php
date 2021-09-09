<?php
if(!isset($_SESSION)){session_start();}

/*
//these are the $_GET varibles that start this page
$_GET['node_a_database'];
$_GET['node_a_id'];
$_GET['node_b_database'];
$_GET['node_b_id'];
*/




if(	($_GET['node_a_database'] 	== $_GET['node_b_database'])	&&
	($_GET['node_a_id'] 		== $_GET['node_b_id'])			){	$point_data_not_edge_data = 'yes';	}
else{											$point_data_not_edge_data = 'no';	}
	
		
		
		
		
if(	$point_data_not_edge_data == 'no'){

	//then we need to pull out the existing item_id
	
	//then go there

	//then we can just go straight to the new page
	//we'll tackle the "relationship status" on the edges page now
	///map/edges/index.php?node_a_database=".$database_search[$_GET['primary_folder']][$_GET['secondary_folder']]."&node_a_id=".$_GET['item_id']."&node_b_database=".$database_search[$row['item_a_primary_folder']][$row['item_a_secondary_folder']]."&node_b_id=".$row['item_a_id']."'><i class='fas fa-project-diagram'></i></a>";
}

else{
$_SERVER['QUERY_STRING'];
//just go back to the original string and pass and error

}

