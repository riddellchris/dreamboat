<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


//first find the mirrored relationship so we can change both at the same time
$sql = "SELECT * FROM item_relationships
	WHERE item_a_user_id 		= '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND relationship_id 	= '".$_GET['relationship_id']."'";
//echo $sql;//exit();
$result = mysqli_query($conn, $sql);
$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);

//var_dump($row);
//echo "<br><br><br><br>";

$sql = "SELECT relationship_id FROM item_relationships
	WHERE 
	    item_b_user_id 		= '".$row['item_a_user_id']."'
	AND item_b_database 		= '".$row['item_a_database']."'
	AND item_b_secondary_folder 	= '".$row['item_a_secondary_folder']."'
	AND item_b_primary_folder 	= '".$row['item_a_primary_folder']."'
	AND item_b_id 			= '".$row['item_a_id']."'
	AND item_b_title 		= '".$row['item_a_title']."'
	
	AND item_a_user_id 		= '".$row['item_b_user_id']."'
	AND item_a_database 		= '".$row['item_b_database']."'
	AND item_a_secondary_folder 	= '".$row['item_b_secondary_folder']."'
	AND item_a_primary_folder 	= '".$row['item_b_primary_folder']."'
	AND item_a_id 			= '".$row['item_b_id']."'
	AND item_a_title 		= '".$row['item_b_title']."'";
	
//echo $sql;exit();
$result = mysqli_query($conn, $sql);
$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);

/*
echo $_GET['relationship_id'];
echo "<br>";
echo $row['relationship_id'];
exit();
*/

$relationship_id[1] = $_GET['relationship_id'];
$relationship_id[2] = $row['relationship_id'];

///this sql isn't perfect as it just matches the item id's and the user_id... there is a tiny chance that some doubling up occurs but it's highly unlikely so the additional complexity as at the 15.4.20 seems way too much to be honest
$sql = "UPDATE item_relationships 
	SET total_relationship_status = 'dead'
	WHERE relationship_id = '".$relationship_id[1]."'";

mysqli_query($conn, $sql);
	
	
$sql = "UPDATE item_relationships 
	SET total_relationship_status = 'dead'
	WHERE relationship_id = '".$relationship_id[2]."'";
//		echo $sql; exit();
mysqli_query($conn, $sql);






header("Location: ".$_SESSION['this_page']);
exit();

	
?>