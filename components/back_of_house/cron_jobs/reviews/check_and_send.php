<?php
if(!isset($_SESSION)){session_start();}

$brisbane_basic_time = $_SERVER['REQUEST_TIME'] + 10*60*60;//the end is just an adjustment for poor coding and knowledge of time stuff

//by using gmdate then the adjustment above will match the GMT timezone - in the future this could match // be found from for every user - but for now this isn't required as everyone is within the current timezone(ish) Australia at least

$brisbane_day			= gmdate("w", $brisbane_basic_time);
$Brisbane_hour 			= gmdate("H", $brisbane_basic_time);
$todays_date_in_Brisbane  	= gmdate("Y-m-d", $brisbane_basic_time);


//just run them all weekly on fridays for now...

//below is the correct one for now.... friday at 4pm
//this may be hacked to allow for testing etc/// ensure appropriate email controls are applied
//if($Brisbane_hour == '16' && $brisbane_day == '5' ){

if($Brisbane_hour == '16' && $brisbane_day == '5' ){


	//check active client
	$sql = "SELECT * FROM user_account_details WHERE client_status = 'active' AND dead = 'no'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$active_user_ids[$i] = $row['user_id'];
		$i = $i+1;
	}
/*	
	echo "<br>";	
	var_dump($active_user_ids);
	echo "<br>";		
	echo "<br>";	
*/

	

	//looking for the end of week review at this point is all that's required.
	$sql = "SELECT * FROM user_email_settings WHERE reviews = 'on'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$review_emails_on[$i] = $row['user_id'];
		$i = $i+1;
	}
/*
	echo "<br>";	
	var_dump($review_emails_on);	
	echo "<br>";		
	echo "<br>";	
*/

	//then check user_review_cycles to see what reviews are actually turned on	
	//then check if the reviews are even on....  
	//looking for the end of week review at this point is all that's required.
	$sql = "SELECT * FROM user_review_cycles WHERE end_of_week_reviews_on_off = 'on'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$end_of_week_reviews_on[$i] = $row['user_id'];
		$i = $i+1;
	}
/*
	echo "<br>";	
	var_dump($end_of_week_reviews_on);		
	echo "<br>";		
	echo "<br>";	
*/	
	
	$active_and_emails_on 	= array_intersect($active_user_ids, 	 $review_emails_on);
	$final_list 		= array_intersect($active_and_emails_on, $end_of_week_reviews_on);

	$final_list = array_values($final_list);
	var_dump($final_list);
	//echo 
	echo $number_to_end_at = count($final_list);
	
	//terrible code but just pull out all three above and see what matches then....
	//send email
	for($i=0; $i<$number_to_end_at; $i++){
		
		$sql = "SELECT * FROM user_account_details WHERE user_id ='".$final_list[$i]."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
		
		//send the email
		$email		= $row['email'];
		$first_name	= $row['first_name'];
		$second_name	= $row['second_name'];
		
		//add the security key
		$security_key = md5(rand(999, 99999));		
		require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
		$sql = "INSERT INTO reviews_security (user_id, security_key) VALUES ('".$final_list[$i]."','".$security_key."')";	
		$result = mysqli_query($conn, $sql);			
		//set the url and finish that					
		$url		= "https://dreamboat.com.au/reviews/incoming.php?user_id=".$final_list[$i]."&security_key=".$security_key;
		
//turn this off for now	
		$subject		= "Let's review your sales, marketing & business development this week";
		$email_instruction	= "Click here to start the review";
	
		require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/reviews/end_of_week.php";	
	}
}