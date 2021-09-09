	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title income'>
			Income	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'income' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income' name='income_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title income_target'>
			Income Target	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'income_target' 
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
			<input class='si_digits_wide income_target' name='income_target_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income_target' name='income_target_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income_target' name='income_target_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income_target' name='income_target_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide income_target' name='income_target_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide income_target' name='income_target_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>