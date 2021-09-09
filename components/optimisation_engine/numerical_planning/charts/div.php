<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/items/lists/main_sql_query.php";

//check at least one of these items has a valuezone set
$value_set = 'untouched';
while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){
	if(	$row['numerical_zone'] != '' 	AND
		$row['numerical_zone'] != '...'
		
		){
$value_set = 'useful';
	}
}


if($value_set == 'untouched'){
	echo "<div class='prompt-font' style='color:#281e96;'>";
	//	echo"Add some actvities to";
	echo "</div>";
	
}
else{	
echo "<br><span style='color:#281e96;font-family:Comfortaa;'>";
	if($_GET['primary_folder'] == 'activities'){	echo "Total hours allocated at present: ";}
	if($_GET['primary_folder'] == 'issues'){	echo "Total expected productivity impact: ";}	
	if($_GET['primary_folder'] == 'upgrades'){	echo "Total potential productivity improvement: ";}

	echo $total_time_worked;
	if($_GET['primary_folder'] == 'activities'){	echo " hours";}
	if($_GET['primary_folder'] == 'issues'){	echo "%";}	
	if($_GET['primary_folder'] == 'upgrades'){	echo "%<br><span style='color:grey;'>Aim for at least 20% here</span>";}	

echo "</span>";


	echo "<div id='chart_div' style='width: 100%; height: 35vh;'></div>";
	
	}