<?php

$sql = "SELECT * FROM user_account_details WHERE status = 'active'";

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$user_ids_to_check[$i] = $row['user_id'];
$i = $i+1;
}
$number_to_end_at = $i;

for($i=0; $i<$number_to_end_at; $i++){
	$user_id_to_check = $user_ids_to_check[$i];

	$sql = "SELECT * FROM user_alert_system WHERE user_id = '".$user_id_to_check."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0){
		$sql = "INSERT INTO user_alert_system (user_id) VALUES ('".$user_id_to_check."')";
		$result = mysqli_query($conn, $sql);		
	}
}