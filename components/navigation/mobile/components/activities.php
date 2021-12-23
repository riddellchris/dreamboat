<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_activities'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/activities/') == 1 OR $_GET['primary_folder'] == 'activities'){echo "color:#00ff00;";}
	echo "' title=''  href='/activities/'";
echo ">activities</a>";