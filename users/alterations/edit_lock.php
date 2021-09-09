<?php
if(!isset($_SESSION)){session_start();}

if(isset($_GET['locked'])){

	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	if($_GET['locked'] == 'yes'){$set_to = 'yes';}
	if($_GET['locked'] == 'no'){$set_to = 'no';}
	$sql = "UPDATE user_account_details SET locked_by_pilot = '".$set_to."' WHERE user_id = '".$_GET['clients_user_id']."'";

	$result = mysqli_query($conn, $sql);

}

//go to the item
header("Location: /users/");
exit();

?>