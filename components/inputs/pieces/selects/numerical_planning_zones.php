<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT numerical_zone 
		FROM '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
		WHERE item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$value_zone = $row['numerical_zone'];

?>


<select name='value_zone' style='box-shadow: inset 0px 2px 6px rgb(0 0 0 / 40%);'>
	<option <?php if($value_zone == 'top_10_percent'){echo 'selected';} ?>  value="...">
		
		<?php
			if($_GET['primary_folder'] == 'activities'){	echo "..value creation zone";}		
			if($_GET['primary_folder'] == 'issues'){		echo "..select an urgency zone";}		
			if($_GET['primary_folder'] == 'improvements'){	echo "..select a difficulty of implementation zone";}
			if($_GET['primary_folder'] == 'opportunities'){	echo "..select a difficulty of implementation zone";}	
			if($_GET['primary_folder'] == 'upgrades'){		echo "..select a difficulty of implementation zone";}						
		?>
		
		</option>
	<option <?php if($value_zone == 'top_10_percent'){echo 'selected';} ?>  value="top_10_percent">Top 10% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_20_percent'){echo 'selected';} ?>  value="top_20_percent">Top 20% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_30_percent'){echo 'selected';} ?>  value="top_30_percent">Top 30% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_40_percent'){echo 'selected';} ?>  value="top_40_percent">Top 40% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_50_percent'){echo 'selected';} ?>  value="top_50_percent">Top 50% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_60_percent'){echo 'selected';} ?>  value="top_60_percent">Top 60% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_70_percent'){echo 'selected';} ?>  value="top_70_percent">Top 70% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_80_percent'){echo 'selected';} ?>  value="top_80_percent">Top 80% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_90_percent'){echo 'selected';} ?>  value="top_90_percent">Top 90% of <?php echo $_GET['primary_folder']; ?></option>
	<option <?php if($value_zone == 'top_100_percent'){echo 'selected';} ?>  value="top_100_percent">Bottom 10% of <?php echo $_GET['primary_folder']; ?></option>
</select>											
