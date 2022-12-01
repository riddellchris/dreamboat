<?php

//using this a 10-20% performance improvement on this front is the way to go
//allowing for unquestionable control and performance management that's truly quantifiable
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php";


	echo "<div style='width:100%;text-align:center;color:red;' class='prompt-font blink_me'>target 5-10% improvement every 6 months</div>";



if($_SESSION['dreamboat_crew'] == 'yes'){
echo "<div style='margin-top:50px;width:100%;text-align:center;'>";
	echo "<span class='pilots_eyes_only_font'>While it&#39;s not a stated / signed up to objective - target between 5-10% improvement every 6 months until sufficient competitive/comparative data exists</span>";
echo "</div>";
}

$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];



//test to see if there is an actual input yet

	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity' ORDER BY entry_id DESC LIMIT 1";
//echo $sql; exit();
	$result = mysqli_query($conn, $sql);
	$test1 = mysqli_num_rows($result);


	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	$test2 = mysqli_num_rows($result);	
	
if($test1 != 0 OR $test2 != 0){
	require $_SERVER['DOCUMENT_ROOT']."/results/productivity/chart.php";
}	
?>


 
 


<?php

/*
		if($test1 == 0 AND $test2 == 0){
			echo "text-align:center;padding-top:240px;";
		}
//	echo "'>";

			if($test1 == 0 AND $test2 == 0){
				echo "
					<span class = 'prompt-font' style=''>Enter some data to start<br>
					Measuring, tracking & improving<br> <span style='color:red;'>your productivity </span></span>
				";
			}	
	*/
//echo "	</div> ";
 

	

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>