	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title hours_worked'>
			Hours Worked	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'hours_worked' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked' name='hours_worked_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title hours_worked_target'>
			Hours Worked Target	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'hours_worked_target' 
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
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide hours_worked_target' name='hours_worked_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>