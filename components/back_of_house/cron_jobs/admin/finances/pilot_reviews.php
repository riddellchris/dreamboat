<?php
if(!isset($_SESSION)){session_start();}

//run at one past midnight every night


//get the pilot id's of every crew member
$sql = "SELECT * FROM user_account_details WHERE client_or_crew = 'crew'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$pilot_ids[$i] = $row['user_id'];
	$i++;
}
$total_number_of_pilots = $i;





unset($total_value_of_active_subscriptions);
//sum current subscription values for all of thse people
for($i = 0; $i < $total_number_of_pilots; $i ++){

	$sql = "
	SELECT SUM(current_subscription_value) AS pilots_total_subscription_value
	FROM user_account_details 
	WHERE 		pilots_id = '".$pilot_ids[$i]."'
	AND		dead <> 'yes'
	AND		client_gained = 'yes'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//var_dump();	
	$total_value_of_active_subscriptions[$i] = $row['pilots_total_subscription_value'];
	
	   $CurrentTime = date($_SERVER['REQUEST_TIME']);
	   $year 	= gmdate("Y", $CurrentTime);//start time
	   $month 	= gmdate("m", $CurrentTime);//start time
	   $day 	= gmdate("d", $CurrentTime);//start time




	

	//save it including the date today into admin_finance_tracking	
	$sql = "INSERT INTO admin_finance_tracking
		(
		year,
		month,
		day,
		pilot_id,
		current_revenue
		)
		VALUES (
		'".$year."',
		'".$month."',
		'".$day."',
		'".$pilot_ids[$i]."',
		'".$total_value_of_active_subscriptions[$i]."'
		
		
		) 
	";
	
mysqli_query($conn, $sql);	
	
	
	
}







?>