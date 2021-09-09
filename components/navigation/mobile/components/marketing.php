<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_marketing'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/marketing/') == 1 OR $_SESSION['primary_folder'] == 'marketing'){echo "color:#00ff00;";}
	echo "' title='Marketing in all its forms!'  href='/marketing/'";
echo ">marketing</a>";