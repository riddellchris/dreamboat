<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$returned_value = mysqli_real_escape_string($conn, $_POST['standard_input']);

$sql = "UPDATE ".$_SESSION['updating_crm_database']." 
	SET ".$_SESSION['updating_crm_field']." = '".$returned_value."'
	WHERE  item_id = '".$_POST['item_id']."' 
	AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
mysqli_query($conn, $sql);

unset($_SESSION['updating_crm_database']);
unset($_SESSION['updating_crm_field']);

header("Location: ".$_SESSION['page_to_return_to']);
exit();