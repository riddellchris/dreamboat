	<style>
	.productivity2{color: #4332ff;    border: 2px solid #4332ff;}
	</style>

	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title' style='color: #4332ff;'>
			Productivity
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'productivity' 
				AND user_id = '".$user_to_display."' 
				AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			?>	
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_4' value =<? echo "'".$row['19_04']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_5' value =<? echo "'".$row['19_05']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_6' value =<? echo "'".$row['19_06']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_7' value =<? echo "'".$row['19_07']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_8' value =<? echo "'".$row['19_08']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_9' value =<? echo "'".$row['19_09']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_10' value =<? echo "'".$row['19_10']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_11' value =<? echo "'".$row['19_11']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_12' value =<? echo "'".$row['19_12']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_1' value =<? echo "'".$row['20_01']."'";?>></input>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_2' value =<? echo "'".$row['20_02']."'";?>></input>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity2' name='productivity_3' value =<? echo "'".$row['20_03']."'";?>></input>
			</div>
		</div>
	</div>
	
	<style>
	.productivity_target{color:#281e96;    border: 2px solid #281e96;}
	</style>
	
	<div class='div-table-row'>
		<div class='div-table-col-1'>		
			<div class='div-table-cell title' style='color: #281e96;'>
			Productivity Target	
			<?php
			$sql = "SELECT * FROM tracking_inputs 
				WHERE data_type = 'productivity_target' 
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
			<input class='si_digits_wide productivity_target' name='productivity_target_10' value =<? echo "'".$row['19_10']."'";?>>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity_target' name='productivity_target_11' value =<? echo "'".$row['19_11']."'";?>>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity_target' name='productivity_target_12' value =<? echo "'".$row['19_12']."'";?>>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity_target' name='productivity_target_1' value =<? echo "'".$row['20_01']."'";?>>
			</div>			
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity_target' name='productivity_target_2' value =<? echo "'".$row['20_02']."'";?>>
			</div>
			<div class='div-table-cell'>	
			<input class='si_digits_wide productivity_target' name='productivity_target_3' value =<? echo "'".$row['20_03']."'";?>>
			</div>
		</div>
	</div>