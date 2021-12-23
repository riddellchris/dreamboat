<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_interrogation'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/interrogation/') == 1 OR $_GET['primary_folder'] == 'interrogation'){echo "color:#00ff00;";}
	echo "' title=''  href='/interrogation/'";
echo ">interrogation</a>";