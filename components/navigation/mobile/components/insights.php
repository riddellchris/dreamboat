<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_insights'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/insights/') == 1 OR $_GET['primary_folder'] == 'issues'){echo "color:#00ff00;";}
	echo "' title=''  href='/insights/'";
echo ">insights</a>";