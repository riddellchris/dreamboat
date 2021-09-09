<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_management'] == 'on'){echo " alert ";}
	echo "' style='";	
	if((check_url('/management/') == 1 OR $_SESSION['primary_folder'] == 'management')
	AND check_url('/admin/') != 1	
	){echo "color:#00ff00;";}
	echo "' title=''  href='/management/'";
echo ">management</a>";	