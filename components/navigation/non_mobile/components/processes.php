<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_processes'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/processes/') == 1 OR $_GET['primary_folder'] == 'processes'){echo "color:#00ff00;";}
echo "' title='The processes to solve it' href='/processes/'>processes</a>";