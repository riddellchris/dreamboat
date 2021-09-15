<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

//very very basic security really
if($_GET['direction'] == 'up' OR
   $_GET['direction'] == 'down'){ 
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";
		

	$this_items_id = mysqli_real_escape_string($conn, $_GET['item_id']);
	
	$sql = "SELECT * FROM ".$database." WHERE user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND item_id = '".$this_items_id."'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$this_current_rank = $row['rank'];

	$sql = "						  	SELECT * FROM ".$database." 
								  	WHERE  user_id ='".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
	if($_GET['primary_folder'] == 'admin' ){	$sql .= " 	AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}
	if($_GET['primary_folder'] == 'wheelhouse'){	$sql .= " 	AND category 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}		 	
	if($_GET['primary_folder'] == 'improvements'){	$sql .= " 	AND mode 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' ";}
	$sql	.= "							AND status 	= 'active'
									AND deleted	= 'no'";


	
	if($_GET['direction'] == 'up'){			$sql .= "	AND rank 	<	'".$row['rank']."'	
									ORDER BY rank DESC LIMIT 1";}		
	if($_GET['direction'] == 'down'){		$sql .= "	AND rank 	>	'".$row['rank']."'
									ORDER BY rank ASC LIMIT 1";}
			
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$rank_to_go_to = $row['rank'];		
	
	$item_to_move = $row['item_id'];
	$sql = "UPDATE ".$database." SET rank = '".$this_current_rank."' WHERE item_id = '".$item_to_move."'";
	$result = mysqli_query($conn, $sql);
	
	$sql = "UPDATE ".$database." SET rank = '".$rank_to_go_to."' WHERE item_id = '".$this_items_id."'";
	$result = mysqli_query($conn, $sql);

}	
	 
header("Location: /".$_GET['primary_folder']."/");
exit();

?>