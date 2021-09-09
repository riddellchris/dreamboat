<?php
if(!isset($_SESSION)){session_start();}

$initial_results = array();
$sub_groups = array();
$sub_groups[0] = "You";
$sub_groups[1] = "Industry";
$sub_groups[2] = "Business Definition";
$sub_groups[3] = "All";
$sub_groups[4] = "Same_size";
$sub_groups[5] = "Same_size_in_industry";

$t[0] = "five_years_ago";
$t[1] = "three_years_ago";
$t[2] = "two_years_ago";
$t[3] = "one_year_ago";
$t[4] = "six_months_ago";
$t[5] = "in_recent_weeks";
  
//first find sub group counts
$number_of_you = 1;

function make_sql_and_or_string($result){
	$string = '';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		if($string != ''){ $string .= " AND ";}
		$string .= " user_id = ".$row['user_id']." ";
	}
	return $string;
}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
		WHERE latest_version_of_data_for_this_user = 'yes'
		AND primary_industry = '".$_SESSION['viewing_client_primary_industry']."'";
$result = mysqli_query($conn, $sql);
$number_within_industry = mysqli_num_rows($result);
$ids_within_industry_string = make_sql_and_or_string($result);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
	WHERE latest_version_of_data_for_this_user = 'yes'
	AND business_definition = '".$_SESSION['viewing_client_business_definition']."'"; //and job_type = 
$result = mysqli_query($conn, $sql);
$number_within_business_definition = mysqli_num_rows($result);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'"; //and job_type = 
$result = mysqli_query($conn, $sql);
$number_within_all = mysqli_num_rows($result);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
 $sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
	WHERE latest_version_of_data_for_this_user = 'yes'
	AND size_of_business_group = '".$_SESSION['viewing_client_business_size_group']."'"; 
$result = mysqli_query($conn, $sql);
$number_within_same_size = mysqli_num_rows($result);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
	WHERE latest_version_of_data_for_this_user = 'yes'
	AND size_of_business_group = '".$_SESSION['viewing_client_business_size_group']."'
	AND primary_industry = '".$_SESSION['viewing_client_primary_industry']."'";
$result = mysqli_query($conn, $sql);
$number_within_same_size_in_industry = mysqli_num_rows($result);







$count[0] = 1;
$count[1] = $number_within_industry;
$count[2] = $number_within_business_definition;
$count[3] = $number_within_all;
$count[4] = $number_within_same_size;
$count[5] = $number_within_same_size_in_industry;

/*
//found in the form chart
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
*/






//then we can deal with adding up appropriate totals for each of these sub groups




require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'"; //and job_type = 
$result = mysqli_query($conn, $sql);




while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//echo 'hello';
	//maybe first count the numbers in each group
	//then go on from there.
	//then this can be a nice tight little function and we are done in control
	//this has to be done by building a multidimensional array



	//let's go with the highest level actually being the data cegory as it's the basis of each chart really.
	//this should allow us to ensure that data cegory is there every t.	
		//then we go with the t frame
			//then finally each subgroup to build it all the way up... 		
		
	//for for a given data cegory
	//for a given tframe be build out that array.	
	
		
	//this should allow us to ensure that data cegory is there every t.
	if(!isset($initial_results[$row['data_category']])){$initial_results[$row['data_category']] = array();}
		if(!isset($initial_results[$row['data_category']][$row['timeframe']])){$initial_results[$row['data_category']][$row['timeframe']] = array();}	
	//	echo 'hello';
			$sub_groups_key = 0;
			//for each sub group run appropriate tests and compile that specific array
			if($sub_groups[$sub_groups_key] == 'You' && $row['user_id'] == $_SESSION['viewing_client_id']){					
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = $row['value'];
			}
			$sub_groups_key ++;
			if($sub_groups[$sub_groups_key] == 'Industry' && $row['primary_industry'] == $_SESSION['viewing_client_primary_industry']){	
				if(!isset($initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]])){
					$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = '';
				}			
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] += $row['value'];
			}			
			$sub_groups_key ++;
			if($sub_groups[$sub_groups_key] == 'Business Definition' && $row['business_definition'] == $_SESSION['viewing_client_business_definition']){	
				if(!isset($initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]])){
					$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = '';
				}			
							
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] += $row['value'];
			}			
			$sub_groups_key ++;
				if(!isset($initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]])){
					$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = '';
				}					
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] += $row['value'];
						
			$sub_groups_key ++;
			if($sub_groups[$sub_groups_key] == 'Same_size' && $row['size_of_business_group'] == $_SESSION['viewing_client_business_size_group']){
				if(!isset($initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]])){
					$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = '';
				}					
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] += $row['value'];
			}
			$sub_groups_key ++;
			if(	$sub_groups[$sub_groups_key] 	== 'Same_size_in_industry' && 
				$row['size_of_business_group']	== $_SESSION['viewing_client_business_size_group'] &&
				$row['primary_industry'] 		== $_SESSION['viewing_client_primary_industry']

				){
				if(!isset($initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]])){
					$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] = '';
				}					
				$initial_results[$row['data_category']][$row['timeframe']][$sub_groups[$sub_groups_key]] += $row['value'];
			}	
}









