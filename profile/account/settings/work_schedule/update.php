<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);


//echo "<br>";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
//get out the decimal adjustment
 $sql = "SELECT decimal_GMT_adjustment FROM admin_timezone_data WHERE timezone_id = '".$_POST['timezone_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//echo "<br>";



 $sql = "UPDATE user_work_schedules 
	SET	timezone_id			= '".$_POST['timezone_id']."',
		timezone_decimal_GMT_adjustment	= '".$row['decimal_GMT_adjustment']."',
		last_day_of_week	= '".$_POST['last_day_of_week']."',
		first_day_of_week	= '".$_POST['first_day_of_week']."',
		am_monday 	= '".$_POST['am_monday']."',
		pm_monday 	= '".$_POST['pm_monday']."',
		am_tuesday 	= '".$_POST['am_tuesday']."',
		pm_tuesday 	= '".$_POST['pm_tuesday']."',
		am_wednesday 	= '".$_POST['am_wednesday']."',
		pm_wednesday 	= '".$_POST['pm_wednesday']."',
		am_thursday 	= '".$_POST['am_thursday']."',
		pm_thursday 	= '".$_POST['pm_thursday']."',
		am_friday 	= '".$_POST['am_friday']."',
		pm_friday 	= '".$_POST['pm_friday']."',
		am_saturday 	= '".$_POST['am_saturday']."',
		pm_saturday 	= '".$_POST['pm_saturday']."',
		am_sunday 	= '".$_POST['am_sunday']."',
		pm_sunday 	= '".$_POST['pm_sunday']."'
          WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";

$result = mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();
?>