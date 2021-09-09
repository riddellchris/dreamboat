<?php
if(!isset($_SESSION)){session_start();}

//let's just send reminders at 8am every day for now....
//so all we need to do is....
//see if it is just after 8am in Brisbane
$brisbane_basic_time = $_SERVER['REQUEST_TIME'] + 10*60*60;//the end is just an adjustment for poor coding and knowledge of time stuff
//echo "<br>";	
echo $Brisbane_hour 			= gmdate("H", $brisbane_basic_time);
$todays_date_in_Brisbane  	= gmdate("Y-m-d", $brisbane_basic_time);