/*

//CR 22.07.20
//if loading this as a separate page then all of this works perfectly... do not delete it (almost ever!)
echo $_SESSION['user_id'];
echo "<br>";
echo $initial_results[total_hours_worked_a_week][in_recent_weeks][You];
echo "<br>";
print_r($initial_results);
exit();
*/





$ini = $initial_results;
$g = $sub_groups;






//CR 20.07.20
//this should be adjusted for "t" of data collection vs duration in t... but not critical now --> // DONE NOW 22/7/20
//as in data moves backwards so today... in a few weeks is a few weeks ago.

$title =	"";
$matrix_columns_row = "  [	'When', 
				'You', 
				'Industry - ".$_SESSION['viewing_client_primary_industry']."', 
				'Business Definition - ".$_SESSION['viewing_client_business_definition']."',
				'All',
				'Owners of Businesses of that size - ".$_SESSION['viewing_client_business_size_group']."',
				'Owners of Businesses of that size in your industry'],";
$legend = 	"";

function script_pre_data($chart_number){
echo "
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
google.charts.load('current', {'packages':['corechart', 'line']});
google.charts.setOnLoadCallback(drawChart_".$chart_number.");

function drawChart_".$chart_number."() {
var data = google.visualization.arrayToDataTable([
";

return $chart_number + 1;
}

function script_post_data($chart_title, $div_id){
echo "

]);

var options = {
  title: '".$chart_title."',
  curveType: 'function',
  legend: { position: 'bottom' },
crosshair: { trigger: 'both' } 
};

var chart = new google.visualization.LineChart(document.getElementById('".$div_id."'));

chart.draw(data, options);
 
}
</script>
";


}

require $_SERVER['DOCUMENT_ROOT']."/comparison/tests/time_allocation_to_income_improvement/timeframe_array.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";


//total salary / (week ts 44)
$chart_number = 1;
$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;

$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
	
		$c = 'annualised_salary';
		$d = 'total_hours_worked_a_week';
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $ini[$d][$t[$time_key]][$g[$group_key]] / 44;
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("Actual hourly wage - A.K.A. Productivity Proxy", "actual_hourly_wage");




$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;

$pro = $res;
$pro_gro = array();
for($time_key = 1; $time_key <=5; $time_key ++){	
	for($group_key = 0; $group_key <=5; $group_key ++){
		if(!isset($pro_gro[$t[$time_key]])){$pro_gro[$t[$time_key]] = array();}	
		if(	$pro[$t[$time_key]][$g[$group_key]]  != '' &&
			$pro[$t[$time_key-1]][$g[$group_key]] != ''){
			$pro_gro[$t[$time_key]][$g[$group_key]] = $pro[$t[$time_key]][$g[$group_key]] / $pro[$t[$time_key-1]][$g[$group_key]] * 100 ;
			
			if($time_key == 4 OR $time_key == 5){
				$pro_gro[$t[$time_key]][$g[$group_key]] = $pro_gro[$t[$time_key]][$g[$group_key]] * 2;
			}
		}
	}
}

//var_dump($pro_gro);
echo "
  ['5 years ago',  		null, null, null, null, null, null],  
  ['3 years ago',  		".$pro_gro[$t[1]][$g[0]].", ".$pro_gro[$t[1]][$g[1]].", ".$pro_gro[$t[1]][$g[2]].",".$pro_gro[$t[1]][$g[3]].", ".$pro_gro[$t[1]][$g[4]].",".$pro_gro[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$pro_gro[$t[2]][$g[0]].", ".$pro_gro[$t[2]][$g[1]].", ".$pro_gro[$t[2]][$g[2]].",".$pro_gro[$t[2]][$g[3]].", ".$pro_gro[$t[2]][$g[4]].",".$pro_gro[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$pro_gro[$t[3]][$g[0]].", ".$pro_gro[$t[3]][$g[1]].", ".$pro_gro[$t[3]][$g[2]].",".$pro_gro[$t[3]][$g[3]].", ".$pro_gro[$t[3]][$g[4]].",".$pro_gro[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$pro_gro[$t[4]][$g[0]].", ".$pro_gro[$t[4]][$g[1]].", ".$pro_gro[$t[4]][$g[2]].",".$pro_gro[$t[4]][$g[3]].", ".$pro_gro[$t[4]][$g[4]].",".$pro_gro[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$pro_gro[$t[5]][$g[0]].", ".$pro_gro[$t[5]][$g[1]].", ".$pro_gro[$t[5]][$g[2]].",".$pro_gro[$t[5]][$g[3]].", ".$pro_gro[$t[5]][$g[4]].",".$pro_gro[$t[5]][$g[5]]."]";
