<?php
if(!isset($_SESSION)){session_start();}

if($_GET['category'] == 'productivity'	){$_SESSION['menu_set_productivity_tracker_category'] = 'productivity';}
if($_GET['category'] == 'income'	){$_SESSION['menu_set_productivity_tracker_category'] = 'income';}
if($_GET['category'] == 'time'		){$_SESSION['menu_set_productivity_tracker_category'] = 'time';}
//if($_GET['category'] == 'goals'		){$_SESSION['menu_set_productivity_tracker_category'] = 'goals';}

if($_GET['period'] == 'this_week'  ){$_SESSION['menu_set_productivity_tracker_period'] = 'this_week';	$_SESSION['menu_set_productivity_tracker_period_text'] = "this week";}
if($_GET['period'] == 'this_month' ){$_SESSION['menu_set_productivity_tracker_period'] = 'this_month';  $_SESSION['menu_set_productivity_tracker_period_text'] = "this month";}
if($_GET['period'] == 'this_year'  ){$_SESSION['menu_set_productivity_tracker_period'] = 'this_year'; 	$_SESSION['menu_set_productivity_tracker_period_text'] = "this year";}



require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'"; // select column
$result = mysqli_query($conn, $sql);
	
if(mysqli_num_rows($result) > 1){
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";
require $_SERVER['DOCUMENT_ROOT']."/productivity_tracker/display_core.php";
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
}
else{

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";
echo "<span class='prompt-font'>To see where your time is going &<br>How to spend it more wisely you must first complete<br>2 days of productivity tracker submissions<br>So come back tomorrow and it will be there for you</span><br><img src='/design/images/chart_teaser.png'> </img>";
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";


}
	

?>
