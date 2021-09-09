<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/database/connection.php";

$first_name 		= mysqli_real_escape_string($conn, $_POST['first_name']);
$second_name 		= mysqli_real_escape_string($conn, $_POST['second_name']);
$phone_number 		= mysqli_real_escape_string($conn, $_POST['phone_number']);
$email 			= mysqli_real_escape_string($conn, $_POST['email']);
$plan 			= mysqli_real_escape_string($conn, strtolower($_POST['plan']));
$business_name 		= mysqli_real_escape_string($conn, $_POST['business_name']);
$category 		= mysqli_real_escape_string($conn, $_POST['category']);
$default_password 	= password_hash('hello', PASSWORD_DEFAULT);
$client_gained 		= mysqli_real_escape_string($conn, $_POST['client_gained']);



/*
if (password_verify('hello', $default_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
exit();
*/

$current_date = date('Y-m-d H:i:s');
$sql = "INSERT INTO user_account_details (first_name, second_name, phone_number, business_name, email, client_status,  pilots_id, password, client_gained)
		VALUES('$first_name', '$second_name', '$phone_number', '$business_name', '$email', 'active',  '".$_SESSION['user_id']."', '$default_password','$client_gained')";
		
mysqli_query($conn, $sql);

$user_id = mysqli_insert_id($conn);
require $_SERVER['DOCUMENT_ROOT']."/account/registration/database_initialisation_processes.php";

header("Location: /users/");

?>