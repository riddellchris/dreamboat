<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
$results_for_charts_user = mysqli_fetch_array($result, MYSQLI_ASSOC);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'";
$result = mysqli_query($conn, $sql);
$results_for_charts_all = mysqli_fetch_array($result, MYSQLI_ASSOC);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'"; //and industry = 
$result = mysqli_query($conn, $sql);
$results_for_charts_industry = mysqli_fetch_array($result, MYSQLI_ASSOC);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'"; //and business defniition = 
$result = mysqli_query($conn, $sql);
$results_for_charts_job_type = mysqli_fetch_array($result, MYSQLI_ASSOC);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM tests_time_allocation_to_income_improvement WHERE latest_version_of_data_for_this_user = 'yes'"; //and job_type = 
$result = mysqli_query($conn, $sql);
$results_for_charts_job_type = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>



<!-- 
CR 20.07.20
this should be adjusted for "time" of data collection vs duration in time... but not critical now -->

<?php
$title =	"";
$matrix_columns_row = "  ['When', 'You', 'Industry', 'Business Definition','All','Owners of Businesses of that size','Owners of Businesses of that size in your industry'],";
$legend = 	"";

function script_pre_data(){
echo "
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
google.charts.load('current', {'packages':['corechart']});
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
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('".$div_id."'));

chart.draw(data, options);
}
</script>
";


}


?>



<?php 
script_pre_data();
echo $matrix_columns_row;
?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
<?php 
script_post_data("Relative incomes", "relative_incomes");




script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
<?php 
script_post_data("Hours Worked", "hours_worked");

script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("Hours Worked ON the business", "time_working_on");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("Hours Worked Doing the work", "time_doing_the_work");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php
script_post_data("Hours Worked managing the WORK", "time_managing_the_work");


script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
  
<?php 
script_post_data("Hours Worked managing the business", "time_managing_the_business");

script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
<?php 
script_post_data("Time Allocations", "time_allocation");



script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  	 0,0,0,0,0,0	   ],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
]);

var options = {
  title: 'Income Growth Rate',
  curveType: 'function',
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('growth_rate'));

chart.draw(data, options);
}
</script>
<?php
script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
]);

var options = {
  title: 'Payoff correlations vs hours per percent growth time working ON business',
  curveType: 'function',
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('correlation_chart'));

chart.draw(data, options);
}
</script>

<?php 
script_pre_data();
echo $matrix_columns_row;?>
  ['5 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400],  
  ['3 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['2 years ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['1 year ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['6 months ago',  		1000, 	1000, 	1000, 	1000,  1000,  	    400], 
  ['in recent weeks',  		1000, 	1000, 	1000, 	1000,  1000,  	    400]
]);

var options = {
  title: 'NPV of time spent working on the business',
  curveType: 'function',
  legend: { position: 'bottom' }
};

var chart = new google.visualization.LineChart(document.getElementById('value_of_time_spent_working_on_business'));

chart.draw(data, options);
}
</script>