<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/admin/components/functions/required.php";
require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/styling/basics.php";

$scrollbar_for = ".test_div";
$width = "15px";
$background_color = "#5040ff";
require $_SERVER['DOCUMENT_ROOT']."/components/design/scrollbar_design.php";



echo "<div class='test_div'>";

echo "
<div>
	<div style='width:100%;' class='prompt-font'>
		NOTES
	</div>
	<div>
		This test is without question the most critical of all tests because:<br>
		1. Time allocation, like focus allocation is the scarcest of resources of any business owner.<br>
		2. How they allocate time using their own generalised definitions of time allocation and the rewards it brings is the most critical tradeoff in their life.<br>
		3. A similar tradeoff is critical and essential for all staff as well so it perfectly positions us, includes us and starts all engagements in the right position, from the perfect perspective<br>
		4. It begins a totally unique perspective, a totally unique datapoint, database and systematic viewpoint that is entirely valid, useful, critical and worthy of existing in the marketplace that nobody else has, can easily mirror or can try and compete with.
	</div>
</div>
";



//get out all existing data and go from there;
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement 
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND latest_version_of_data_for_this_user = 'yes'";
//echo $sql;	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$timeframe = $row['timeframe'];
	$data_category = $row['data_category'];
	$existing_test_values[$data_category."_".$timeframe] = $row['value'];
}




//var_dump($existing_test_values);
//exit();



echo "<form method='post' action='/admin/pages/comparison/tests/time_allocation_to_income_improvement/submit.php'>";
echo "	<div style='width:100%;' class='prompt-font'>
		inputs
	</div>";
echo"
How long have you consistently been working in this business for?<br>";
standard_input($_SESSION['viewing_client_time_in_business'],"time_in_business","IN MONTHS",'off',"150px");
echo "MONTHS";
echo "<br>";
$select_name = "time_in_business_group";
$styling = "width:450px;";
$selected = $_SESSION['viewing_client_time_in_business_group'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/work_in_business_groups.php";

echo "<br>
<span style='color:grey;'>(only go as far back as consistent work in this business allows)</span><br>

<div style='width:100%;text-align:center;'>Primary industry</div>";
$select_name = "primary_industry";
$styling = "width:450px;";
$selected = $_SESSION['viewing_client_primary_industry'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/linkedin_industry_list.php";


echo "<br>
<div style='width:100%;text-align:center;'>Business definition</div>";
$select_name = "business_definition";
$selected = $_SESSION['viewing_client_business_definition'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/bni_end_business_names.php";

//how many staff
echo "<br>
<div style='width:100%;text-align:center;'>How many FTE staff?</div>";
$select_name = "business_size_group";
$selected = $_SESSION['viewing_client_business_size_group'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/business_size_groups.php";



require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocation_to_income_improvement/timeframe_array.php";

echo "<div style='width:100%;text-align:center;'>";
	echo "<div style='display:table;display: inline-block;'>";
		titles_block("How many hours a week did you work:");
		echo "<div style='display:table-row;'>";
			$name_starter ="total_hours_worked_a_week_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";
		titles_row(); //admin/components/functions/required.php
		titles_block("And if there are four categories:<br>
				Working on the business<br>
				Working in the business - doing the work<br>
				Working in the business - managing work<br>
				Working in the business - managing the business/admin");	
		titles_block("How many hours a week did you spend on: WORKING ON THE BUSINESS");
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_working_on_the_business_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";		
		titles_row();
		titles_block("How many hours a week did you spend on: DOING THE WORK");
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_doing_the_work_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";	
		titles_row();	
		titles_block("How many hours a week did you spend on: MANAGING THE WORK");		
		echo "<div style='display:table-row;text-align:center;'>";		
			$name_starter ="hours_a_week_managing_others_work_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";	
		titles_row();	
		titles_block("How many hours a week did you spend on: MANAGING THE BUSINESS/ADMIN");			
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_doing_admin_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";	
		titles_row();
		titles_block("And before we can detail where your data starts to pay off<br>
					What are you taking home in salary today?");	
		echo "<div style='display:table-row;'>";
			$name_starter ="annualised_salary_";
			$name_key = 5;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key --;
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key --;			
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key --;						
			standard_input(floatval($existing_test_values[$name_starter.$timeframe[$name_key]]),$name_starter.$timeframe[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key --;
		echo "</div>";	
		titles_row();
	echo "</div>";
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";


//not entirely required now if we just spread out the time data onto multiple charts
/*
echo "
<div style='width:100%;' class='prompt-font'>
	BOOLEAN FOR CHARTS
</div>";
require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/boolean/basic.php";
*/


echo "	<div style='width:100%;' class='prompt-font'>";

//CR 20.07.20
//When finally this refresh is no longer needed we can chagne:
///components/functions/primary_folder_redirections.php
//to close the admin section when a redirection is used
//this being important obviuosly for efficiency and effectivness
echo "		CHARTS -- <span><a href='/'  style='color:red;' class='blink_me'>REFRESH TO VIEW CHARTS</a><br><small style='color: #cecece;'>Sorry about this additional step for now.. in time it will be removed.</small></span>";
//20.07.18 CR This is obviously far far far far from ideal but it works for now
//not exactly sure how it should be done...
echo "	</div>";


echo "<div style='width:100%;'>";
//PILOT ONLY LEGEND AND SAMPLE SIZES FOR EACH CRITERIA
//we have this further to the chart legend so we can keep the sample size to ourselves
//these sample sizes are just about getting out the "num rows"

echo "</div>";


// all of these come from /admin/pages/comparison/tests/time_allocation_to_income_improvement/charts/script_test.php
echo "
number in industry = ".$number_within_industry."
<br>
number in business definition = ".$number_within_business_definition."
<br>
number in all entries = ".$number_within_all."
<br>
number in same size group = ".$number_within_same_size."
<br>
number in sime size group in industry = ".$number_within_same_size_in_industry."
<br>
";
require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocation_to_income_improvement/charts/display.php";

echo "
<div style='width:100%;' class='prompt-font'>
	SALES & DISCUSSION
</div>
<br>
E.G.
Every hour you spend a month increases your business growth rate by 0.2%<br>
If you were to spend 5 hours more working on the business you would increase your income growth rate by 1%<br>
<br>
Discuss results, and what it shows.<br>
Discuss this is what we do<br>
Sell the service - using collective/comparative data to optimse performance.<br>
";

echo "</div>";