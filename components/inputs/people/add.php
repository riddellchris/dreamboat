<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/inputs/color_creation.php";


if($_SESSION['next_prompt_id'] ==  247){
	$title = mysqli_real_escape_string($conn, $_POST['standard_input']);
	$sql = "INSERT INTO wheelhouse_list (user_id, item_category, item_type, item_group, item_title, background_color, contrast_color, text_color, degrees)
				         VALUES('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '".$_SESSION['menu_set_wheelhouse_category']."', '".substr($_SESSION['menu_set_wheelhouse_type'], 0, -1)."','".$group_category."', '$title', '$background_color', '$contrast_color', '$text_color', '$degrees')";
	$result = mysqli_query($conn, $sql);
	$_SESSION['wheelhouse_insert_id'] = mysqli_insert_id($conn);
	

	$sql = "UPDATE wheelhouse_items SET ".$column_to_update." = '".$update_with."' WHERE item_id = '".$_SESSION['insert_id']."'";
	$result = mysqli_query($conn, $sql);	
	
	
}
else{



}


if($_SESSION['next_prompt_id'] == 250){
	//two friend entries
	//network relationships


	//notifications for that person
	
	//notification for you for adding first, second, third person.
	//5th
	//10th
	//20th
	//30th
	//40th
	//50th
	
	
	header ("Location: /people/");
	exit();
	}
else{$_SESSION['next_prompt_id'] = $_SESSION['next_prompt_id'] + 1;}
