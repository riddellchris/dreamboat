<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/settings/periodic_reviews/styling.php";

$no_on_off 	= 'inactive';
$no_launch_now 	= 'active';


if($_GET['primary_folder'] == 'profile' && $_GET['secondary_folder'] == 'reviews'){
	if($_GET['tertiary_folder'] == 'work_diary'){
		$text = 'End of Day work diarys';
		$timename = 'end_of_day_work_diaries';
		}
	if($_GET['tertiary_folder'] == 'weekly_time'){
		$text = 'Weekly time reviews';
		$timename = 'end_of_week_time_reviews';
		}	
	if($_GET['tertiary_folder'] == 'monthly_productivity'){
		$text = 'End of month personal productivity reviews';
		$timename = 'end_of_month_personal_productivity_reviews';
		}	
	if($_GET['tertiary_folder'] == 'workplace_mental_health_risk_assessments'){
		$text = 'Semi-annual workplace mental health risk assessments<br>
								  March & September';
		$timename = 'semi_annual_workplace_mental_health_risk_assessments';
		}
	if($_GET['tertiary_folder'] == 'progress_plus'){		
		$text = 'As you wish - Progress Plus reviews';
		$timename = 'semi_annual_workplace_mental_health_risk_assessments';

		$no_on_off	= 'active';
		$no_launch_now = 'inactive';
		
	}	
}

if($_GET['primary_folder'] == 'time' && $_GET['secondary_folder'] == 'tracking'){
		$text = 'End of month personal productivity reviews';
		$timename = 'end_of_month_personal_productivity_reviews';
		}
		
$sql = "SELECT * FROM user_review_cycles WHERE user_id = '".$_SESSION['viewing_client_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);			

//var_dump($row);
//exit();		
		
echo "
<div style='width:100%;text-align:center;font-family:Helvetica;color:#281e96;'>
	SETTINGS
	<div  style='display:table;margin-left:auto;margin-right:auto;'>
		<div  style='display:table-row;'>
			<div  style='display:table-cell;text-align:left;'>".$text."	
			</div>		
			<div  style='display:table-cell;'>";
				//$timename = 'semi_annual_workplace_mental_health_risk_assessments';				
				$selected = $row[$timename];		
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
		echo "	</div>";
		
		
		if($no_on_off != 'active'){
		echo "	<div  style='display:table-cell;'>";
				$onclick_change = 'on';
				$selected = $row[$timename."_on_off"];
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
		echo "  </div>";	
		}
		
		if($no_launch_now != 'active'){
		echo "	<div  style='display:table-cell;'>
				<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
			</div>	";
		}
			
	echo "		
		</div>	
	</div>	
</div>
";





?>