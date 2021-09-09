<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_map'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/map/') == 1 OR $_GET['primary_folder'] == 'map'){echo "color:#00ff00;";}
echo "' title='' href='/map/'>map</a>";	