script_post_data("Productivity Improvement", "productivity_improvement");








$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'annualised_salary';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("Annual incomes", "relative_incomes");




$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'total_hours_worked_a_week';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("AVERAGE WEEKLY Hours Worked", "hours_worked");




$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'hours_a_week_working_on_the_business';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("AVERAGE WEEKLY Hours Worked ON the business", "time_working_on");


$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'hours_a_week_doing_the_work';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("AVERAGE WEEKLY Hours Worked Doing the work", "time_doing_the_work");


$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'hours_a_week_managing_others_work';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("AVERAGE WEEKLY Hours Worked managing the WORK", "time_managing_the_work");


$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'hours_a_week_doing_admin';
$res = array();
for($time_key = 0; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $count[$group_key];
	}
}
echo "
  ['5 years ago',  		".$res[$t[0]][$g[0]].", ".$res[$t[0]][$g[1]].", ".$res[$t[0]][$g[2]].",".$res[$t[0]][$g[3]].", ".$res[$t[0]][$g[4]].",".$res[$t[0]][$g[5]]."],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("AVERAGE WEEKLY Hours Worked managing the business", "time_managing_the_business");















$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$c = 'annualised_salary';
$res = array();
//start at one obviously because we can't calculate any earlier than that
for($time_key = 1; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
		if(	$ini[$c][$t[$time_key]][$g[$group_key]]  != '' &&
			$ini[$c][$t[$time_key-1]][$g[$group_key]] != ''){
			$res[$t[$time_key]][$g[$group_key]] = $ini[$c][$t[$time_key]][$g[$group_key]] / $ini[$c][$t[$time_key-1]][$g[$group_key]] * 100 ;
			
			if($time_key == 4 OR $time_key == 5){
				$res[$t[$time_key]][$g[$group_key]] = $res[$t[$time_key]][$g[$group_key]] * 2;
			}
		//	echo $ini[$c][$t[$time_key]][$g[$group_key]]."    ";
		}
	}
}
echo "
  ['5 years ago',  		null, null, null, null, null, null],  
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("Income Growth Rate", "growth_rate");
















$chart_number = script_pre_data($chart_number );
echo $matrix_columns_row;
$res = array();
for($time_key = 1; $time_key <=5; $time_key ++){	
	if(!isset($res[$t[$time_key]])){$res[$t[$time_key]] = array();}	
	for($group_key = 0; $group_key <=5; $group_key ++){
	
		
		$d = 'hours_a_week_working_on_the_business';
		if($ini[$d][$t[$time_key]][$g[$group_key]] != 0){
			$res[$t[$time_key]][$g[$group_key]] = $pro_gro[$t[$time_key]][$g[$group_key]] / $ini[$d][$t[$time_key]][$g[$group_key]];
		}
		else{
			$res[$t[$time_key]][$g[$group_key]] = 'null';
		}
	}
}
echo "
  ['5 years ago',  		null, null, null, null, null, null], 
  ['3 years ago',  		".$res[$t[1]][$g[0]].", ".$res[$t[1]][$g[1]].", ".$res[$t[1]][$g[2]].",".$res[$t[1]][$g[3]].", ".$res[$t[1]][$g[4]].",".$res[$t[1]][$g[5]]."],  
  ['2 years ago',  		".$res[$t[2]][$g[0]].", ".$res[$t[2]][$g[1]].", ".$res[$t[2]][$g[2]].",".$res[$t[2]][$g[3]].", ".$res[$t[2]][$g[4]].",".$res[$t[2]][$g[5]]."], 
  ['1 year ago',  		".$res[$t[3]][$g[0]].", ".$res[$t[3]][$g[1]].", ".$res[$t[3]][$g[2]].",".$res[$t[3]][$g[3]].", ".$res[$t[3]][$g[4]].",".$res[$t[3]][$g[5]]."], 
  ['6 months ago',  		".$res[$t[4]][$g[0]].", ".$res[$t[4]][$g[1]].", ".$res[$t[4]][$g[2]].",".$res[$t[4]][$g[3]].", ".$res[$t[4]][$g[4]].",".$res[$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$res[$t[5]][$g[0]].", ".$res[$t[5]][$g[1]].", ".$res[$t[5]][$g[2]].",".$res[$t[5]][$g[3]].", ".$res[$t[5]][$g[4]].",".$res[$t[5]][$g[5]]."]";
script_post_data("Payoff ratio of (% productivity income growth)  /  (WEEKLY hours worked on business)", "correlation_chart");





