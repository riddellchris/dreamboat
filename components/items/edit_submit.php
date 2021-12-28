<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";

$title = mysqli_real_escape_string($conn, ucfirst($_POST['standard_input']));
		
$_GET['primary_folder'] 	= $_SESSION['editing_title_of_primary_folder'];
$_GET['secondary_folder']	= $_SESSION['editing_title_of_secondary_folder'];

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";

$sql = "UPDATE ".$database." SET title = '".$title."' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND item_id ='".$_SESSION['editing_title_of_item_id']."'";
//echo $sql; exit();
$result = mysqli_query($conn, $sql);

//21.01.21
//Now we must also update the item relationships titles too
$sql = "UPDATE item_relationships SET item_a_title = '".$title."' WHERE item_a_database = '".$database."' AND item_a_id = '".$_SESSION['editing_title_of_item_id']."'";
mysqli_query($conn, $sql);

$sql = "UPDATE item_relationships SET item_b_title = '".$title."' WHERE item_b_database = '".$database."' AND item_b_id = '".$_SESSION['editing_title_of_item_id']."'";
mysqli_query($conn, $sql);

$sql = "UPDATE items_all SET title = '".$title."' WHERE found_in_database = '".$database."' AND item_id = '".$_SESSION['editing_title_of_item_id']."'";
mysqli_query($conn, $sql);

$url_to_visit = '/'.$_GET['primary_folder'].'/'.$_GET['secondary_folder']."/".$tertiary_folder_for_url."item/display.php?item_id=".$_SESSION['editing_title_of_item_id'];

// no unsetting of the variable just incase they go backwards for now... not sure how to do it better right at this moment
//go to the item
header("Location: ".$url_to_visit);
exit();

?>