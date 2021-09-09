<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";
?>


<form method='post' action='/components/tracking/submit_update.php'>
<?php

echo "<div class='div-table' style='margin:auto;";
if($_GET['secondary_folder'] == 'inputs'){ echo "margin-top:4vh;margin-bottom:8vh;";}
echo "'>";

if(	$_GET['secondary_folder'] == 'inputs' OR
$_GET['secondary_folder'] == 'productivity' 
){
require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/what_is_productivity.php';
}
//kpi settings / names for each KPI go above the monthly inputs
if(	$_GET['secondary_folder'] == 'inputs' OR
	$_SESSION['results_page'] == 'kpis'){require $_SERVER['DOCUMENT_ROOT'].'/components/tracking/input_table/kpi_settings.php';}

if($_GET['secondary_folder'] == 'links'){

	//all flows are taken as (net) from left to right<br>
	//negatives are fine to use as required
	
	echo "<div class='prompt-font blink_me' style='width:100%;text-align:center;font-size:smaller;'>
		//all flows are taken as (net) from left to right<br>
		//negatives are fine to use as required</div>";

}




//this is the auto update section of the tracking system to ensure we are always within 6 months of the current month
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";

?>


<!-- THE TITLE BLOCK -->
<div class='div-table-row'>
	<div class='div-table-col-1'>		
		<div class='div-table-cell title'>
		</div>
		<?php
		for($i = 0;$i < 13; $i++){
			echo "	<div class='div-table-cell' style='text-align:center;'>".
				$month_name[$i]."
				</div>";
				}
		?>
	</div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/controls.php";?>
	<div class='div-table-row'>
	<?php
		//if($_SESSION['dreamboat_crew'] =='yes'){
		echo "<input type='submit' class='login-submit' style='width:100%;' value='update'>";
		//}
	?>
	</div>
</div>	
</form>


