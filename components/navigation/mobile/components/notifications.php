<?php
if(!isset($_SESSION)){session_start();}


echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_notifications'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/notifications/') == 1 OR $_GET['primary_folder'] == 'notifications'){echo "color:#00ff00;";}
	echo "' href='/notifications/'";
echo ">notifications</a>";