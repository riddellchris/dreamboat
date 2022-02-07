<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_data'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/data/') == 1 OR $_GET['primary_folder'] == 'data'){echo "color:#00ff00;";}
	echo "' title=''  href='/data/'";
echo ">data</a>";