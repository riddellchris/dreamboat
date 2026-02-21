<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/lists/main_sql_query.php";

//check at least one of these items has a valuezone set
$value_set = 'untouched';
while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){
	if(	$row['value_zone'] != '' 	AND
		$row['value_zone'] != '...'){
$value_set = 'useful';
	}
}


if($number_of_results_to_display == 0 && $value_set != 'useful'){
//	echo "<span class='prompt-font'>";
//		Add some actvities to 
//	echo "</span>";
	
}
else{	
	if($_GET['tertiary_folder'] == 'all'){echo "<br><span style='color:#281e96;font-family:Comfortaa;'>Total hours allocated at present: ".$total_time_worked."</span>";}


	echo "<div id='chart_div' style='width: 100%; height:35vh;'></div>";
	
	}