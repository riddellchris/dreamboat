<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/library.php";

$sql = "UPDATE tests_time_allocation_to_income_improvement SET latest_version_of_data_for_this_user = 'no' WHERE user_id = '".$_SESSION['viewing_client_id']."'";



//20.07.20 CR
//this should really include submission of this data into user_account_details too









require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocation_to_income_improvement/name_ender_array.php";
//$name_ender[0] = "today";			
//$name_ender[1] = "6_months_ago";	
//$name_ender[2] = "1_year_ago";	
//$name_ender[3] = "2_years_ago";	
//$name_ender[4] = "3_years_ago";	
//$name_ender[5] = "5_years_ago";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

unset($columns);	$columns = array();
unset($values);		$values = array();

$columns[count($columns)] = "user_id";				$values[count($values)] = mysqli_real_escape_string($conn, $_SESSION['viewing_client_id']);
$columns[count($columns)] = "primary_industry";			$values[count($values)] = mysqli_real_escape_string($conn, $_POST['primary_industry']);
$columns[count($columns)] = "months_consistently_in_business";	$values[count($values)] = mysqli_real_escape_string($conn, $_POST['months_consistently_in_business']);

if(isset($_POST['time_in_business'])){$columns[count($columns)] = "time_in_business";	$values[count($values)] = mysqli_real_escape_string($conn, $_POST['time_in_business']);}

$name_starter ="total_hours_worked_a_week_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}

$name_starter ="hours_a_week_working_on_the_business_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}

$name_starter ="hours_a_week_doing_the_work_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}

$name_starter ="hours_a_week_managing_others_work_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}

$name_starter ="hours_a_week_doing_admin_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}

$name_starter ="annualised_salary_";
$name_key = 0;
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}
if(isset($_POST[$name_starter.$name_ender[$name_key]])){$columns[count($columns)] = $name_starter.$name_ender[$name_key];	$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);	$name_key ++;}


//var_dump($columns);
//echo "<br>";
//echo "<br>";
$column_list = print_column_list($columns);
//echo $column_list;
//echo "<br>";
//echo "<br>";
//var_dump($values);
//echo "<br>";
//echo "<br>";
$values_list = print_value_list($values);
//echo $values_list;
//echo "<br>";
//echo "<br>";
$query = produce_insert_query("tests_time_allocation_to_income_improvement",$column_list,$values_list);
//echo $query;
//exit();
mysqli_query($conn, $query);

header("Location: ".$_SESSION['this_page']);
exit();