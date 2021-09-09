<?php
if(!isset($_SESSION)){session_start();}


$adjust_variable_name = 'yes';


if(	$_GET['tertiary_folder'] == 'productivity' && $variable_name == 'kpi_1'){$adjust_variable_name = 'no';}
if(	$_GET['tertiary_folder'] == 'productivity' && $variable_name == 'kpi_2'){$adjust_variable_name = 'no';}
if(	$_GET['tertiary_folder'] == 'productivity' && $variable_name == 'kpi_3'){$adjust_variable_name = 'no';}
if(	$_GET['tertiary_folder'] == 'productivity' && $variable_name == 'kpi_4'){$adjust_variable_name = 'no';}

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


	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<?php
			
			echo "
				<div class='div-table-cell title ".$variable_name."' style='border: 0px solid;'>
			";
			
			echo $display_variable_name;
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = '".$variable_name."' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>	
			</div>

			<?php
			for($i = 0; $i < 13; $i++){
				echo "<div class='div-table-cell'>	
					<input ";
						echo "class	='si_digits_wide ".$variable_name."'"; 
						echo "name	='".$variable_name."_".$month_combo[$i]."'"; 
						echo "value 	='".$row[$month_combo[$i]]."'";
				echo "		>
					</input>
				</div>";
			}
			?>
		</div>
	</div>
	

	<div class='div-table-row'>
		<div class='div-table-col-1'>		

			<?php

			echo "
				<div class='div-table-cell title ".$variable_name."_target' style='border: 0px solid;'>
			";
			
			echo $display_variable_name." Target";
			
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = '".$variable_name."_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			
			
			<?php
			//for loop of 6 empty cells
			for($i = 1; $i < 7; $i++){
				echo "<div class='div-table-cell'></div>";
				}

			//for loop of remaining 6 target cells
			for($i = 0; $i < 7; $i++){
				echo "
					<div class='div-table-cell'>	
						<input class='si_digits_wide ".$variable_name."_target' name='".$variable_name."_target_".$month_combo[$i+6]."' value ='".$row[$month_combo[$i+6]]."' style='border-style: dashed'>
					</div>";
				}
			?>
		</div>
	</div>