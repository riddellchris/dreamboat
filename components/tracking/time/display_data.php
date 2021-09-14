<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['menu_set_productivity_tracker_category'] = 'data';
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";

$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


require $_SERVER['DOCUMENT_ROOT']."/progress_plus/styling.php";

echo "<table style='border-spacing:0px;'>";
	echo "<tr>";
		//echo "<div class='Cell'></td>";
		echo "<td class='full-word-heading'>Income</td>";
		echo "<td class='full-word-heading'>Minutes working</td>";
		echo "<td class='full-word-heading'>Minutes of high competency</td>";
		echo "<td class='full-word-heading'>Minutes of average competency</td>";
		echo "<td class='full-word-heading'>Minutes of low competency</td>";
		echo "<td class='full-word-heading'>Minutes of high value</td>";
		echo "<td class='full-word-heading'>Minutes of average value</td>";
		echo "<td class='full-word-heading'>Minutes of low value</td>";
		echo "<td class='full-word-heading'>Minutes of high efficiency</td>";
		echo "<td class='full-word-heading'>Minutes of average efficiency</td>";
		echo "<td class='full-word-heading'>Minutes of low efficiency</td>";
		echo "<td class='full-word-heading'></td>"; //edit
		//echo "<td class='full-word-heading'></td>"; //edit
	echo "</tr>";
	echo "<tr>";
		//echo "<div class='Cell'></td>";
		echo "<td class='broken-word-heading'>Income</td>";
		echo "<td class='broken-word-heading'>Minutes<br>working</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>high<br>competency</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>average<br>competency</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>low<br>competency</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>high<br>value</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>average<br>value</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>low<br>value</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>high<br>efficiency</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>average<br>efficiency</td>";
		echo "<td class='broken-word-heading'>Minutes<br>of<br>low<br>efficiency</td>";
		echo "<td class='broken-word-heading'></td>"; //edit
		//echo "<td class='broken-word-heading'></td>"; //edit
	echo "</tr>";


	echo "	<style>
		.standard-row{text-align:center;color:#281e96;padding-top: 5px;padding-top: 5px;border-bottom: 2px solid #281e96;}
		</style>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo "<tr>";
		echo "<td class='standard-row' style='text-align:center;color:#281e96;'>".$row['income']."</td>";
		echo "<td class='standard-row'>".$row['minutes_worked']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_high_competency']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_average_competency']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_low_competency']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_high_value']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_average_value']."</td>";		
		echo "<td class='standard-row'>".$row['minutes_of_low_value']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_high_efficiency']."</td>";		
		echo "<td class='standard-row'>".$row['minutes_of_average_efficiency']."</td>";
		echo "<td class='standard-row'>".$row['minutes_of_low_efficiency']."</td>";
		echo "<td class='standard-row'><a href='edit_row.php?row=".$row['input_id']."'>Edit</a></td>";
		//echo "<td><a href='delete_row.php?row=".$row['input_id']."'>Delete</a></td>";
	echo "</tr>";
}

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
?>
