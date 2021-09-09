
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_1' style='border: 0px solid;'>		
			<?php		
			echo $kpi_1_title;
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_1' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes'  ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1' name='kpi_1_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>


	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_1_target' style='border: 0px solid;'>
				
			<?php
			echo $kpi_1_title." target";
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_1_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_1_target' name='kpi_1_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_2' style='border: 0px solid;'>	
			<?php
			echo $kpi_2_title;
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_2' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes'  ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2' name='kpi_2_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_2_target' style='border: 0px solid;'>
			<?php
			echo $kpi_2_title." target";
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_2_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_2_target' name='kpi_2_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_3' style='border: 0px solid;'>
			<?php
			echo $kpi_3_title;
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_3' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes'  ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3' name='kpi_3_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_3_target' style='border: 0px solid;'>	
			<?php
			echo $kpi_3_title." target";
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_3_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_3_target' name='kpi_3_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_4' style='border: 0px solid;'>
			<?php
			echo $kpi_4_title;
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_4' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes'  ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4' name='kpi_4_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title kpi_4_target' style='border: 0px solid;'>	
			<?php
			echo $kpi_4_title." target";
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'kpi_4_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide kpi_4_target' name='kpi_4_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>