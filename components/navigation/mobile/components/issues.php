<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_issues'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/issues/') == 1 OR $_SESSION['primary_folder'] == 'issues'){echo "color:#00ff00;";}
	echo "' title=''  href='/issues/'";
echo ">issues</a>";