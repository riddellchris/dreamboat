<?php
if(!isset($_SESSION)){session_start();}

$adjust_variable_name = 'yes';


if(	$_GET['secondary_folder'] == 'productivity' && $variable_name == 'kpi_1'){$adjust_variable_name = 'no';}
if(	$_GET['secondary_folder'] == 'productivity' && $variable_name == 'kpi_2'){$adjust_variable_name = 'no';}
if(	$_GET['secondary_folder'] == 'productivity' && $variable_name == 'kpi_3'){$adjust_variable_name = 'no';}
if(	$_GET['secondary_folder'] == 'productivity' && $variable_name == 'kpi_4'){$adjust_variable_name = 'no';}

if($adjust_variable_name == 'yes'){
	require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
	$display_variable_name = strip_underscores($variable_name);
	if(substr($display_variable_name, 0, 3) != 'kpi'){$display_variable_name = ucfirst($display_variable_name);}
	else{
	$display_variable_name = "KPI".substr($display_variable_name, 3);
	}
}

if(	$_GET['secondary_folder'] == 'links' && $variable_name == 'related_kpi_a'){$display_variable_name = "Related KPI 'A'";}
if(	$_GET['secondary_folder'] == 'links' && $variable_name == 'related_kpi_b'){$display_variable_name = "Related KPI 'B'";}

?>

<?php

	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/actuals_row.php";

?>
	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<?php

			echo "
				<div class='div-table-cell title ".$variable_name."_target'>";
			
			echo $display_variable_name." Target";
			
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = '".$variable_name."_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) == 0){
				$sql = "INSERT INTO tracking_inputs (data_type, user_id, latest_version_of_this_data_type) VALUES ('".$variable_name."_target', '".$user_to_display."', 'yes')";
				//echo $sql;exit();
				mysqli_query($conn, $sql);

				$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = '".$variable_name."_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
				//echo $sql;exit();
			}
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			
			
			<?php

			for($i = 0; $i <= $month_to_loop; $i++){
				echo "
					<div class='div-table-cell'>	
						<input class='si_digits_wide target ".$variable_name."_target' name='".$variable_name."_target_".$month_combo[$i]."' 
						value ='".$row[$month_combo[$i]]."'>
					</div>";
				}
			?>
		</div>
	</div>