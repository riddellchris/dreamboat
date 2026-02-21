<?php

//enter in mysql details

//set user_id
$user_id = 1;

require $_SERVER['DOCUMENT_ROOT']."/account/registration/database_initialisation_processes.php";


$sql = "SELECT * FROM user_account_details WHERE user_id = '".$user_id."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$email 		= $row['email'];
$first_name	= $row['first_name'];
$second_name	= $row['second_name'];


require $_SERVER['DOCUMENT_ROOT']."/account/security/reset_password_action.php";

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/productivity_tracker/welcome.php";
//require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/progress_plus/welcome.php";
//require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/work_diary/welcome.php";



