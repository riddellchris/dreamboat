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

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
		WHERE latest_version_of_data_for_this_user = 'yes'
		AND primary_industry = '".$_SESSION['viewing_client_primary_industry']."'";
$result = mysqli_query($conn, $sql);
$number_within_industry = mysqli_num_rows($result);

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
echo $sql = "SELECT DISTINCT user_id FROM tests_time_allocation_to_income_improvement 
	WHERE latest_version_of_data_for_this_user = 'yes'
	AND size_of_business_group = '".$_SESSION['viewing_client_business_size_group']."'
	AND primary_industry = '".$_SESSION['viewing_client_primary_industry']."'";
$result = mysqli_query($conn, $sql);
$number_within_same_size_in_industry = mysqli_num_rows($result);



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



//calculated_results
//









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
$matrix_columns_row = "  ['When', 'You', 'Industry', 'Business Definition','All','Owners of Businesses of that size','Owners of Businesses of that size in your industry'],";
$legend = 	"";

function script_pre_data(){
echo "
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
google.charts.load('current', {'packages':['corechart', 'line']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
";
}

function script_post_data($chart_title, $div_id){
echo "

]);

var options = {
  title: '".$chart_title."',
  curveType: 'function',
  legend: { position: 'bottom' },
  crosshair: {
   color: '#000', 
   trigger: 'selection'
  }
};

var chart = new google.visualization.LineChart(document.getElementById('".$div_id."'));

chart.draw(data, options);
 
}
</script>
";


}

require $_SERVER['DOCUMENT_ROOT']."/admin/pages/comparison/tests/time_allocation_to_income_improvement/timeframe_array.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";


//total salary / (week ts 44)

script_pre_data();
echo $matrix_columns_row;

/*
echo "
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]";*/

echo "
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]";
  
  
script_post_data("Actual hourly wage - A.K.A. Productivity Proxy", "actual_hourly_wage");





script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  <?php
script_post_data("Relative annual incomes", "relative_incomes");




script_pre_data();
echo $matrix_columns_row;

$c = 'total_hours_worked_a_week';
echo "
  ['5 years ago',  		".$ini[$c][$t[0]][$g[0]].", ".$ini[$c][$t[0]][$g[1]].", ".$ini[$c][$t[0]][$g[2]].",".$ini[$c][$t[0]][$g[3]].", ".$ini[$c][$t[0]][$g[4]].",".$ini[$c][$t[0]][$g[5]]."],  
  ['3 years ago',  		".$ini[$c][$t[1]][$g[0]].", ".$ini[$c][$t[1]][$g[1]].", ".$ini[$c][$t[1]][$g[2]].",".$ini[$c][$t[1]][$g[3]].", ".$ini[$c][$t[1]][$g[4]].",".$ini[$c][$t[1]][$g[5]]."],  
  ['2 years ago',  		".$ini[$c][$t[2]][$g[0]].", ".$ini[$c][$t[2]][$g[1]].", ".$ini[$c][$t[2]][$g[2]].",".$ini[$c][$t[2]][$g[3]].", ".$ini[$c][$t[2]][$g[4]].",".$ini[$c][$t[2]][$g[5]]."], 
  ['1 year ago',  		".$ini[$c][$t[3]][$g[0]].", ".$ini[$c][$t[3]][$g[1]].", ".$ini[$c][$t[3]][$g[2]].",".$ini[$c][$t[3]][$g[3]].", ".$ini[$c][$t[3]][$g[4]].",".$ini[$c][$t[3]][$g[5]]."], 
  ['6 months ago',  		".$ini[$c][$t[4]][$g[0]].", ".$ini[$c][$t[4]][$g[1]].", ".$ini[$c][$t[4]][$g[2]].",".$ini[$c][$t[4]][$g[3]].", ".$ini[$c][$t[4]][$g[4]].",".$ini[$c][$t[4]][$g[5]]."], 
  ['in recent weeks',  		".$ini[$c][$t[5]][$g[0]].", ".$ini[$c][$t[5]][$g[1]].", ".$ini[$c][$t[5]][$g[2]].",".$ini[$c][$t[5]][$g[3]].", ".$ini[$c][$t[5]][$g[4]].",".$ini[$c][$t[5]][$g[5]]."]";

/*
echo "
  ['5 years ago',  		".$ini[$c][$t[0]][$g[0]].", ".$ini[$c][$t[0]][$g[1]].", ".$ini[$c][$t[0]][$g[2]].",".$ini[$c][$t[0]][$g[3]].", 10, 10],  
  ['3 years ago',  		".$ini[$c][$t[1]][$g[0]].", ".$ini[$c][$t[1]][$g[1]].", ".$ini[$c][$t[1]][$g[2]].",".$ini[$c][$t[1]][$g[3]].", 10, 10],   
  ['2 years ago',  		".$ini[$c][$t[2]][$g[0]].", ".$ini[$c][$t[2]][$g[1]].", ".$ini[$c][$t[2]][$g[2]].",".$ini[$c][$t[2]][$g[3]].", 10, 10],   
  ['1 year ago',  		".$ini[$c][$t[3]][$g[0]].", ".$ini[$c][$t[3]][$g[1]].", ".$ini[$c][$t[3]][$g[2]].",".$ini[$c][$t[3]][$g[3]].", 10, 10],  
  ['6 months ago',  		".$ini[$c][$t[4]][$g[0]].", ".$ini[$c][$t[4]][$g[1]].", ".$ini[$c][$t[4]][$g[2]].",".$ini[$c][$t[4]][$g[3]].", 10, 10],  
  ['in recent weeks',  		".$ini[$c][$t[5]][$g[0]].", ".$ini[$c][$t[5]][$g[1]].", ".$ini[$c][$t[5]][$g[2]].",".$ini[$c][$t[5]][$g[3]].", 10, 10]";*/
script_post_data("AVERAGE WEEKLY Hours Worked", "hours_worked");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("AVERAGE WEEEKLY Hours Worked ON the business", "time_working_on");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("AVERAGE WEEKLY Hours Worked Doing the work", "time_doing_the_work");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("AVERAGE WEEKLY Hours Worked managing the WORK", "time_managing_the_work");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  <?php
script_post_data("AVERAGE WEEKLY Hours Worked managing the business", "time_managing_the_business");



script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  <?php
script_post_data("Income Growth Rate", "growth_rate");





script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  <?php
script_post_data("Payoff correlations vs hours per percent growth t working ON business", "correlation_chart");





