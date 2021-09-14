<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/admin/components/functions/required.php";
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
		This test is all about assessing where your time is going.
		Comparing that with other people<br>
		And then helping you optimise that time for your specific situation...<br>
		....<br>
		Dosage: once to start with then fortnightly<br>
				..not historical but using recent data
	</div>
</div>
";



//get out all existing data and go from there;
$sql = "SELECT * FROM tests_time_allocations_per_activity_group
	WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	ORDER BY entry_id DESC LIMIT 1";
//echo $sql;	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$exiting_test_values = mysqli_fetch_array($result, MYSQLI_ASSOC);

//var_dump($exiting_test_values);
//exit();



echo "<form method='post' action='/admin/pages/comparison/tests/time_allocations_per_activity_group/submit.php'>";
echo "	<div style='width:100%;' class='prompt-font'>
		inputs
	</div>";
echo"
How long have you consistently been working in this business for?<br>";
standard_input($exiting_test_values['time_in_business'],"time_in_business","IN MONTHS",'off',"150px");
echo " MONTHS.<br>
<span style='color:grey;'>(only go as far back as consistent work in this business allows)</span><br>

<div style='width:100%;text-align:center;'>Primary industry</div>";
$selected = $exiting_test_values['primary_industry'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/linkedin_industry_list.php";

//linkedin job role

//how would you describe yourself

//store all into both test data and user account details

echo "<br>
<div style='width:100%;text-align:center;'>Business definition</div>";
$selected = $exiting_test_values['business_definition'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/bni_end_business_names.php";


//how many staff



require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocations_per_activity_group/name_ender_array.php";
//$name_ender[0] = "today";			
//$name_ender[1] = "6_months_ago";	
//$name_ender[2] = "1_year_ago";	
//$name_ender[3] = "2_years_ago";	
//$name_ender[4] = "3_years_ago";	
//$name_ender[5] = "5_years_ago";
echo "<div style='width:100%;text-align:center;'>";
	echo "<div style='display:table;display: inline-block;'>";
		titles_block("How many hours a week did you work:");
		echo "<div style='display:table-row;'>";
			$name_starter ="total_hours_worked_a_week_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
		echo "</div>";
		titles_row();
		titles_block("And if there are four categories:<br>
				Working on the business<br>
				Working in the business - doing the work<br>
				Working in the business - managing work<br>
				Working in the business - managing the business/admin");	
		titles_block("How many hours a week did you spend on: WORKING ON THE BUSINESS");
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_working_on_the_business_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
		echo "</div>";		
		titles_row();
		titles_block("How many hours a week did you spend on: DOING THE WORK");
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_doing_the_work_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
		echo "</div>";	
		titles_row();	
		titles_block("How many hours a week did you spend on: MANAGING THE WORK");		
		echo "<div style='display:table-row;text-align:center;'>";		
			$name_starter ="hours_a_week_managing_others_work_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
		echo "</div>";	
		titles_row();	
		titles_block("How many hours a week did you spend on: MANAGING THE BUSINESS/ADMIN");			
		echo "<div style='display:table-row;'>";
			$name_starter ="hours_a_week_doing_admin_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
		echo "</div>";	
		titles_row();
		titles_block("And before we can detail where your data starts to pay off<br>
					What are you taking home in salary today?");	
		echo "<div style='display:table-row;'>";
			$name_starter ="annualised_salary_";
			$name_key = 0;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "in recent weeks"	,"yes"	,"500px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "6 months ago"		,"yes"	,"200px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "1 year ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "2 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "3 years ago"		,"yes"	,"150px");	$name_key ++;
			standard_input($exiting_test_values[$name_starter.$name_ender[$name_key]],$name_starter.$name_ender[$name_key], "5 years ago"		,"yes"	,"150px");	$name_key ++;
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