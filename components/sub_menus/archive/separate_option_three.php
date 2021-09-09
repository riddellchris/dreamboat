<?php
if(!isset($_SESSION)){session_start();}

if($top_sub_menu_options[2] != 'clients'){
	$display_option[2] = str_replace('_',' ', $top_sub_menu_options[2]);
	}
else{
	$sql="SELECT what_clients_are_called FROM user_account_details WHERE user_id = '".$_SESSION['user_id']."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$display_option[2] = $row['what_clients_are_called'];
	
	}
	
	
?>