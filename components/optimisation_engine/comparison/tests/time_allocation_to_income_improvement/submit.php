<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/functions/sql/library.php";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//20.07.20 CR
//this should really include submission of this data into user_account_details too
$sql = "UPDATE user_account_details 
SET 
primary_industry 			= '".mysqli_real_escape_string($conn, $_POST['primary_industry'])."',
business_definition 			= '".mysqli_real_escape_string($conn, $_POST['business_definition'])."',
time_in_business 			= '".mysqli_real_escape_string($conn, $_POST['time_in_business'])."',
time_in_business_last_saved_date 	= '".gmdate('Y/m/j H:i:s')."',
time_in_business_group 			= '".mysqli_real_escape_string($conn, $_POST['time_in_business_group'])."',
business_size_group 			= '".mysqli_real_escape_string($conn, $_POST['business_size_group'])."'
WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
//echo $sql; 
//exit();
mysqli_query($conn, $sql);
require $_SERVER['DOCUMENT_ROOT']."/account/variables/run_critical_variable_update.php";





$sql = "UPDATE tests_time_allocation_to_income_improvement SET latest_version_of_data_for_this_user = 'no' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
mysqli_query($conn, $sql);

require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocation_to_income_improvement/timeframe_array.php";

$_SESSION['base_columns_list'] = "	
user_id,
latest_version_of_data_for_this_user,
primary_industry,
business_definition,
time_in_business_group,
size_of_business_group,
type_of_person,
timeframe,
data_category,
value";

$_SESSION['base_values_list'] = "
'".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',	
'yes',
'".$_SESSION['viewing_client_primary_industry']."',
'".$_SESSION['viewing_client_business_definition']."',
'".$_SESSION['viewing_client_time_in_business_group']."',
'".$_SESSION['viewing_client_business_size_group']."',
'".$_SESSION['viewing_client_type_of_person']."',";	

$database = "tests_time_allocation_to_income_improvement";
$data_category = array();
$data_category[0] = "total_hours_worked_a_week";
$data_category[1] = "hours_a_week_working_on_the_business";
$data_category[2] = "hours_a_week_doing_the_work";
$data_category[3] = "hours_a_week_managing_others_work";
$data_category[4] = "hours_a_week_doing_admin";
$data_category[5] = "annualised_salary";

//this really should be in some sort of for loop system but not todat CR 20.07.20
/*expanded version of the lines below which is far far easier to understand
$field_name = $data_category."_".$timeframe[$key]; 
$values_list = $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$field_name])."'";
$query = produce_insert_query($database, $_SESSION['base_columns_list'], $values_list);	
mysqli_query($conn, $query);
$key ++;
*/


$key = 0;	$data_category ="total_hours_worked_a_week";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;

$key = 0;	$data_category ="hours_a_week_working_on_the_business";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;

$key = 0;	$data_category ="hours_a_week_doing_the_work";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;

$key = 0;	$data_category ="hours_a_week_managing_others_work";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;

$key = 0;	$data_category ="hours_a_week_doing_admin";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;

$key = 0;	$data_category ="annualised_salary";
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;
mysqli_query($conn, produce_insert_query($database, $_SESSION['base_columns_list'], $_SESSION['base_values_list']."'".$timeframe[$key]."','".$data_category."','".mysqli_real_escape_string($conn, $_POST[$data_category."_".$timeframe[$key]])."'"));	$key ++;


unset($_SESSION['base_columns_list']);
unset($_SESSION['base_values_list']);

header("Location: ".$_SESSION['this_page']);
exit();