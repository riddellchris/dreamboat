<?php

//using this a 10-20% performance improvement on this front is the way to go
//allowing for unquestionable control and performance management that's truly quantifiable
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];



//test to see if there is an actual input yet

	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity' ORDER BY entry_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$test1 = mysqli_num_rows($result);


	$sql = "SELECT * FROM tracking_inputs WHERE user_id = '".$user_to_display."' AND latest_version_of_this_data_type = 'yes' AND data_type='productivity_target' ORDER BY entry_id DESC LIMIT 1"; // select column
	$result = mysqli_query($conn, $sql);
	$test2 = mysqli_num_rows($result);	
	
if($test1 != 0 OR $test2 != 0){
	require $_SERVER['DOCUMENT_ROOT']."/tracking/productivity/chart.php";
}	
?>


 
 


<?php
	echo"<div id='curve_chart1' style='max-width:1100px;margin:auto;height:500px;";
		if($test1 == 0 AND $test2 == 0){
			echo "text-align:center;padding-top:240px;";
		}
	echo "'>";

			if($test1 == 0 AND $test2 == 0){
				echo "
					<span class = 'prompt-font' style=''>Enter some data to start<br>
					Measuring, tracking & improving<br> <span style='color:red;'>your productivity </span></span>
				";
			}	
		?>
	</div>
 

<?php
require $_SERVER['DOCUMENT_ROOT']."/tracking/display_elements/end_of_page_requires.php";
?>