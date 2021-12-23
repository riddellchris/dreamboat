<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_map'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/map/') == 1 OR $_GET['primary_folder'] == 'map'){echo "color:#00ff00;";}
	echo "' title=''  href='/map/'";
echo ">map</a>";