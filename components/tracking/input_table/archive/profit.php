	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title' style='color: grey;'>
			Profit	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'profit' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[0]."'";?> value =<? echo "'".$row[$month_combo[0]]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[1]."'";?> value =<? echo "'".$row[$month_1_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[2]."'";?> value =<? echo "'".$row[$month_2_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[3]."'";?> value =<? echo "'".$row[$month_3_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[4]."'";?> value =<? echo "'".$row[$month_4_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[5]."'";?> value =<? echo "'".$row[$month_5_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[6]."'";?> value =<? echo "'".$row[$month_6_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[7]."'";?> value =<? echo "'".$row[$month_7_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[8]."'";?> value =<? echo "'".$row[$month_8_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[9]."'";?> value =<? echo "'".$row[$month_9_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[10]."'";?> value =<? echo "'".$row[$month_10_combo]."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[11]."'";?> value =<? echo "'".$row[$month_11_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit' <?php echo "name='profit_".$month_combo[12]."'";?> value =<? echo "'".$row[$month_12_combo]."'";?>></input>
			</div>
		</div>
	</div>
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title' style='color: black;'>
			Profit Target	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'profit_target' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			44
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
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_6_combo."'";?> value =<? echo "'".$row[$month_6_combo]."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_7_combo."'";?> value =<? echo "'".$row[$month_7_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_8_combo."'";?> value =<? echo "'".$row[$month_8_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_9_combo."'";?> value =<? echo "'".$row[$month_9_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_10_combo."'";?> value =<? echo "'".$row[$month_10_combo]."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_11_combo."'";?> value =<? echo "'".$row[$month_11_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide profit_target' <?php echo "name='profit_target_".$month_12_combo."'";?> value =<? echo "'".$row[$month_12_combo]."'";?>></input>
			</div>
		</div>
	</div>