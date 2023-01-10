<?php
$user_to_display = $_SESSION['viewing_client_id'];

$month_combo = array();
$month_to_loop = 6;
$month_name = array();


// Set the ending month and year
$endMonth = date('m');
$endYear =  date('Y');

// Set the starting month and year
$startDate = date("m Y", strtotime("-6 months"));
$startMonth = substr($startDate,0,2);
$startYear = substr($startDate,3,4);


// Set the current month and year to the starting month and year
$currentMonth = $startMonth;
$currentYear = $startYear;

if($_SESSION['is_date_customised']){
	// Get data from database 
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM user_customiser_control WHERE user_id = '".$user_to_display."'"; // select column
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	// Set the starting month and year
	$startMonth = $row['start_date_month'];
	$startYear = $row['start_date_year'];
	
	// Set the ending month and year
	$endMonth = $row['end_date_month'];
	$endYear = $row['end_date_year'];
	
	$month_to_loop = $endMonth - $startMonth + ($endYear-$startYear) *12;

	// Set the current month and year to the starting month and year
	$currentMonth = $startMonth;
	$currentYear = $startYear;
}
// Loop through the months and years
while ($currentYear < $endYear || ($currentYear == $endYear && $currentMonth <= $endMonth)) {
	// Do something with the current month and year
	
	$new_combo = substr($currentYear,-2)."_".str_pad($currentMonth,'2','0',STR_PAD_LEFT);
	array_push($month_combo,$new_combo);

	// Increment the current month and year
	$currentMonth++;
	if ($currentMonth > 12) {
			$currentMonth = 1;
			$currentYear++;
	}
}
for($i = 0; $i <=$month_to_loop; $i++){
	$monthNum  = intval(substr($month_combo[$i],3,5));
	$dateObj   = DateTime::createFromFormat('!m', $monthNum);
	$monthName = $dateObj->format('M'); 
	array_push($month_name,$monthName);
};
?>