<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT first_day_of_week FROM user_work_schedules WHERE user_id = '".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$selected_day = $row['first_day_of_week'];

?>

<style>
@media screen and (max-width: 600px){.timezone{font-size: 10px;}}
@media screen and (min-width: 600px){.timezone{font-size: 18px;}}
</style>

<select name='first_day_of_week' class='timezone'>
	<option <?php if($selected_day == 'monday'	){echo 'selected';} ?>  value="monday"		>Monday</option>
	<option <?php if($selected_day == 'tuesday'	){echo 'selected';} ?>  value="tuesday" 	>Tuesday</option>
	<option <?php if($selected_day == 'wednesday'	){echo 'selected';} ?>  value="wednesday"	>Wednesday</option>
	<option <?php if($selected_day == 'thursday'	){echo 'selected';} ?>  value="thursday" 	>Thursday</option>
	<option <?php if($selected_day == 'friday'	){echo 'selected';} ?>  value="friday" 		>Friday</option>
	<option <?php if($selected_day == 'saturday'	){echo 'selected';} ?>  value="saturday" 	>Saturday</option>
	<option <?php if($selected_day == 'sunday'	){echo 'selected';} ?>  value="sunday" 		>Sunday</option>

</select>											
