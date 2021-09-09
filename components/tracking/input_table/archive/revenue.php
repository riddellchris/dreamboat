

	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title revenue'>
			Revenue	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'revenue' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes'  ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' <?php echo "name='profit_".$month_1_combo."'";?> value =<? echo "'".$row[$month_1_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_5' value =<? echo "'".$row[$month_2_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_6' value =<? echo "'".$row[$month_3_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_7' value =<? echo "'".$row[$month_4_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_8' value =<? echo "'".$row[$month_5_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_9' value =<? echo "'".$row[$month_6_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_10' value =<? echo "'".$row[$month_7_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_11' value =<? echo "'".$row[$month_8_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_12' value =<? echo "'".$row[$month_9_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_1' value =<? echo "'".$row[$month_10_combo]."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_2' value =<? echo "'".$row[$month_11_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue' name='revenue_3' value =<? echo "'".$row[$month_12_combo]."'";?>></input>
			</div>
		</div>
	</div>


	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title'>
			Revenue Target	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'revenue_target' 
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
			<input class='si_digits_wide revenue_target' name='revenue_target_10' value =<? echo "'".$row[$month_7_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue_target' name='revenue_target_11' value =<? echo "'".$row[$month_8_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue_target' name='revenue_target_12' value =<? echo "'".$row[$month_9_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue_target' name='revenue_target_1' value =<? echo "'".$row[$month_10_combo]."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue_target' name='revenue_target_2' value =<? echo "'".$row[$month_11_combo]."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide revenue_target' name='revenue_target_3' value =<? echo "'".$row[$month_12_combo]."'";?>></input>
			</div>
		</div>
	</div>