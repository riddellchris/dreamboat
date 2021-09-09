<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_network'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/network/') == 1 OR $_SESSION['primary_folder'] == 'network'){echo "color:#00ff00;";}
	echo "' title=''  href='/network/'";
echo ">network</a>";