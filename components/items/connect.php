<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//the source code that's really relevant here is:
///components/layouts/items_with_sidebars/related_items_display.php

/*
var_dump($_GET);
echo "<br>";
var_dump($_POST);
//exit();
echo "<br>";
*/

//if = new add new
if(substr($_POST['link_node_selection'], 0, 3) == 'new'){
 	$_GET['adding_new'] = substr($_POST['link_node_selection'], 4);
	header("Location: add_new.php?adding_new=".$_GET['adding_new']);
	exit();
}
else{
	//item_a is collected from the form
	$position_of_first_equals 	= strpos($_POST['link_node_selection'] , '=');
	$position_of_first_and 		= strpos($_POST['link_node_selection'] , '&');
	$item_a_database		= substr($_POST['link_node_selection'] , $position_of_first_equals +1, $position_of_first_and - $position_of_first_equals - 1); 
	"database = ".$item_a_database."<br>";

	$position_of_second_equals 	= strpos($_POST['link_node_selection'] , '=', $position_of_first_equals + 1);
	$position_of_second_and 	= strpos($_POST['link_node_selection'] , '&', $position_of_first_and + 1);
	
	$item_a_secondary_folder	= substr($_POST['link_node_selection'] , $position_of_second_equals +1, $position_of_second_and - $position_of_second_equals - 1); 
	"secondary_folder = ".$item_a_secondary_folder."<br>";

 	$position_of_LAST_equals = strrpos($_POST['link_node_selection'] , '='); //notice the strrpos element of all this
 	$item_a_id		= substr($_POST['link_node_selection'] , $position_of_LAST_equals +1 ); 
 	"item_id = ".$item_a_id."<br>";

	//item_b is collected from the current URL 
	$item_b_primary_folder 		= $_GET['primary_folder'];
	$item_b_secondary_folder 	= $_GET['secondary_folder'];
	$item_b_id 			= $_GET['item_id'];		
		


// now we need to fill a few gaps
	//gap 1 is the primary folder of item a which is as simple as finding the corresponding primary folder from the secondary folder within items_central_index
	$sql = "SELECT primary_folder FROM items_central_index 
		WHERE secondary_folder = '".$item_a_secondary_folder."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$item_a_primary_folder = $row['primary_folder'];
	
	
	//gap 2 is the database for item_b given the primary and secondary folder taken from the $_GET array
		//then we should have everything we need
	$sql = "SELECT found_in_database 
		FROM items_central_index 
		WHERE primary_folder = '".$item_b_primary_folder."'
		AND   secondary_folder = '".$item_b_secondary_folder."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$item_b_database = $row['found_in_database'];
					

//and finally we need to get out the titles from the items_all database
	//for this all we need is the database and the id to collec the right ID
	$sql = "SELECT title FROM ".$item_a_database."
		WHERE item_id = '".$item_a_id."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$item_a_title = $row['title'];

	//for this all we need is the database and the id to collec the right ID
	$sql = "SELECT title FROM ".$item_b_database."
		WHERE item_id = '".$item_b_id."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$item_b_title = $row['title'];
	
	
	
	
	$sql = "INSERT INTO item_relationships(	item_a_user_id, 
						item_a_database,						
						item_a_id, 
						item_a_primary_folder,
						item_a_secondary_folder,
						item_a_title,
						item_b_user_id,
						item_b_database,
						item_b_id,
						item_b_primary_folder,
						item_b_secondary_folder,
						item_b_title
						)
				VALUES	(	'".$_SESSION['viewing_client_id']."',
						'".$item_a_database."',
						'".$item_a_id."',
						'".$item_a_primary_folder."',
						'".$item_a_secondary_folder."',						
						'".$item_a_title."',
						'".$_SESSION['viewing_client_id']."',
						'".$item_b_database."',
						'".$item_b_id."',
						'".$item_b_primary_folder."',
						'".$item_b_secondary_folder."',
						'".$item_b_title."'
				)
		";

	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	mysqli_query($conn, $sql);
	


	//and the other way around just for kicks	
	$sql = "INSERT INTO item_relationships(	item_a_user_id, 
						item_a_database,						
						item_a_id, 
						item_a_primary_folder,
						item_a_secondary_folder,
						item_a_title,
						item_b_user_id,
						item_b_database,
						item_b_id,
						item_b_primary_folder,
						item_b_secondary_folder,
						item_b_title
						)
				VALUES	(	'".$_SESSION['viewing_client_id']."',
						'".$item_b_database."',
						'".$item_b_id."',
						'".$item_b_primary_folder."',
						'".$item_b_secondary_folder."',						
						'".$item_b_title."',
						'".$_SESSION['viewing_client_id']."',
						'".$item_a_database."',
						'".$item_a_id."',
						'".$item_a_primary_folder."',
						'".$item_a_secondary_folder."',
						'".$item_a_title."'
				)
		";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	mysqli_query($conn, $sql);	
	
	
		
	//create alert
	//send email
	//add to discussion for both items
//	$notification_type = 'new relationship';
//	require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
		
	header("Location: ".$_SESSION['this_page']);
}	

?>